<?php
namespace otskarli\MaterialDesignBundle;

use otskarli\MaterialDesignBundle\DependencyInjection\Compiler\FormPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MaterialBundle
 * @package otskarli\MaterialDesignBundle
 * @author karli.ots@helmes.com
 */
class MaterialDesignBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new FormPass());
    }
}
