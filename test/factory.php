<?php
include '../bootstrap.php';
use FactoryMethod\SendFactory;

class Test
{
    public static function main()
    {
        $factory = new SendFactory();
        $smsSender = $factory->produce('sms');
        $smsSender->send();
        $mailSender = $factory->produce('mail');
        $mailSender->send();
    }
}

Test::main();
