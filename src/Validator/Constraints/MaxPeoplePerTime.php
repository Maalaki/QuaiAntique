<?php

namespace App\Validator\Constraints;

use Attribute;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
#[Attribute] class MaxPeoplePerTime extends Constraint
{
    public string $message = 'Malheureusement, l\'horaire choisi est indisponible. Veuillez choisir un autre horaire.';

    public function getTargets(): array|string
    {
        return self::PROPERTY_CONSTRAINT;
    }
}