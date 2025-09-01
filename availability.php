<?php
session_start(); include "db.php";
if(!isset($_SESSION['user_id'])) echo "<script>window.location.href='login.php';</script>";
$user_id=$_SESSION['user_id'];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $day=$_POST['day'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $conn->query("INSERT INTO availability (user_id,day,start_time,end_time) VALUES ($user_id,'$day','$start','$end')");
    echo "<script>alert('Availability Added');window.location.href='availability.php';</script>";
}
$slots=$conn->query("SELECT * FROM availability WHERE user_id=$user_id");
?>
<!DOCTYPE html>
<html>
<head>
<title>Set Availability</title>
<style>
body{font-family:Arial;background:#fafafa;text-align:center;padding:30px;}
form{background:#fff;display:inline-block;padding:20px;border-radius:12px;box-shadow:0 4px 8px rgba(0,0,0,0.2);}
select,input{margin:10px;padding:8px;border:1px solid #ccc;border-radius:6px;}
button{padding:10px 20px;border:none;background:#764ba2;color:#fff;border-radius:8px;cursor:pointer;}
table{margin-top:20px;border-collapse:collapse;width:60%;margin-left:auto;margin-right:auto;}
th,td{border:1px solid #ddd;padding:10px;}
</style>
</head>
<body>
<h2>Set Your Availability</h2>
<form method="post">
<select name="day" required>
<option>Monday</option><option>Tuesday</option><option>Wednesday</option>
<option>Thursday</option><option>Friday</option><option>Saturday</option><option>Sunday</option>
</select>
<input type="time" name="start" required>
<input type="time" name="end" required>
<button type="submit">Add</button>
</form>
<table>
<tr><th>Day</th><th>Start</th><th>End</th></tr>
<?php while($row=$slots->fetch_assoc()): ?>
<tr><td><?= $row['day'] ?></td><td><?= $row['start_time'] ?></td><td><?= $row['end_time'] ?></td></tr>
<?php endwhile; ?>
</table>
</body>
</html>
