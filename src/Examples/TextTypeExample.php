<?php

namespace KarliOts\SymfonyMaterialBundle\Examples;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TextTypeExample extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('input', TextType::class, [
                'label' => 'Filled required empty input',
                'outlined' => false,
            ])
            ->add('input0', TextType::class, [
                'label' => 'Filled input',
                'outlined' => false,
                'data' => 'Filled input with label'
            ])
            ->add('input1', TextType::class, [
                'label' => false,
                'outlined' => false,
                'data' => 'Filled input without label'
            ])
            ->add('input2', TextType::class, [
                'label' => false,
                'outlined' => false,
                'disabled' => true,
                'data' => 'Filled disabled input'
            ])
            ->add('input3', TextType::class, [
                'label' => 'Filled input with character count',
                'data' => 'Will be filled',
                'outlined' => false,
                'character_count' => true,
                'attr' => [
                    'maxLength' => 55,
                ],
            ])
            ->add('input31', TextType::class, [
                'label' => 'Filled required empty input with helptext',
                'help' => 'Will be filled',
                'outlined' => false,
            ])
            ->add('leadingIcon0', TextType::class, [
                'label' => 'Filled input with leading icon',
                'leading_icon' => 'visibility',
                'outlined' => false
            ])
            ->add('trailingIcon0', TextType::class, [
                'label' => 'Filled input with leading icon',
                'trailing_icon' => 'visibility',
                'outlined' => false
            ])
            ->add('leadingTrailingIcon0', TextType::class, [
                'label' => 'Filled input with leading and trailing icon',
                'trailing_icon' => 'visibility',
                'leading_icon' => 'visibility',
                'outlined' => false
            ])
            ->add('leadingTrailingIconCharCount0', TextType::class, [
                'label' => 'Filled input with leading and trailing icon and character count and help text',
                'trailing_icon' => 'visibility',
                'leading_icon' => 'visibility',
                'outlined' => false,
                'character_count' => true,
                'attr' => [
                    'maxLength' => 55,
                ],
                'help' => 'asd'
            ])
            ->add('input35', TextType::class, [
                'label' => 'Outlined required empty input',
            ])
            ->add('input4', TextType::class, [
                'label' => 'Outlined input',
                'data' => 'Outlined input with label',
            ])
            ->add('input5', TextType::class, [
                'label' => false,
                'data' => 'Outlined input without label',
            ])
            ->add('input6', TextType::class, [
                'label' => false,
                'disabled' => true,
                'data' => 'Outlined disabled input',
            ])
            ->add('input7', TextType::class, [
                'label' => 'Outlined input with character count',
                'data' => 'Will be filled',
                'character_count' => true,
                'attr' => [
                    'maxLength' => 55,
                ],
            ])
            ->add('input71', TextType::class, [
                'label' => 'Outlined required empty input with helptext',
                'help' => 'Will be filled',
            ])
            ->add('leadingIcon71', TextType::class, [
                'label' => 'Filled input with leading icon',
                'leading_icon' => 'visibility',
            ])
            ->add('trailingIcon72', TextType::class, [
                'label' => 'Filled input with leading icon',
                'trailing_icon' => 'visibility',
            ])
            ->add('leadingTrailingIcon73', TextType::class, [
                'label' => 'Filled input with leading and trailing icon',
                'trailing_icon' => 'visibility',
                'leading_icon' => 'visibility',
            ])
            ->add('leadingTrailingIconCharCount74', TextType::class, [
                'label' => 'Filled input with leading and trailing icon and character count and help text',
                'trailing_icon' => 'visibility',
                'leading_icon' => 'visibility',
                'character_count' => true,
                'attr' => [
                    'maxLength' => 55,
                ],
                'help' => 'asd'
            ])
        ;
    }
}
