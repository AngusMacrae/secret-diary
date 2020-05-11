<?php

    session_start();

    if ($_POST["login-email"]) {
        
        // check if login-email is present in database
        // if yes, check if password matches hash
        // if yes, store user ID as cookie and redirect to index.php, otherwise display incorrect password alert
        
    } else {
        // display you aren't signed up alert
    }

    if ($_POST["email"]) {
        
        // check if email (signup) is already present in the database
        // if yes, display "you're already signed up" alert
        // if no, add user as new entry to database, store user ID as cookie and redirect to index.php
        
    }

    if ($_COOKIE["id"]) {
        
        // redirect to index.php
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Diary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div class="container">
        <div class="col" id="log-in-page">
            <h1>Secret Diary</h1>
            <span><strong>Store your thoughts permanently and securely.</strong></span>
            <span>Interested? Sign up now.</span>
            <div class="form-container" id="sign-up-form">
                <form method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="stayCheck">
                        <label class="form-check-label" for="stayCheck">Stay logged in</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up!</button>
                </form>
                <button class="btn" id="show-login-btn">Log in</button>
            </div>
            <div class="form-container invisible" id="login-form">
                <form method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" id="login-email" aria-describedby="emailHelp" placeholder="Your email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="login-password" placeholder="Password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="login-stayCheck">
                        <label class="form-check-label" for="login-stayCheck">Stay logged in</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>
                <button class="btn" id="show-sign-up-btn">Sign up</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>
