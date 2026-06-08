<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <body style="background-color: #e1f5fe;">

    <?php
        echo "<h1 style='color:skyblue'>งานที่ 1 รุจิรา BIT.2/4 เลขที่19</h1>";
    ?>

    <a href="index.php"><button>if</button></a>

    <form action="">
        <label for="">กรอกเลขแม่สูตรคูณ</label> <br> 
        <input type="number" name="num" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคูณแม่" . $num . "<br>";

            $i = 1;
            while($i <= 12){
                echo $num . " x " .$i . " = " . $num * $i . "<br>";  //num=เลขแม่ i=ตัวคูณ

                $i++;
            }
        }
    ?>

</body>
</html>