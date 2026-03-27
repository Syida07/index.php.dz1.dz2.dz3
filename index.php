<?php
// 1. ПОИСК И ИНФОРМАЦИЯ
$fruits = ['apple', 'banana', 'orange'];
echo "Count: " . count($fruits) . "\n"; // 3
var_dump(in_array('apple', $fruits));    // true
echo "Search 'banana': " . array_search('banana', $fruits) . "\n"; // 1

$user = ['id' => 1, 'name' => 'Alex'];
var_dump(array_key_exists('name', $user)); // true

// 2. СРАВНЕНИЕ И ФИЛЬТРАЦИЯ
$a = [1, 2, 3]; $b = [2, 3, 4];
print_r(array_diff($a, $b));      // [1] (есть в $a, но нет в $b)
print_r(array_intersect($a, $b)); // [2, 3] (есть в обоих)
print_r(array_unique([1, 2, 2, 3, 1])); // [1, 2, 3]

// 3. ТРАНСФОРМАЦИЯ СТРУКТУРЫ
print_r(array_keys($user));   // ['id', 'name']
print_r(array_values($user)); // [1, 'Alex']
print_r(array_flip(['a' => 1, 'b' => 2])); // [1 => 'a', 2 => 'b']
print_r(array_combine(['x', 'y'], [10, 20])); // ['x' => 10, 'y' => 20]
print_r(array_reverse([1, 2, 3])); // [3, 2, 1]

// 4. ИЗМЕНЕНИЕ СОСТАВА (Стек и Очередь)
$list = [2, 3];
array_push($list, 4);      // [2, 3, 4] (добавить в конец)
array_pop($list);          // [2, 3]    (удалить с конца)
array_unshift($list, 1);   // [1, 2, 3] (добавить в начало)
array_shift($list);        // [2, 3]    (удалить с начала)

// 5. СОРТИРОВКА (меняют исходный массив)
$nums = [3, 1, 2];
sort($nums);  print_r($nums); // [1, 2, 3]
rsort($nums); print_r($nums); // [3, 2, 1]

$ages = ['Ivan' => 25, 'Oleg' => 20];
asort($ages);  print_r($ages); // ['Oleg' => 20, 'Ivan' => 25] (по значению)
arsort($ages); print_r($ages); // ['Ivan' => 25, 'Oleg' => 20] (по значению реверс)

// 6. РАБОТА С ПЕРЕМЕННЫМИ И ВЫБОРКА
$city = 'Moscow'; $pop = 12;
$data = compact('city', 'pop'); // ['city' => 'Moscow', 'pop' => 12]
extract(['name' => 'John', 'age' => 30]); // создаст $name и $age
echo "Extracted: $name, $age\n";

list($first, $second) = [100, 200]; // $first = 100, $second = 200
print_r(array_merge([1, 2], [3, 4])); // [1, 2, 3, 4]
echo "Random key: " . array_rand(['a' => 1, 'b' => 2, 'c' => 3]) . "\n";
?>
