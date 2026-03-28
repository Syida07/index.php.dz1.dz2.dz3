<?php

echo mb_strlen("Привет");

echo mb_strpos("Сайдинова Сайдинова", "Сыйда");

echo mb_strtolower("ПРИВЕТ"); 

echo mb_strtoupper("привет"); 

echo mb_substr("Программирование", 0, 4); 

echo htmlspecialchars("<a href='#'>Сыйда</a>"); 

echo htmlspecialchars_decode("&lt;b&gt;Сыйда&lt;/b&gt;");

echo htmlentities("Обычный текст & 'кавычки'"); 

?>
