<?php

namespace Cadrien\BulmaBridge\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WysiwygQuillType extends AbstractType
{
    // region constants
    public const DEFAULT_CLASS = 'quill';
    public const VIEW_ATTR_SCRIPT = 'view_attr_script';
    public const VIEW_ATTR_DIV_ID = 'view_attr_div_id';
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
        return TextareaType::class;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'attr' => ['class' => self::DEFAULT_CLASS],
        ]);
    }

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        parent::buildView($view, $form, $options);

        $textareaIdentifier = $view->vars['id'];
        $divIdentifier = sprintf('%s_div', $textareaIdentifier);
        $view->vars['attr'][self::VIEW_ATTR_SCRIPT] = '
            <script type="text/javascript">
                document.addEventListener("DOMContentLoaded", function() {
                    let textareaElement = document.getElementById("'.$textareaIdentifier.'");
                    let quillElement = document.getElementById("'.$divIdentifier.'");
                    if (quillElement) {
                        let quill = new Quill(quillElement, {
                            theme: "snow"
                        });
                        quill.on("text-change", (delta, oldDelta, source) => {
                            textareaElement.value = quillElement.innerHTML;
                        });
                    }
                });
            </script>';
        $view->vars['attr'][self::VIEW_ATTR_DIV_ID] = $divIdentifier;
    }
    // endregion

    // region protected methods
    // endregion

    // region private methods
    // endregion
}