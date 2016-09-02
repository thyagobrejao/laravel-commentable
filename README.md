# Laravel-Commentable

[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)
[![Total Downloads](https://img.shields.io/packagist/dt/thyagobrejao/laravel-commentable.svg?style=flat-square)](https://packagist.org/packages/thyagobrejao/laravel-commentable)

Laravel Commentable adds polymorphic threaded comments to Laravel 5.1 and above. (based on dead slynova/laravel-commentable)

This package use Nested Set pattern with [Baum](https://github.com/etrepat/baum).<br>
[More information about Nested Set](http://en.wikipedia.org/wiki/Nested_set_model)

# Table of Contents

* [Requirements](#requirements)
* [Getting Started](#getting-started)
* [Example](#example)
* [Change Logs](#change-logs)
* [Contribution Guidelines](#contribution-guidelines)

# <a name="requirements"></a>Requirements

* As Laravel 5.1 require PHP 5.5.9+, we required the same version.

# <a name="getting-started"></a>Getting Started

1. Require the package with [Composer](https://getcomposer.org).
    ```shell
    $ composer require slynova/laravel-commentable
    ```

2. Add the package to your application service providers in `config/app.php`.
    ```php
    'providers' => [

        Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
        Illuminate\Auth\AuthServiceProvider::class,
        ...
        Slynova\Commentable\ServiceProvider::class,

    ],
    ```

3. Publish the package's migrations to your application and migrate.
    ```shell
    $ php artisan vendor:publish --provider="Slynova\Commentable\ServiceProvider" --tag="migrations"
    $ php artisan migrate
    ```

# <a name="example"></a>Example

TODO
# <a name="change-logs"></a>Change Logs

Nothing has been changed from the first release.

# <a name="contribution-guidelines"></a>Contribution Guidelines

Support follows PSR-2 PHP coding standards, and semantic versioning.

Please report any issue you find in the issues page.
Pull requests are welcome.
