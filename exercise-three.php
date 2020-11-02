<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise-three.php" method="post">
        <p>Input first number:</p>
        <input type="number" name="gcd-num1" required><br><br>
        <p>Input second number:</p>
        <input type="number" name="gcd-num2" required><br><br>
        <button type="submit">submit</button>
    </form>
    <br>
    <?php
        $gcd = 1;
        if(!empty($_POST)){
            $gcd_num1 = $_POST['gcd-num1'];
            $gcd_num2 = $_POST['gcd-num2'];
            echo "Answer: ";
            for ($i=1; $i<=max($gcd_num1,$gcd_num2);$i++)
                if($gcd_num1 % $i == 0 && $gcd_num2 % $i == 0)
                    $gcd = $i;
            echo $gcd;
        }
    ?>
</body>
</html>