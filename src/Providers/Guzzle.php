<?php
namespace Rohiri\Guzzle\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

/**
 * Clase para registrar guzzle en los proovedores
 * de servicio.
 */
class Guzzle extends ServiceProvider
{
	/**
	 * Registro en el contenedor de servicio. Por lo tanto, siempre que la dependencia
	 * guzzle necesite resolverse, llamará a la función de cierre y creará la instancia
	 * y devolverá el objeto GuzzleHttp\Client.
	 * @return GuzzleHttp\Client;
	 */
    public function register()
    {
        $this->app->bind('guzzle', function () {
            $config = isset($this->app['config']['guzzle']) ? $this->app['config']['guzzle'] : [];
            return new Client($config);
        });
    }
}
