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

namespace GGTeam\BreadcrumbBundle\Model;

/**
 * Model class for a breadcrumb.
 *
 * @author Guillaume Garcia <garciaguillaume69@gmail.com>
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
class Breadcrumb extends AbstractBreadcrumb
{
    /**
     * Id used in CSS.
     * @var string
     */
    private $cssId;

    /**
     * CSS class of <ul> element.
     * @var string
     */
    private $cssClass;

    /**
     * The separator between each item.
     * @var string
     */
    private $separator;

    /**
     * CSS class of the separator.
     * @var string
     */
    private $separatorClass;

    /**
     * The translation domain used for the breadcrumb.
     * @var string
     */
    private $translationDomain;

    /**
     * {@inheritdoc}
     */
    public function getCssClass()
    {
        return $this->cssClass;
    }

    /**
     * {@inheritdoc}
     */
    public function setCssClass($cssClass)
    {
        $this->cssClass = $cssClass;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCssId()
    {
        return $this->cssId;
    }

    /**
     * {@inheritdoc}
     */
    public function setCssId($cssId)
    {
        $this->cssId = $cssId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSeparator()
    {
        return $this->separator;
    }

    /**
     * {@inheritdoc}
     */
    public function setSeparator($separator)
    {
        $this->separator = $separator;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSeparatorClass()
    {
        return $this->separatorClass;
    }

    /**
     * {@inheritdoc}
     */
    public function setSeparatorClass($separatorClass)
    {
        $this->separatorClass = $separatorClass;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTranslationDomain()
    {
        return $this->translationDomain;
    }

    /**
     * {@inheritdoc}
     */
    public function setTranslationDomain($translationDomain)
    {
        $this->translationDomain = $translationDomain;

        return $this;
    }
}
