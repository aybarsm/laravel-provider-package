<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage\Contracts;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

interface ProviderItemContract extends \JsonSerializable, Arrayable, Jsonable
{
    public function hasClass(): bool;
    public function hasPath(): bool;
    public function hasKey(): bool;
    public function hasPublishGroups(): bool;
    public function hasPublishBasePath(): bool;
    public function isPublishable(): bool;
    public function isDiscoverable(): bool;
    public function getClass(): ?string;
    public function getPath(): ?string;
    public function getKey(): ?string;
    public function getPublishGroups(): ?array;
    public function getPublishBasePath(): ?string;
    public function getPublishPath(): ?string;
    public function getIsDiscovered(): ?bool;

}
