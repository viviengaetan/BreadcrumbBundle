<?php

namespace GGTeam\BreadcrumbBundle\DependencyInjection;

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
                ->scalarNode("separator")->defaultValue("/")->end()
                ->scalarNode("separator_class")->defaultValue("")->end()
                ->scalarNode("list_id")->defaultValue("ggteam-breadcrumb")->end()
                ->scalarNode("list_class")->defaultValue("breadcrumb")->end()
                ->scalarNode("item_class")->defaultValue("")->end()
                ->scalarNode("template")->defaultValue("GGTeamBreadcrumbBundle::breadcrumb.html.twig")->end()
                ->scalarNode("translation_domain")->defaultNull()->end()
            ->end();

        return $treeBuilder;
    }
}
