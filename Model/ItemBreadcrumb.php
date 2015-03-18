<?php

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
     * Domain Translation for Item Text
     * @var string
     */
    private $translateDomain;

    public function __construct($text, $link, $classCSS = null, $translateDomain = null)
    {
        $this->text = $text;
        $this->link = $link;
        $this->classCSS = $classCSS;
        $this->translateDomain = $translateDomain;
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
    public function getTranslateDomain()
    {
        return $this->translateDomain;
    }

    /**
     * @param string $translateDomain
     * @return ItemBreadcrumb
     */
    public function setTranslateDomain($translateDomain)
    {
        $this->translateDomain = $translateDomain;
        return $this;
    }

} 