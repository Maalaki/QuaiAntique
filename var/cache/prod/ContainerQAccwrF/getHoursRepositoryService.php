<?php

namespace ContainerQAccwrF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHoursRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\HoursRepository' shared autowired service.
     *
     * @return \App\Repository\HoursRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\HoursRepository'] = new \App\Repository\HoursRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
