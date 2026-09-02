<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage\Concerns\ProviderPackage;

trait HasViewSharedData
{
    public array $sharedViewData = [];

    public function sharesDataWithAllViews(string $name, $value): static
    {
        $this->sharedViewData[$name] = $value;

        return $this;
    }
}
