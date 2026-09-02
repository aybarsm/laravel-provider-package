<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage\Concerns\ProviderPackage;
use Aybarsm\Laravel\ProviderPackage\ProviderItemCommand;

trait HasCommands
{
    /** @var array<string, ProviderItemCommand> */
    protected array $commands = [];

    public function hasCommands(): bool
    {
        return count($this->commands) > 0;
    }
    public function getCommands(): ?array
    {
        return $this->hasCommands() ? $this->commands : null;
    }
    public function addCommand(
        string|object $command,
        bool $consoleOnly = false,
    ): static
    {
        $item = new ProviderItemCommand($command, $consoleOnly);
        $this->commands[$item->class] = $item;
        return $this;
    }

    public function addCommands(
        bool $consoleOnly = false,
        string|object ...$commands
    ): static
    {
        foreach($commands as $command) {
            $this->addCommand($command, $consoleOnly);
        }
        return $this;
    }
}
