<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Question {{ $index + 1 }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f0f4f8;
            /* Light blue-gray for clean look */
            color: #333;
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            width: 100%;
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        h1 {
            font-size: 1.9rem;
            margin-bottom: 1rem;
            color: #1a3c6d;
            font-weight: 600;
        }

        #timer {
            font-size: 1.6rem;
            font-weight: bold;
            color: #dc3545;
            margin-bottom: 1.5rem;
        }

        .question-text {
            font-size: 1.3rem;
            line-height: 1.5;
            margin-bottom: 2rem;
            font-weight: 500;
        }

        .options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .option {
            background: #f8f9fa;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            padding: 1rem 1.2rem;
            text-align: left;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 1.1rem;
        }

        .option:hover {
            background: #e9ecef;
            border-color: #adb5bd;
        }

        .option.selected {
            background: #007bff;
            color: white;
            border-color: #007bff;
        }

        .option-label {
            font-weight: bold;
            margin-right: 0.5rem;
            min-width: 1.8rem;
            display: inline-block;
        }

        .submit-btn {
            padding: 0.8rem 2.5rem;
            font-size: 1.1rem;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .submit-btn:hover {
            background: #0056b3;
        }

        @media (max-width: 768px) {
            .options {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Question {{ $index + 1 }} of 10</h1>

        <div id="timer">Time left: 30 seconds</div>

        <div class="question-text">
            {{ $question->question }}
        </div>

        <form action="{{ route('quiz.submit') }}" method="POST" id="quizForm">
            @csrf

            <!-- Hidden field to identify which question this is (optional but useful for debugging) -->
            <input type="hidden" name="question_index" value="{{ $index }}">

            <div class="options">
                @for ($i = 1; $i <= 4; $i++)
                    <label class="option" for="opt{{ $i }}">
                        <input type="radio" name="answer" id="opt{{ $i }}" value="{{ $i }}" style="display: none;" required>
                        <span class="option-label">{{ chr(64 + $i) }}:</span>
                        {{ $question->{"option$i"} }}
                    </label>
                @endfor
            </div>

            <button type="submit" class="submit-btn">Lock Answer</button>
        </form>
    </div>

    <script>
        // Simple 30-second timer + auto-submit on timeout
        let timeLeft = 30;
        const timerDisplay = document.getElementById('timer');
        const form = document.getElementById('quizForm');

        const timerInterval = setInterval(() => {
            timeLeft--;
            timerDisplay.textContent = `Time left: ${timeLeft} seconds`;

            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                // Auto-submit form when time is up (no answer selected = wrong)
                form.submit();
            }
        }, 1000);

        // Highlight selected option
        document.querySelectorAll('.option').forEach(label => {
            label.addEventListener('click', function () {
                // Remove selected from all
                document.querySelectorAll('.option').forEach(el => el.classList.remove('selected'));
                // Add to clicked one
                this.classList.add('selected');
                // Check the hidden radio
                this.querySelector('input[type="radio"]').checked = true;
            });
        });
    </script>

</body>

</html>