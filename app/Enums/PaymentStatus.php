<?php

namespace App\Enums;

class PaymentStatus
{
    const IN_PROGRESS = 'in_progress';
    const SUCCESS = 'success';
    const FAIL = 'fail';

    const TYPES = [
        self::IN_PROGRESS,
        self::SUCCESS,
        self::FAIL
    ];
}
