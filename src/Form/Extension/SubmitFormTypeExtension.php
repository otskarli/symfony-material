<?php

namespace otskarli\MaterialDesignBundle\Form\Extension;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Class SubmitFormTypeExtension
 * @package otskarli\Bundle\FebBundle\Form\Extension
 * @author Karli Ots <karli.ots@helmes.com>
 */
class SubmitFormTypeExtension extends ButtonFormTypeExtension
{

    /**
     * Gets the extended types.
     *
     * @return string[]
     */
    public static function getExtendedTypes(): iterable
    {
        return [SubmitType::class];
    }
}
