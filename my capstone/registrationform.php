<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        die("All fields are required.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $email, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: loginform.php?success=1");
        exit();
    } else {
        die("Execute failed: " . $stmt->error);
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
<title>Register</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    body {
        margin: 0;
        font-family: 'Inter', sans-serif;
        background: radial-gradient(circle at top, #1a1a1d, #0b0b0d);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        width: 380px;
        padding: 30px;
        border-radius: 16px;
        background: rgba(20,20,20,0.6);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255,255,255,0.05);
        box-shadow: 0 10px 40px rgba(0,0,0,0.6);
    }

    /* Logo */
    .logo-container {
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
    }

    .logo-img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
    }

    /* Title */
    .title-small {
        text-align: center;
        color: #aaa;
        margin-bottom: 5px;
    }

    .title {
        text-align: center;
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 25px;
    }

    /* Input */
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
    }

    .input:focus {
        border-color: #6366f1;
        box-shadow: 0 0 0 1px #6366f1;
    }

    .input-box label {
        position: absolute;
        left: 14px;
        top: 14px;
        color: #888;
        font-size: 13px;
        transition: 0.2s;
    }

    .input:focus + label,
    .input:not(:placeholder-shown) + label {
        top: -8px;
        left: 10px;
        font-size: 11px;
        color: #6366f1;
        background: #0b0b0d;
        padding: 0 5px;
    }

    /* Password */
    .password-wrapper {
        position: relative;
    }

    .password-wrapper i {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #777;
    }

    /* Button */
    .register-btn {
        width: 100%;
        padding: 14px;
        border-radius: 12px;
        border: none;
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        color: #fff;
        font-weight: 500;
        cursor: pointer;
    }

    .register-btn:disabled {
        background: #444;
    }

    /* Footer */
    .footer {
        text-align: center;
        margin-top: 15px;
        color: #aaa;
    }

    .footer a {
        color: #fff;
        text-decoration: underline;
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

    <div class="title-small">Kevin's Angel</div>
    <div class="title">Create Account</div>

<form method="POST">

    <div class="input-box">
        <input type="email" name="email" class="input" placeholder=" " required id="email">
        <label>Email</label>
    </div>

    <div class="input-box password-wrapper">
        <input type="password" name="password" class="input" placeholder=" " required id="password">
        <label>Password</label>
        <i class="fa-solid fa-eye" onclick="togglePassword()"></i>
    </div>

    <button type="submit" class="register-btn" id="btn" disabled>
        Register
    </button>

</form>
    <div class="footer">
        Already have an account? <a href="loginform.php">Sign in</a>
    </div>

</div>

<script>
const email = document.getElementById("email");
const password = document.getElementById("password");
const btn = document.getElementById("btn");

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