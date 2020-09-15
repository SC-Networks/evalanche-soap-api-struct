<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct;

abstract class GenericSetterGetterTestCase extends StructTestCase
{

    /**
     * @dataProvider methodDataProvider
     */
    public function testSetterAndGetter(
        string $method,
        string $testDatatype
    ): void {
        $value = $this->getTestData($testDatatype);
        
        $subject = $this->getSubject();

        call_user_func_array([$subject, 'set'.$method], [$value]);

        $this->assertSame(
            $value,
            call_user_func_array([$subject, 'get'.$method], [])
        );
    }
    
    private function getTestData(string $testDataType)
    {
        switch ($testDataType) {
            case 'int':
                return 666;
            case 'array':
                return ['some-data'];
            case 'string':
            default:
                return 'some-value';
        }
    }

    abstract public function methodDataProvider(): array;
    
    abstract protected function getSubject();
}
