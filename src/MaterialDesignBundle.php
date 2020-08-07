<?php
namespace KarliOts\MaterialDesignBundle;

use KarliOts\MaterialDesignBundle\DependencyInjection\Compiler\FormPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MaterialBundle
 * @package KarliOts\MaterialDesignBundle
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
