<?php

namespace Scn\EvalancheSoapStruct\Struct\Scoring;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ScoringGroupDetailTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Scoring
 */
class ScoringGroupDetailTest extends StructTestCase
{
    /**
     * @var ScoringGroupDetail
     */
    private $subject;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->subject = new ScoringGroupDetail(
            1,
            'some name',
            3
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(1, $this->subject->getId());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetMandatorIdCanReturnInt()
    {
        $this->assertSame(3, $this->subject->getMandatorId());
    }
}
