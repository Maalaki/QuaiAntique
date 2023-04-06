<?php

namespace App\Validator\Constraints;

use App\Entity\Booking;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class MaxCustomersPerTimeValidator extends ConstraintValidator
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof MaxCustomersPerTime) {
            throw new UnexpectedTypeException($constraint, MaxCustomersPerTime::class);
        }

        if (!$value instanceof Booking) {
            return;
        }

        $booking = $value;
        $time = $booking->getArrivalTime();
        $customersNb = $booking->getCustomersNb();
        $maxCustomersPerTime = 10;

        $bookings = $this->entityManager->getRepository(Booking::class)->findBy(['arrivalTime' => $time]);

        $totalCustomers = $customersNb;
        foreach ($bookings as $existingBooking) {
            if ($existingBooking !== $value) {
                $totalCustomers += $existingBooking->getCustomersNb();
            }
        }

        if ($totalCustomers > $maxCustomersPerTime) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ max_customers }}', $maxCustomersPerTime)
                ->addViolation();
        }
    }
}
