<?php
namespace KarliOts\SymfonyMaterialBundle\Templating;

/**
 * Class TemplateProvider
 * @package KarliOts\SymfonyMaterialBundle\Templating
 * @author karli92ots@hotmail.com
 */
class TemplateProvider
{
    const TEMPLATE_TWIG_BASE = 'twig-base';

    const TEMPLATE_VIEW_BASE = 'base';

    const TEMPLATE_EXTENSION_MENU_DRAWER = 'menu-drawer';

    private static $viewTemplates = [
        self::TEMPLATE_TWIG_BASE => "@SymfonyMaterial/Form/fields.html.twig",
        self::TEMPLATE_VIEW_BASE => "@SymfonyMaterial/Templates/base/index.html.twig"
    ];

    private static $extensionTemplates = [
        self::TEMPLATE_EXTENSION_MENU_DRAWER => "@SymfonyMaterial/Templates/menu/drawer.html.twig"
    ];

    public static function getTemplateForView (string $templateCode) {
        return self::$viewTemplates[$templateCode];
    }

    public static function getTemplateForExtension (string $templateCode) {
        return self::$extensionTemplates[$templateCode];
    }
}
