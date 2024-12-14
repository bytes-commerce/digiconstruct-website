<?php

declare(strict_types=1);

namespace DigiConstruct\WebsiteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

final class WebsiteBundle extends Bundle
{
    public function getPath(): string
    {
        $reflected = new \ReflectionObject($this);

        return \dirname($reflected->getFileName(), 2);
    }
}
