<?php

namespace GGTeam\BreadcrumbBundle\Tests\DependencyInjection;

use GGTeam\BreadcrumbBundle\DependencyInjection\GGTeamBreadcrumbExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Templating\EngineInterface;

abstract class AbstractBreadcrumbBundleExtensionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \GGTeam\BreadcrumbBundle\DependencyInjection\GGTeamBreadcrumbExtension */
    private $extension;
    /** @var \Symfony\Component\DependencyInjection\ContainerBuilder */
    private $container;
    /** @var EngineInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $mockTemplatingEngine;

    protected function setUp()
    {
        $this->extension = new GGTeamBreadcrumbExtension();

        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
        $this->container->set('templating', $this->getMockTemplatingEngine());
    }

    /**
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     * @param $resource
     * @return mixed
     */
    abstract protected function loadConfiguration(ContainerBuilder $container, $resource);

    public function testDefaultConfiguration()
    {
        // An extension is only loaded in the container if a configuration is provided for it.
        // Then, we need to explicitely load it.
        $this->container->loadFromExtension($this->extension->getAlias());
        $this->container->compile();

        $this->assertTrue($this->container->getParameterBag()->has('gg_team_breadcrumb'));
    }

    /**
     * @return EngineInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private function getMockTemplatingEngine()
    {
        if (null === $this->mockTemplatingEngine) {
            $this->mockTemplatingEngine = $this->getMock(
                'Symfony\Bundle\FrameworkBundle\Templating\EngineInterface'
            );
        }
        return $this->mockTemplatingEngine;
    }
}