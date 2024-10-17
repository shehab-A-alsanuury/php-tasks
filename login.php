<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Inline CSS for the login page */
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
        <h2>Login</h2>
        <form action="" method="POST" id="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <?php
        // PHP processing logic for login
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Backend validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='alert alert-danger'>Invalid email format</div>";
            } else {
                // Here you would typically check the user credentials against the database
                echo "<div class='alert alert-success'>Login successful!</div>";
            }
        }
        ?>
    </div>
</body>
</html>
