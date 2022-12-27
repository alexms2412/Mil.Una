<?php

namespace ContainerAUEwEoj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BFO3KOYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BFO3KOY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BFO3KOY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contenido' => ['privates', '.errored..service_locator.BFO3KOY.App\\Entity\\Contenido', NULL, 'Cannot autowire service ".service_locator.BFO3KOY": it references class "App\\Entity\\Contenido" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'contenido' => 'App\\Entity\\Contenido',
            'entityManager' => '?',
        ]);
    }
}
