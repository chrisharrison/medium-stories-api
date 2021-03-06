<?php

declare(strict_types=1);

namespace ChrisHarrison\Medium;

use Funeralzone\ValueObjects\Scalars\StringTrait;
use Funeralzone\ValueObjects\ValueObject;

final class Category implements ValueObject
{
    use StringTrait;
}
