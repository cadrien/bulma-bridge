<?php

namespace Cadrien\BulmaBridge\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExampleType extends AbstractType
{
    // region constants
    // endregion

    // region public attributes
    // endregion

    // region protected attributes
    // endregion

    // region private attributes
    // endregion

    // region magic methods
    // endregion

    // region getters/setters
    // endregion

    // region public methods
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textField', TextType::class)
            ->add('textareaField', TextareaType::class)
            ->add('emailField', EmailType::class)
            ->add('integerField', IntegerType::class)
            ->add('moneyField', MoneyType::class)
            ->add('textGroupField', TextGroupType::class, [
                TextGroupType::LABEL_RIGHT => '<i class="fa fa-check"></i>',
                TextGroupType::LABEL_LEFT => '<i class="fa fa-user"></i>',
                TextGroupType::CLASS_RIGHT => 'has-text-success',
                TextGroupType::CLASS_LEFT => 'has-text-danger',
            ])
            ->add('numberField', NumberType::class)
            ->add('passwordField', PasswordType::class)
            ->add('passwordGroupField', PasswordGroupType::class, [
                TextGroupType::LABEL_RIGHT => '<i class="fa fa-lock"></i>',
                TextGroupType::LABEL_LEFT => '<i class="fa-solid fa-location-dot"></i>',
                TextGroupType::CLASS_RIGHT => 'has-text-success',
                TextGroupType::CLASS_LEFT => 'has-text-danger',
            ])
            ->add('percentField', PercentType::class)
            ->add('rangeField', RangeType::class)
            ->add('searchField', SearchType::class)
            ->add('telField', TelType::class)
            ->add('urlField', UrlType::class)
            ->add('dateField', DateType::class)
            ->add('dateTimeField', DateTimeType::class)
            ->add('timeField', TimeType::class)
            ->add('choiceField', ChoiceType::class, [
                'choices' => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ],
            ])
            ->add('choiceMultipleField', ChoiceType::class, [
                'multiple'=> true,
                'expanded'=> false,
                'choices' => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ],
            ])
            ->add('countryField', CountryType::class)
            ->add('languageField', LanguageType::class)
            ->add('localeField', LocaleType::class)
            ->add('timezoneField', TimezoneType::class)
            ->add('currencyField', CurrencyType::class)
            ->add('fileField', FileType::class)
            ->add('checkboxField', ChoiceType::class, [
                'multiple'=> true,
                'expanded'=> true,
                'choices' => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ]
            ])
            ->add('radioField', ChoiceType::class, [
                'multiple'=> false,
                'expanded'=> true,
                'choices' => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ]
            ])
            ->add('select2', Select2Type::class, [
                'choices' => [
                    'Option 1' => 'option1',
                    'Option 2' => 'option2',
                    'Option 3' => 'option3',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'mapped' => false,
        ]);
    }
    // endregion

    // region protected methods
    // endregion

    // region private methods
    // endregion
}