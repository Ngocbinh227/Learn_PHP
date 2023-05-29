<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bài kiểm tra số 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
        }

        .header p {
            font-size: 18px;
            margin: 10px 0;
        }

        .description {
            background-color: #e9e9e9;
            padding: 20px;
            text-align: center;
        }

        .description h2 {
            margin: 0;
            font-size: 24px;
            color: #333333;
        }

        .description p {
            font-size: 16px;
            margin: 10px 0;
        }

        .question {
            padding: 20px;
            color: teal;
            text-align: left;
            border: 1px solid black;

        }

        .answer {
            padding: 20px;
            color: black;
            text-align: left;
        }

        .even {
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Bài kiểm tra</h1>
        <p>Thời gian: 30 phút</p>
    </div>

    <div class="description">
        <h2>Môn học</h2>
        <p>Lập trình PHP - Hoàng Văn Sáng</p>
    </div>

    <!-- Các câu hỏi và các phần tử khác của bài kiểm tra -->
    <!-- Câu 1-->
    <div class="question">
        <div class="question-text">Câu hỏi 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?</div>
        <div class="answer">
            <div class="question-text"> Câu trả lời là:
                <?php
                $number = 27;

                if ($number % 2 == 0) {
                    echo "Số $number là số chẵn.";
                } else {
                    echo "Số $number là số lẻ.";
                }
                ?>
            </div>
        </div>
    </div>
    
    <!-- Câu 2 -->
    <div class="question">
        <div class="question-text">Câu hỏi 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.</div>
        <div class="question-text">Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)</div>
        <div class="question-text">Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".</div>
        <div class="question-text">Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi" </div>
                <div class="question-text">Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá" </div>
                        <div class="question-text">Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu" </div>
                                <div class="answer">
                                    <div class="question-text"> Câu trả lời là:
                                        <?php
                                        $midTermPoint = 8.5;
                                        $endTermPoint = 7.2;

                                        $averagePoint = ($midTermPoint * 0.3) + ($endTermPoint * 0.7);

                                        if ($averagePoint >= 9.0) {
                                            echo "Hạng: Xuất sắc";
                                        } elseif ($averagePoint >= 7.0 && $averagePoint < 9.0) {
                                            echo "Hạng: Giỏi";
                                        } elseif ($averagePoint >= 5.0 && $averagePoint < 7.0) {
                                            echo "Hạng: Khá";
                                        } else {
                                            echo "Hạng: Trung bình - Yếu";
                                        }
                                        ?>
                                    </div>
                                </div>
                        </div>

     <!-- Câu 3-->
        <div class="question">
            <div class="question-text">Câu hỏi 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ?</div>
            <div class="answer">
                <div class="question-text"> Câu trả lời là:
                    <?php
                    $year = date("2023");

                    if ($year % 2 == 0) {
                        echo "Năm $year là năm chẵn.";
                    } else {
                        echo "Năm $year là năm lẻ.";
                    }
                    ?>
                </div>
            </div>
        </div>
    <!-- Câu 4-->
    <div class="question">
        <div class="question-text">Câu hỏi 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.</div>
        <div class="answer">
            <div class="question-text"> Câu trả lời là:
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo $i . " ";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Câu 5-->
    <div class="question">
        <div class="question-text">Câu hỏi 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .</div>
        <div class="answer">
            <div class="question-text"> Câu trả lời là:
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    if ($i % 2 == 0) {
                        echo '<span class="even">' . $i . '</span> ';
                    } else {
                        echo $i . ' ';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Câu 6-->
    <div class="question">
        <div class="question-text">Câu hỏi 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
            $nam = array(1990, 1991, 1992, 1993, 1994, 1995);</div>
        <div class="answer">
            <div class="question-text"> Câu trả lời là:
                <?php
                $nam = array(1990, 1991, 1992, 1993, 1994, 1995);

                foreach ($nam as $value) {
                    echo $value . " ";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>