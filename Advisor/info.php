<!DOCTYPE html>
<html>
<head>
<title>Student Registration System</title>
</head>
<body>
<h1>Student Advisor</h1>
<link rel="stylesheet" href="css/styles.css">
<form method="POST" action="advisor.php">
<label for="id">id:</label>
<input type="text" id="name" name="name" required>
<br><br>
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
<br><br>
<label for="email">Email:</label>
<select id="email" name="email" required>
<option value="1">Nelisiwe@uni-V.co.za</option>
<option value="2">Njabulo@uni-V.co.za</option>
<option value="3">Shaun@uni-V.co.za</option>
<option value="4">Sipho@uni-V.co.za</option>
</select>
<br><br>
<label for="phone">Phone:</label>
<select id="phone" name="phone" required>
<option value="phone">011-524-5214</option>
<option value="phone">011-524-5214</option>
<option value="phone">011-524-5214</option>
<option value="phone">011-524-5214</option>
</select>
<br><br>
<label for="department">Department:</label>
<input type="text" id="department" name="department" required>
<br><br>
</select>

<br><br>
<input type="submit" value="Submit">
</form>
<?php
include('includes/db_conn.php');

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$Id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];

// Display the submitted information
echo "<h2>Submitted Information:</h2>";
echo "<p>id: $id</p>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Phone: $phone</p>";
echo "<p>Department: $department</p>";
}
?>
</body>
</html>
```

