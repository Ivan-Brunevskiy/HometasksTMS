<?php

//1. Удалить из строки пробелы и определить, является ли она перевертышем
$str = " mamam mamam mamam  ";
$string = str_replace(" ", "", $str);
$str2 = strrev($string);

if ($string == $str2) {
    echo "перевертыш";
} else {
    echo "не перевертыш";
}
echo "<br>";


//2. Найти самое длинное слово в строке
$sentens = "я сейчас пишу офигенную функцию";
$arrS = explode(" ", $sentens);

foreach ($arrS as $key => $value) {
    $int = mb_strlen($value);
    $mas[$int] = $value;
}
krsort($mas);
echo array_shift($mas) . "<br>";


//3. Посчтитать количество заглавных и прописных букв в строке
$text = "I am DUinG my HOMEwork";
$textAll = str_replace(" ", "", $text);
$textSmall = preg_replace("![A-Z|А-Я]!", "", $textAll);
$textBig = preg_replace("![a-z|а-я]!", "", $textAll);

echo "заглавных букв в строке - " . strlen($textBig) . "<br>";
echo "прописных букв в строке - " . strlen($textSmall) . "<br>";


//4. Посчитать количество четных и нечетных элементов массива
$arr = ['black', 'blue', 'green', 'rad', 'orange'];

foreach ($arr as $value) {
    if ((mb_strlen($value) % 2) == 0) {
        $arr1[] = $value;
    }
    if ((mb_strlen($value) % 2) !== 0) {
        $arr2[] = $value;
    }
}
echo "четных элементов в массиве - " . count($arr1) . "<br>";
echo "НЕчетных элементов в массиве - " . count($arr2) . "<br>";


//5. Вывести на экран те элементы массива, которые выше среднего значения
$arr = ['car', 'one', 'twelve', 'elephant', 'orange', 'five'];
$res1 = implode($arr);
$res2 = (int)((strlen($res1)) / (count($arr)));

foreach ($arr as $value) {
    if (strlen($value) > $res2) {
        echo $value . "<br>";
    }
}


//6. Найти наибольший и наименьший элементы массива (не используя стандартные ф-ции min и max)

foreach ($arr as $value) {
    $long[] = strlen($value);
}

$arrLong = array_combine($arr, $long);
arsort($arrLong);
$keyLast = array_key_last($arrLong);
$keyFirst = array_key_first($arrLong);
var_dump($arrLong);
foreach ($arrLong as $key => $value) {
    if (strlen($keyFirst) == $value) {
        echo "Наибольший элемент массива - " . $key . "<br>";
    } elseif (strlen($keyLast) == $value) {
        echo "Наименьший элемент массива - " . $key . "<br>";
    }
}

//7. Преобразовать двумерный массив в одномерный

$array = [
    ['one', 'two'],
    ['three', 'four']
];

foreach ($array as $arr) {
    foreach ($arr as $value) {
        $new[] = $value;
    }
}
var_dump($new);


//8. В двумерном массиве поменять четные и нечетные столбцы местами

$array = [
    ['первый', 'второй', 'первый', 'второй', 'первый', 'второй'],
    ['первый', 'второй', 'первый', 'второй', 'первый', 'второй'],
    ['первый', 'второй', 'первый', 'второй', 'первый', 'второй'],
    ['первый', 'второй', 'первый', 'второй', 'первый', 'второй']
];
var_dump($array);

foreach ($array as $key => $arrayIn){
    for ($i=1; $i<count($arrayIn); $i=$i+2){
        $chetnuy = $arrayIn[$i];
        $arrayIn[$i] = $arrayIn[$i-1];
        $arrayIn[$i-1] = $chetnuy;
        $array[$key] = $arrayIn;
    }
}
var_dump($array);
