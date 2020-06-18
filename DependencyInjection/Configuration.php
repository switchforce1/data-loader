<?php
/**
 * Created by PhpStorm.
 * User: Dadja
 * Date: 16/06/2020
 * Time: 02:12
 */

namespace Swichforce1\DataLoaderBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('switchforce1_data_loader');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('loaders')
                    ->children()
                        ->integerNode('client_id')->end()
                        ->scalarNode('client_secret')->end()
                    ->end()
                ->end() // twitter
            ->end()
        ;

        return $treeBuilder;
    }

}
