<?php

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class StrictTransportSecurityListener implements EventSubscriberInterface
{
    public function onKernelResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
    }

    public static function getSubscribedEvents()
    {
        return [
            'kernel.response' => 'onKernelResponse',
        ];
    }
}
