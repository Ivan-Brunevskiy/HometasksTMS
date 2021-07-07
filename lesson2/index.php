<?php


//1. Создать  ассоциативный массив из 10 элементов
$array = ['car' => 'volkswagen',
    'moto' => 'yamaha',
    'color' => 'green',
    'gender' => 'man',
    'phone' => 'samsung',
    'pc' => 'lenovo',
    'hobby' => 'photo',
    'name' => 'Ivan',
    'last_name' => 'Brunevskiy',
    'old' => 28];

//2. При помощи foreach вывести элементы массива на экран
foreach ($array as $value) {
    echo $value . '<br>';
}

//3. при помощи for создать массив из 20 элементов при помощи функции ранд
$arr20 = [];
for ($i = 0; $i < 20; $i++) {
    $num = rand();
    $arr20[$i] = $num;
}
print_r($arr20);
echo '<br>';

//4.  Вывести элементы массива которые делятся на 3 и на 5 без остатка
foreach ($arr20 as $arr) {
    if ((($arr % 3) || ($arr % 5)) == 0) {
        echo $arr . '<br>';
    }
}
