<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Calendly Clone - Home</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    margin: 0; padding: 0;
    color: #fff;
}
.container { text-align: center; padding: 100px; }
h1 { font-size: 50px; margin-bottom: 20px; }
button {
    padding: 12px 24px;
    margin: 10px;
    border: none; border-radius: 8px;
    background: #fff; color: #333;
    font-size: 18px; cursor: pointer;
    transition: 0.3s;
}
button:hover { background: #ddd; }
</style>
<script>
function redirect(page){ window.location.href = page; }
</script>
</head>
<body>
<div class="container">
    <h1>Schedule Smarter with Calendly Clone</h1>
    <p>Book meetings, set availability, and manage appointments easily.</p>
    <button onclick="redirect('signup.php')">Sign Up</button>
    <button onclick="redirect('login.php')">Login</button>
    <button onclick="redirect('book.php')">Book a Meeting</button>
</div>
</body>
</html>
 
