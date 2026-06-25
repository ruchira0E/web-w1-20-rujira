<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500&display=swap" rel="stylesheet">
    
    <style>
        /* ตกแต่งพื้นหลังด้านหลังสุด (ใช้ tag html) */
        html {
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
            font-family: 'Prompt', sans-serif;
        }

        /* จำลอง tag body ให้กลายเป็นกล่องการ์ดสีขาว */
        body {
            background-color: #ffffff;
            width: 100%;
            max-width: 450px;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            text-align: center;
            margin: 0;
            color: #333;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        /* ตกแต่งลิงก์ */
        a {
            display: inline-block;
            background-color: #f1f3f5;
            color: #495057;
            text-decoration: none;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.95rem;
            margin-top: -10px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: #8ec5fc;
            color: white;
        }

        /* ตกแต่งฟอร์ม */
        form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #e9ecef;
            margin-bottom: 25px;
        }

        label {
            font-weight: 500;
            color: #555;
        }

        input[type="number"] {
            margin-top: 10px;
            margin-bottom: 15px;
            padding: 10px;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            width: 100%;
            max-width: 200px;
            text-align: center;
            font-family: 'Prompt', sans-serif;
            font-size: 1rem;
            outline: none;
            transition: 0.3s;
        }

        input[type="number"]:focus {
            border-color: #8ec5fc;
        }

        input[type="submit"] {
            background-color: skyblue;
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            font-family: 'Prompt', sans-serif;
            font-weight: 500;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #6eb0fc;
        }
    </style>
</head>
<body>
    
    <?php
        echo "<h1 style='color:skyblue'>งานที่ 1 รุจิรา BIT.2/4 เลขที่19</h1>";
    ?>

    <a href="while.php">While Loop</a>

    <form action="">
        <label for="">กรอกเลขแม่สูตรคูณ</label> <br> 
        <input type="number" name="num" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคูณแม่" . $num . "<br>";

            //.  เริ่มต้น     สิ้นสุด  เพิ่มทีละ1
            for($i = 1; $i <= 12; $i++){
                echo $num . " x " .$i . " = " . $num * $i . "<br>";  //num=เลขแม่ i=ตัวคูณ

            }
        }
    ?>

</body>
</html>