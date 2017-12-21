<?php

declare(strict_types=1);

namespace ChrisHarrison\Medium;

use Funeralzone\ValueObjectExtensions\ComplexScalars\RFC3339Trait;
use Funeralzone\ValueObjects\ValueObject;

final class PublishedTime implements ValueObject
{
    use RFC3339Trait;
}
