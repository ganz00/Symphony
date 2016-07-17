<?php

namespace Heebari\dataBundle\EventListener;

use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RegisterListener implements EventSubscriberInterface
{
private $router;
    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onAuthenticationSuccess',
        );
    }

   
    public function onAuthenticationSuccess(FormEvent $event)
    {
        $url = $this->router->generate('heebaridata_homepage');

        $event->setResponse(new RedirectResponse($url));
    }
    
}