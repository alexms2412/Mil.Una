<?php

namespace ContainerHqPUZCG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MNG5ObCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MNG5ObC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MNG5ObC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'empleo' => ['privates', '.errored..service_locator.MNG5ObC.App\\Entity\\Empleo', NULL, 'Cannot autowire service ".service_locator.MNG5ObC": it references class "App\\Entity\\Empleo" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'empleo' => 'App\\Entity\\Empleo',
            'entityManager' => '?',
        ]);
    }
}
