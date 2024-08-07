<?php

namespace Scn\EvalancheSoapStruct\Struct\Mandator;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MandatorTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mandator
 */
class MandatorTest extends StructTestCase
{
    /**
     * @var Mandator
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new Mandator(
            55,
            'some name',
            'some domain'
        );
    }

    public function testGetIdCanReturnId(): void
    {
        self::assertSame(55, $this->subject->getId());
    }

    public function testGetNameCanReturnName(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetDomainCanReturnDomain(): void
    {
        self::assertSame('some domain', $this->subject->getDomain());
    }
}
