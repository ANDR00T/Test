<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 4</title>
</head>
<body>
     <!-- Задание 4 -->
    <?php
$e = range(0,94); shuffle($e);//Создаем массив для 94 элементов и рандомн их 
$ar=[2,2,3,3,3,3,];//Этот массив для тог чтобы счетчик не показывал 0 90 времени.
$result=array_merge($e,$ar);//тут простое обьединение массивов чтоб было 100 чисел 
$n = count ($result);//считаем количество элементов в масииве

function countCon($result, $n) //это функция для проверки на последовательньые пары
{
    $cnt = 0;//сам считчик последовательных пар
    for ($i = 0; $i < $n - 1; $i++)
    {
        //В if Мы проверяем равен ли текущий элемент массива следующему за ним
        if ( $result[$i] == $result[$i + 1])
            $cnt++; //Если равен то прибавляем 1
       
    }
    return $cnt;//выводим результат
}

echo'Найдено последовательных пар ',  countCon($result, $n);
      ?>

</body>
</html>