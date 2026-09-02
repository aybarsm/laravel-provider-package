<?php

declare(strict_types=1);

namespace Aybarsm\Laravel\ProviderPackage;
use Aybarsm\Extra\Concerns\IsJsonable;
use Aybarsm\Laravel\ProviderPackage\Concerns\ProviderPackage\HasPackageDetails;
use Aybarsm\Laravel\ProviderPackage\Exceptions\ProviderPackageException;
use Illuminate\Support\Str;

final class ProviderPackage implements namespace\Contracts\ProviderPackageContract
{
    use IsJsonable;
    use HasPackageDetails;

//    public function __construct(
//        string|\Stringable $author,
//        string|\Stringable $name,
//        string|\Stringable $version = null
//    )
//    {
//        self::validateEssentials($author, $name);
//        $this->author = $author;
//        $this->name = $name;
//        self::setMetaData("package.{$this->author}.{$this->name}", true);
//        if (!is_null($version)) $this->version = $version;
//    }
//
//    public function __destruct()
//    {
//        foreach(['package', 'composer'] as $prefix){
//            self::unsetMetaData("{$prefix}.{$this->author}.{$this->name}");
//        }
//    }
//
//    private function resolveValue(mixed $value): mixed
//    {
//        return is_callable($value) ? call_user_func_array($value, [$this]) : $value;
//    }
//
//    private function requireFilled(mixed $value, string $prop): mixed
//    {
//        $value = $this->resolveValue($value);
//        throw_if(
//            blank($value),
//            ProviderPackageException::class,
//            sprintf('%s cannot be blank.', Str::title($prop))
//        );
//        return $value;
//    }
//
//    private static function validateEssentials(string $author, string $name): void
//    {
//        throw_if(
//            blank($author) or blank($name),
//            ProviderPackageException::class,
//            sprintf('Author and name are required for `%s`', static::class),
//        );
//
//        $pattern = '/^[a-zA-Z][a-zA-Z0-9-_]+$/';
//        throw_if(
//            !Str::isMatch($pattern, $author) || !Str::isMatch($pattern, $name),
//            ProviderPackageException::class,
//            sprintf('Author and name must match `%s` naming convention for `%s`', $pattern,  static::class),
//        );
//
//        throw_if(
//            static::getMetaData("package.{$author}.{$name}") === true,
//            ProviderPackageException::class,
//            sprintf('ProviderPackage of `%s` already registered for %s',  "{$author}/{$name}", static::class),
//        );
//    }
//
//    public function getComposerJson(int $depth = 512, int $flags = 0): ?array
//    {
//        if (!$this->hasComposer()) return null;
//
//        $content = self::getMetaData("composer.{$this->author}.{$this->name}");
//
//        if (blank($content)) {
//            $content = file_get_contents($this->getComposerPath());
//            self::setMetaData("composer.{$this->author}.{$this->name}", $content);
//        }
//
//        return json_decode(
//            json: $content,
//            associative: true,
//            depth: $depth,
//            flags: $flags
//        );
//    }

//    public function getBasePath(): string
//    {
//        return $this->basePath ?? $this->getProviderDir();
//    }
//
//    public function basePath(?string $directory = null): string
//    {
//        if (blank($directory)) {
//            return $this->getBasePath();
//        }
//
//        return fs_path($this->getBasePath(), $directory);
//    }

//    public static function make(mixed $value): static
//    {
//        $discovered = new DiscoveredValue($value);
//        $package = new static();
//
//        if ($discovered->isSubOf(ServiceProvider::class)) {
//            $package->setBasePath(dirname(new \ReflectionClass($value)->getFileName()));
//            $discovered->value = ;
//            dump([
//                'discovered' => $discovered,
//            ]);
//        }
//
//        return $package;
//    }
}
