<?php
//Задание: Циклы, ветвления и логические структуры в PHP
//Решения задач прикрепите ссылкой на файл .php, размещенный на GitHub/Pastebin
//Задание 1: Определение четности чисел
//Инструкция:
//Создайте массив из 5 чисел. Используя цикл foreach и условные операторы ( if-else ),
//проверьте, является ли каждое число четным или нечетным, и выведите соответствующее
//сообщение.
//Подсказка:
//Четные числа можно найти с помощью операции взятия остатка от деления ( % ). Если
//число делится на 2 без остатка, оно четное.
//Пример:
//Число 10 — четное
//Число 15 — нечетное
$array = [1,2,3,4,5];
foreach ($array as $number) {
    if ($number % 2 == 0) {
        echo "Число $number — четное\n";
    } else {
        echo "Число $number — нечетное\n";
    }
//Задание 2: Подсчет положительных и отрицательных чисел
//Инструкция:
//Создайте массив из 7 чисел, содержащий как положительные, так и отрицательные
//значения. С помощью цикла foreach и ветвления ( if-else ) подсчитайте, сколько в
//массиве положительных и отрицательных чисел.
//Подсказка:
//Используйте условие if ($число > 0) для проверки положительных чисел и else для
//отрицательных.
//Пример вывода:
//Положительных чисел: 4
//Отрицательных чисел: 3
$array = [1, -2, 3, -4, 5, -6, 7];
$positiveCount = 0;
$negativeCount = 0;
foreach ($array as $number) {
    if ($number > 0) {
        $positiveCount++;
    } else {
        $negativeCount++;
    }
}


//Задание 3: Таблица умножения
//Инструкция:
//Используя цикл for , выведите таблицу умножения для числа 5 от 1 до 10. Каждый
//результат должен выводиться на новой строке в формате: "5 * 1 = 5" .
//Подсказка:
//Цикл for может выглядеть так:
//for ($i = 1; $i <= 10; $i++) {
//echo "5 * $i = " . (5 * $i) . "<br>";
//}
//Пример:
//5 * 1 = 5
//5 * 2 = 10...
//5 * 10 = 50
for ($i = 1; $i <= 10; $i++) {
    echo "5 * $i = ". (5 * $i). "\n";
}

//Задание 4: Условное отображение оценок студентов
//Инструкция:
//Создайте массив с именами 3 студентов и их оценками за экзамен (например: ["Иван" =>
//85, "Мария" => 74, "Алексей" => 90] ). Используя цикл foreach и ветвления ( if-else ),
//напишите логику, которая определяет, сдал ли каждый студент экзамен:
//Если оценка 50 и выше — вывести: "<Имя студента> сдал экзамен!" .
//Если оценка ниже 50 — вывести: "<Имя студента> не сдал экзамен!" .
//Подсказка:
//Используйте массив вида ["Имя" => оценка] и цикл foreach ($students as $name =>
//$score) , чтобы обрабатывать каждого студента по отдельности.
//Пример:
//Иван сдал экзамен!
//Мария не сдала экзамен!
//Алексей сдал экзамен!
$students = ["Иван" => 85, "Мария" => 74, "Алексей" => 90];
foreach ($students as $name => $score) {
    if ($score >= 50) {
        echo "$name сдал экзамен!\n";
    } else {
        echo "$name не сдал экзамен!\n";
    }
}

//Задание 5: Поиск минимального и максимального значений
//Инструкция:
//Создайте массив из 8 случайных чисел. Используя цикл foreach , найдите и выведите
//минимальное и максимальное значения в массиве.
//Подсказка:
//Создайте две переменные $min и $max , установив их начальные значения на первое
//число массива. Затем обновляйте эти переменные в зависимости от того, какое число из
//массива меньше или больше текущих значений.
//Пример вывода:
//Минимальное число: 3
//Максимальное число: 98
$array = [45, 12, 78, 98, 23, 56, 3, 89];
$min = $array[0];
$max = $array[0];
foreach ($array as $number) {
    if ($number < $min) {
        $min = $number;
    }
    if ($number > $max) {
        $max = $number;
    }
}




?>