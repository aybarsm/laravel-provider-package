<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage;

final class ProviderItemConfig extends namespace\AbstractProviderItem
{
    public function __construct(
        string|\Stringable $path,
        string|\Stringable $key,
        array $publishGroups = [],
        bool $isDiscovered = false,
    ){
        parent::__construct(
            path: $path,
            pathExtensions: 'php',
            key: $key,
            publishGroups: $publishGroups,
            publishBasePath: config_path(),
            isDiscovered: $isDiscovered,
        );
    }
}
