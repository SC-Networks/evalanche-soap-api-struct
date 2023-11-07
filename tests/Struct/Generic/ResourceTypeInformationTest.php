<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ResourceTypeInformationTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class ResourceTypeInformationTest extends StructTestCase
{
    /**
     * @var ResourceTypeInformation
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ResourceTypeInformation(
            1235,
            'some description'
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(1235, $this->subject->getId());
    }

    public function testGetDescriptionCanReturnString(): void
    {
        self::assertSame('some description', $this->subject->getDescription());
    }
}
