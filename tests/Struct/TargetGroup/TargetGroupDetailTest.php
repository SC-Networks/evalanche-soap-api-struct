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

    public function setUp()
    {
        $this->subject = new TargetGroupDetail(
            'some name',
            55
        );
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetProfileCountReturnInt()
    {
        $this->assertSame(55, $this->subject->getProfileCount());
    }

}
