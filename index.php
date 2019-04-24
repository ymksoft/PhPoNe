<?php


// rest https://www.youtube.com/watch?v=dGMi-lVZk7s&feature=youtu.be
  

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $tilte = "Lesson 03";

    /* 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP. */
    $currentYear = date("Y");

    $contentH1 = "Массивы";
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
1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
*/   
        
$i = 0;
while($i<100) {
    if(!($i % 3)) {
        echo $i.'<br>';
    }
    $i++;
}

echo '<hr>';

/*
2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – это ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.
*/
$i = 0;
do {
    echo $i;
    if( !$i ) {
        echo ' - это ноль.<br>';
    } else if( !($i % 2) ) {
        echo ' - четное число.<br>';
    } else {
        echo ' - нечетное число.<br>';
    }
        
    $i++;
} while( $i <= 10 );
        
echo '<hr>';

/*
3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)
*/

$mapRegions = [
    [   'region' => 'Московская область',
        'cites' => [ 
            ['city' => 'Москва'],
            ['city' => 'Зеленоград'],
            ['city' => 'Клин'],
                   ]
    ],
    [   'region' => 'Ленинградская область',
        'cites' => [ 
            ['city' => 'Санкт-Петербург'],
            ['city' => 'Всеволожск'],
            ['city' => 'Павловск'],
            ['city' => 'Кронштадт'],
                   ]
    ],
    [   'region' => 'Рязанская область',
        'cites' => [ 
            ['city' => 'Милославское'],
            ['city' => 'Лесной'],
            ['city' => 'Кадом'],
            ['city' => 'Милославское'],
            ['city' => 'Михайлов'],
                   ]
    ],
];

foreach($mapRegions as $mapRegion) {
    echo $mapRegion['region'].':<br>';
    foreach($mapRegion['cites'] as $city) {
        echo  '&rArr;'.$city['city'].'<br>';
    }
}

echo '<hr>';

/*
4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
*/

function rus2translit($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}

$rusText = "  В лесу РоДиЛаСь    ёлочка    , в лесу она росло... в 2019 году   ";
$enText= rus2translit($rusText);
echo $rusText."<br>";
echo $enText."<br>";

echo '<hr>';

/*
5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
*/

function killSpace($s) {
    $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
    $s = trim($s); // убираем пробелы в начале и конце строки
    $s = str_replace(" ", "_", $s); // заменяем пробелы знаком минус
    return $s;
}

echo $rusText."<br>";
echo killSpace($rusText)."<br>";

echo '<hr>';

/*
9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
*/

function str2url($str) {
    // в нижний регистр
    $str = mb_strtolower($str);
    // переводим в транслит
    $str = rus2translit($str);
    // заменям все ненужное нам на "_"
    $str = preg_replace('~[^-a-z0-9_]+~u', '_', $str);
    // по идее тут пробелов уже нет, но задание есть задание
    $str = killSpace($str);
    // удаляем начальные и конечные '_'
    $str = trim($str, "_");
    return $str;
}

echo $rusText."<br>";
echo str2url($rusText).'<br>';
echo '<hr>';

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

/*
6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/

function power($val, $pow) {
    //  степень - целое число больше 0
    if( $pow <= 1 )
        return $val;
    
    return $val * power($val, --$pow);
}
$a=2;
$b=16;
echo 'power='.power($a,$b).'<br>';

/*
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
*/

/*
я бы выбрал такой вариант реализации: 
https://ru.stackoverflow.com/questions/450179/%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D1%8F-%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B7%D0%B0%D0%B2%D0%B5%D1%80%D1%88%D0%B5%D0%BD%D0%B8%D1%8F-%D1%81%D0%BB%D0%BE%D0%B2-%D0%BF%D1%80%D0%B8-%D1%80%D0%B0%D0%B7%D0%BB%D0%B8%D1%87%D0%BD%D1%8B%D1%85-%D1%81%D0%BE%D0%B1%D1%8B%D1%82%D0%B8%D1%8F%D1%85
два других в том же русле, но написаны менее изящно:

на регулярных:
https://wp-kama.ru/question/funktsiya-skloneniya-slov-posle-chisel-php

без массивов:
https://youon.ru/Web/PHP-MySQL-Java/funktsiya-skloneniya-znachenij-chisel-na-php-dni-minuty-chasy-i-td
*/

/**
 * Функция возвращает окончание для множественного числа слова на основании числа и массива окончаний
 * @param  $number Integer Число на основе которого нужно сформировать окончание
 * @param  $endingsArray  Array Массив слов или окончаний для чисел (1, 4, 5),
 *         например array('яблоко', 'яблока', 'яблок')
 * @return String
 */
function getNumEnding($number, $endingArray)
{
    $number = $number % 100;
    if ($number>=11 && $number<=19) {
        $ending=$endingArray[2];
    }
    else {
        $i = $number % 10;
        switch ($i)
        {
            case (1): $ending = $endingArray[0]; break;
            case (2):
            case (3):
            case (4): $ending = $endingArray[1]; break;
            default: $ending=$endingArray[2];
        }
    }
    return $ending;
}
$hours = date('H');
$minutes = date('m');
$seconds = date('s');

echo 'Осталось '.$hours.' ' .getNumEnding($hours, array('час', 'часа', 'часов')).' '.
    $minutes . ' ' .getNumEnding($minutes, array('минута', 'минуты', 'минут')).' '.
    $seconds . ' '. getNumEnding($seconds, array('секунда', 'секунды', 'секунд'));
echo '<br>';
echo 'В течение '.$hours.' ' .getNumEnding($hours, array('часа', 'часов', 'часов')).' '.
    $minutes . ' ' .getNumEnding($minutes, array('минуты', 'минут', 'минут')).' '.
    $seconds . ' '. getNumEnding($seconds, array('секунды', 'секунд', 'секунд'));

echo '<hr>';

function fib($n) { 
 if ( $n == 1 || $n == 2) 
     return $n - 1; 
 else 
     return fib($n-1) + fib($n-2); 
 }
echo fib(10)."<br>";

//////////////////////////////////////////////////////////////////////////////////
//
// Ответы на вопросы
//
        
 
 
echo '<hr>';

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
            <p>&copy;&nbsp;Все права защищены&nbsp;<?=$currentYear?>
            </p>
        </footer>
    </body>

    </html>