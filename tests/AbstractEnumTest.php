<?php
namespace ChadicusTest\Spl\Types;

use Chadicus\Spl\Types\AbstractEnum;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for the Chadicus\Spl\Types\AbstractEnum class.
 *
 * @coversDefaultClass \Chadicus\Spl\Types\AbstractEnum
 * @covers ::<private>
 */
final class AbstractEnumTests extends TestCase
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
        /** @scrutinizer ignore-call */ SimpleEnum::Invalid();
    }

    /**
     * Verify basic behavior of all().
     *
     * @test
     * @covers ::all
     *
     * @return void
     */
    public function all()
    {
        $all = SimpleEnum::all();
        $this->assertCount(2, $all);
        $this->assertSame(SimpleEnum::FOO, (string)$all[0]);
        $this->assertSame(SimpleEnum::BAR, (string)$all[1]);
    }
}
