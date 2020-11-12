# :
[![License](https://img.shields.io/github/license/:tallandsassy/:team-means-family)](https://github.com/:tallandsassy/:team-means-family/blob/master/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/:tallandsassy/:team-means-family.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:team-means-family)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:tallandsassy/:team-means-family/run-tests?label=tests)](https://github.com/:tallandsassy/:team-means-family/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://coveralls.io/repos/github/:tallandsassy/:team-means-family/badge.svg?branch=master)](https://coveralls.io/github/:tallandsassy/:team-means-family?branch=master)

[![Total Downloads](https://img.shields.io/packagist/dt/:tallandsassy/:team-means-family.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:team-means-family)


Change wording so that "Team" is called "Family"

## Installation
Before installing a new package it's always a good idea to clear your config cache:
```bash
php artisan vendor:publish --provider="TallAndSassy\TeamMeansFamily\TeamMeansFamilyServiceProvider" --tag="lang"
mv resources/lang/vendor/TeamMeansFamilyServiceProvider/en.json resources/lang
php artisan vendor:publish --provider="TallAndSassy\TeamMeansFamily\TeamMeansFamilyServiceProvider" --tag="team-views" --force
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Credits

- [:jjrohrer](https://github.com/:jjrohrer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
