<?php
// LOGIN PAGE - Vinay

$valid_username = "vinay";
$valid_password = "1230";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === $valid_username && $password === $valid_password) {
        setcookie("loggedin_user", $username, time() + 3600, "/");
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}

if (isset($_POST['logout'])) {
    setcookie("loggedin_user", "", time() - 3600, "/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - PHP Project </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    /* --- Reset --- */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* --- Dark Modern Background --- */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #1a1a2e; /* Deep navy */
        color: #e0e0e0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* --- Login Card --- */
    .login-box {
        background-color: #2c2c44; /* Same card tone as main site */
        border-top: 4px solid #00f5c8;
        border-radius: 12px;
        padding: 50px 55px;
        width: 350px;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        animation: fadeIn 1s ease forwards;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .login-box:hover {
        transform: scale(1.02);
        box-shadow: 0 15px 35px rgba(0, 245, 200, 0.15);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* --- Headings --- */
    h2 {
        color: #00f5c8;
        margin-bottom: 25px;
        font-size: 26px;
        letter-spacing: 1px;
    }

    /* --- Inputs --- */
    input {
        width: 100%;
        padding: 12px 15px;
        margin: 10px 0;
        border-radius: 8px;
        border: 1px solid #3a3a5a;
        background-color: #1f1f3a;
        color: #e0e0e0;
        font-size: 15px;
        outline: none;
        transition: all 0.3s ease;
    }

    input:focus {
        border-color: #00f5c8;
        box-shadow: 0 0 6px rgba(0, 245, 200, 0.4);
    }

    /* --- Button --- */
    button {
        width: 100%;
        background: linear-gradient(90deg, #00f5c8, #00c3a3);
        color: #1a1a2e;
        border: none;
        padding: 12px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    button:hover {
        background: linear-gradient(90deg, #00c3a3, #00f5c8);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 245, 200, 0.25);
    }

    /* --- Error Message --- */
    p.error {
        color: #ff6b6b;
        background: rgba(255, 107, 107, 0.08);
        border: 1px solid rgba(255, 107, 107, 0.3);
        border-radius: 8px;
        padding: 10px;
        margin-top: 15px;
        font-size: 14px;
    }

    /* --- Footer --- */
    .footer {
        margin-top: 20px;
        color: #aaa;
        font-size: 13px;
        opacity: 0.8;
    }

    @media (max-width: 480px) {
        .login-box {
            width: 85%;
            padding: 35px 25px;
        }
    }
</style>
</head>
<body>

<div class="login-box">
    <h2>Website Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit">Login</button>
    </form>
    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
    <div class="footer">© 2025 PHP Project | Designed by Vinay</div>
</div>

</body>
</html>
