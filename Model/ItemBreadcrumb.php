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
 */
class ItemBreadcrumb
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
     * Css class of the node (<li>).
     * @var string
     */
    private $classCSS;

    /**
     * HTML after the text.
     * @var string
     */
    private $append;

    /**
     * HTML before the text.
     * @var string
     */
    private $prepend;

    /**
     * @param $text
     * @param $link
     * @param null $classCSS
     * @param null $append
     * @param null $prepend
     */
    public function __construct($text, $link, $classCSS = null, $append = null, $prepend = null)
    {
        $this->text = $text;
        $this->link = $link;
        $this->classCSS = $classCSS;
        $this->append = $append;
        $this->prepend = $prepend;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getClassCSS()
    {
        return $this->classCSS;
    }

    /**
     * @param string $classCSS
     * @return $this
     */
    public function setClassCSS($classCSS)
    {
        $this->classCSS = $classCSS;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppend()
    {
        return $this->append;
    }

    /**
     * @param string $append
     * @return $this
     */
    public function setAppend($append)
    {
        $this->append = $append;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrepend()
    {
        return $this->prepend;
    }

    /**
     * @param string $prepend
     * @return $this
     */
    public function setPrepend($prepend)
    {
        $this->prepend = $prepend;
        return $this;
    }

} 