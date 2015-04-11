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
 * Class AbstractBreadcrumb
 *
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
abstract class AbstractBreadcrumb implements BreadcrumbInterface
{
    /**
     * List of ItemBreadcrumb.
     * @var \GGTeam\BreadcrumbBundle\Model\BreadcrumbItemInterface[]
     */
    protected $items = array();

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * {@inheritdoc}
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(BreadcrumbItemInterface $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function prependItem(BreadcrumbItemInterface $item)
    {
        array_unshift($this->items, $item);

        return $this;
    }

    /**
     * {@inheritdoc}
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
