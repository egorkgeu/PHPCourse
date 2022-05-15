<?php
require('Stakan.php');
require ('Logger.php');

$stakan = new Stakan(300);
$logger = new Logger();
//$stakan->water_count = 300;
//$stakan->setCheckCount();
//$logger->info('Количество воды в стакане', $stakan->water_count);
//$logger->info('Полон ли стакан', $stakan->check_count);

$logger->info('', $stakan->getVolume());


