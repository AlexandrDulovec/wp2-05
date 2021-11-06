<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for($i=1; $i<=10;$i++)
{
    ?> <?php
    for($j=1; $j<=10; $j++)
    {
        $total = $i+$j;
        if($total%2 == 0)
        {
            echo "X";
        }
        else
        {
            echo "O";
        }
    }
    ?> <br> <?php
}
?>
</body>
</html> 