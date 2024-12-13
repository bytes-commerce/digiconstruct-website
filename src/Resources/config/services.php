<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container) {
    $services = $container->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure();

    $services->load('DigiConstruct\\WebsiteBundle\\', __DIR__.'/../*')
        ->exclude(__DIR__.'/../{DependencyInjection,Entity,Migrations,Tests,Resources}');
};
