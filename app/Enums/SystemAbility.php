<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ADMIN()
 * @method static static CUSTOMER()
 */
final class SystemAbility extends Enum
{
    const ADMIN = 'ADMIN';
    const CUSTOMER = 'CUSTOMER';
}
