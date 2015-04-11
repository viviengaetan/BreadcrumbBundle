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
 * Interface BreadcrumbItemInterface
 *
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
interface BreadcrumbItemInterface
{
    /**
     * @return string
     */
    public function getLink();

    /**
     * @param string $link
     * @return $this
     */
    public function setLink($link);

    /**
     * @return string
     */
    public function getText();

    /**
     * @param string $text
     * @return $this
     */
    public function setText($text);

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
     * @return string
     */
    public function getAppendText();

    /**
     * @param string $text
     * @return $this
     */
    public function setAppendText($text);

    /**
     * @return string
     */
    public function getPrependText();

    /**
     * @param string $text
     * @return $this
     */
    public function setPrependText($text);
}
