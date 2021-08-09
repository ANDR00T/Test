<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 Задание</title>
</head>
<body>
     <!-- Задание 4 -->
    <?php
$e = range(0,93); shuffle($e);
$ar=[1,2,3,3,3,3,];
$result=array_merge($e,$ar);
$n = count ($result);


function countCon($result, $n)
{
    $cnt = 0;
    for ($i = 0; $i < $n - 1; $i++)
    {
        if ( $result[$i] == $result[$i + 1])
            $cnt++;
       
    }
    return $cnt;
}

echo countCon($result, $n);
      ?>


 <p> <?=  "<a href='#'> </a>"?> </p>

</body>
</html>