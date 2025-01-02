<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;

/**
 * Class PasswordGroupType.
 */
class PasswordGroupType extends TextGroupType
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

    public function getParent(): string
    {
        return PasswordType::class;
    }

    // endregion

    // region protected methods
    // endregion

    // region private methods
    // endregion
}
