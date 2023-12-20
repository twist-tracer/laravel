<?php

namespace App\Patterns\Structural\DependencyInjection;

/**
 * Является клиентом в шаблоне внедрения зависимостей
 *
 * Class DatabaseConnection
 * @package App\Patterns\Structural\DependencyInjection
 */
class DatabaseConnection
{

    /**
     * Экземпляр сервиса
     * @var IConfiguration
     */
    private IConfiguration $configuration;

    public function __construct(IConfiguration $config)
    {
        $this->configuration = $config;
    }

    public function getDsn(): string
    {
        // this is just for the sake of demonstration, not a real DSN
        // notice that only the injected config is used here, so there is
        // a real separation of concerns here

        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}
