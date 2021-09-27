<?php

namespace BitWasp\Bitcoin\Tests\Bech32\Unit;

use BitWasp\Bitcoin\Tests\Bech32\TestCase;
use BitWasp\Bitcoin\Bech32;

class ConvertBitsTest extends TestCase
{
    public function testInvalidCharValue()
    {
        $this->expectException(\BitWasp\Bitcoin\Exceptions\Bech32Exception::class);
        $this->expectExceptionMessage("Invalid value for convert bits");
        Bech32::convertBits([2 << 29], 1, 8, 5, true);
    }
}
