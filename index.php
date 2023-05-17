<!DOCTYPE html>
<html>
<head>
<style>
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}
</style>
</head>
</html>
<html>
    <body>
        <h1> BÀI TẬP THỰC HÀNH TRÊN LỚP </h1>
        <?php echo "1,"; ?>
<?php
//1. Xuất ra trình duyệt chuỗi ‘Hello World !’
echo "Hello World!";
?>
<?php echo "<br>" ?>
<?php echo "2,"; ?>
<?php
//Xác định số phần tử của chuỗi 'HoangVanSang'
echo strlen("HoangVanSang");
?>
<?php echo "<br>" ?>
<?php echo "3,"; ?>
<?php 
//3.Viết chương trình PHP để tính lập phương của một số nguyên.
$x = 100;
echo pow($x,3);
?>
<?php echo "<br>" ?>
<?php echo "4,"; ?>
<?php
//Viết chương trình PHP để đảo ngược một chuỗi.
echo strrev("Hello Binh");
?>
    </body>
</html>
<html>
    <body>
        <h1> BÀI TẬP VỀ NHÀ </h1>
<?php echo "1,"; ?>
<?php
//Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
echo strlen("PHAM THI THANH BINH YEU NGUYEN NGOC DUY");
?>
<?php echo "<br>" ?>
<?php echo "2,"; ?>
<?php
//Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
echo str_word_count("Pham Thi Thanh Binh");
?>
<?php echo "<br>" ?>
<?php echo "3,"; ?>
<?php
//Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
echo strrev("duy yeu binh");
?>
<?php echo "<br>" ?>
<?php echo "4,"; ?>
<?php
//Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo strpos("Binh yeu Duy","Duy");
?>
<?php echo "<br>" ?>
<?php echo "5,"; ?>
<?php
//Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo str_replace("Linh","Binh","Duy yeu Linh");
?>
<?php echo "<br>" ?>
<?php echo "6,"; ?>
<?php
//Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
function startsWith($x , $y) {
    return substr($x , 0, strlen($y)) === $y;
}
$x = "Hello, world!";
$y = "Binh";

if (startsWith($x, $y)) {
    echo "Chuỗi bắt đầu bằng chuỗi con.";
} else {
    echo "Chuỗi không bắt đầu bằng chuỗi con.";
}
?>
<?php echo "<br>" ?>
<?php echo "7,"; ?>
<?php
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo strtoupper("binh");
?>
<?php echo "<br>" ?>
<?php echo "8"; ?>
<?php
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo strtolower("BINH");
?>
<?php echo "<br>" ?>
<?php echo "9,"; ?>
<?php 
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo ucwords("binh tinh cam");
?>
<?php echo "<br>" ?>
<?php echo "10,"; ?>
<?php
//Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function removeSpace($me){
    return trim($me);
}
$me = " binh yeu duy ";
$meAfter = removeSpace($me);
echo $meAfter;
?>

<?php echo "<br>" ?>
<?php echo "11,"; ?>
<?php
//Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?>
<?php echo "<br>" ?>
<?php
//cach2
function removeFirstCharacter($x) {
    return substr($x, 1);
}
$x = "Hello, world!";
$xAfter = removeFirstCharacter($x);
echo $xAfter;
?>

<?php echo "<br>" ?>
<?php echo "12,"; ?>
<?php
//Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function removeLastCharacter($x) {
    return rtrim($x, $x[-1]);
}
$x = "Hello, world!";
$xAfter = removeLastCharacter($x);
echo $xAfter;
?>
<?php echo "<br>" ?>
<?php echo "13,"; ?>
<?php
//Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function splitString($string, $separator){
    return explode( $separator, $string );
}
$string = "binh,ha,Duy";
$separator = ",";
$result = splitString($string, $separator);
print_r($result); //hiển thị mảng kết quả 
?>
<?php echo "<br>" ?>
<?php echo "14,"; ?>
<?php
//Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function connectElement($array, $separator){
    return implode($separator , $array);
}
$array = array("apple", "banana", "orange");
$separator = ", ";
$result = connectElement($array, $separator);

echo $result;
?>
<?php echo "<br>" ?>
<?php echo "15,"; ?>
<?php
//Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function addStringToBeginning($string, $addition, $length) {
    return str_pad($string, $length, $addition, STR_PAD_LEFT);
}

function addStringToEnd($string, $addition, $length) {
    return str_pad($string, $length, $addition, STR_PAD_RIGHT);
}
$string = "Hello";
$addition = "!";
$length = 10;

$newStringBeginning = addStringToBeginning($string, $addition, $length);
$newStringEnd = addStringToEnd($string, $addition, $length);

echo "Chuỗi sau khi thêm vào đầu: " . $newStringBeginning . "\n";
echo "Chuỗi sau khi thêm vào cuối: " . $newStringEnd;
?>
<?php echo "<br>" ?>
<?php echo "16,"; ?>
<?php
//Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
function endsWith($string, $ending) {
    $length = strlen($ending);
    if ($length == 0) {
        return false;
    }

    return substr($string, -$length) === $ending;
}

$string = "Hello, world!";
$ending = "world!";
if (endsWith($string, $ending)) {
    echo "Chuỗi kết thúc bằng chuỗi con '$ending'.";
} else {
    echo "Chuỗi không kết thúc bằng chuỗi con '$ending'.";
}
?>

<?php echo "<br>" ?>
<?php echo "17,"; ?>
<?php
//Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function containsSubstring($string, $substring) {
    return strpos($string, $substring) !== false;
}

$string = "Hello, world!";
$substring = "world";
if (containsSubstring($string, $substring)) {
    echo "Chuỗi chứa chuỗi con '$substring'.";
} else {
    echo "Chuỗi không chứa chuỗi con '$substring'.";
}
?>
<?php echo "<br>" ?>
<?php echo "18,"; ?>
<?php
//Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function replaceNonAlphanumeric($string, $replacement) {
    $pattern = '/[^a-zA-Z0-9]/';
    return preg_replace($pattern, $replacement, $string);
}

$string = "Hello! @world123";
$replacement = "-";
$result = replaceNonAlphanumeric($string, $replacement);

echo $result;
?>
<?php echo "<br>" ?>
<?php echo "19"; ?>
<?php
//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
$x= 12.45;
if (is_int("$x"))
{
    echo "This is so nguyen";
} else {
    echo "This is not so nguyen";
}
?>
<?php echo "<br>" ?>
<?php echo "20,"; ?>
<?php
//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
$email = "phambinhvale@gmail.com";
if (filter_var("&email")){
    echo "This is email.";
} else {
    echo "This is not email.";
}
?>

    </body>
</html>

