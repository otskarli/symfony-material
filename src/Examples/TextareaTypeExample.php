<?php

namespace KarliOts\SymfonyMaterialBundle\Examples;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class TextareaTypeExample extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('leadingIcon', TextareaType::class, [
                'label' => 'Outlined input with leading icon',
                'required' => false,
                'constraints' => [new NotBlank()],
                'leading_icon' => 'visibility'
            ])
            ->add('trailingIcon', TextareaType::class, [
                'label' => 'Outlined input with trailing icon',
                'required' => false,
                'constraints' => [new NotBlank()],
                'trailing_icon' => 'favorite'
            ])
            ->add('helpText', TextareaType::class, [
                'label' => 'Outlined input with helptext',
                'required' => false,
                'constraints' => [new NotBlank()],
                'help' => 'Custom helptext',
            ])
            ->add('maxLength', TextareaType::class, [
                'label' => 'Outlined input with maximum length',
                'required' => false,
                'constraints' => [new NotBlank()],
                'character_count' => true,
                'attr' => [
                    'maxLength' => 8,
                ],
            ])
            ->add('all', TextareaType::class, [
                'label' => 'Outlined input with all above',
                'character_count' => true,
                'attr' => [
                    'maxLength' => 99,
                ],
                'leading_icon' => 'visibility',
                'trailing_icon' => 'favorite'
            ]);
    }
}
