# Laravel Frontend preset for Materialize

[![Total Downloads](https://poser.pugx.org/leon0399/materialize-laravel-frontend-preset/downloads)](https://packagist.org/packages/leon0399/materialize-laravel-frontend-preset)
[![Latest Stable Version](https://poser.pugx.org/leon0399/materialize-laravel-frontend-preset/v/stable)](https://packagist.org/packages/leon0399/materialize-laravel-frontend-preset)
[![Latest Unstable Version](https://poser.pugx.org/leon0399/materialize-laravel-frontend-preset/v/unstable)](https://packagist.org/packages/leon0399/materialize-laravel-frontend-preset)
[![License](https://poser.pugx.org/leon0399/materialize-laravel-frontend-preset/license)](https://packagist.org/packages/leon0399/materialize-laravel-frontend-preset)

## Usage

1. Fresh install Laravel >= 5.7.0 and cd to your app.
2. Install this preset via `composer require leon0399/materialize-laravel-frontend-preset`. Laravel will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset materialize` for the basic Materialize preset **OR** use `php artisan preset materialize-auth` for the basic preset, auth route entry and Materialize auth views in one go. (NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `yarn && yarn dev`
5. Configure your favorite database (mysql, sqlite etc.)
6. `php artisan migrate` to create basic user tables.
7. `php artisan serve` (or equivalent) to run server and test preset.

## License

    MIT License

    Copyright (c) 2018 Leonid Meleshin

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all
    copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
    SOFTWARE.