<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Question::truncate();
        // Football questions
        // World GK questions (top-level, like KBC)
        Question::create(['question' => 'The largest city in which country is not its capital but a port with an Arabic name that means "abode of peace"?', 'option1' => 'Somalia', 'option2' => 'Oman', 'option3' => 'Tanzania', 'option4' => 'Brunei', 'correct_option' => 3, 'category' => 'geography']);
        Question::create(['question' => 'Which element has the atomic number 1?', 'option1' => 'Helium', 'option2' => 'Hydrogen', 'option3' => 'Carbon', 'option4' => 'Oxygen', 'correct_option' => 2, 'category' => 'science']);
        Question::create(['question' => 'Who was the first woman to win a Nobel Prize?', 'option1' => 'Marie Curie', 'option2' => 'Rosalind Franklin', 'option3' => 'Ada Lovelace', 'option4' => 'Jane Goodall', 'correct_option' => 1, 'category' => 'history']);
        Question::create(['question' => 'What is the longest river in the world?', 'option1' => 'Amazon', 'option2' => 'Nile', 'option3' => 'Yangtze', 'option4' => 'Mississippi', 'correct_option' => 2, 'category' => 'geography']);
        Question::create(['question' => 'In which year did the Titanic sink?', 'option1' => '1905', 'option2' => '1912', 'option3' => '1920', 'option4' => '1935', 'correct_option' => 2, 'category' => 'history']);
        Question::create(['question' => 'What is the chemical symbol for gold?', 'option1' => 'Au', 'option2' => 'Ag', 'option3' => 'Fe', 'option4' => 'Cu', 'correct_option' => 1, 'category' => 'science']);
        Question::create(['question' => 'Which country has the most time zones?', 'option1' => 'Russia', 'option2' => 'USA', 'option3' => 'France', 'option4' => 'China', 'correct_option' => 3, 'category' => 'geography']); // France has 12!
        Question::create(['question' => 'Who painted the Mona Lisa?', 'option1' => 'Vincent van Gogh', 'option2' => 'Pablo Picasso', 'option3' => 'Leonardo da Vinci', 'option4' => 'Michelangelo', 'correct_option' => 3, 'category' => 'art']);
        Question::create(['question' => 'What is the speed of light in vacuum?', 'option1' => '300,000 km/s', 'option2' => '150,000 km/s', 'option3' => '1,000 km/s', 'option4' => '3,000 km/s', 'correct_option' => 1, 'category' => 'science']);
        Question::create(['question' => 'Which planet is known as the Red Planet?', 'option1' => 'Venus', 'option2' => 'Mars', 'option3' => 'Jupiter', 'option4' => 'Saturn', 'correct_option' => 2, 'category' => 'astronomy']);
        // Add more (aim for 20+)
        Question:: create(['question' => 'What is the capital of Japan?', 'option1' => 'Seoul', 'option2' => 'Beijing', 'option3' => 'Tokyo', 'option4' => 'Bangkok', 'correct_option' => 3, 'category' => 'geography']);
        Question::create(['question' => 'Who wrote "Romeo and Juliet"?', 'option1' => 'Charles Dickens', 'option2' => 'William Shakespeare', 'option3' => 'Jane Austen', 'option4' => 'Mark Twain', 'correct_option' => 2, 'category' => 'literature']);
        Question::create(['question' => 'What is the largest ocean on Earth?', 'option1' => 'Atlantic', 'option2' => 'Indian', 'option3' => 'Pacific', 'option4' => 'Arctic', 'correct_option' => 3, 'category' => 'geography']);
        Question::create(['question' => 'In which year was the United Nations founded?', 'option1' => '1918', 'option2' => '1945', 'option3' => '1950', 'option4' => '1960', 'correct_option' => 2, 'category' => 'history']);
        Question::create(['question' => 'What is the powerhouse of the cell?', 'option1' => 'Nucleus', 'option2' => 'Mitochondria', 'option3' => 'Ribosome', 'option4' => 'Golgi apparatus', 'correct_option' => 2, 'category' => 'biology']);
        Question::create(['question' => 'Which country gifted the Statue of Liberty to the USA?', 'option1' => 'UK', 'option2' => 'France', 'option3' => 'Germany', 'option4' => 'Canada', 'correct_option' => 2, 'category' => 'history']);
        Question::create(['question' => 'What is the square root of 144?', 'option1' => '10', 'option2' => '12', 'option3' => '14', 'option4' => '16', 'correct_option' => 2, 'category' => 'math']);
        Question::create(['question' => 'Who discovered penicillin?', 'option1' => 'Alexander Fleming', 'option2' => 'Louis Pasteur', 'option3' => 'Marie Curie', 'option4' => 'Isaac Newton', 'correct_option' => 1, 'category' => 'science']);
        Question::create(['question' => 'What is the tallest mountain in the world?', 'option1' => 'K2', 'option2' => 'Kilimanjaro', 'option3' => 'Everest', 'option4' => 'Denali', 'correct_option' => 3, 'category' => 'geography']);
        Question::create(['question' => 'In which continent is the Sahara Desert?', 'option1' => 'Asia', 'option2' => 'Africa', 'option3' => 'Australia', 'option4' => 'South America', 'correct_option' => 2, 'category' => 'geography']);
        // Add more if you want (aim for at least 10)
    }
}