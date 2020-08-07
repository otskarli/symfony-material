<?php

namespace otskarli\MaterialDesignBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\NodeInterface;

/**
 * Class Configuration
 * @package otskarli\Bundle\FebBundle\DependencyInjection
 * @author Karli Ots <karli.ots@helmes.ee>
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
                        ->enumNode('layout')
                            ->info('Default form layout')
                            ->values(['inline', 'horizontal', null])
                            ->defaultValue('horizontal')
                        ->end()
                        ->scalarNode('horizontal_input_wrapper_class')
                            ->defaultValue("col-9")
                        ->end()
                    ->end()
                ->end()
            ->end();
    }
}
