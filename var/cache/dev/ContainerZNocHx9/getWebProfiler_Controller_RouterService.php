<?php

namespace ContainerZNocHx9;

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

        return $container->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($container->services['.container.private.profiler'] ?? $container->get_Container_Private_ProfilerService()), ($container->privates['twig'] ?? $container->getTwigService()), ($container->services['router'] ?? $container->getRouterService()), NULL, new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['router.expression_language_provider'] ?? $container->getRouter_ExpressionLanguageProviderService());
        }, 1));
    }
}
