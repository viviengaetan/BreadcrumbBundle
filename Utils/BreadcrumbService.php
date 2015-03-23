<?php

namespace GGTeam\BreadcrumbBundle\Utils;

use GGTeam\BreadcrumbBundle\Model\Breadcrumb;
use Symfony\Component\DependencyInjection\ContainerInterface;

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

    public function addItem($text, $link, $classCss = null, $append = null, $prepend = null)
    {
        $this->breadcrumb->addItem(
            $text,
            $link,
            ($classCss !== null) ? $classCss : $this->parameters["item_class"],
            $append,
            $prepend
        );
        return $this;
    }

    public function prependItem($text, $link, $classCss = null, $append = null, $prepend = null)
    {
        $this->breadcrumb->prependItem(
            $text,
            $link,
            ($classCss !== null) ? $classCss : $this->parameters["item_class"],
            $append,
            $prepend
        );
        return $this;
    }

    public function clear()
    {
        $this->breadcrumb->clear();
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param mixed $parameters
     * @return BreadcrumbService
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    public function getParameter($key)
    {
        return (isset($this->parameters[$key])) ? $this->parameters[$key] : null;
    }

    /**
     * @return Breadcrumb
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

}