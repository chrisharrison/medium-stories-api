<?php

declare(strict_types=1);

namespace ChrisHarrison\Medium;

use Funeralzone\ValueObjects\Sets\SetOfValueObjects;
use Funeralzone\ValueObjects\ValueObject;

final class Stories extends SetOfValueObjects implements ValueObject
{
    protected function typeToEnforce(): string
    {
        return Story::class;
    }

    public static function valuesShouldBeUnique(): bool
    {
        return false;
    }

}
