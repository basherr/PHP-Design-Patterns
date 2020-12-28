<?php

use PHPUnit\Framework\TestCase;
use App\Patterns\Structural\DependencyInjectionPattern\Mailer\Drivers\Sendmail;
use App\Patterns\Structural\DependencyInjectionPattern\Mailer\MailManager;


class MailerDependencyInjectionTest extends TestCase {
    /**
    * sends email via sendmail driver
    *
    * @param void
    * @return void
    */
    public function testShouldSendEmailViaSendmailDriver()
    {
        $driver = new Sendmail;
        $manager = new MailManager($driver);
        $manager->to(['foo@foo.com']);
        $manager->cc(['biz@biz.com']);
        $response = $manager->send();

        $this->assertStringContainsString('Sending email to recipients "foo@foo.com,biz@biz.com"', $response);
    }
}