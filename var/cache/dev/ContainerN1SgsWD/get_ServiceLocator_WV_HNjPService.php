<?php

namespace ContainerN1SgsWD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WV_HNjPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WV.hNjP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WV.hNjP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationController::index' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\ReclamationshController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ReeclamationCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationController:index' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\ReclamationshController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::delete' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::detail' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::edit' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::index' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::new' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController::updateEntity' => '?',
            'App\\Controller\\ReclamationController::index' => '?',
            'App\\Controller\\ReclamationshController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:delete' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:detail' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:edit' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:index' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:new' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ReeclamationCrudController:updateEntity' => '?',
            'App\\Controller\\ReclamationController:index' => '?',
            'App\\Controller\\ReclamationshController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
