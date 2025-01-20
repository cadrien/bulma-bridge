<?php

namespace Cadrien\BulmaBridge\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TextGroupType extends AbstractType
{
    // region constants
    public const LABEL_LEFT = 'label_left';
    public const LABEL_RIGHT = 'label_right';
    public const CLASS_LEFT = 'class_left';
    public const CLASS_RIGHT = 'class_right';
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
    public function getParent(): string
    {
        return TextType::class;
    }

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        $view->vars[self::LABEL_LEFT] = $options[self::LABEL_LEFT];
        $view->vars[self::LABEL_RIGHT] = $options[self::LABEL_RIGHT];
        $view->vars[self::CLASS_LEFT] = $options[self::CLASS_LEFT];
        $view->vars[self::CLASS_RIGHT] = $options[self::CLASS_RIGHT];
        parent::buildView($view, $form, $options);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            self::LABEL_LEFT => null,
            self::LABEL_RIGHT => null,
            self::CLASS_LEFT => null,
            self::CLASS_RIGHT => null,
        ]);
    }
    // endregion

    // region protected methods
    // endregion

    // region private methods
    // endregion
}
