<?php
namespace FactoryMethod;

/**
 * Class SendFactory
 * @package FactoryMethod
 */
class SendFactory
{
    /**
     * @param $type
     * @return MailSender|SmsSender
     * @throws \ErrorException
     */
    public function produce($type)
    {
        if ($type == 'sms') {
            return new SmsSender();
        } elseif ($type == 'mail') {
            return new MailSender();
        } else {
            throw new \ErrorException('请选择正确的类型!');
        }

    }

}