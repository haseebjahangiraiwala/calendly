<?php
session_start();
include "db.php";
if(!isset($_SESSION['user_id'])) echo "<script>window.location.href='login.php';</script>";
$user_id=$_SESSION['user_id'];
$appointments=$conn->query("SELECT * FROM appointments WHERE user_id=$user_id ORDER BY date,time");
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<style>
body{font-family:Arial;background:#f5f7fa;padding:20px;}
h2{text-align:center;}
table{width:100%;border-collapse:collapse;margin-top:20px;}
th,td{border:1px solid #ddd;padding:10px;text-align:center;}
button{padding:8px 16px;margin:10px;border:none;background:#667eea;color:#fff;border-radius:6px;cursor:pointer;}
</style>
<script>
function redirect(page){window.location.href=page;}
</script>
</head>
<body>
<h2>Your Dashboard</h2>
<button onclick="redirect('availability.php')">Set Availability</button>
<button onclick="redirect('logout.php')">Logout</button>
<table>
<tr><th>Visitor</th><th>Email</th><th>Date</th><th>Time</th></tr>
<?php while($row=$appointments->fetch_assoc()): ?>
<tr>
<td><?= $row['visitor_name'] ?></td>
<td><?= $row['visitor_email'] ?></td>
<td><?= $row['date'] ?></td>
<td><?= $row['time'] ?></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
 
