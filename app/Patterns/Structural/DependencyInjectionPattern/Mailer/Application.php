<?php namespace App\Patterns\Structural\DependencyInjectionPattern\Mailer;

use App\Patterns\Structural\DependencyInjectionPattern\Mailer\Drivers\Sendmail;

class Application
{
  public function run()
  {
    $driver = new Sendmail;
    $manager = new MailManager($driver);
    $manager->to(['foo@foo.com']);
    $manager->cc(['biz@biz.com']);
    echo $manager->send();
  }
}