<?php

namespace ContainerIgOTDds;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SOWg70Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SOWg_70' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SOWg_70'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evento' => ['privates', '.errored..service_locator.SOWg_70.App\\Entity\\Evento', NULL, 'Cannot autowire service ".service_locator.SOWg_70": it references class "App\\Entity\\Evento" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'evento' => 'App\\Entity\\Evento',
        ]);
    }
}
