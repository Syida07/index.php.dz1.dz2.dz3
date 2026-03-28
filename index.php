<?php
echo "<h1>Демонстрация функций PHP: Сайдинова Сыйда, ИСТ(б)-2-24</h1>";

echo "<b>1. count — Количество предметов у Сыйды:</b><br>";
$subjects = ["Программирование", "Математика", "Физика"];
echo count($subjects) . "<br><br>";

echo "<b>2. array_push — Добавление навыка в конец:</b><br>";
$skills = ["HTML", "CSS"];
array_push($skills, "PHP");
print_r($skills); echo "<br><br>";

echo "<b>3. array_pop — Удаление последнего элемента:</b><br>";
array_pop($skills);
print_r($skills); echo "<br><br>";

echo "<b>4. array_unshift — Добавление в начало списка:</b><br>";
array_unshift($subjects, "История");
print_r($subjects); echo "<br><br>";

echo "<b>5. array_shift — Удаление первого элемента:</b><br>";
array_shift($subjects);
print_r($subjects); echo "<br><br>";

echo "<b>6. array_diff — Разница (задания, которые Сыйда еще не сделала):</b><br>";
$all = [1, 2, 3, 4, 5]; $done = [1, 2, 4];
print_r(array_diff($all, $done)); echo "<br><br>";

echo "<b>7. array_intersect — Пересечение (общие элементы):</b><br>";
print_r(array_intersect($all, $done)); echo "<br><br>";

echo "<b>8. array_key_exists — Проверка ключа 'группа':</b><br>";
$info = ["имя" => "Сыйда", "группа" => "ИСТ(б)-2-24"];
echo (array_key_exists("группа", $info) ? "Есть" : "Нет") . "<br><br>";

echo "<b>9. array_keys — Все ключи профиля:</b><br>";
print_r(array_keys($info)); echo "<br><br>";

echo "<b>10. array_values — Все значения профиля:</b><br>";
print_r(array_values($info)); echo "<br><br>";

echo "<b>11. array_merge — Слияние данных:</b><br>";
print_r(array_merge(["Сайдинова"], ["Сыйда"])); echo "<br><br>";

echo "<b>12. array_rand — Случайный предмет для Сыйды:</b><br>";
echo $subjects[array_rand($subjects)] . "<br><br>";

echo "<b>13. array_reverse — Массив наоборот:</b><br>";
print_r(array_reverse($subjects)); echo "<br><br>";

echo "<b>14. compact — Создание массива из переменных:</b><br>";
$name = "Сыйда"; $group = "ИСТ(б)-2-24";
print_r(compact("name", "group")); echo "<br><br>";

echo "<b>15. extract — Извлечение переменных из массива:</b><br>";
$data = ["topic" => "Массивы", "lab" => 1];
extract($data);
echo "Тема: $topic, Лаб: $lab <br><br>";

echo "<b>16. sort — Сортировка по возрастанию:</b><br>";
$nums = [5, 1, 4]; sort($nums);
print_r($nums); echo "<br><br>";

echo "<b>17. rsort — Сортировка по убыванию:</b><br>";
rsort($nums);
print_r($nums); echo "<br><br>";

echo "<b>18. asort — Ассоциативная сортировка (по значению):</b><br>";
$marks = ["Сыйда" => 5, "Иван" => 4]; asort($marks);
print_r($marks); echo "<br><br>";

echo "<b>19. arsort — Обратная ассоциативная сортировка:</b><br>";
arsort($marks);
print_r($marks); echo "<br><br>";

echo "<b>20. array_combine — Создание массива Ключ + Значение:</b><br>";
print_r(array_combine(["Key1", "Key2"], ["Val1", "Val2"])); echo "<br><br>";

echo "<b>21. array_search — Поиск индекса значения 'Сыйда':</b><br>";
echo array_search("Сыйда", ["Аня", "Сыйда", "Олег"]) . "<br><br>";

echo "<b>22. array_unique — Удаление дубликатов:</b><br>";
print_r(array_unique([1, 1, 2, 2, 3])); echo "<br><br>";

echo "<b>23. array_flip — Поменять ключи и значения местами:</b><br>";
print_r(array_flip($info)); echo "<br><br>";

echo "<b>24. in_array — Есть ли Сыйда в списке:</b><br>";
echo (in_array("Сыйда", ["Сыйда", "Максим"]) ? "Да" : "Нет") . "<br><br>";

echo "<b>25. list — Присвоение переменных из списка:</b><br>";
list($a, $b) = ["ИСТ", "2026"];
echo "$a - $b <br><br>";
?>
