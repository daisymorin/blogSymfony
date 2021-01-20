<?php

namespace ContainerBnMfNaB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NlhDBJjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nlhDBJj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nlhDBJj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\ArticleController::delete' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Admin\\ArticleController::edit' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Admin\\ArticleController::index' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\Admin\\ArticleController::show' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Admin\\CategoryController::changeStatus' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\Admin\\CategoryController::delete' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\Admin\\CategoryController::edit' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\Admin\\CategoryController::index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\Admin\\CategoryController::show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\ArticleController::searchJson' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\DefaultController::home' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\DefaultController::show' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\ArticleController:delete' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Admin\\ArticleController:edit' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Admin\\ArticleController:index' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\Admin\\ArticleController:show' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\Admin\\CategoryController:changeStatus' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\Admin\\CategoryController:delete' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\Admin\\CategoryController:edit' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\Admin\\CategoryController:index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\Admin\\CategoryController:show' => ['privates', '.service_locator.478xwl1', 'get_ServiceLocator_478xwl1Service', true],
            'App\\Controller\\ArticleController:searchJson' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\DefaultController:home' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\DefaultController:show' => ['privates', '.service_locator.ewTmbP1', 'get_ServiceLocator_EwTmbP1Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\ArticleController::delete' => '?',
            'App\\Controller\\Admin\\ArticleController::edit' => '?',
            'App\\Controller\\Admin\\ArticleController::index' => '?',
            'App\\Controller\\Admin\\ArticleController::show' => '?',
            'App\\Controller\\Admin\\CategoryController::changeStatus' => '?',
            'App\\Controller\\Admin\\CategoryController::delete' => '?',
            'App\\Controller\\Admin\\CategoryController::edit' => '?',
            'App\\Controller\\Admin\\CategoryController::index' => '?',
            'App\\Controller\\Admin\\CategoryController::show' => '?',
            'App\\Controller\\ArticleController::searchJson' => '?',
            'App\\Controller\\DefaultController::home' => '?',
            'App\\Controller\\DefaultController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\ArticleController:delete' => '?',
            'App\\Controller\\Admin\\ArticleController:edit' => '?',
            'App\\Controller\\Admin\\ArticleController:index' => '?',
            'App\\Controller\\Admin\\ArticleController:show' => '?',
            'App\\Controller\\Admin\\CategoryController:changeStatus' => '?',
            'App\\Controller\\Admin\\CategoryController:delete' => '?',
            'App\\Controller\\Admin\\CategoryController:edit' => '?',
            'App\\Controller\\Admin\\CategoryController:index' => '?',
            'App\\Controller\\Admin\\CategoryController:show' => '?',
            'App\\Controller\\ArticleController:searchJson' => '?',
            'App\\Controller\\DefaultController:home' => '?',
            'App\\Controller\\DefaultController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
