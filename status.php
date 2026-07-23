<?php

include "db.php";

$sql="SELECT * FROM hod_status ORDER BY id DESC LIMIT 1";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html>

<head>

<title>HOD Status</title>

</head>

<body>

<h2>Current HOD Status</h2>

<h1><?php echo $row['status']; ?></h1>

<p>

Remarks :

<?php echo $row['remarks']; ?>

</p>

<p>

Expected Free Time :

<?php echo $row['expected_time']; ?>

</p>

<p>

Last Updated :

<?php echo $row['updated_at']; ?>

</p>

</body>

</html>