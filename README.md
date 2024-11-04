# VA Refrigeración
Sistema para carga de productos, marcas, tipos de productos, manejo de stock y ventas

## Features

- Product CRUD
- ProductBrand CRUD
- ProductType CRUD
- API
- Authentication by API & Views

## Installation

```sh
git clone https://github.com/Dantebian/va-refrigeration
cd va-refrigeration
cp .env.example .env
composer install
php artisan migrate
php artisan db:seed --class="ProductType"
npm install 
npm run dev

```

#### How to run pint

``` bash
./vendor/bin/pint
```

#### How to run test

``` bash
./vendor/bin/pest
```

#### Documentation

The API documentations are on postman collection

## Packages

This project is currently extended with the following packages.

| Plugin | README |
| ------ | ------ |
| Pint            | [https://laravel.com/docs/11.x/pint && https://cs.symfony.com/doc/rules/index.html] |
| PestPHP            | [https://pestphp.com/] |