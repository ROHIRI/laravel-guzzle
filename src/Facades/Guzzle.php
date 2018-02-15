<?php
namespace Rohiri\Guzzle\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Clase para registrar la fachada.
 */
class Guzzle extends Facade
{
	/**
	 * Define el nombre de la fachada.
	 * @return string
	 */
    protected static function getFacadeAccessor()
    {
        return 'guzzle';
    }
}
