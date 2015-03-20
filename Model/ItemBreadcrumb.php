<?php

namespace GGTeam\BreadcrumbBundle\Model;

class ItemBreadcrumb
{
    /**
     * Text of Item
     * @var string
     */
    private $text;

    /**
     * Link for this Item
     * @var string
     */
    private $link;

    /**
     * Class Css of node (<li>)
     * @var string
     */
    private $classCSS;

    /**
     * html after Text
     * @var string
     */
    private $append;

    /**
     * html before Text
     * @var string
     */
    private $prepend;

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
     * @return ItemBreadcrumb
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
     * @return ItemBreadcrumb
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
     * @return ItemBreadcrumb
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
     * @return ItemBreadcrumb
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
     * @return ItemBreadcrumb
     */
    public function setPrepend($prepend)
    {
        $this->prepend = $prepend;
        return $this;
    }

} 