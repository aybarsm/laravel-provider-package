<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage;
use Illuminate\Console\Command as LaravelCommand;

final class ProviderItemCommand extends namespace\AbstractProviderItem
{
    public readonly bool $consoleOnly;
    public function __construct(
        string|object $command,
        bool $consoleOnly = false,
    ){
        parent::__construct(
            class: $command,
            classIsSubOf: LaravelCommand::class,
        );
        $this->consoleOnly = $consoleOnly;
    }
}
