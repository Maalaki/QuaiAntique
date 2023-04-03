<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
* @Annotation
*/
class ClosedDays extends Constraint
{
    public string $message = 'Malheureusement, le restaurant est fermé le lundi toute la journée et le dimanche après-midi. Veuillez choisir un autre horaire de réservation.';

    public function validatedBy(): string
    {
        return ClosedDaysValidator::class;
    }
}
