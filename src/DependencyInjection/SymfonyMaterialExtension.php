<?php

namespace KarliOts\SymfonyMaterialBundle\DependencyInjection;

use KarliOts\SymfonyMaterialBundle\Templating\TemplateProvider;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;


/**
 * Class SymfonyMaterialExtension
 * @package KarliOts\SymfonyMaterialBundle\DependencyInjection
 * @author karli92ots@hotmail.com
 */
class SymfonyMaterialExtension extends Extension
{
    /**
     * {@inheritDoc}
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');

        $container->setParameter('symfony_material.form.base_template', TemplateProvider::getTemplateForView(TemplateProvider::TEMPLATE_TWIG_BASE));
    }
}
