<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller
{
    /**
     * @Route("/mail/{name}", name="mail")
     */
    public function indexAction($name)
    {
        $mailer = $this->get('mailer');
        $message = $mailer->createMessage()
            ->setSubject('You have Completed Registration!')
            ->setFrom('service@lrlrc.com')
            ->setTo('1025615151@qq.com')
            ->setBody(
                $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                    'AppBundle:email:registration.html.twig',
                    array('name' => $name)
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;
        $mailer->send($message);

        return $this->render('AppBundle:test:test.html.twig');
    }
}