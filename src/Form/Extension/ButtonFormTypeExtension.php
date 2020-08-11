<?php

namespace KarliOts\MaterialDesignBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class ButtonFormTypeExtension
 * @package KarliOts\Bundle\FebBundle\Form\Extension
 * @author Karli Ots <karli92ots@hotmail.com>
 */
class ButtonFormTypeExtension extends AbstractTypeExtension
{

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars = array_replace($view->vars, array(
            'leading_icon' => $options['leading_icon'],
            'trailing_icon' => $options['trailing_icon'],
            'outlined' => $options['outlined'],
            'raised' => $options['raised'],
            'unelevated' => $options['unelevated'],
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'leading_icon' => false,
            'trailing_icon' => false,
            'outlined' => false,
            'raised' => false,
            'unelevated' => false,
        ));
    }

    /**
     * Gets the extended types.
     *
     * @return string[]
     */
    public static function getExtendedTypes(): iterable
    {
        return [ButtonType::class];
    }
}
