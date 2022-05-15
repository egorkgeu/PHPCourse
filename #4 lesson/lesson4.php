<?php
require ('Stakan.php');
require ('Logger.php');
require ('WaterRepository.php');

$stakan = new Stakan(300);
$logger = new Logger();
//$stakan->water_count = 300;
//$stakan->setCheckCount();
//$logger->info('Количество воды в стакане', $stakan->water_count);
//$logger->info('Полон ли стакан', $stakan->check_count);

//$logger->info('', $stakan->getVolume());
$stakan->change(300);

$waterRepository = new WaterRepository(1000);
$waterCount = $waterRepository->give(1200);
$logger->info('Количество воды', $waterCount);

