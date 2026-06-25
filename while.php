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
            background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
            font-family: 'Prompt', sans-serif;
        }

        /* จำลอง tag body ให้เป็นกล่องการ์ด (สีพื้นหลังจะใช้ตามที่คุณกำหนดใน style โค้ดเดิม) */
        body {
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

        /* ตกแต่งปุ่มที่อยู่ในแท็ก a */
        button {
            background-color: #ffffff;
            color: #495057;
            border: 1px solid #ccc;
            padding: 8px 25px;
            border-radius: 20px;
            font-size: 0.95rem;
            margin-top: -10px;
            margin-bottom: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Prompt', sans-serif;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        button:hover {
            background-color: skyblue;
            color: white;
            border-color: skyblue;
        }

        /* ตกแต่งฟอร์ม */
        form {
            background-color: rgba(255, 255, 255, 0.6);
            padding: 20px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.8);
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
            border: 2px solid #fff;
            border-radius: 8px;
            width: 100%;
            max-width: 200px;
            text-align: center;
            font-family: 'Prompt', sans-serif;
            font-size: 1rem;
            outline: none;
            transition: 0.3s;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        input[type="number"]:focus {
            border-color: skyblue;
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
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        input[type="submit"]:hover {
            background-color: #6eb0fc;
        }
    </style>
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