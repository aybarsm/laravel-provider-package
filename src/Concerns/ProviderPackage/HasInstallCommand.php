<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage\Concerns\ProviderPackage;

use Spatie\LaravelPackageTools\Commands\InstallCommand;

trait HasInstallCommand
{
    public function hasInstallCommand($callable): static
    {
        $installCommand = new InstallCommand($this);

        $callable($installCommand);

        $this->consoleCommands[] = $installCommand;

        return $this;
    }
}
