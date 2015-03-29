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

namespace GGTeam\BreadcrumbBundle\Templating\Helper;

use GGTeam\BreadcrumbBundle\Utils\BreadcrumbService;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\Templating\Helper\Helper;

/**
 * View helper to construct the breadcrumb.
 *
 * @author Guillaume Garcia <garciaguillaume69@gmail.com>
 */
class BreadcrumbHelper extends Helper
{
    protected $templating;
    protected $breadcrumb;
    protected $options = array();

    /**
     * @param EngineInterface $templating
     * @param BreadcrumbService $breadcrumb
     */
    public function __construct(EngineInterface $templating, BreadcrumbService $breadcrumb)
    {
        $this->templating = $templating;
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Returns the HTML for the breadcrumb
     *
     * @param $options
     * @return string A HTML string
     */
    public function breadcrumb(array $options = array())
    {
        $options = $this->resolveOptions($options);
        return $this->templating->render(
            $this->breadcrumb->getParameter("template"),
            $options
        );
    }

    /**
     * Merges user-supplied options from the view
     * with base config values
     *
     * @param array $options
     * @return array
     */
    private function resolveOptions(array $options = array())
    {
        $this->options["breadcrumb"] = $this->breadcrumb->getBreadcrumb();
        return array_merge($this->options, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'gg_team_breadcrumb';
    }
}
