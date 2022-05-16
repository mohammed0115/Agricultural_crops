<?php
/**
 * Created by PhpStorm.
 * User: mohammed
 * Date: 09/05/22
 * Time: 11:48 م
 */

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserType extends Enum
{
    const Administrator = 1;
    const ModeratorAgent = 2;
    const Vendor=3;
    const Buyer=4;
    const SuperAdministrator = 0;
}
