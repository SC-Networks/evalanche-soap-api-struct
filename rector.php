<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php81\Rector\Property\ReadOnlyPropertyRector;
use Rector\PHPUnit\CodeQuality\Rector\MethodCall\AssertSameTrueFalseToAssertTrueFalseRector;
use Rector\PHPUnit\CodeQuality\Rector\MethodCall\UseSpecificWillMethodRector;
use Rector\PHPUnit\Set\PHPUnitSetList;

return RectorConfig::configure()
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true
    )
    ->withIndent()
    ->withImportNames()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpSets(php83: true)
    ->withSets([
        PHPUnitSetList::COMPOSER_BASED,
    ])
    ->withSkip([
        ReadOnlyPropertyRector::class, // skipped due to hydration will require writable properties
    ])
    ->withRules([
        AssertSameTrueFalseToAssertTrueFalseRector::class,
        UseSpecificWillMethodRector::class,
    ]);
