<?php

<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/ContainerJIzCNpd/getApiEmpleoControllerService.php
namespace ContainerJIzCNpd;
========
namespace ContainerIgOTDds;

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerIgOTDds/getApiEmpleoControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiEmpleoControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiEmpleoController' shared autowired service.
     *
     * @return \App\Controller\ApiEmpleoController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ApiEmpleoController.php';

        $container->services['App\\Controller\\ApiEmpleoController'] = $instance = new \App\Controller\ApiEmpleoController(($container->privates['App\\Repository\\EmpleoRepository'] ?? $container->load('getEmpleoRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\ApiEmpleoController', $container));

        return $instance;
    }
}
