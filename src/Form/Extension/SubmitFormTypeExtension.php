<?php

namespace KarliOts\MaterialDesignBundle\Form\Extension;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Class SubmitFormTypeExtension
 * @package KarliOts\Bundle\FebBundle\Form\Extension
 * @author Karli Ots <karli92ots@hotmail.com>
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
