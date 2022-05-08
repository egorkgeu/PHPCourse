<?php
// 1. Создаем характеристику
$volume_stakan = 0;
print_r('Начальный объем воды ' . $volume_stakan);
//echo $volume_stakan;

// 2. Изменяем характеристику
$volume_stakan+=200;
// Сокращенная запись от:
//$volume_stakan = $volume_stakan + 200;
print_r("\r\n");
print_r('Конечный объем воды ' . $volume_stakan);


// 3. Изменяем характеристику еще раз
$volume_stakan+=200;
print_r("\r\n");
print_r('Конечный объем воды после третьего шага ' . $volume_stakan);

// 4. Изменяем характеристику еще раз
$volume_stakan+=200;
print_r("\r\n");
print_r('Конечный объем воды после четвертого шага ' . $volume_stakan);

// 5. Изменяем характеристику еще раз, только на 100
$volume_stakan+=100;
print_r("\r\n");
print_r('Конечный объем воды после пятого шага ' . $volume_stakan);

//Увеличить значение характеристики(действие)
//Функция - это действие
function change ($volume, $value){
    $volume+=$value;
    return $volume;
}

// 6. Увеличить значение характеристики еще раз
$volume_stakan = change($volume_stakan, 200);
print_r("\r\n");
print_r('Конечный объем воды после пятого шага ' . $volume_stakan);
