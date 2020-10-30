# :
[![License](https://img.shields.io/github/license/:tallandsassy/:team-means-family)](https://github.com/:tallandsassy/:team-means-family/blob/master/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/:tallandsassy/:team-means-family.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:team-means-family)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:tallandsassy/:team-means-family/run-tests?label=tests)](https://github.com/:tallandsassy/:team-means-family/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://coveralls.io/repos/github/:tallandsassy/:team-means-family/badge.svg?branch=master)](https://coveralls.io/github/:tallandsassy/:team-means-family?branch=master)

[![Total Downloads](https://img.shields.io/packagist/dt/:tallandsassy/:team-means-family.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:team-means-family)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

Please send love

## Installation
Before installing a new package it's always a good idea to clear your config cache:

```bash
php artisan config:clear
```

Then install the package with composer:

You can install the package via composer:

[ ] Make a local table for testing called 'tmp_laravel_package' (per 'phpunit.xml')

```bash
composer require tallandsassy/team-means-family
```

You can publish and run the migrations with:

```bash
# in an editor, open  /vendor/tallandsassy/team-means-family/resources/lang/en.json
# copy and paste the values into your own copy of 'en.json' in '/resources/lang'
# if en.json doesn't already exist, then just copy the whole file.  
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="TallAndSassy\TeamMeansFamily\TeamMeansFamilyServiceProvider" --tag="config"
```

```bash
php artisan vendor:publish --provider="TallAndSassy\TeamMeansFamily\TeamMeansFamilyServiceProvider" --tag="lang"
```


You can grok the routes (when .env(local)) by visiting 
    
http://test-tallandsassy.test/grok/TallAndSassy/TeamMeansFamily/string
http://test-tallandsassy.test/grok/TallAndSassy/TeamMeansFamily/controller

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$team-means-family = new TallAndSassy\TeamMeansFamily();
echo $team-means-family->echoPhrase('Hello, TallAndSassy!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:jjrohrer](https://github.com/:jjrohrer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
