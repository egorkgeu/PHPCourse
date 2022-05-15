<?php

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