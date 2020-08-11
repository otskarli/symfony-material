<?php

namespace KarliOts\MaterialDesignBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\NodeInterface;

/**
 * Class Configuration
 * @package KarliOts\Bundle\FebBundle\DependencyInjection
 * @author Karli Ots <karli92ots@hotmail.com>
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('symfony_material');
        $this->addFormConfig($treeBuilder->getRootNode());
        return $treeBuilder;
    }

    protected function addFormConfig(ArrayNodeDefinition $rootNode)
    {
        $rootNode
            ->children()
                ->arrayNode('form')
                    ->children()
                        ->scalarNode('base_template')
                            ->defaultValue("@MaterialDesign/Form/fields.html.twig")
                        ->end()
                    ->end()
                ->end()
            ->end();
    }
}
