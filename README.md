# Sylius Partner Ads Plugin

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]

This plugin will track sales made by Partner Ads affiliates.

It works by saving the affiliate partner id when the visitor visits any page on your shop. Then when the user successfully completes an order it will send a HTTP request to Partner Ads telling them to credit the affiliate partner.

## Installation

### Step 1: Download the plugin

Open a command console, enter your project directory and execute the following command to download the latest stable version of this plugin:

```bash
$ composer require setono/sylius-partner-ads-plugin
```

This command requires you to have Composer installed globally, as explained in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.

### Step 2: Enable the plugin

Then, enable the plugin by adding it to the list of registered plugins/bundles
in the `config/bundles.php` file of your project:

```php
<?php
# config/bundles.php
return [
    Setono\SyliusPartnerAdsPlugin\SetonoSyliusPartnerAdsPlugin::class => ['all' => true],
];
```

### Step 3: Go get 'em tiger!

# TODO
- [ ] Save a cookie with the partner id
- [ ] Send HTTP request to Partner Ads when the order is complete
- [ ] Send HTTP request to Partner Ads when an order is cancelled telling them to debit the affiliate partner

[ico-version]: https://img.shields.io/packagist/v/setono/sylius-partner-ads-plugin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://travis-ci.com/Setono/SyliusPartnerAdsPlugin.svg?branch=master
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Setono/SyliusPartnerAdsPlugin.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/setono/sylius-partner-ads-plugin
[link-travis]: https://travis-ci.com/Setono/SyliusPartnerAdsPlugin
[link-code-quality]: https://scrutinizer-ci.com/g/Setono/SyliusPartnerAdsPlugin