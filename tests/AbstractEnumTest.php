<?php
namespace ChadicusTest\Spl\Types;

use Chadicus\Spl\Types\AbstractEnum;

/**
 * Unit tests for the Chadicus\Spl\Types\AbstractEnum class.
 *
 * @coversDefaultClass \Chadicus\Spl\Types\AbstractEnum
 * @covers ::<private>
 */
final class AbstractEnumTests extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior of __callStatic.
     *
     * @test
     * @covers ::__callStatic
     * @covers ::__toString
     *
     * @return void
     */
    public function basicUse()
    {
        $this->assertSame(SimpleEnum::FOO, (string)SimpleEnum::Foo());
    }

    /**
     * Verify exception is thrown if __callStatic is invoked with an invalid value.
     *
     * @test
     * @covers ::__callStatic
     * @expectedException \UnexpectedValueException
     * @expectedExceptionMessage 'Invalid' is not a valid ChadicusTest\Spl\Types\SimpleEnum
     *
     * @return void
     */
    public function badConstant()
    {
        SimpleEnum::Invalid();
    }
}
