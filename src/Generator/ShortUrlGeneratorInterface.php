<?php declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ShortyBundle\Generator;

/**
 * Interface ShortUrlGeneratorInterface
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
interface ShortUrlGeneratorInterface
{
    public function generateUrl(): string;
}
