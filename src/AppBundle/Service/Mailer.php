<?php
namespace AppBundle\Service;

/**
 * Class Mailer
 * @package AppBundle\Service
 */
class Mailer
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var Modèle du mail
     */
    private $templating;


    /**
     * Mailer constructor.
     * @param \Swift_Mailer $mailer
     * @param \Twig_Environment $templating
     */
    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;

    }

     /**
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function EmailConfirmation($emailFrom,$email)
    {
        $body = $this->templating->render('email/registration_confirmation.html.twig');

        $message = (new \Swift_Message('Confirmation de création de compte'))
            ->setFrom($emailFrom)   //Renseigner l'adresse mail de la FTA
            ->setTo($email)   //Renseigner l'adresse mail de la FTA
            ->setBody($body, 'text/html');

        $this->mailer->send($message);
    }


}