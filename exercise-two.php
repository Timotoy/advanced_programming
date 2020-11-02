<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercise-two.php" method="post">
        <p>Input first number:</p> 
        <input type="number" name="txt-num1" required><br><br>
        <p>Input second number:</p> 
        <input type="number" name="txt-num2" required><br><br>
        <button type="submit" name="add" value="+">+</button>
        <button type="submit" name="sub" value="-">-</button>
        <button type="submit" name="mul" value="*">*</button>
        <button type="submit" name="div" value="/">/</button>
    </form>
    <br>
    <?php
        if (!empty($_POST)){
            $txt_num1 = $_POST['txt-num1'];
            $txt_num2 = $_POST['txt-num2'];
            echo "Answer: ";
            switch (isset($_POST)) {
                case isset($_POST['add']):
                    echo $txt_num1 + $txt_num2;
                    break;
                case isset($_POST['sub']):
                    echo $txt_num1 - $txt_num2;
                    break;
                case isset($_POST['mul']):
                    echo $txt_num1 * $txt_num2;
                    break;
                case isset($_POST['div']):
                    echo $txt_num1 / $txt_num2;
                    break;
            }
        }
    ?>
</body>
</html>