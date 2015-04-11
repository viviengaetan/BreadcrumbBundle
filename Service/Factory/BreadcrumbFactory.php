<?php

namespace GGTeam\BreadcrumbBundle\Service\Factory;

use GGTeam\BreadcrumbBundle\Model\BreadcrumbInterface;

/**
 * Class BreadcrumbFactory
 *
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
class BreadcrumbFactory
{
    /**
     * Initiliazes the breadcrumb with configuration.
     *
     * @param \GGTeam\BreadcrumbBundle\Model\BreadcrumbInterface $breadcrumb
     * @param array $configuration
     * @return \GGTeam\BreadcrumbBundle\Model\BreadcrumbInterface
     */
    public static function createBreadcrumb(BreadcrumbInterface $breadcrumb, array $configuration)
    {
        $breadcrumb
            ->setCssId($configuration['list']['css_id'])
            ->setCssClass($configuration['list']['css_class'])
            ->setSeparator($configuration['list']['separator'])
            ->setSeparatorClass($configuration['list']['separator_class'])
            ->setTranslationDomain($configuration['list']['translation_domain']);

        return $breadcrumb;
    }
}
