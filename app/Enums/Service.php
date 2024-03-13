<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Service extends Enum
{
    const Air = 'Air Transport';
    const Sea = 'Sea Transport';
    const Road = 'Road Transport';
    const Rail = 'Rail Transport';
    const Express = 'Express delivery';
    const Customs = 'Customs services';
}
