<?php

echo date("j/n/y");

echo "<br>";

echo date("l, j F Y");
echo "<br>";

echo time();
// 19 januari 1970 waktu ditemukannya komputer

echo "<br>";
echo date("l", time() + 60 * 60 * 24 * 100);

echo "<br>";

echo mktime(0, 0, 0, 2, 27, 2024);