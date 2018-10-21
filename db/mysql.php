<?php
    
    $conn = mysqli_connect("localhost","root","","employee");

    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    $sql = "CREATE TABLE IF NOT EXISTS `employee` (
        `emp_id` int(8) NOT NULL AUTO_INCREMENT,
        `address` varchar(255) NOT NULL,
        `phonenumber` bigint(10) NOT NULL,
        PRIMARY KEY (`emp_id`)
      )";
    $conn->query($sql) or die(mysqli_error($conn));

    $insert = "INSERT into employee values(1,'Mumbai',9876987654),(2,'Pune',7692187654),(3,'Nashik',8761987654)";
    $conn->query($insert) or die(mysqli_error($conn));

    $result= mysqli_query($conn,"Select * from employee");

    if(!empty($result)){
        while($row=mysqli_fetch_row($result)){
        echo $row[0]." ";
        echo $row[1]." ";
        echo $row[2]." ";
        echo "<br />";
    }}else{
        echo mysqli_error($conn) ;
}

?>