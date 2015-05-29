<?php
namespace FactoryMethod;

/**
 * Class MailSender
 * @package FactoryMethod
 */
class MailSender implements  ISender
{
    /**
     * send a mail
     */
    public function send()
    {
        echo 'send a mail ' , PHP_EOL;
    }

}