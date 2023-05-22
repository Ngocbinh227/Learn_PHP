<!DOCTYPE html>
<html>
    <body>
        <h1> BÀI TẬP BUỔI 3</h1>
        <?php
        echo "Câu 1: ";
        //Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
        function CheckEvenNumber($num)
        {
            if ($num % 2 == 0) {
                echo "Số $num là số chẵn.";
            } else {
                echo "Số $num không phải là số chẵn.";
            }
        }
        
        // Kiểm tra số chẵn
        $num = 4; // Thay đổi số tại đây
        CheckEvenNumber($num);
       echo '<br/>';
       echo "Câu 2: ";
       //Viết chương trình PHP để tính tổng của các số từ 1 đến n.
       $n= 100;
       $total = 0;
       for ($i= 1; $i <= $n; $i++){
        $total += 1/$i;
       }
       echo "Tổng là: " .$total;
       ?>
       <?php
       echo '<br/>';
       echo "Câu 3: ";
       echo "Bảng cửu chương là: "
       
       //Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
       ?>
       <table border="1px">
<tr>
<?php 
for($i = 1; $i < 11; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>
<?php
       echo '<br/>';
       echo "Câu 4: ";
       //Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
$word = "php";
$sentence = "I am studying php with Hoang Van Sang";
 
 
if(strpos($sentence, $word) !== false){
    echo "Có chứa từ bạn cần!";
} else{
    echo "Không tìm thấy từ!";
}
?>
<?php
       echo '<br/>';
       echo "Câu 5: ";
       //Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
      $listNum = array(1,20,40,19,190);
      echo " Gía trị lớn nhất là: ";
      echo max($listNum);
      echo '<br/>';
      echo " Gía trị nhỏ nhất là: ";
      echo min($listNum);
      ?>
      <?php
       echo '<br/>';
       echo "Câu 6: ";
       //Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
       $numbers = array(4, 6, 2, 22, 11);
       sort($numbers);
         
       foreach( $numbers as $n) {
           echo "$n , ";
       }
       ?>
       <?php
       echo '<br/>';
       echo "Câu 7: ";
       //Viết chương trình PHP để tính giai thừa của một số nguyên dương.
       $a = 5;
       $b = 0;
       $c = 10;
       function factorialCaculation($n) {
           $factorial = 1;
           if ($n == 0 || $n == 1) {
               return $factorial;
           } else {
               for($i = 2; $i <= $n; $i ++) {
                   $factorial *= $i;
               }
               return $factorial;
           }
       }
        
       echo ("Giai thừa của " . $a . " là: " . factorialCaculation ( $a ) . "<br>");
       echo ("Giai thừa của " . $b . " là: " . factorialCaculation ( $b ) . "<br>");
       echo ("Giai thừa của " . $c . " là: " . factorialCaculation ( $c ) . "<br>");
       ?>
       <?php
       echo '<br/>';
       echo "Câu 8: ";
       //Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
       function check_prime($n)
       {
           for ($i = 2; $i <= sqrt($n); $i++) {
               if ($n % $i == 0){
                   return false;
               }
           }
           return true;
       }
       echo 'Kết quả: ';
$start = 3;
$end = 10;
for($i = $start; $i <= $end; $i ++) {
    if(check_prime($i))
        echo "$i , ";
}

       ?>
       <?php
       echo '<br/>';
       echo "Câu 9: ";
       //Viết chương trình PHP để tính tổng của các số trong một mảng.
       function sum($array)
       {
           $total = 0;
           foreach ($array as $num) {
               $total += $num;
           }
           return $total;
       }
       
       $array = [1, 2, 3, 4, 5];
       
       $total = sum($array);
       echo "Tổng của các số trong mảng là: $total";
       ?>
         <?php
       echo '<br/>';
       echo "Câu 10: ";
       //Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
       
        function inFibonacci($n)
        {
            $fibonacci = [];
            $fibonacci[0] = 0;
            $fibonacci[1] = 1;
        
            for ($i = 2; $i <= $n; $i++) {
                $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
        
            return $fibonacci;
        }
    
        $start = 0; // Giá trị bắt đầu
        $end = 10; // Giá trị kết thúc
        
        $fibonacci = inFibonacci($end);
        
        echo "Các số Fibonacci từ $start đến $end là: ";
        for ($i = $start; $i <= $end; $i++) {
            echo $fibonacci[$i] . " ";
        }
        ?>
    </body>
</html>