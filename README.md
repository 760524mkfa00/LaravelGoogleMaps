# Google Maps for Laravel with Caching

[![Latest Version on Packagist](https://img.shields.io/packagist/v/760524mkfa00/laravelgooglemaps.svg?style=flat-square)](https://packagist.org/packages/760524mkfa00/laravelgooglemaps)
[![Total Downloads](https://img.shields.io/packagist/dt/760524mkfa00/laravelgooglemaps.svg?style=flat-square)](https://packagist.org/packages/760524mkfa00/laravelgooglemaps)
![GitHub Actions](https://github.com/760524mkfa00/laravelgooglemaps/actions/workflows/main.yml/badge.svg)
[![StyleCI](https://github.styleci.io/repos/367474224/shield?branch=master)](https://github.styleci.io/repos/367474224?branch=master)

Provides a nice wrapper for accessing the Google Maps API, including database caching of Lat and Long positions to reduce requests. You will require an API key from [Google Maps Platform](https://developers.google.com/maps)

## Installation

You can install the package via composer:

```bash
composer require 760524mkfa00/laravelgooglemaps
php artisan config:publish 760524mkfa00/laravelgooglemaps
php artisan migrate
```

Add 'GOOGLE_MAPS_API_KEY=xxxxxxxxxxxxxxxxxxxxxxx' to your .env file.

You can also add your AD Sense API Key to your .env file: 'GOOGLE_ADSENSE_PUBLISHER_ID=xxxxxxxxxxxxxxxxxxxx' (optional)

## Usage

```php
Editing Polygons:

Add the following css for deleting vertices on right click
.delete-menu {
    position: absolute;
    background: white;
    padding: 3px;
    color: #666;
    font-weight: bold;
    border: 1px solid #999;
    font-family: sans-serif;
    font-size: 12px;
    box-shadow: 1px 3px 3px rgba(0, 0, 0, 0.3);
    margin-top: -10px;
    margin-left: 10px;
    cursor: pointer;
}

.delete-menu:hover {
    background: #eee;
}
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email kieranjfahy@gmail.com instead of using the issue tracker.

## Credits

-   [Kieran Fahy](https://github.com/760524mkfa00)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
