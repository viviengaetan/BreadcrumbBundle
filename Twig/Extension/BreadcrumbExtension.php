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

use GGTeam\BreadcrumbBundle\Model\BreadcrumbInterface;

/**
 * Extension for Twig.
 *
 * @link http://twig.sensiolabs.org/
 *
 * @author Guillaume Garcia <garciaguillaume69@gmail.com>
 */
class BreadcrumbExtension extends \Twig_Extension
{
    /** @var  \GGTeam\BreadcrumbBundle\Model\BreadcrumbInterface $breadcrumb */
    protected $breadcrumb;

    /** @var  string $template */
    protected $template;

    /**
     * @param \GGTeam\BreadcrumbBundle\Model\BreadcrumbInterface $breadcrumb
     * @param string $template
     */
    public function __construct(BreadcrumbInterface $breadcrumb, $template)
    {
        $this->breadcrumb = $breadcrumb;
        $this->template = $template;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction(
                'gg_team_render_breadcrumb',
                array($this, 'renderBreadcrumb'),
                array("is_safe" => array("html"), "needs_environment" => true)
            ),
            new \Twig_SimpleFunction('gg_team_breadcrumb', array($this, "getBreadcrumb"))
        );
    }

    /**
     * @return string
     */
    public function renderBreadcrumb(\Twig_Environment $twig)
    {
        return $twig->render($this->template, array('breadcrumb' => $this->breadcrumb));
    }

    /**
     * Get the instance of the breadcrumb.
     *
     * @return \GGTeam\BreadcrumbBundle\Model\BreadcrumbInterface
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
