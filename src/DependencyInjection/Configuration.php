<?php

namespace KarliOts\SymfonyMaterialBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package KarliOts\Bundle\FebBundle\DependencyInjection
 * @author Karli Ots <karli92ots@hotmail.com>
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        return new TreeBuilder('symfony_material');
    }
}
