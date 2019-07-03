Wrike Bundle - Wrike API V3 & V4
=================================

Introduction
------------

**This is Symfony Bundle for [Wrike PHP Library](https://github.com/wedocreatives/wrike-php-library).**

* For general purpose please check [full configured Wrike PHP SDK](https://github.com/wedocreatives/wrike-php-sdk).
* For none standard purposes please check [generic Wrike PHP Library](https://github.com/wedocreatives/wrike-php-library).

Versions
--------
| Major Version | Wrike API | PHP Compatibility                  | Symfony Compatibility   | Initial release | Support                        |
|:-------------:|:---------:|:----------------------------------:|:-----------------------:|:---------------:|:------------------------------:|
| V2            | V4        | PHP 7.1, PHP 7.2, TBD              | Symfony3, Symfony4, TBD | October, 2018   | TBD                            |
| V1            | V3        | PHP 5.5, PHP 5.6, PHP 7.0, PHP 7.1 | Symfony2, Symfony3      | February, 2018  | Support ends on February, 2019 |

Project status
--------------

**General**

[![Packagist License](https://img.shields.io/packagist/l/wedocreatives/wrike-bundle.svg)](https://packagist.org/packages/wedocreatives/wrike-bundle)
[![Packagist Downloads](https://img.shields.io/packagist/dt/wedocreatives/wrike-bundle.svg)](https://packagist.org/packages/wedocreatives/wrike-bundle)
[![Packagist Version](https://img.shields.io/packagist/v/wedocreatives/wrike-bundle.svg)](https://packagist.org/packages/wedocreatives/wrike-bundle)
[![Packagist Version](https://img.shields.io/packagist/php-v/wedocreatives/wrike-bundle.svg)](https://packagist.org/packages/wedocreatives/wrike-bundle)
[![Libraries.io](https://img.shields.io/librariesio/github/wedocreatives/wrike-bundle.svg)](https://libraries.io/packagist/wedocreatives%2Fwrike-bundle)

[![CII Best Practices](https://bestpractices.coreinfrastructure.org/projects/1689/badge)](https://bestpractices.coreinfrastructure.org/projects/1689)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/4923a860-32a0-474a-887f-7766d8407b88/mini.png)](https://insight.sensiolabs.com/projects/4923a860-32a0-474a-887f-7766d8407b88)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/bddb2d36ac0943618178a65984252b12)](https://www.codacy.com/app/wedocreatives/wrike-bundle)
[![Code Climate Maintainability](https://api.codeclimate.com/v1/badges/ba535bca76c554597772/maintainability)](https://codeclimate.com/github/wedocreatives/wrike-bundle/maintainability)

**Branch 'master'**

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/wedocreatives/wrike-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/wedocreatives/wrike-bundle/?branch=master)
[![Scrutinizer Build Status](https://scrutinizer-ci.com/g/wedocreatives/wrike-bundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/wedocreatives/wrike-bundle/build-status/master)
[![Scrutinizer Code Coverage](https://scrutinizer-ci.com/g/wedocreatives/wrike-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/wedocreatives/wrike-bundle/?branch=master)
[![Travis Build Status](https://travis-ci.org/wedocreatives/wrike-bundle.svg?branch=master)](https://travis-ci.org/wedocreatives/wrike-bundle)
[![StyleCI](https://styleci.io/repos/82083702/shield?branch=master)](https://styleci.io/repos/82083702)
[![Coverage Status](https://coveralls.io/repos/github/wedocreatives/wrike-bundle/badge.svg?branch=master)](https://coveralls.io/github/wedocreatives/wrike-bundle?branch=master)

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require wedocreatives/wrike-bundle "^1.0"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

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

            new wedocreatives\Bundle\WrikeBundle\wedocreativesWrikeBundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: Set configuration
-------------------------
```yaml
wedocreatives_wrike:
    permanent_tokens:
        tokens:
            first: firstToken
            second: secondToken
        default_token: first
```

Step 4: Usage
-------------------------
```php
// @var ApiFactory
$apiFactory = $this->getContainer()->get('wedocreatives_wrike.api_factory');
// @var Api
$apiWithoutAccessToken = $this->getContainer()->get('wedocreatives_wrike.api');

// @var Api
$firstAppWithAccessToken = $this->getContainer()->get('wedocreatives_wrike.app.first');
// @var Api
$secondAppWithAccessToken = $this->getContainer()->get('wedocreatives_wrike.app.second');
```

Reference
---------

[Wrike PHP Library](https://github.com/wedocreatives/wrike-php-library)

[Wrike PHP SDK](https://github.com/wedocreatives/wrike-php-sdk)

Official [Wrike API Documentation](https://developers.wrike.com/documentation/api/overview)

License
-------

This bundle is available under the [MIT license](LICENSE).
