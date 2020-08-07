<?php
namespace otskarli\MaterialDesignBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class MaterialDesignExtension
 * @package otskarli\MaterialDesignBundle\DependencyInjection
 * @author karli.ots@helmes.com
 */
class MaterialDesignExtension extends Extension
{
    /**
     * {@inheritDoc}
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        if (isset($config['form'])) {
            $loader->load('form.xml');

            foreach ($config['form'] as $key => $value) {
                if (is_array($value)) {
                    $this->remapParameters($container, 'symfony_material.form.'.$key, $config['form'][$key]);
                } else {
                    $container->setParameter(
                        'symfony_material.form.'.$key,
                        $value
                    );
                }
            }
        }
    }

    /**
     * Remap parameters.
     *
     * @param ContainerBuilder $container
     * @param string           $prefix
     * @param array            $config
     */
    private function remapParameters(ContainerBuilder $container, $prefix, array $config)
    {
        foreach ($config as $key => $value) {
            $container->setParameter(sprintf('%s.%s', $prefix, $key), $value);
        }
    }
}
