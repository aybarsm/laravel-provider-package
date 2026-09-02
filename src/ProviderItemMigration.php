<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage;

final class ProviderItemMigration extends namespace\AbstractProviderItem
{
    public function __construct(
        string|\Stringable $path,
        array $publishGroups = [],
        bool $isDiscovered = false,
    ){
        parent::__construct(
            path: $path,
            pathExtensions: 'php',
            publishGroups: $publishGroups,
            isDiscovered: $isDiscovered
        );
    }
}
