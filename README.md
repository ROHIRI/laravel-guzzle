# LaraGuzz
[![Licencia](https://img.shields.io/packagist/l/Rohiri/laraguzz.svg)](https://packagist.org/packages/rohiri/laraguzz)
[![Downloads](https://img.shields.io/packagist/dt/Rohiri/laraguzz.svg)](https://packagist.org/packages/rohiri/laraguzz)
[![Version](https://img.shields.io/packagist/v/Rohiri/laraguzz.svg)](https://packagist.org/packages/rohiri/laraguzz)
[![PHP](https://img.shields.io/packagist/php-v/Rohiri/laraguzz.svg)](https://packagist.org/packages/rohiri/laraguzz)

## Instalar con Composer:

### Guzzle ~1.0
```sh
composer require rohiri/laraguzz
```

## Registrar el proveedor de servicio.

*/configs/app.php*

```php
    ...
    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        ...

        /*
         * Application Service Providers...
         */
        ...
        'Rohiri\Guzzle\Providers\Guzzle'
    ],
```


## Activar la Fachada

*/configs/app.php*

```php
    ...
    'aliases' => [
        ...
        'Guzzle' => 'Rohiri\Guzzle\Facades\Guzzle'
    ],
```

## Como Usarlo?

### Enviar Petición

```php

  $respuesta = \Guzzle::get('https://youtube.com');
```

### POST
```php
$response = Guzzle::post(
    'https://my.app/test',
    [
        'form_params' => [
            'user' => pepito,
            'pass' => 1
        ]
    ]
);
```