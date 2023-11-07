<?php

namespace Scn\EvalancheSoapStruct\Struct\TargetGroup;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class TargetGroupMemberShipTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\TargetGroup
 */
class TargetGroupMemberShipTest extends StructTestCase
{
    /**
     * @var TargetGroupMemberShip
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new TargetGroupMemberShip(
            123,
            55
        );
    }

    public function testGetProfileIdCanReturnInt(): void
    {
        self::assertSame(123, $this->subject->getProfileId());
    }

    public function testGetTargetGroupIdReturnInt(): void
    {
        self::assertSame(55, $this->subject->getTargetGroupId());
    }
}
