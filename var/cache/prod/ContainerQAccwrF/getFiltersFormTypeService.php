<?php

namespace ContainerQAccwrF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFiltersFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType();
    }
}
