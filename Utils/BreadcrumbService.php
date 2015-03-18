<?php

namespace GGTeam\BreadcrumbBundle\Utils;

use Symfony\Component\DependencyInjection\ContainerInterface;
use GGTeam\BreadcrumbBundle\Model\Breadcrumb;

class BreadcrumbService
{

    private $container;

    private $breadcrumb;

    public function __construct(ContainerInterface $container)
    {

        $this->container = $container;
        $this->breadcrumb = new Breadcrumb();
    }

    public function addItem()
    {

    }

    public function prependItem()
    {

    }

    public function clear()
    {

    }

    /**
     * @return Breadcrumb
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

}