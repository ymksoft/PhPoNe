<?php


// rest https://www.youtube.com/watch?v=dGMi-lVZk7s&feature=youtu.be
  

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $tilte = "Lesson 02";
    $currentYear = date("Y");
    $contentH1 = "Функции";
    $hrefHome = "Home";
    $charset = "UTF-8"

   

?>
   
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="<?=$charset?>">
        <title><?=$tilte?></title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <ul>
                <li>
                    <a href="#">
                        <?=$hrefHome?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Contact
                    </a>
                </li>
            </ul>
        </header>
        <content>
            <h1><?=$contentH1?></h1>
            <?php

        
/*
1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.
*/
$a=-4;
$b=5;
if( $a >= 0 && $b >= 0 ){
    echo 'a-b='.($a-$b).'<br>';
} else if ($a < 0 && $b < 0) {
    echo 'a*b='.($a*$b).'<br>';
} else {
    echo 'a+b='.($a+$b).'<br>';
}

/*
2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
*/
$a=10;
switch($a) {
    case 0:
        echo '0<br>';
    case 1:
        echo '1<br>';
    case 2:
        echo '2<br>';
    case 3:
        echo '3<br>';
    case 4:
        echo '4<br>';
    case 5:
        echo '5<br>';
    case 6:
        echo '6<br>';
    case 7:
        echo '7<br>';
    case 8:
        echo '8<br>';
    case 9:
        echo '9<br>';        
    case 10:
        echo '10<br>';        
    case 11:
        echo '11<br>';        
    case 12:
        echo '12<br>';        
    case 13:
        echo '13<br>';        
    case 14:
        echo '14<br>';        
    case 15:
        echo '15<br>';        
    default:
        break;
}

/*
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
*/

function add($a,$b) {
    return $a+$b;
}
function sub($a,$b) {
    return $a-$b;
}
function div($a,$b) {
    return $a/$b;
}
function mul($a,$b) {
    return $a*$b;
}
$a=2;
$b=3;
echo add($a,$b)."<br>";
echo sub($a,$b)."<br>";
echo div($a,$b)."<br>";
echo mul($a,$b)."<br>";

/*
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/
function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {
        case "+":
            return add($arg1,$arg2);
            break;
        case "-":
            return sub($arg1,$arg2);
            break;
        case "/":
            return div($arg1,$arg2);
            break;
        case "*":
            return mul($arg1,$arg2);
            break;
        default:
            break;
    }   
    return NULL;
}
echo mathOperation($a,$b,"+")."<br>";
echo mathOperation($a,$b,"-")."<br>";
echo mathOperation($a,$b,"/")."<br>";
echo mathOperation($a,$b,"*")."<br>";

        
//////////////////////////////////////////////////////////////////////////////////
//
// Ответы на вопросы
//
        
 function fib($n) { 
 if ( $n == 1 || $n == 2) 
     return $n - 1; 
 else 
     return fib($n-1) + fib($n-2); 
 }
echo fib(10)."<br>";
 
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
            <p>&copy;&nbsp;Все права защищены&nbsp;
                <?=$currentYear?>
            </p>
        </footer>
    </body>

    </html>