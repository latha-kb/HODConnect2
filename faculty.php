<?php

$statusData = json_decode(file_get_contents("data/status.json"), true);

?>

<!DOCTYPE html>
<html>
<head>

<title>Faculty Dashboard</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>

.status-card{
    text-align:center;
    padding:30px;
}

.status{
    font-size:40px;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="header">
Faculty Dashboard
</div>

<div class="container status-card">

<h2>CSE HOD Status</h2>

<div class="status">

<?php

$status = $statusData["status"];

if($status=="Available")
{
    echo "🟢 Available";
}
elseif($status=="Busy")
{
    echo "🔴 Busy";
}
elseif($status=="Meeting")
{
    echo "🟡 In Meeting";
}
elseif($status=="Out")
{
    echo "🚶 Out of Cabin";
}
else
{
    echo "☕ Break";
}

?>

</div>

<br>

<p>

<b>Remarks</b>

<br>

<?php echo $statusData["remarks"]; ?>

</p>

<p>

<b>Expected Free Time</b>

<br>

<?php echo $statusData["expected_time"]; ?>

</p>

<p>

<b>Last Updated</b>

<br>

<?php echo $statusData["updated_at"]; ?>

</p>

</div>

</body>

</html>