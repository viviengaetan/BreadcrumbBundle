<?php

namespace GGTeam\BreadcrumbBundle\Tests\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class XmlBreadcrumbExtensionTest extends AbstractBreadcrumbBundleExtensionTest
{
    /**
     * {@inheritdoc}
     */
    protected function loadConfiguration(ContainerBuilder $container, $resource)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/Fixtures/Xml/'));
        $loader->load($resource . '.xml');
    }
}
