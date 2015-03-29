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

namespace GGTeam\BreadcrumbBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Extension for Twig.
 *
 * @link http://twig.sensiolabs.org/
 *
 * @author Guillaume Garcia <garciaguillaume69@gmail.com>
 */
class BreadcrumbExtension extends \Twig_Extension
{
    /** @var \Symfony\Component\DependencyInjection\ContainerInterface $container */
    protected $container;
    /** @var  \GGTeam\BreadcrumbBundle\Model\Breadcrumb $breadcrumb */
    protected $breadcrumb;

    /**
     * @param ContainerInterface $container
     */
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

    /**
     * @return string
     */
    public function renderBreadcrumb()
    {
        return $this->container->get('gg_team_breadcrumb.helper')->breadcrumb();
    }

    /**
     * Get the instance of the breadcrumb.
     *
     * @return \GGTeam\BreadcrumbBundle\Model\Breadcrumb
     */
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
