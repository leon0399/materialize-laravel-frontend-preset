# Laravel Frontend preset for Materialize

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE.md)

## Usage

1. Fresh install Laravel >= 5.7.0 and cd to your app.
2. Install this preset via `composer require leon0399/materialize-laravel-frontend-preset`. Laravel will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset materialize` for the basic Materialize preset **OR** use `php artisan preset materialize-auth` for the basic preset, auth route entry and Materialize auth views in one go. (NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `yarn && yarn dev`
5. Configure your favorite database (mysql, sqlite etc.)
6. `php artisan migrate` to create basic user tables.
7. `php artisan serve` (or equivalent) to run server and test preset.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.