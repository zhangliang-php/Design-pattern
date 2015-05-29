<?php
namespace FactoryMethod;
include '../init.php';

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

echo '普通的工厂模式' , PHP_EOL;
Test::main();


