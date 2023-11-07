<?php

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ContainerAttributeRoleTypeTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
class ContainerAttributeRoleTypeTest extends StructTestCase
{
    /**
     * @var ContainerAttributeRoleType
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ContainerAttributeRoleType(
            1234,
            'some name'
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(1234, $this->subject->getId());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }
}
