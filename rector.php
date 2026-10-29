<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\PHPUnit\CodeQuality\Rector\MethodCall\AssertSameTrueFalseToAssertTrueFalseRector;
use Rector\PHPUnit\CodeQuality\Rector\MethodCall\UseSpecificWillMethodRector;
use Rector\PHPUnit\Set\PHPUnitSetList;

return RectorConfig::configure()
    ->withPreparedSets(deadCode: true, codeQuality: true)
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
        ClassPropertyAssignToConstructorPromotionRector::class,
    ])
    ->withRules([
        AssertSameTrueFalseToAssertTrueFalseRector::class,
        UseSpecificWillMethodRector::class,
    ]);
