<?php namespace App\Patterns\Structural\DependencyInjectionPattern\Mailer\Drivers;

use App\Patterns\Structural\DependencyInjectionPattern\Mailer\Mailer;
use App\Patterns\Structural\DependencyInjectionPattern\Mailer\MailManager;

class Sendmail implements Mailer {
    /**
    * make a connection
    *
    * @param void
    * @return string
    */
    public function connect()
    {
        return 'sendmail driver is ready to send e-mails';
    }

    /**
    * sends an email
    *
    * @param void
    * @return void
    */
    public function send(MailManager $manager)
    {
        $recipients = implode(',', $manager->getRecipients());
        return 'Sending email to recipients "' . $recipients . '" using driver sendmail';
    }
}
