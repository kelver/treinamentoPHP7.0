<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01:23
 */

interface Logger
{
    public function log(string $msg);
}

class App
{
    private $logger;

    public function getLogger():Logger
    {
        return $this->logger;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }
}

$app = new App;
$app->setLogger(new class implements Logger{
   public function log(string $msg)
   {
       echo $msg;
   }
});

var_dump($app->getLogger());