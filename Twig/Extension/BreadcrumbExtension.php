<?php

namespace GGTeam\BreadcrumbBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

class BreadcrumbExtension extends \Twig_Extension
{
    protected $container;
    protected $breadcrumb;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->breadcrumb = $container->get('gg_team_breadcrumb')->getBreadcrumb();
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return array(
            'gg_team_render_breadcrumb' => new \Twig_Function_Method(
                $this,
                "renderBreadcrumb",
                array("is_safe" => array("html"))
            ),
            'gg_team_breadcrumb' => new \Twig_Function_Method($this, "getBreadcrumb", array("is_safe" => array("html")))
        );
    }

    public function renderBreadcrumb()
    {
        return $this->container->get('gg_team_breadcrumb.helper')->breadcrumb();
    }

    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return "gg_team_breadcrumb";
    }
}