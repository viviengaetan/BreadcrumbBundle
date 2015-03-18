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
        $this->breadcrumb
            ->setId($this->parameters['list_id'])
            ->setClassCSS($this->parameters['list_class'])
            ->setSeparator($this->parameters['separator'])
            ->setSeparatorClass($this->parameters['separator_class'])
            ->setTranslationDomain($this->parameters['translation_domain']);
    }

    public function addItem($text, $link, $classCss = null)
    {
        $this->breadcrumb->addItem(
            $text,
            $link,
            ($classCss !== null) ? $classCss : $this->parameters["item_class"]
        );
        return $this;
    }

    public function prependItem($text, $link, $classCss = null)
    {
        $this->breadcrumb->prependItem(
            $text,
            $link,
            ($classCss !== null) ? $classCss : $this->parameters["item_class"]
        );
        return $this;
    }

    public function clear()
    {
        $this->breadcrumb->clear();
        return $this;
    }

    /**
     * @return Breadcrumb
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

}