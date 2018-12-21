<?php

namespace console\controllers;

use console\models\Employee;
use console\models\Salary;
use console\models\Sender_Employee;
use Yii;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
use yii\helpers\Console;



class MailerController extends \yii\console\Controller
{
    public function actionSend()
    {
       $subscribers = Subscriber::getList();
        $newsList = News::getList();
      //  $result = Sender::run($subscribers, $newsList); просто без подсчета который ниже
        $count = Sender::run($subscribers, $newsList);
        Console::output("\nEmails sent: ($count)");


    }

    public function actionSendEmployee()
    {
       // $list = Employee::getList();
       // print_r($list);
       $today = Yii::$app->formatter->asDatetime('now','YYYY.MM.dd HH:mm:ss');
        $handler = fopen("/var/www/project/frontend/web/log.txt", "a+");
        fwrite($handler, $today);
        fwrite($handler, "\r\n");
        fclose($handler);

        $employees = Employee::getList();
        $salaryList = Salary::getList();
        $count = Sender_Employee::run($employees, $salaryList);




    }

    public function actionTest()
    {
        echo 'Test';
        die;
    }

    public function actionTime()
    {

       // $today = date("y.m.d H:i:s");
       $today = Yii::$app->formatter->asDatetime('now','YYYY.MM.dd HH:mm:ss');
        $handler = fopen("/var/www/project/frontend/web/log.txt", "a+");
        fwrite($handler, $today);
        fwrite($handler, "\r\n");
        fclose($handler);
        die;
    }

}


