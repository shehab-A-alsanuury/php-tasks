<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Inline CSS for the signup page */
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 100px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create an Account</h2>
        <form action="" method="POST" id="signupForm">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required pattern="^[a-zA-Z0-9_]{5,15}$" title="5 to 15 characters, letters, numbers, and underscores only">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$" title="Minimum eight characters, at least one uppercase letter, one lowercase letter, and one number">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>

        <?php
        // PHP processing logic for signup
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Backend validation (regex)
            if (!preg_match('/^[a-zA-Z0-9_]{5,15}$/', $username)) {
                echo "<div class='alert alert-danger'>Invalid username</div>";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='alert alert-danger'>Invalid email format</div>";
            } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
                echo "<div class='alert alert-danger'>Invalid password format</div>";
            } else {
                // Here you would typically save the user information to the database
                echo "<div class='alert alert-success'>Sign up successful!</div>";
            }
        }
        ?>
    </div>
</body>
</html>
