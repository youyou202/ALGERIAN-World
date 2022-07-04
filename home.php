<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>في مدونة قناة العالم الجزائري يمكنك التعرف على كل جديد في موقعنا بالإضافة إلى المشاركة في الكويز الخاص بالموقع !!!<?php echo $_SESSION['name']; ?> مرحبا بك</h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>