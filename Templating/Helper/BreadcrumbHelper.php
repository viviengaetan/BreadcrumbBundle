<?php

namespace GGTeam\BreadcrumbBundle\Templating\Helper;

use GGTeam\BreadcrumbBundle\Model\Breadcrumb;
use GGTeam\BreadcrumbBundle\Utils\BreadcrumbService;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\Templating\Helper\Helper;

class BreadcrumbHelper extends Helper
{
    protected $templating;
    protected $breadcrumb;
    protected $options = array();

    /**
     * @param EngineInterface $templating
     * @param BreadcrumbService $breadcrumbService
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