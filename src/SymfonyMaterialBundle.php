<?php
namespace KarliOts\SymfonyMaterialBundle;

use KarliOts\SymfonyMaterialBundle\DependencyInjection\Compiler\FormPass;
use KarliOts\SymfonyMaterialBundle\DependencyInjection\SymfonyMaterialExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class SymfonyMaterialBundle
 * @package KarliOts\SymfonyMaterialBundle
 * @author karli92ots@hotmail.com
 */
class SymfonyMaterialBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new FormPass());
    }
}
