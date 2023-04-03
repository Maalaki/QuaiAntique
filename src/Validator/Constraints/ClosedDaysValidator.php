<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ClosedDaysValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        $dayOfWeek = $value->format('N');
        $hourOfDay = $value->format('G');

        if ($dayOfWeek == 1 || ($dayOfWeek == 7 && $hourOfDay >= 12)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}
