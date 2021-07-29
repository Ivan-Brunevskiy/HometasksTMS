<?php
//1.  Сделайте функцию, которая принимает параметром число от 1 до 7,
// а возвращает день недели на русском языке.
function day($day){
$week = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Восскресенье'
];
if ($day > 0 && $day < 8){
    echo $week[$day];
    return $week[$day];
}else {
    echo "введите значение от 1 до 7";
}
}
$day = 7;
day($day);


//2. Создайте функцию, которая обрезает строку до нужного размера.
//  Необходимо учесть, что слово в конце строки не должно быть обрезано
$string = "Необходимо учесть, что слово в конце строки не должно быть обрезано";
function cut_string($string)
{
    $str = mb_substr($string, 0, 33);
    $arr1 = explode(" ", $string);
    $arr2 = explode(" ", $str);
    $last_key = array_key_last($arr2);
    if (mb_strlen($arr1[$last_key]) > mb_strlen($arr2[$last_key])) {
        array_pop($arr2);
        $new_str = implode(" ", $arr2);
        echo $new_str;
        return $new_str;
    } else {
        echo $str;
        return $str;
    }
}
cut_string($string);

//3.  Написать функцию, которая будет менять порядок слов в строке на обратный
$string  = "my love book";
function my_string($string){
    $arr = explode(" ", $string);
    krsort($arr);
    $revers = implode(" ", $arr);
    echo $revers;

    return $revers;
}
my_string($string);



//4. Написать функцию, которая вычисляет среднее арифметическое элементов массива,
// переданного ей в качестве аргумента.  Не использовать array_sum и т.д. Простым перебором через цикл

$array = [1, 2, 3, 4, 5];
function average($array){
    $summa = 0;
    foreach ($array as $arr) {
        $summa += $arr;
    }
    $average = $summa / count($array);
    echo $average;
    return $average;
}
average($array);



//5.  Написать функцию, которая генерирует массив случайных значений.
// Количество элементов массива передается в качестве аргумента
function random_array($num)
{
    $arr1 = [];
    $array = [];
    $arr = array_pad($array, $num, $num);
    foreach ($arr as $value) {
        $random = rand();
        $arr1[] = $random;
    }
    var_dump($arr1);
    return $arr1;
}
$num = 5;
random_array($num);
