<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.12.2018
 * Time: 13:32
 */

namespace console\models;
use Yii;


class Sender_Employee
{
    public static function run($employees,$salaryList)
    {
        foreach ($employees as $employee) {
            $result = Yii::$app->mailer->compose('/mailer/salaryList', [
                'salaryList' => $salaryList,
            ])

                ->setFrom('testyii2.2018@gmail.com')
                ->setTo($employee['email'])
                //    ->setSubject('Тема сообщения')      убираем за ненадобностью
                ->setSubject("Расчетка")
                ->setHtmlBody("Расчетка: {$employee['fio']} ваша зарплата = {$employee['salary']}")

                ->send();
            var_dump($result);

            $handler = fopen("/var/www/project/frontend/web/log.txt", "a+");
            fwrite($handler, "Расчетка: {$employee['fio']} ваша зарплата = {$employee['salary']}");
            fwrite($handler, "\r\n");
            fclose($handler);


        }
    }

}