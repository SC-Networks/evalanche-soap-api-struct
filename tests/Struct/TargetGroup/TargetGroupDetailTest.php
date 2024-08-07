<?php

namespace Scn\EvalancheSoapStruct\Struct\TargetGroup;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class TargetGroupDetailTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\TargetGroup
 */
class TargetGroupDetailTest extends StructTestCase
{
    /**
     * @var TargetGroupDetail
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new TargetGroupDetail(
            'some name',
            55
        );
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetProfileCountReturnInt(): void
    {
        self::assertSame(55, $this->subject->getProfileCount());
    }
}
