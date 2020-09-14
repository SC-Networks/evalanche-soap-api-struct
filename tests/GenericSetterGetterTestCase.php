<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct;

abstract class GenericSetterGetterTestCase extends StructTestCase
{

    /**
     * @dataProvider methodDataProvider
     */
    public function testSetterAndGetter(
        string $method
    ): void {
        $value = 'some-value';
        $subject = $this->getSubject();

        call_user_func_array([$subject, 'set'.$method], [$value]);

        $this->assertSame(
            $value,
            call_user_func_array([$subject, 'get'.$method], [])
        );
    }

    abstract public function methodDataProvider(): array;
    
    abstract protected function getSubject();
}
