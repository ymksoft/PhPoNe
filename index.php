<?php

    $tilte = "Мой стайт";
    $currentYear = date("Y");
    $contentH1 = "Ответы на вопросы";
    $hrefHome = "Home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$tilte?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
   <header>
       <ul>
           <li><a href="#"><?=$hrefHome?></a></li>
       </ul>
   </header>
   <content>
       <h1><?=$contentH1?></h1>
   

<?php

//////////////////////////////////////////////////////////////////////////////////
//
// Ответы на вопросы
//

    $a = 5;
    $b = '05';

    var_dump($a == $b);         // Почему true?

echo "<br>Ответ: Потому что правую часть приведет к нужному типу. Левый тип число, правый будет приведен от строки к числу. == проверяет только значение, 5=5<hr>";

    var_dump((int)'012345');     // Почему 12345?
var_dump((int)'0000012345'); // ноль не то число, которое интересно php )))

echo "<br>Ответ: Приведение к числу так работает. Если бы после 0 был знак не цифры и не код других систем счисления, то был бы 0<hr>";

    var_dump((float)123.0 === (int)123.0); // Почему false?

echo "<br>Ответ: тип float не равен типу int<hr>";

    var_dump((int)0 === (int)'hello, world'); // Почему true?
var_dump((int)0 === (int)""); // Строка без цифр = 0

echo "<br>Ответ: Приведение строки без цифр к числу даст 0, 0=0<hr>";

//////////////////////////////////////////////////////////////////////////////////
//
// Задачка на поменять местами значения int без выделения дополнительной памяти
//

$a=1;
$b=2;

echo "A=$a B=$b<br>";

// 1С style
$a=$a+$b;
$b=$a-$b; 
$a=$a-$b; 

echo "A=$a B=$b<hr>";

echo "Другой вариант через ^= <br>";

$a=1;
$b=2;

echo "A=$a B=$b<br>";

// C style
$a^=$b^=$a^=$b;

echo "A=$a B=$b<hr>";

    ?>
</content>
  
   <footer>
    <p>&copy;&nbsp;Все права защищены&nbsp;<?=$currentYear?></p>
   </footer>
    
</body>
</html>