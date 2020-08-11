<?php

namespace KarliOts\MaterialDesignBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class LayoutFormTypeExtension
 * @package KarliOts\Bundle\FebBundle\Form\Extension
 * @author Karli Ots <karli92ots@hotmail.com>
 */
class LayoutFormTypeExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars = array_replace($view->vars, array(
            'filled' => !$options['outlined'],
            'leading_icon' => $options['leading_icon'],
            'trailing_icon' => $options['trailing_icon'],
            'character_count' => $options['character_count']
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'outlined' => true,
            'leading_icon' => false,
            'trailing_icon' => false,
            'character_count' => false
        ));
    }

    /**
     * Gets the extended types.
     *
     * @return string[]
     */
    public static function getExtendedTypes(): iterable
    {
        return [FormType::class];
    }
}
