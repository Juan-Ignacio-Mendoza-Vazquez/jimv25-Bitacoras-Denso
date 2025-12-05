<?php

namespace Tests;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Laravel\Dusk\TestCase as BaseTestCase;
use PHPUnit\Framework\Attributes\BeforeClass;

abstract class DuskTestCase extends BaseTestCase
{
    #[BeforeClass]
    public static function prepare(): void
    {
        if (! static::runningInSail()) {
            // Forzar el ChromeDriver correcto
            static::startChromeDriver([
                '--port=9515',
                '--allowed-ips=*',
            ]);
        }
    }

    protected function driver(): RemoteWebDriver
    {
        $options = new ChromeOptions();
        $options->addArguments([
            '--disable-gpu',
            '--window-size=1920,1080',
            '--no-sandbox',
            '--disable-dev-shm-usage',
            '--remote-allow-origins=*',       // <- NECESARIO EN CHROME 142+
        ]);

        // NO USAR HEADLESS HASTA QUE FUNCIONE
        // $options->addArguments(['--headless=new']);

        $capabilities = DesiredCapabilities::chrome();
        $capabilities->setCapability(ChromeOptions::CAPABILITY, $options);

        return RemoteWebDriver::create(
            'http://127.0.0.1:9515',     // IMPORTANTE: 127.0.0.1, no localhost
            $capabilities,
            90000,                       // timeout conexión
            90000                        // timeout respuesta
        );
    }
}
