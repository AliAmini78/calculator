<?php

include './php/app.php';


?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>calculator</title>
</head>

<body>

    <main>
        <button class="time_btn" type="button">
            <img src="img/sun.png" alt="#" id="time_img">
        </button>
        <h1>Calculator </h1>
        <div class="answer">
            Answer
            <span class="num"><?= $result ?></span>

        </div>
        <div class="inputs">
            <form action="/" method="POST">
                <input type="number" name="first_num" id="first_num" placeholder="First Number">
                <input type="number" name="second_num" id="second_num" placeholder="Second Number">
                <select name="operator" id="oprator" required>
                    <option value="">Select Operation</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>

                <div class="btns">
                    <button type="submit" name="submit" method="post" value="submit" id="sub">Submit</button>
                    <button type="button" id="del">Clear</button>
                </div>
            </form>
        </div>
    </main>



    <script src="js/app.js"></script>
</body>


</html>