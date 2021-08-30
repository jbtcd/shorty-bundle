<?php declare(strict_types = 1);

/**
 * (c) Jonah Böther <mail@jbtcd.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ShortyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @author Jonah Böther <mail@jbtcd.me>
 */
class Configuration implements ConfigurationInterface
{
    public const SHORTY_CONFIGURATION_DEFAULT_CHARSET = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // phpcs:ignore
    public const SHORTY_CONFIGURATION_DEFAULT_LENGTH = 6;

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('shorty');

        $treeBuilder->getRootNode()->children()
            ->scalarNode('charset')->defaultValue(self::SHORTY_CONFIGURATION_DEFAULT_CHARSET)->end()
            ->integerNode('length')->defaultValue(self::SHORTY_CONFIGURATION_DEFAULT_LENGTH)->end()
            ->end();

        return $treeBuilder;
    }
}
