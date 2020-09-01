# Symfony 5 material.io front-end bundle

###### working, but work in progress

### supported components
1. Input
2. Textarea
3. Radio
4. Checkbox
5. Select
6. List
7. Drawer navigation
8. App bar

# Installation

#### composer.json
```json
{
    "require": {
        "otskarli/symfony-material": "dev-master"
    }
}
```

#### config\packages\symfony_material.yaml
```yaml
symfony_material: ~
```

#### config\bundles.php
```php
<?php 
    return [
        KarliOts\SymfonyMaterialBundle\SymfonyMaterialBundle::class => ['all' => true],
    ];
?>
```

#### webpack.config.js
```javascript
.addEntry('js/app', './vendor/otskarli/symfony-material/assets/js/app.js')
.addStyleEntry('css/app', './vendor/otskarli/symfony-material/assets/scss/app.scss')
```

# Sample FormType
#### App\Form\TestType.php
```php
<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class HomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text', TextType::class, [
                'required' => false,
                'constraints' => [new NotBlank()],
                'character_count' => true,
                'attr' => [
                    'maxLength' => 8,
                ]
            ])
            ->add('description', TextType::class, [
                'required' => false,
                'constraints' => [new NotBlank()],
                'leading_icon' => 'visibility'
            ])
            ->add('help', TextType::class, [
                'required' => false,
                'constraints' => [new NotBlank()],
                'help' => 'Tere tere tere tere',
                'trailing_icon' => 'favorite'
            ])
            ->add('descriptioon', TextareaType::class, [
                'help' => 'Tere tere tere tere',
            ])
            ->add('submit', SubmitType::class, [
                'leading_icon' => 'favorites',
                'unelevated' => true,
            ])
            ->add('button', ButtonType::class, [
                'raised' => true,
            ])
            ->add('link', ButtonType::class, [
                'trailing_icon' => 'favorites',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'mapped' => false
        ]);
    }
}
```
