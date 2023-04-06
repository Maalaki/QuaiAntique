<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class MaxCustomersPerTime extends Constraint
{
    public string $message = 'Malheureusement, la limite de réservation pour cet horaire  a été atteinte. Veuillez sélectionner une heure d\'arrivée différente.';

    public $timeField;

    public function getTargets(): array|string
    {
        return self::CLASS_CONSTRAINT;
    }
}