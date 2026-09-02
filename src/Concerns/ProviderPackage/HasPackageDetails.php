<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage\Concerns\ProviderPackage;

trait HasPackageDetails
{
    private string $author {
        get => $this->author ?? null;
        set(string|\Stringable $val) => (string) $this->requireFilled($val, 'Package author');
    }
    private string $name {
        get => $this->name ?? null;
        set(string|\Stringable $val) => (string) $this->requireFilled($val, 'Package name');
    }
    private string $version {
        get => $this->version ?? null;
        set(string|\Stringable|\Closure $val) => (string) $this->requireFilled($val, 'Package version');
    }
}
