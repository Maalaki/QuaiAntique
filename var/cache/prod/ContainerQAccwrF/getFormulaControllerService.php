<?php

namespace ContainerQAccwrF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormulaControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\FormulaController' shared autowired service.
     *
     * @return \App\Controller\FormulaController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\FormulaController'] = $instance = new \App\Controller\FormulaController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\FormulaController', $container));

        return $instance;
    }
}
