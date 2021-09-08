<?php

use Khanhkid\EnglishDate;
use Khanhkid\LunarConverter;

require_once __DIR__ . '/../src/Khanhkid/LunarConverter.php'; // Autoload files using Composer autoload


$englishDate = new EnglishDate();
$englishDate->EYear = date('Y');
$englishDate->EMonth = date('m');
$englishDate->EDay = date('d');
$lunarDate = LunarConverter::EnglishDateToLunarDate($englishDate);

var_dump($englishDate);
var_dump($lunarDate->getDate());
$englishDate = LunarConverter::LunarDateToEnglishDate($lunarDate);
var_dump($englishDate);
var_dump($lunarDate->getDate());
