<?php

<<<<<<< HEAD
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container2x9EUrJ/getMessenger_ReceiverLocatorService.php
namespace Container2x9EUrJ;
=======
=======
<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container1VyNrWM/getMessenger_ReceiverLocatorService.php
namespace Container1VyNrWM;
========
>>>>>>> cebea07cd9427ec42e23db05512f7a6a976d3b7f
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getMessenger_ReceiverLocatorService.php

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getMessenger_ReceiverLocatorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_ReceiverLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.receiver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
            'messenger.transport.async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
            'messenger.transport.failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
        ], [
            'async' => '?',
            'failed' => '?',
            'messenger.transport.async' => '?',
            'messenger.transport.failed' => '?',
        ]);
    }
}
