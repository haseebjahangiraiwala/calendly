<?php
include "db.php";
$users=$conn->query("SELECT * FROM users");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $conn->query("INSERT INTO appointments (user_id,visitor_name,visitor_email,date,time) VALUES ($user_id,'$name','$email','$date','$time')");
    echo "<script>alert('Booking Confirmed!');window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Meeting</title>
<style>
body{font-family:Arial;background:#e0f7fa;text-align:center;padding:30px;}
form{background:#fff;display:inline-block;padding:20px;border-radius:12px;box-shadow:0 4px 10px rgba(0,0,0,0.2);}
select,input{margin:10px;padding:8px;border:1px solid #ccc;border-radius:6px;width:250px;}
button{padding:10px 20px;border:none;background:#667eea;color:#fff;border-radius:8px;cursor:pointer;}
</style>
</head>
<body>
<h2>Book a Meeting</h2>
<form method="post">
<select name="user_id" required>
<option value="">Select User</option>
<?php while($u=$users->fetch_assoc()): ?>
<option value="<?= $u['id'] ?>"><?= $u['name'] ?></option>
<?php endwhile; ?>
</select>
<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Your Email" required>
<input type="date" name="date" required>
<input type="time" name="time" required>
<button type="submit">Book</button>
</form>
</body>
</html>
 
