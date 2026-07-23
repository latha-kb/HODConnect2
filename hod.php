
<!DOCTYPE html>
<html>

<head>

<title>HOD Dashboard</title>

<link rel="stylesheet" href="assets/css/style.css">

<script src="assets/js/script.js"></script>

</head>

<body>

<div class="header">

HOD Dashboard

</div>

<div class="container">

<h2>Update Status</h2>

<input
type="hidden"
id="status"
value="Available">

<button
class="status-btn available"
onclick="selectStatus('Available')">

🟢 Available

</button>

<button
class="status-btn busy"
onclick="selectStatus('Busy')">

🔴 Busy

</button>

<button
class="status-btn meeting"
onclick="selectStatus('Meeting')">

🟡 Meeting

</button>

<button
class="status-btn out"
onclick="selectStatus('Out')">

🚶 Out of Cabin

</button>

<button
class="status-btn break"
onclick="selectStatus('Break')">

☕ Break

</button>

<br><br>

<label>

Remarks

</label>

<textarea
id="remarks"
rows="4"></textarea>

<label>

Expected Free Time

</label>

<input
type="time"
id="expected">

<br><br>

<button
class="status-btn available"
onclick="updateStatus()">

UPDATE STATUS

</button>

</div>

</body>

</html>