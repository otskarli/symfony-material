<?php

namespace KarliOts\SymfonyMaterialBundle\Twig\Menu;

use KarliOts\SymfonyMaterialBundle\Templating\TemplateProvider;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Extension\AbstractExtension;
use Twig\Extension\ExtensionInterface;
use Twig\TwigFunction;

/**
 * Class MenuExtension
 * @package KarliOts\SymfonyMaterialBundle\Twig\Menu
 * @author karli92ots@hotmail.com
 */
class MenuExtension extends AbstractExtension implements ExtensionInterface
{
    /**
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('drawer', [$this, 'drawerMenu'], ['is_safe' => ['html'], 'needs_environment' => true]),
        ];
    }

    /**
     * @param Environment $environment
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function drawerMenu(Environment $environment)
    {
        return $environment->render(TemplateProvider::getTemplateForExtension(TemplateProvider::TEMPLATE_EXTENSION_MENU_DRAWER));
    }
}
