<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage\Concerns\ProviderPackage;

trait HasTranslations
{
    public bool $hasTranslations = false;

    public function hasTranslations(): static
    {
        $this->hasTranslations = true;

        return $this;
    }
}
