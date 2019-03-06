<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Upload Files and Images in PHP</title>

</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">	<!--"enctype" specifies how the form data shoudl be encoded.	-->
	<input type="file" name="file">
	<button type="submit" name="submit">UPLOAD</button>
</form>

</body>
</html>