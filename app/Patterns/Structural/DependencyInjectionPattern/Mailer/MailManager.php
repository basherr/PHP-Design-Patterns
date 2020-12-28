<?php namespace App\Patterns\Structural\DependencyInjectionPattern\Mailer;

class MailManager
{
    /**
     * to recipients
     */
    protected $toRecipients = [];
    
    /**
     * cc recipients
     */
    protected $ccRecipients = [];

    /**
     * instance of the mailer
     */
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
    * sends email
    *
    * @param void
    * @return string
    */
    public function send(): string
    {
        $this->mailer->connect();
        return $this->mailer->send($this);
    }

    /**
    * sets 'to' recipients for the email
    *
    * @param array $recipients
    * @return void
    */
    public function to(array $recipients): void
    {
        $this->toRecipients = $recipients;
    }

    /**
    * sets 'cc' recipients for the email
    *
    * @param array $recipients
    * @return void
    */
    public function cc(array $recipients): void
    {
        $this->ccRecipients = $recipients;
    }

    /**
    * get all the recipients
    *
    * @param void
    * @return array
    */
    public function getRecipients(): array
    {
        return array_merge($this->toRecipients, $this->ccRecipients);
    }
}
