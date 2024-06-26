<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ReviewStatus extends Enum
{
    const DELETED = 0;
    const ACTIVE = 1;
    const PENDING = 2;
}
