<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <table>
        <tr>
            <td> Your Expression:</td>
            <td>
                <input type="text" name="expression">
            </td>
            <td>
                <input type="submit" value="Check">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
include_once "checkBracket.php";
$expression1 = new checkBracket();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST["expression"];
  //  $expression1->pushLeftSquiggly($expression);
   $expression1->checkBBracket($expression);
}
?>