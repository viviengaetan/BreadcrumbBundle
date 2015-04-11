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
 * Interface BreadcrumbInterface
 *
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
interface BreadcrumbInterface extends \Iterator, \ArrayAccess, \Countable
{
    /**
     * @return string
     */
    public function getCssClass();

    /**
     * @param string $cssClass
     * @return $this
     */
    public function setCssClass($cssClass);

    /**
     * @return array
     */
    public function getItems();

    /**
     * @param array $items
     * @return $this
     */
    public function setItems($items);

    /**
     * Add an item at the end of the breadcrumb.
     *
     * @param BreadcrumbItemInterface $item
     * @return $this
     */
    public function addItem(BreadcrumbItemInterface $item);

    /**
     * Add an item at the beginning of the breadcrumb.
     *
     * @param BreadcrumbItemInterface $item
     * @return $this
     */
    public function prependItem(BreadcrumbItemInterface $item);

    /**
     * @return string
     */
    public function getCssId();

    /**
     * @param string $cssId
     * @return $this
     */
    public function setCssId($cssId);

    /**
     * @return string
     */
    public function getSeparator();

    /**
     * @param string $separator
     * @return $this
     */
    public function setSeparator($separator);

    /**
     * @return string
     */
    public function getSeparatorClass();

    /**
     * @param string $separatorClass
     * @return $this
     */
    public function setSeparatorClass($separatorClass);

    /**
     * @return string
     */
    public function getTranslationDomain();

    /**
     * @param string $translationDomain
     * @return $this
     */
    public function setTranslationDomain($translationDomain);

    /**
     * @return $this
     */
    public function clear();
}
