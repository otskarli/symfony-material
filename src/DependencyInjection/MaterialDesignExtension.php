<?php
namespace KarliOts\MaterialDesignBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;


/**
 * Class MaterialDesignExtension
 * @package KarliOts\MaterialDesignBundle\DependencyInjection
 * @author karli92ots@hotmail.com
 */
class MaterialDesignExtension extends Extension
{
    /**
     * {@inheritDoc}
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $this->loadServices($configs, $container);
    }

    private function loadServices (array $configs, ContainerBuilder $container) {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        foreach ($config['form'] as $key => $value) {
            $container->setParameter('symfony_material.form.'.$key, $value);
        }
    }
}
