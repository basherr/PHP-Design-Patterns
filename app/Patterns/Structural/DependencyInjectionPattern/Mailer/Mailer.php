<?php namespace App\Patterns\Structural\DependencyInjectionPattern\Mailer;

interface Mailer {
    public function connect();
    public function send(MailManager $mailManager);
}