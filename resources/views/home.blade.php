<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sports Quiz App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body { background: #f0f4f8; color: #333; font-family: Arial, sans-serif; }
.container { max-width: 600px; margin-top: 100px; text-align: center; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
h1 { margin-bottom: 15px; }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Sports Quiz!</h1>
        <p>Enter your name to start (Football & Cricket questions).</p>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>
            <button type="submit" class="btn btn-primary w-100">Start Quiz</button>
        </form>
    </div>
</body>

</html>