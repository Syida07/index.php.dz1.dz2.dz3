<?php

echo mb_strlen("Привет");

echo mb_strpos("Я люблю PHP", "PHP");

echo mb_strtolower("ПРИВЕТ"); 

echo mb_strtoupper("привет"); 

echo mb_substr("Программирование", 0, 4); 

echo htmlspecialchars("<a href='#'>Syida</a>"); 

echo htmlspecialchars_decode("&lt;b&gt;Привет&lt;/b&gt;");

echo htmlentities("Обычный текст & 'кавычки'"); 

?>
