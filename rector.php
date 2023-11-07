<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use Rector\CodeQuality\Rector\FuncCall\IntvalToTypeCastRector;
use Rector\Php74\Rector\LNumber\AddLiteralSeparatorToNumberRector;
use Rector\PHPUnit\CodeQuality\Rector\MethodCall\AssertSameTrueFalseToAssertTrueFalseRector;
use Rector\PHPUnit\CodeQuality\Rector\MethodCall\UseSpecificWillMethodRector;
use Rector\PHPUnit\PHPUnit80\Rector\MethodCall\SpecificAssertInternalTypeRector;
use Rector\PHPUnit\Rector\Class_\PreferPHPUnitSelfCallRector;

return RectorConfig::configure()
    ->withPreparedSets(deadCode: true, codeQuality: true)
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpSets($php82 = true)
    ->withRules([
        AddVoidReturnTypeWhereNoReturnRector::class,
        IntvalToTypeCastRector::class,
        AddLiteralSeparatorToNumberRector::class,
        SpecificAssertInternalTypeRector::class,
        AssertSameTrueFalseToAssertTrueFalseRector::class,
        PreferPHPUnitSelfCallRector::class,
        UseSpecificWillMethodRector::class,
    ]);
