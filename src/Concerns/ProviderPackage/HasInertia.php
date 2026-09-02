<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage\Concerns\ProviderPackage;

trait HasInertia
{
    public bool $hasInertiaComponents = false;

    public function hasInertiaComponents(?string $namespace = null): static
    {
        $this->hasInertiaComponents = true;

        $this->viewNamespace = $namespace;

        return $this;
    }
}
