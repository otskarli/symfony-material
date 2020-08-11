<?php
namespace KarliOts\MaterialDesignBundle\Twig\Menu;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\Extension\ExtensionInterface;
use Twig\TwigFunction;

/**
 * Class MenuExtension
 * @package KarliOts\MaterialDesignBundle\Twig\Menu
 * @author karli92ots@hotmail.com
 */
class MenuExtension extends AbstractExtension implements ExtensionInterface
{
    public function getFunctions()
    {
        return [
            new TwigFunction('drawer', [$this, 'drawerMenu'], ['is_safe' => ['html'], 'needs_environment' => true]),
        ];
    }

    public function drawerMenu (Environment $environment) {
        return $environment->render('@MaterialDesign/Templates/menu/drawer.html.twig');
    }
}
