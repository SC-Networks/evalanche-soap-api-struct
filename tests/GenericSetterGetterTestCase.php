<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct;

use PHPUnit\Framework\Attributes\DataProvider;

abstract class GenericSetterGetterTestCase extends StructTestCase
{

    #[DataProvider('methodDataProvider')]
    public function testSetterAndGetter(
        string $method,
        string $testDatatype
    ): void {
        $value = $this->getTestData($testDatatype);
        
        $subject = $this->getSubject();

        call_user_func_array([$subject, 'set'.$method], [$value]);

        self::assertSame($value, call_user_func_array([$subject, 'get'.$method], []));
    }
    
    private function getTestData(string $testDataType)
    {
        return match ($testDataType) {
            'int' => 666,
            'array' => ['some-data'],
            default => 'some-value',
        };
    }

    abstract public static function methodDataProvider(): array;
    
    abstract protected function getSubject();
}
