<?php

namespace Cadrien\BulmaBridge\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Select2Type extends AbstractType
{
    // region constants
    public const DEFAULT_CLASS = 'select2';
    public const VIEW_ATTR_SCRIPT = 'view_attr_script';
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
        return ChoiceType::class;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            'attr' => ['class' => Select2Type::DEFAULT_CLASS],
        ]);
    }

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        parent::buildView($view, $form, $options);

        $view->vars['attr'][self::VIEW_ATTR_SCRIPT] = '
            <script type="text/javascript">
                document.addEventListener("DOMContentLoaded", function() {
                    var select2Element = document.getElementById("' . $view->vars['id'] . '");
                    if (select2Element) {
                        $(select2Element).select2();
                    }
                });
            </script>
        ';
    }
    // endregion

    // region protected methods
    // endregion

    // region private methods
    // endregion
}
