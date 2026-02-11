<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\UserScore;

class QuizController extends Controller
{
   
   
    public function start()
    {
        // Get 10 random questions
        $questions = Question::inRandomOrder()->limit(10)->get();

        // Store only IDs in session to save memory
        session([
            'quiz_questions' => $questions->pluck('id')->toArray(),
            'current_question_index' => 0,
            'user_answers' => [],
            'running_score' => 0,
        ]);

        return $this->showCurrentQuestion();
    }

    /**
     * Show the current question
     */
    public function showCurrentQuestion()
    {
        $index = session('current_question_index', 0);
        $questionIds = session('quiz_questions', []);

        // If we've finished all questions → go to result
        if ($index >= count($questionIds)) {
            return $this->showResult();
        }

        $question = Question::find($questionIds[$index]);

        return view('quiz_question', [
            'question' => $question,
            'index' => $index,
        ]);
    }

    /**
     * Handle answer submission → show reveal/feedback page
     */
    public function submitAnswer(Request $request)
    {
        $index = session('current_question_index', 0);
        $questionIds = session('quiz_questions', []);

        if ($index >= count($questionIds)) {
            return $this->showResult();
        }

        $question = Question::find($questionIds[$index]);

        // Get selected answer (1–4) or null if timed out
        $selected = $request->input('answer');

        $isCorrect = ($selected !== null) && ((int) $selected === (int) $question->correct_option);

        // Store the user's answer (null = time up / no answer)
        $answers = session('user_answers', []);
        $answers[$index] = $selected;
        session(['user_answers' => $answers]);

        // Update score if correct
        if ($isCorrect) {
            $score = session('running_score', 0) + 1;
            session(['running_score' => $score]);
        }

        // Show feedback / reveal page
        return view('quiz_reveal', [
            'question' => $question,
            'selected' => $selected,
            'correct_option' => $question->correct_option,
            'is_correct' => $isCorrect,
            'index' => $index,
        ]);
    }

    /**
     * Continue to the next question after seeing the reveal
     */
    public function continueToNext()
    {
        $index = session('current_question_index', 0);
        $index++;

        session(['current_question_index' => $index]);

        return $this->showCurrentQuestion();
    }

    /**
     * Show final result / recap page
     */
    private function showResult()
    {
        $score = session('running_score', 0);
        $name = session('user_name', 'Guest');

        // Save score to database
        UserScore::create([
            'name' => $name,
            'score' => $score,
        ]);

        // Get questions and answers for recap
        $questionIds = session('quiz_questions', []);
        $questions = Question::findMany($questionIds);
        $answers = session('user_answers', []);

        // Clean up session
        session()->forget([
            'quiz_questions',
            'current_question_index',
            'user_answers',
            'running_score'
        ]);

        return view('result', compact('score', 'questions', 'answers', 'name'));
    }
}