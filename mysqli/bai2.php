<?php
 $db_server ="localhost";
 $db_username = "root";
 $db_pass ="";
 $db_name ="test";

 //connect
 $dbh = mysqli_connect($db_server,$db_username,$db_pass);

 if(!$dbh)
  die ("Not connect" .mysqli_error());
 
  if (!mysqli_select_db($dbh, $db_name))  
  die ("Not found database". mysqli_error());
 
  //create table
  $sql_stmt = "CREATE table transactions(
    Stt int not null primary key auto_increment,
    ID varchar(10) not null unique,
    transType varchar(50) not null,
    transDate datetime,
    Amount decimal,
    descrip varchar(2000)
    );";
 $result = mysqli_query($dbh,$sql_stmt);//thuc hien
 if(!$result)
    die ("Create failed" .mysqli_error());
 else {
    echo "Create success";
 }

 //insert
 $sql_stmt = "INSERT INTO transactions (ID,transType,transDate,Amount,descrip)
                 values ('SV001','rut tien','2023-05-07','1000','di rut tien'),
                 ('SV002','rut tien','2023-06-07','2000','di rut tien'),
                 ('SV003','rut tien','2023-08-07','7000','di rut tien'),
                 ('SV004','vay tien','2002-12-01','1000','di vay tien'),
                 ('SV005','vay tien','2002-10-01','2000','di vay tien')"; 
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) {
    die("Add failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Add success";
}

//update

$sql_stmt = "UPDATE transactions set Amount =1000 where Stt = 3";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) {
    die("update failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "update success";
}

//delete
$sql_stmt = "DELETE from transactions where where Stt = 5";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) {
    die("delete failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "delete success";
}
   
?>