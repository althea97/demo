<!DOCTYPE html>
<html>
<head>
	<title>Demo AJAX</title>
</head>
<body onload="obj.getList()">
	<h2>AJAX style</h2>
	<div id="response"></div>
	<input type="text" id="user">
	<button onclick="obj.addUser()">AJAX CLICK</button>

	<h2>AJAX LIST</h2>

	<div>
		<ul id="userList"></ul>
	</div>
	

	<script type="text/javascript" src="script.js"></script>
</body>
</html>