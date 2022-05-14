<?php

require ('Stakan.php');
require ('Logger.php');

$stakan = new Stakan(300);
$logger = new Logger();
$stakan->change(300);
$logger->info('Объем стакана ' , $stakan->volume_stakan);
$logger->info('Количество воды в стакане ' , $stakan->water_count);
$logger->info('Check ', $stakan->check_count);
$stakan->change(300);
$logger->info('Check ', $stakan->check_count);
$logger->info('Количество воды в стакане увеличилось на ', $stakan->water_count);
