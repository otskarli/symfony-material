<?php

namespace KarliOts\SymfonyMaterialBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Karli Ots <karli92ots@hotmail.com>
 */
class FormPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->hasParameter('symfony_material.form.base_template') && false !== ($template = $container->getParameter('symfony_material.form.base_template'))) {
            $resources = $container->getParameter('twig.form.resources');
            if (!in_array($template, $resources)) {
                if (false !== ($key = array_search('form_div_layout.html.twig', $resources))) {
                    array_splice($resources, ++$key, 0, $template);
                } else {
                    array_unshift($resources, $template);
                }
                $container->setParameter('twig.form.resources', $resources);
            }
        }
    }
}
