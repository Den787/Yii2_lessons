<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.12.2018
 * Time: 14:41
 */

namespace console\models;
use Yii;


class Sender
{
    public static function run($subscribers, $newsList)
    {
        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose( '/mailer/newsList', [
                'newsList' => $newsList,
                ])
                ->setFrom('testyii2.2018@gmail.com')
                ->setTo($subscribers['email'])
            //    ->setSubject('Тема сообщения')      убираем за ненадобностью
            //    ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();

            var_dump($result);

        }
    }
}