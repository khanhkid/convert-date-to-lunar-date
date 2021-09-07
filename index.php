<?php 
require_once __DIR__ . '/src/Khanhkid/DateToLunarDate.php'; // Autoload files using Composer autoload

use Khanhkid\DateToLunarDate;


$d = DateToLunarDate::getArrayDateInfo(date('d'), date('m'), date('Y'));
echo '<pre>';
print_r($d);
echo '</pre>';