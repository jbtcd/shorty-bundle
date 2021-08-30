<?php declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ShortyBundle\Service;

use ShortyBundle\Generator\ShortUrlGeneratorInterface;

/**
 * Class ShortyService
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class ShortyService implements ShortyServiceInterface
{
    private ShortUrlGeneratorInterface $shortUrlGenerator;

    public function __construct(
        ShortUrlGeneratorInterface $shortUrlGenerator
    ) {
        $this->shortUrlGenerator = $shortUrlGenerator;
    }

    public function generateShortUrl(): string
    {
        return $this->shortUrlGenerator->generateUrl();
    }
}
