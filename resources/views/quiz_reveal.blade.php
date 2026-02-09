<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KBC - Answer Reveal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body {
    background: #f0f4f8;
    color: #333;
    font-family: Arial, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
}
.container {
    max-width: 900px;
    text-align: center;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
h1 { font-size: 2em; margin-bottom: 15px; }
.question-text { font-size: 1.3em; margin-bottom: 25px; }
.options { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
.option {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1.1em;
    background: #e9ecef;
}
.option-label { font-weight: bold; margin-right: 5px; }
/* Simple colors, no animation */
.correct { background: #28a745 !important; color: white; } /* Green */
.wrong { background: #dc3545 !important; color: white; } /* Red */
.continue-btn { margin-top: 25px; padding: 10px 30px; font-size: 1.1em; background: #007bff; color: white; border: none; border-radius: 5px; text-decoration: none; }
.continue-btn:hover { background: #0056b3; }
    </style>
</head>

<body>
    <div class="container">
        <h1>Question {{ $index + 1 }} Reveal</h1>
        <div class="question-text">{{ $question->question }}</div>

        <div class="options">
            @for ($i = 1; $i <= 4; $i++)
                <div class="option
                        @if ($i == $correct_option) correct
                        @elseif ($i == $selected && !$is_correct) wrong
                        @endif">
                    <span class="option-label">{{ chr(64 + $i) }}:</span>
                    {{ $question->{'option' . $i} }}
                </div>
            @endfor
        </div>

        <h2 style="margin-top: 30px; color: {{ $is_correct ? 'lime' : 'red' }};">
            @if ($is_correct) Correct! +1 Point @else Wrong / Time Up @endif
        </h2>

        <a href="/quiz/continue" class="continue-btn">Continue →</a>
    </div>

    <script>
        // Auto-continue after 5 seconds (optional dramatic pause)
        setTimeout(() => {
            window.location.href = "/quiz/continue";
        }, 5000);
    </script>
</body>

</html>