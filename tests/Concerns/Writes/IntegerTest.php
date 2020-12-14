<?php

declare(strict_types=1);

/**
 * Copyright (c) Konceiver Oy <info@konceiver.dev>
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 */

namespace Konceiver\Tests\ByteBuffer\Concerns\Writes;

use Konceiver\ByteBuffer\ByteBuffer;
use PHPUnit\Framework\TestCase;

/**
 * This is the integer writer test class.
 *
 * @author Brian Faust <brian@konceiver.dev>
 * @covers \Konceiver\ByteBuffer\Concerns\Writes\Integer
 */
class IntegerTest extends TestCase
{
    /** @test */
    public function it_should_write_int8()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeInt8(8);

        $this->assertSame(1, $buffer->internalSize());
    }

    /** @test */
    public function it_should_write_int16()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeInt16(16);

        $this->assertSame(2, $buffer->internalSize());
    }

    /** @test */
    public function it_should_write_int32()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeInt32(32);

        $this->assertSame(4, $buffer->internalSize());
    }

    /** @test */
    public function it_should_write_int64()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeInt64(64);

        $this->assertSame(8, $buffer->internalSize());
    }

    /** @test */
    public function it_should_write_byte()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeByte(8);

        $this->assertSame(1, $buffer->internalSize());
    }

    /** @test */
    public function it_should_write_short()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeShort(16);

        $this->assertSame(2, $buffer->internalSize());
    }

    /** @test */
    public function it_should_write_int()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeInt(32);

        $this->assertSame(4, $buffer->internalSize());
    }

    /** @test */
    public function it_should_write_long()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeLong(64);

        $this->assertSame(8, $buffer->internalSize());
    }
}
