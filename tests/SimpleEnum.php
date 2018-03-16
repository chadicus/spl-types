<?php

namespace ChadicusTest\Spl\Types;

/**
 * Test AbstractEnum implementation.
 *
 * @method static SimpleEnum FOO()
 * @method static SimpleEnum BAR()
 */
class SimpleEnum extends \Chadicus\Spl\Types\AbstractEnum
{
    const FOO = 'foo';
    const BAR = 'bar';
}
