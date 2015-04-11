Status
======

[![License](https://poser.pugx.org/ggteam/breadcrumbbundle/license.svg)](https://packagist.org/packages/ggteam/breadcrumbbundle)
  
[![Build Status](https://travis-ci.org/GGTeam/BreadcrumbBundle.svg?branch=master)](https://travis-ci.org/GGTeam/BreadcrumbBundle) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/4a12624c-7bfd-43e0-9f26-0926cabc1451/mini.png)](https://insight.sensiolabs.com/projects/4a12624c-7bfd-43e0-9f26-0926cabc1451) [![Coverage Status](https://coveralls.io/repos/GGTeam/BreadcrumbBundle/badge.svg)](https://coveralls.io/r/GGTeam/BreadcrumbBundle)
  
[![Latest Stable Version](https://poser.pugx.org/ggteam/breadcrumbbundle/v/stable.svg)](https://packagist.org/packages/ggteam/breadcrumbbundle) [![Total Downloads](https://poser.pugx.org/ggteam/breadcrumbbundle/downloads.svg)](https://packagist.org/packages/ggteam/breadcrumbbundle)


Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require ggteam/breadcrumbbundle "~1"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding the following line in the `app/AppKernel.php`
file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new GGTeam\BreadcrumbBundle\GGTeamBreadcrumbBundle(),
        );

        // ...
    }

    // ...
}
```
