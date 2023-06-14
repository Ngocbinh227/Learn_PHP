<?php
 $db_type ='mysql';
 $db_host ="localhost";
 $user_name = "root";
 $user_pass ="";
 $db_name ="test";

 //connect
$conn = new PDO("$db_type:host=$db_host;dbname=$db_name",$user_name,$user_pass);
if ($conn) {
    echo "Connected to the $db_host successfully!";
}
//creating new tables
$state = "CREATE table student1(
    StudentID varchar(10) not null PRIMARY key,
    FullName varchar(50) not null,
    DOB datetime,
    Class varchar(10),
    AVG float
    )";
if(!$conn->exec($state))
    die ("Create failed" .mysqli_error());
 else {
    echo "Create success";
 }

 //insert

 $data = [
    [
         'StudentID' => 'SV001',
         'FullName' => 'Nguyen Van A',
         'DOB' => '2002-10-01',
         'Class' => 'A5',
         'AVG' => '8.7'
    ],
    [
        'StudentID' => 'SV002',
        'FullName' => 'Nguyen Van B',
        'DOB' => '2002-10-01',
        'Class' => 'A5',
        'AVG' => '6.2'
   ],
   [
    'StudentID' => 'SV003',
    'FullName' => 'Nguyen Van C',
    'DOB' => '2002-10-01',
    'Class' => 'A5',
    'AVG' => '9'
   ],
   [
    'StudentID' => 'SV004',
    'FullName' => 'Nguyen Van D',
    'DOB' => '2002-10-01',
    'Class' => 'A5',
    'AVG' => '3'
   ],
   [
    'StudentID' => 'SV005',
    'FullName' => 'Nguyen Van E',
    'DOB' => '2002-10-01',
    'Class' => 'A5',
    'AVG' => '5'
   ]
];

$stmt = $conn->prepare("INSERT INTO student1 (`StudentID`,`FullName`,`DOB`,`Class`,`AVG`) values (:StudentID,:FullName,:DOB,:Class,:AVG)");

try{
    foreach($data as $row) {
        $stmt->execute($row); 
    }
    echo "Add success";
}
catch (Exception $e) 
{
    echo "Add failed: " . $e->getMessage();
}

//update

$stmt = $conn->prepare("UPDATE student1 SET AVG=:AVG  WHERE StudentID=:StudentID");
$data = [
         'StudentID' => 'SV001',
         'AVG' => '8.5'
];
$result=$stmt-> execute($data);
if (!$result) {
    die("update failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "update success";
}

//delete
$stmt = $conn->prepare("DELETE from student1 WHERE StudentID=:StudentID");
$data = [
         'StudentID' => 'SV003',
];
$result=$stmt-> execute($data);
    
if (!$result) {
    die("delete failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "delete success";
}

?>