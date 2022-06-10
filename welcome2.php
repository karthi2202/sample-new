<html>

<body>

<?php

$host= "localhost";

$username= "root";

$password = "";

$db_name = "students_mark_form";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) 

{

	echo "Connection failed!". "<br>";

}

else

{

	echo "Connection Successful". "<br>";

}




$sql = "SELECT * FROM marks1";

$result = $conn->query($sql);

$count = 0;

if ($result->num_rows > 0) 

{

  while($row = $result->fetch_assoc()) 

 {

  if((!strcmp($row["Rollno"],$_POST["rollno"])))

  {

     

     echo "Maths         " . $row["Maths"] . "<br>";

     echo "Physics       " . $row["Physics"] . "<br>";

     echo "Chemistry     " . $row["Chemistry"] . "<br>";

     echo "PSP           " . $row["PSP"] . "<br>";

     echo "IE            " . $row["IE"] . "<br>";

     echo "ValueEducation " . $row["ValueEducation"] . "<br>";

     echo "C             " . $row["C"] . "<br>";


     

  }	

 } 

 

}

else 

{

  echo "0 results";

}

$conn->close();

?>

</body>

</html>