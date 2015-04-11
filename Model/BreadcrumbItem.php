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
 * Class representing an item in the breadcrumb.
 *
 * @author Guillaume Garcia <garciaguillaume69@gmail.com>
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
class BreadcrumbItem implements BreadcrumbItemInterface
{
    /**
     * Text of item.
     * @var string
     */
    private $text;

    /**
     * Link for this item.
     * @var string
     */
    private $link;

    /**
     * Css class of the node.
     * @var string
     */
    private $cssClass;

    /**
     * HTML after the text.
     * @var string
     */
    private $appendText;

    /**
     * HTML before the text.
     * @var string
     */
    private $prependText;

    /**
     * {@inheritdoc}
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * {@inheritdoc}
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * {@inheritdoc}
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

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
    public function getAppendText()
    {
        return $this->appendText;
    }

    /**
     * {@inheritdoc}
     */
    public function setAppendText($append)
    {
        $this->appendText = $append;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrependText()
    {
        return $this->prependText;
    }

    /**
     * {@inheritdoc}
     */
    public function setPrependText($text)
    {
        $this->prependText = $text;
        return $this;
    }

}
