<?php

namespace App\Validator\Constraints;

use App\Entity\Booking;
use App\Repository\BookingRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class MaxPeoplePerTimeValidator extends ConstraintValidator
{
    private BookingRepository $bookingRepository;

    public function __construct(BookingRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    public function validate($value, Constraint $constraint)
    {
        if (!$value instanceof Booking) {
            return;
        }
        $bookingDate = $value->getDate();
        $arrivalTime = $value->getArrivalTime();
        $customersNb = $value->getCustomersNb();
        $bookings = $this->bookingRepository->findByDateAndTime($bookingDate, $arrivalTime);
        $bookedCustomersNb = array_sum(array_column($bookings, 'customersNb'));
        $availableSeats = 10 - $bookedCustomersNb;
        if ($availableSeats < $customersNb) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}