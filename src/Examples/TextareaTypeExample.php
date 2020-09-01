<?php

namespace KarliOts\SymfonyMaterialBundle\Examples;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class TextareaTypeExample extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('input', TextareaType::class, [
                'label' => 'Filled required empty input',
                'outlined' => false,
            ])
            ->add('input0', TextareaType::class, [
                'label' => 'Filled input',
                'outlined' => false,
                'data' => 'Filled input with label'
            ])
            ->add('input1', TextareaType::class, [
                'label' => false,
                'outlined' => false,
                'data' => 'Filled input without label'
            ])
            ->add('input2', TextareaType::class, [
                'label' => false,
                'outlined' => false,
                'disabled' => true,
                'data' => 'Filled disabled input'
            ])
            ->add('input3', TextareaType::class, [
                'label' => 'Filled input with character count',
                'data' => 'Will be filled',
                'outlined' => false,
                'character_count' => true,
                'attr' => [
                    'maxLength' => 55,
                ],
            ])
            ->add('input31', TextareaType::class, [
                'label' => 'Filled required empty input with helptext',
                'help' => 'Will be filled',
                'outlined' => false,
            ])
            ->add('input35', TextareaType::class, [
                'label' => 'Outlined required empty input',
            ])
            ->add('input4', TextareaType::class, [
                'label' => 'Outlined input',
                'data' => 'Outlined input with label',
            ])
            ->add('input5', TextareaType::class, [
                'label' => false,
                'data' => 'Outlined input without label',
            ])
            ->add('input6', TextareaType::class, [
                'label' => false,
                'disabled' => true,
                'data' => 'Outlined disabled input',
            ])
            ->add('input7', TextareaType::class, [
                'label' => 'Outlined input with character count',
                'data' => 'Will be filled',
                'character_count' => true,
                'attr' => [
                    'maxLength' => 55,
                ],
            ])
            ->add('input71', TextareaType::class, [
                'label' => 'Outlined required empty input with helptext',
                'help' => 'Will be filled',
            ])
        ;
    }
}
