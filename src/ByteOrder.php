<?php

declare(strict_types=1);

/**
 * Copyright (c) Konceiver Oy <info@konceiver.dev>
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 */

namespace Konceiver\ByteBuffer;

class ByteOrder
{
    /**
     * Most significant value in the sequence is stored first. Flip no bytes!
     */
    const BE = 0;

    /**
     * Least significant value in the sequence is stored first. Flip bytes!
     */
    const LE = 1;

    /**
     * Let the current machine determine the endianess.
     */
    const MB = 2;
}
