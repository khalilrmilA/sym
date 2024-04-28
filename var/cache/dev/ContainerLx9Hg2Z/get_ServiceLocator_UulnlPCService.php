<?php

namespace ContainerLx9Hg2Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UulnlPCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UulnlPC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UulnlPC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ConferenceController::addResponseToReclamation' => ['privates', '.service_locator.MYMgWQW', 'get_ServiceLocator_MYMgWQWService', true],
            'App\\Controller\\ConferenceController::getLatestReclamations' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ConferenceController::getResponsesForReclamation' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ConferenceController::showReclamations' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationController::addReclamation' => ['privates', '.service_locator.MYMgWQW', 'get_ServiceLocator_MYMgWQWService', true],
            'App\\Controller\\ReclamationshController::delete' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationshController::getReclamationDetails' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationshController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationshController::show' => ['privates', '.service_locator.MYMgWQW', 'get_ServiceLocator_MYMgWQWService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ConferenceController:addResponseToReclamation' => ['privates', '.service_locator.MYMgWQW', 'get_ServiceLocator_MYMgWQWService', true],
            'App\\Controller\\ConferenceController:getLatestReclamations' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ConferenceController:getResponsesForReclamation' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ConferenceController:showReclamations' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationController:addReclamation' => ['privates', '.service_locator.MYMgWQW', 'get_ServiceLocator_MYMgWQWService', true],
            'App\\Controller\\ReclamationshController:delete' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationshController:getReclamationDetails' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationshController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationshController:show' => ['privates', '.service_locator.MYMgWQW', 'get_ServiceLocator_MYMgWQWService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ConferenceController::addResponseToReclamation' => '?',
            'App\\Controller\\ConferenceController::getLatestReclamations' => '?',
            'App\\Controller\\ConferenceController::getResponsesForReclamation' => '?',
            'App\\Controller\\ConferenceController::showReclamations' => '?',
            'App\\Controller\\ReclamationController::addReclamation' => '?',
            'App\\Controller\\ReclamationshController::delete' => '?',
            'App\\Controller\\ReclamationshController::getReclamationDetails' => '?',
            'App\\Controller\\ReclamationshController::index' => '?',
            'App\\Controller\\ReclamationshController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ConferenceController:addResponseToReclamation' => '?',
            'App\\Controller\\ConferenceController:getLatestReclamations' => '?',
            'App\\Controller\\ConferenceController:getResponsesForReclamation' => '?',
            'App\\Controller\\ConferenceController:showReclamations' => '?',
            'App\\Controller\\ReclamationController:addReclamation' => '?',
            'App\\Controller\\ReclamationshController:delete' => '?',
            'App\\Controller\\ReclamationshController:getReclamationDetails' => '?',
            'App\\Controller\\ReclamationshController:index' => '?',
            'App\\Controller\\ReclamationshController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
