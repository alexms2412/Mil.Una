<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container24eWKRp/getWebProfiler_Controller_RouterService.php
namespace Container24eWKRp;
=======
<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container2x9EUrJ/getWebProfiler_Controller_RouterService.php
namespace Container2x9EUrJ;
>>>>>>> 35d8e8d6c43cb91c2da1943efcc35b099aaf3e45
=======
=======
<<<<<<<< HEAD:Aplicación/APP-ADMIN/var/cache/dev/Container1VyNrWM/getWebProfiler_Controller_RouterService.php
namespace Container1VyNrWM;
========
<<<<<<< HEAD
>>>>>>> 477da2d03e5a4f1bb6508b77c2aa473ff27ca652
=======
>>>>>>> cebea07cd9427ec42e23db05512f7a6a976d3b7f
>>>>>>> 35d8e8d6c43cb91c2da1943efcc35b099aaf3e45
namespace ContainerRPzqUxu;
>>>>>>> c3c3798b07e811dc68b12039783577c1443ac405:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getWebProfiler_Controller_RouterService.php

>>>>>>>> main:Aplicación/APP-ADMIN/var/cache/dev/ContainerRPzqUxu/getWebProfiler_Controller_RouterService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebProfiler_Controller_RouterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'RouterController.php';

        return $container->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($container->services['.container.private.profiler'] ?? $container->get_Container_Private_ProfilerService()), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['router'] ?? $container->getRouterService()), NULL, new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['router.expression_language_provider'] ?? $container->getRouter_ExpressionLanguageProviderService());
        }, 1));
    }
}
