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
$state = "CREATE table Transaction1(
    Stt int auto_increment primary key ,
    ID varchar(10) not null unique,
    TransType varchar(50) not null,
    TransDate datetime,
    TransAmount decimal,
    Descrip varchar(2000)
    )";
if(!$conn->exec($state))
    die ("Create failed" .mysqli_error ());
 else {
    echo "Create success";
 }

 //insert
 $data = [
    [
         'ID' => 'SV001',
         'TransType' => 'rut tien',
         'TransDate' => '2023-06-07',
         'TransAmount' => '1000',
         'Descrip' => 'di rut tien'
    ],
    [
        'ID' => 'SV002',
        'TransType' => 'rut tien',
        'TransDate' => '2023-08-07',
        'TransAmount' => '2000',
        'Descrip' => 'di rut tien'
   ],
   [
    'ID' => 'SV003',
    'TransType' => 'rut tien',
    'TransDate' => '2023-09-07',
    'TransAmount' => '7000',
    'Descrip' => 'di rut tien'
   ],
   [
    'ID' => 'SV004',
    'TransType' => 'vay tien',
    'TransDate' => '2023-09-07',
    'TransAmount' => '1000',
    'Descrip' => 'di vay tien'
   ],
   [
    'ID' => 'SV005',
    'TransType' => 'vay tien',
    'TransDate' => '2023-09-07',
    'TransAmount' => '2000',
    'Descrip' => 'di vay tien'
   ]
];

$stmt = $conn->prepare("INSERT INTO Transaction1(ID,TransType,TransDate,TransAmount,Descrip) values (:ID,:TransType,:TransDate,:TransAmount,:Descrip)");

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

$stmt = $conn->prepare("UPDATE Transaction1 SET TransAmount=:TransAmount  WHERE Stt=:Stt");
$data = [
         'TransAmount' => '1000',
         'Stt' => '3'
];
$result=$stmt-> execute($data);
if (!$result) {
    die("update failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "update success";
}

//delete
$stmt = $conn->prepare("DELETE from Transaction1 WHERE Stt=:Stt");
$data = [
         'Stt' => '5',
];
$result=$stmt-> execute($data);
    
if (!$result) {
    die("delete failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "delete success";
}

?>