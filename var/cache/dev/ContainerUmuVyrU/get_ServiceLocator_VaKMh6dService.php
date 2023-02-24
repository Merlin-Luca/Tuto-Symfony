<?php

namespace ContainerUmuVyrU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VaKMh6dService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VaKMh6d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VaKMh6d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArticleController::delete' => ['privates', '.service_locator.tOLlTpj', 'get_ServiceLocator_TOLlTpjService', true],
            'App\\Controller\\ArticleController::edit' => ['privates', '.service_locator.tOLlTpj', 'get_ServiceLocator_TOLlTpjService', true],
            'App\\Controller\\ArticleController::index' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController::new' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.XqCCpgA', 'get_ServiceLocator_XqCCpgAService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\TodoController::delete' => ['privates', '.service_locator.7JuiTMI', 'get_ServiceLocator_7JuiTMIService', true],
            'App\\Controller\\TodoController::edit' => ['privates', '.service_locator.7JuiTMI', 'get_ServiceLocator_7JuiTMIService', true],
            'App\\Controller\\TodoController::index' => ['privates', '.service_locator.GQxnA83', 'get_ServiceLocator_GQxnA83Service', true],
            'App\\Controller\\TodoController::new' => ['privates', '.service_locator.GQxnA83', 'get_ServiceLocator_GQxnA83Service', true],
            'App\\Controller\\TodoController::show' => ['privates', '.service_locator.IWR2fbh', 'get_ServiceLocator_IWR2fbhService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ArticleController:delete' => ['privates', '.service_locator.tOLlTpj', 'get_ServiceLocator_TOLlTpjService', true],
            'App\\Controller\\ArticleController:edit' => ['privates', '.service_locator.tOLlTpj', 'get_ServiceLocator_TOLlTpjService', true],
            'App\\Controller\\ArticleController:index' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController:new' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.XqCCpgA', 'get_ServiceLocator_XqCCpgAService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.1Z9fEX7', 'get_ServiceLocator_1Z9fEX7Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\TodoController:delete' => ['privates', '.service_locator.7JuiTMI', 'get_ServiceLocator_7JuiTMIService', true],
            'App\\Controller\\TodoController:edit' => ['privates', '.service_locator.7JuiTMI', 'get_ServiceLocator_7JuiTMIService', true],
            'App\\Controller\\TodoController:index' => ['privates', '.service_locator.GQxnA83', 'get_ServiceLocator_GQxnA83Service', true],
            'App\\Controller\\TodoController:new' => ['privates', '.service_locator.GQxnA83', 'get_ServiceLocator_GQxnA83Service', true],
            'App\\Controller\\TodoController:show' => ['privates', '.service_locator.IWR2fbh', 'get_ServiceLocator_IWR2fbhService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ArticleController::delete' => '?',
            'App\\Controller\\ArticleController::edit' => '?',
            'App\\Controller\\ArticleController::index' => '?',
            'App\\Controller\\ArticleController::new' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TodoController::delete' => '?',
            'App\\Controller\\TodoController::edit' => '?',
            'App\\Controller\\TodoController::index' => '?',
            'App\\Controller\\TodoController::new' => '?',
            'App\\Controller\\TodoController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ArticleController:delete' => '?',
            'App\\Controller\\ArticleController:edit' => '?',
            'App\\Controller\\ArticleController:index' => '?',
            'App\\Controller\\ArticleController:new' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TodoController:delete' => '?',
            'App\\Controller\\TodoController:edit' => '?',
            'App\\Controller\\TodoController:index' => '?',
            'App\\Controller\\TodoController:new' => '?',
            'App\\Controller\\TodoController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
