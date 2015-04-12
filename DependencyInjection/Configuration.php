<?php

/*
 * This file is part of the GGTeam package.
 *
 * (c) Guillaume Garcia <garciaguillaume69@gmail.com>
 * (c) Gaëtan Verlhac <viviengaetan69@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GGTeam\BreadcrumbBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('gg_team_breadcrumb');

        $rootNode
            ->children()
                ->scalarNode('template')
                    ->defaultValue('GGTeamBreadcrumbBundle::breadcrumb.html.twig')
                ->end()
            ->end();

        $this->addModelsNode($rootNode);
        $this->addListNode($rootNode);
        $this->addItemNode($rootNode);

        return $treeBuilder;
    }

    /**
     * @param ArrayNodeDefinition $node
     */
    public function addModelsNode(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('models')
                    ->addDefaultsIfNotSet()
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('breadcrumb')
                            ->defaultValue('GGTeam\BreadcrumbBundle\Model\Breadcrumb')
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('breadcrumb_item')
                            ->defaultValue('GGTeam\BreadcrumbBundle\Model\BreadcrumbItem')
                            ->cannotBeEmpty()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * @param ArrayNodeDefinition $node
     */
    public function addListNode(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('list')
                    ->addDefaultsIfNotSet()
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('css_id')
                            ->defaultValue('ggteam-breadcrumb')
                        ->end()
                        ->scalarNode('css_class')
                            ->defaultValue('breadcrumb')
                        ->end()
                        ->scalarNode('separator')
                            ->defaultValue('/')
                        ->end()
                        ->scalarNode('separator_class')
                            ->defaultValue('')
                        ->end()
                        ->scalarNode('translation_domain')
                            ->defaultNull()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * @return \Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition|\Symfony\Component\Config\Definition\Builder\NodeDefinition
     */
    public function addItemNode(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('item')
                    ->addDefaultsIfNotSet()
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('css_class')
                            ->defaultValue('breadcrumb')
                        ->end()
                    ->end()
                ->end()
            ->end();
    }
}
