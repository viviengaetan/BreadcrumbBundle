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

    public function __construct($text, $link, $classCSS = null)
    {
        $this->text = $text;
        $this->link = $link;
        $this->classCSS = $classCSS;
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

} 