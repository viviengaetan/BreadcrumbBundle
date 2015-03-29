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
 */
class Breadcrumb implements \Iterator, \ArrayAccess, \Countable
{

    /**
     * List of ItemBreadcrumb.
     * @var array[ItemBreadcrumb]
     */
    private $items = array();

    /**
     * Id used in CSS.
     * @var string
     */
    private $id;

    /**
     * CSS class of <ul> element.
     * @var string
     */
    private $classCSS;

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
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Add an item to the Breadcrumb.
     *
     * @param string $text
     * @param string $link
     * @param string $classCss
     * @param null $append
     * @param null $prepend
     * @return $this
     */
    public function addItem($text, $link, $classCss = null, $append = null, $prepend = null)
    {
        $item = new ItemBreadcrumb($text, $link, $classCss, $append, $prepend);
        $this->items[] = $item;

        return $this;
    }

    /**
     * Add an item at the beginning of the breadcrumb.
     *
     * @param string $text
     * @param string $link
     * @param string $classCss
     * @param null $append
     * @param null $prepend
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setTranslationDomain($translationDomain)
    {
        $this->translationDomain = $translationDomain;

        return $this;
    }


    /**
     * @return $this
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