<!DOCTYPE html>
<html>
<head>
	<title>Compiler</title>
	 <meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="user.js"></script>
</head>
<body>
	<form action="">
		<input type="text" id="lang" placeholder="Language" name="lang" required="" />
		<input type="message" id="source" placeholder="Your code here" name="source" required="" />
		<input type="button" id="compile" value="Compile" name="compile">
		<input type="button" id="run" value="Run" name="rum">
	</form>
	<pre style="max-width: 500px; border:2px solid Black;" id="result">
	{result}
	</pre>
</body>
</html>