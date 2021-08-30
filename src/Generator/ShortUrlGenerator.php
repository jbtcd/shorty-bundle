<?php declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ShortyBundle\Generator;

/**
 * Class ShortUrlGenerator
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class ShortUrlGenerator implements ShortUrlGeneratorInterface
{
    private string $charset;
    private int $length;

    public function __construct(
        string $charset,
        int $length
    ) {
        $this->charset = $charset;
        $this->length = $length;
    }

    public function generateUrl(): string
    {
        $shortUrl = '';

        for ($i = 0; $i < $this->length; $i++) {
            $shortUrl .= str_split($this->charset)[array_rand(str_split($this->charset))];
        }

        return $shortUrl;
    }
}
