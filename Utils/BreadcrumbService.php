<?php

namespace GGTeam\BreadcrumbBundle\Utils;

use Symfony\Component\DependencyInjection\ContainerInterface;
use GGTeam\BreadcrumbBundle\Model\Breadcrumb;

class BreadcrumbService
{

    private $container;

    private $breadcrumb;

    private $parameters;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->parameters = $container->getParameter("gg_team_breadcrumb");
        $this->breadcrumb = new Breadcrumb();
        $this->breadcrumb->setClassCSS($this->parameters['list_class']);
    }

    public function addItem($text, $link, $classCss = null, $translateDomain = null)
    {
        $this->breadcrumb->addItem(
            $text,
            $link,
            ($classCss !== null) ? $classCss : $this->parameters["item_class"],
            ($translateDomain !== null) ? $translateDomain : $this->parameters["translate_domain"]
        );
    }

    public function prependItem($text, $link, $classCss = null, $translateDomain = null)
    {
        $this->breadcrumb->prependItem(
            $text,
            $link,
            ($classCss !== null) ? $classCss : $this->parameters["item_class"],
            ($translateDomain !== null) ? $translateDomain : $this->parameters["translate_domain"]
        );
    }

    public function setClassCSS($classCSS)
    {
        $this->breadcrumb->setClassCSS($classCSS);
    }

    public function clear()
    {
        $this->breadcrumb->clear();
    }

    /**
     * @return Breadcrumb
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

}