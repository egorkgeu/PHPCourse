<?php
include ("Stakan.php");

// 7. Добавили новую характеристику
$volume_stakan = 0;
$water_count = 200;

$water_count = change($volume_stakan, $water_count);
logChange($water_count);

// 8. Характеристики и действия никак не связаны
$a = 2;
$b = 5;

$a = change($a, $b);
logChange($a);

// 9. Классы

Class Stakan {
    public int $volume = 0;

    function __construct($volume)
    {
        $this->volume = $volume;
    }

    public function change($volume)
    {
        $this->volume+=$volume;
    }
}

$stakan = new Stakan(200);
//var_dump($stakan); // Выведет расширенную информацию
//print_r("\r\n");
//print_r($stakan);

$stakan->change($water_count);
logChange($water_count);

// 10. Сущность Logger(Информатор);

Class Logger{
    private mixed $value;
    private string $message;

    function __construct(
    ){}

    public function info($message, $params)
    {
        print_r($message . " " . $params . "\r\n");
    }
}

$logger = new Logger();

$stakan2 = new Stakan(300);

$stakan2->change($water_count);
$logger->info('Количество воды изменилось на', $water_count);
$logger->info('Количество воды в стакане ', $stakan2->volume);



