<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage\Dto;

use Spatie\LaravelData\Data;

final class PackageMeta extends Data
{
    private string $author;
    private string $name;
    private string $version;
    private string $description;
    private string $basePath;
    public function __construct(
        string|\Stringable|null $author = null,
        string|\Stringable|null $name = null,
        string|\Stringable|null $version = null,
        string|\Stringable|null $description = null,
        string|\Stringable|null $basePath = null,
    )
    {

    }

    public static function rules(): array
    {
        return [
            'author' => ['required_with:name', 'string'],
            'name' => ['required_with:author', 'string'],
            'version' => ['required_with:author', 'string'],
            'description' => ['required_with:author', 'string'],
            'basePath' => ['required_with:author', 'string'],
        ];
    }
}
