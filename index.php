<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" placeholder="First name" required>
                <label for="fname">First Name</label>
            </div>    
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" placeholder="Last name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>   
            <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>
            <p class="or">
            ----------or--------
            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Already Have Account ?</p>
                <button id="signInButton">SignIn</button>
            </div>
    
    </div>   

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
            <a href="#">Recover Password</a>    
            </p>   
            <input type="submit" class="btn" value="Sign In" name="signIn">
            </form>
            <p class="or">
            ----------or--------
            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Dont have account yet?</p>
                <button id="signUpButton">signUp</button>
            </div>
    
    </div>
    <script src="script.js"></script>
</body>
</html>