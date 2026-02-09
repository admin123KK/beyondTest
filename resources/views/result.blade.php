<div class="container">
    <h1>Congratulations</h1>
    <h2>Your Score: {{ $score }} / 10</h2>

    <div style="margin-top: 40px;">
        @foreach ($questions as $index => $q)
            <div style="margin-bottom: 30px; padding: 15px; border: 1px solid gold; border-radius: 10px;">
                <h4>Question {{ $index + 1 }}: {{ $q->question }}</h4>
                <p style="color: lime;">Correct: {{ $q->{'option' . $q->correct_option} }}</p>

                @php
                    $userAns = $answers[$index] ?? null;
                    $color = ($userAns == $q->correct_option) ? 'lime' : 'red';
                @endphp

                <p style="color: {{ $color }};">
                    Your Answer:
                    @if ($userAns) {{ $q->{'option' . $userAns} }} @else Time Up (Wrong) @endif
                </p>
            </div>
        @endforeach
    </div>

    <a href="/" class="btn btn-primary btn-lg mt-4">Play Again</a>
</div>