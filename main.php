<?php
//1
$name = "Igor";
//2
$age = "23";
//3
echo "Меня зовут: {$name}.";
echo "<br>";
//4
echo "Мне {$age} года.";
echo "<br>";
//5-8
$age="22ababa22";
if ((is_numeric($age))==false or ($age<0)) {
        echo "Неизвестный возраст";
    }
    elseif ($age>=18 and $age<=59 ) {
        echo "Вам еще работать и работать";
    }
    elseif ($age>59) {
        echo "Вам пора на пенсию";
    }
    elseif ($age>=0 and $age<=17) {
        echo "Вам еще рано работать";
    }
echo "<br>";
//9-12
$day=8;
switch ($day)
{
    case 1:
        echo "Это рабочий день";
        break;
    case 2:
        echo "Это рабочий день";
        break;
    case 3:
        echo "Это рабочий день";
        break;
    case 4:
        echo "Это рабочий день";
        break;
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
        echo "Это выходной день";
        break;
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
echo "<br>";
//13
$s=120;
$t=2;
echo "Скорость автомобиля (км/ч) = $s/$t = " . $s/$t ."км/час";
echo "<br>";
echo "Скорость автомобиля (м/с) = $s/$t*100/(60*60) = " . ($s/$t*100/(60*60)) ."м/сек";
echo "<br>";
//14
$foo = 'bar';
$bar = 10;
echo $$foo;
echo "<br>";
//15
$a =5;
$b =3;
$operator = "%";
if ($operator == "+") {
        echo "Result: " . ($a + $b) ;
    }
    elseif ($operator == "-"){
        echo "Result: " .  ($a - $b);
    }
    elseif ($operator == "*") {
        echo "Result: " .  ($a * $b);
    }
    elseif ($operator == "/" ) {
        if ($b == 0) {
            echo "Деление на ноль!";
        } else {
            echo "Result: " . ($a / $b);
        }
    }
    elseif ($operator == "%") {
        echo "Result: " . ($a % $b);
    }
echo "<br>";
//16
$a = 1*333;
$b = 8;

if ($a > $b) {
    echo $a;
    }
elseif ($b > $a) {
    echo $b;
    }
else {
    echo 'Числа равны';
    }
echo "<br>";
//17
$a = '78';
$b = 78;
if ($a == $b) {
    echo "Числа равны";
    }
else {
    echo "Числа не равны";
    }
echo "<br>";
//19
var_dump($a, $b);
echo "<br>";
//18
$a='78';
$b=78;
if ($a === $b) {
    echo "Числа эквивалентны";
    }
else {
    echo "Числа не эквивалентны";
    }
echo "<br>";
//20
$a = 20;
var_dump((bool)$a); // = true - при преведении любого числа(integer), кроме нуля, к булевому значению.
echo "<br>";
//21
$a = 0;
var_dump((bool)$a); // = false - при приведении числа 0 к булевому значению.
echo "<br>";
//22
$a = -20;
var_dump((bool)$a); // = true - при преведении любого числа(integer), кроме нуля, к булевому значению.
echo "<br>";
//23
echo "Первая функция";
echo "<br>";
print_r("Вторая функция");
echo "<br>";
print "Третья функция";
echo "<br>";
//24
// Это однострочный комментарий в стиле c++
/* Это многострочный комментарий
   еще одна строка комментария */
# Это комментарий в стиле оболочки Unix
//25
/*  <?php - полная запись первого тега php;
    <? - неполная запись первого тега php;
*/
//26
define('DAYS_COUNT',7);
echo DAYS_COUNT;
echo "<br>";
const MONTH_COUNT=12;
echo MONTH_COUNT;
echo "<br>";
//27
/* Win+R вводим cmd. В консоли выполняем: php.exe адрес_файла/<ФАЙЛ php>*/