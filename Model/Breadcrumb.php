<?php

namespace GGTeam\BreadcrumbBundle\Model;

class Breadcrumb implements \Iterator, \ArrayAccess, \Countable
{

    /**
     * list of ItemBreadcrumb
     * @var array
     */
    private $items = array();

    /**
     * Id use in CSS
     * @var string
     */
    private $id;

    /**
     * Class CSS of element <ul>
     * @var string
     */
    private $classCSS;

    /**
     * the separator between each item
     * @var string
     */
    private $separator;

    /**
     * class CSS of separator
     * @var string
     */
    private $separatorClass;

    /**
     * the translation domain used for breadcrumb
     * @var string
     */
    private $translationDomain;

    /**
     * @return mixed
     */
    public function getClassCSS()
    {
        return $this->classCSS;
    }

    /**
     * @param mixed $classCSS
     * @return Breadcrumb
     */
    public function setClassCSS($classCSS)
    {
        $this->classCSS = $classCSS;
        return $this;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return Breadcrumb
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * Add Item to Breadcrumb
     * @param string $text
     * @param string $link
     * @param string $classCss
     * @param null $append
     * @param null $prepend
     * @return Breadcrumb
     */
    public function addItem($text, $link, $classCss = null, $append = null, $prepend = null)
    {
        $item = new ItemBreadcrumb($text, $link, $classCss, $append, $prepend);
        $this->items[] = $item;
        return $this;
    }

    /**
     * @param string $text
     * @param string $link
     * @param string $classCss
     * @param null $append
     * @param null $prepend
     * @return Breadcrumb
     */
    public function prependItem($text, $link, $classCss = null, $append = null, $prepend = null)
    {
        $item = new ItemBreadcrumb($text, $link, $classCss, $append, $prepend);
        array_unshift($this->items, $item);
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Breadcrumb
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeparator()
    {
        return $this->separator;
    }

    /**
     * @param string $separator
     * @return Breadcrumb
     */
    public function setSeparator($separator)
    {
        $this->separator = $separator;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeparatorClass()
    {
        return $this->separatorClass;
    }

    /**
     * @param string $separatorClass
     * @return Breadcrumb
     */
    public function setSeparatorClass($separatorClass)
    {
        $this->separatorClass = $separatorClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranslationDomain()
    {
        return $this->translationDomain;
    }

    /**
     * @param string $translationDomain
     * @return Breadcrumb
     */
    public function setTranslationDomain($translationDomain)
    {
        $this->translationDomain = $translationDomain;
        return $this;
    }


    /**
     * @return Breadcrumb
     */
    public function clear()
    {
        $this->items = array();
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function current()
    {
        return current($this->items);
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        return next($this->items);
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        return key($this->items);
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return key($this->items) !== null;
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        return rewind($this->items);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        return isset($this->items);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return (isset($this->items[$offset])) ? $this->items[$offset] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $this->items[$offset] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return count($this->items);
    }
}