<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage\Contracts;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
interface ProviderPackageContract extends \JsonSerializable, Arrayable, Jsonable
{

}
