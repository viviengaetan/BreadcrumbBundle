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

namespace GGTeam\BreadcrumbBundle\Utils;

use GGTeam\BreadcrumbBundle\Model\Breadcrumb;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class BreadcrumbService
 *
 * @author Guillaume Garcia <garciaguillaume69@gmail.com>
 */
class BreadcrumbService
{
    /** @var \GGTeam\BreadcrumbBundle\Model\Breadcrumb */
    private $breadcrumb;

    /** @var array */
    private $parameters;

    /**
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->parameters = $container->getParameter("gg_team_breadcrumb");
        $this->breadcrumb = new Breadcrumb();
        $this->breadcrumb
            ->setId($this->parameters['list_id'])
            ->setClassCSS($this->parameters['list_class'])
            ->setSeparator($this->parameters['separator'])
            ->setSeparatorClass($this->parameters['separator_class'])
            ->setTranslationDomain($this->parameters['translation_domain']);
    }

    /**
     * Add an item to the breadcrumb.
     *
     * @param string $text
     * @param string $link
     * @param string $classCss
     * @param string $append
     * @param string $prepend
     * @return $this
     */
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

    /**
     * Add an item at the biginning of the breadcrumb.
     *
     * @param $text
     * @param $link
     * @param null $classCss
     * @param null $append
     * @param null $prepend
     * @return $this
     */
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

    /**
     * @return $this
     */
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
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * Retrieves a parameter by its key.
     *
     * @param string $key
     * @return mixed|null
     */
    public function getParameter($key)
    {
        return (isset($this->parameters[$key])) ? $this->parameters[$key] : null;
    }

    /**
     * @return \GGTeam\BreadcrumbBundle\Model\Breadcrumb
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

}
