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

    public function setUp(): void
    {
        $this->subject = new ScoringGroupDetail(
            1,
            'some name',
            3
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(1, $this->subject->getId());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetMandatorIdCanReturnInt(): void
    {
        self::assertSame(3, $this->subject->getMandatorId());
    }
}
