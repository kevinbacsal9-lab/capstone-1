
<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            echo "<script>alert('Login Successful!'); window.location='homepage2.php';</script>";

        } else {
            echo "<script>alert('Wrong Password!'); window.location='loginform.php';</script>";
        }

    } else {
        echo "<script>alert('Wrong Password!'); window.location='loginform.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Premium Login UI</title>
<link rel="shortcut icon" href="logonam.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: radial-gradient(circle at top, #1a1a1d, #0b0b0d);
    color: #fff;
}

/* Glass container */
.container {
    width: 400px;
    padding: 30px;
    border-radius: 16px;
    background: rgba(20,20,20,0.6);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255,255,255,0.05);
    box-shadow: 0 10px 40px rgba(0,0,0,0.6);
    
    
}

/* Header */
.logo {
    text-align: center;
    font-size: 22px;
    font-weight: 400;
    font
    
}

.title {
    text-align: center;
    font-size: 28px;
    font-weight: 600;
    margin: 10px 0 25px;
}

/* Buttons */
.btn {
    width: 100%;
    padding: 13px;
    margin-bottom: 10px;
    border-radius: 12px;
    border: 1px solid #262626;
    background: transparent;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn:hover {
    background: #161616;
    transform: translateY(-1px);
}

.btn:active {
    transform: scale(0.98);
}

/* Divider */
.divider {
    margin: 20px 0;
    border-top: 1px solid #262626;
}

/* Floating input */
.input-box {
    position: relative;
    margin-bottom: 20px;
}

.input {
    width: 100%;
    padding: 14px;
    border-radius: 12px;
    border: 1px solid #262626;
    background: transparent;
    color: #fff;
    outline: none;
    font-size: 14px;
}

.input:focus {
    border-color: #6366f1;
    box-shadow: 0 0 0 1px #6366f1;
}

/* Floating label */
.input-box label {
    position: absolute;
    left: 14px;
    top: 14px;
    color: #888;
    font-size: 13px;
    pointer-events: none;
    transition: 0.2s;
}

.input:focus + label,
.input:not(:placeholder-shown) + label {
    top: -8px;
    left: 10px;
    background: #0b0b0d;
    padding: 0 5px;
    font-size: 11px;
    color: #6366f1;
}

/* Password row */
.password-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
}

.password-row span {
    font-size: 13px;
}

.password-row a {
    font-size: 12px;
    color: #888;
    text-decoration: none;
}

/* Eye icon */
.password-wrapper {
    position: relative;
}

.password-wrapper i {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #777;
    cursor: pointer;
}

/* Login button */
.login-btn {
    width: 100%;
    padding: 14px;
    border-radius: 12px;
    border: none;
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    color: #fff;
    font-weight: 500;
    margin-top: 10px;
    cursor: pointer;
    transition: 0.2s;
}

.login-btn:hover {
    opacity: 0.9;
    transform: translateY(-1px);
}

.login-btn:disabled {
    background: #444;
    cursor: not-allowed;
}

/* Footer */
.footer {
    text-align: center;
    margin-top: 18px;
    font-size: 13px;
    color: #aaa;
}

.footer a {
    color: #fff;
    text-decoration: underline;
}

.btn img {
    display: inline-block;
}

.logo-img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    transition: 0.3s;
}

.logo-img:hover {
    transform: scale(1.05);
    box-shadow: 0 0 30px rgba(255, 215, 0, 0.6);
}
img.logo-img {
    display: block;
    margin: 0 auto 10px;
}   
</style>
</head>

<body>

<div class="container">
    <div class="logo-container">
        <img src="logonam.png" class="logo-img">
    </div>
    <div class="logo">Kevin's Angel</div>
    <div class="title">Welcome back</div>

    <button class="btn">
    <img src="https://www.svgrepo.com/show/475656/google-color.svg" 
         style="width:18px; height:18px;">
    Sign in with Google
</button>

    <button class="btn">
        <i class="fab fa-apple"></i> Sign in with Apple
    </button>

    <button class="btn">Sign in with SSO</button>

    <div class="divider"></div>

    <form method="POST" action="loginform.php">

    <div class="input-box">
        <input type="email" name="email" class="input" placeholder=" " required>
        <label>Email</label>
    </div>

    <div class="input-box password-wrapper">
        <input type="password" name="password" class="input" placeholder=" " required>
        <label>Password</label>
        <i class="fa-solid fa-eye" onclick="togglePassword()"></i>
    </div>

    <button type="submit" class="login-btn">Sign in</button>

</form>

    <div class="footer">
        Don’t have an account? <a href="registrationform.php">Sign up</a>
    </div>

</div>

<script>
const email = document.getElementById("email");
const password = document.getElementById("password");
const btn = document.getElementById("loginBtn");

function checkInputs() {
    if(email.value && password.value) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
}

email.addEventListener("input", checkInputs);
password.addEventListener("input", checkInputs);

function togglePassword() {
    password.type = password.type === "password" ? "text" : "password";
}
</script>

</body>
</html>