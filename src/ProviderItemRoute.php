<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage;
final class ProviderItemRoute extends namespace\AbstractProviderItem
{
    public function __construct(
        string|\Stringable $path,
        bool $isDiscovered = false,
    ){
        parent::__construct(
            path: $path,
            pathExtensions: 'php',
            isDiscovered: $isDiscovered,
        );
    }
}
