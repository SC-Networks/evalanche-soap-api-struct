<?php

namespace Scn\EvalancheSoapStruct\Struct\Workflow;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class WorkflowDetailTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Workflow
 */
class WorkflowDetailTest extends StructTestCase
{
    /**
     * @var WorkflowDetail
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new WorkflowDetail(
            56456,
            'some name',
            1_531_216_185,
            1_531_216_186,
            'some external id',
            4545,
            'some description',
            1,
            200
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(56456, $this->subject->getId());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testGetDateStartCanReturnInt(): void
    {
        self::assertSame(1_531_216_185, $this->subject->getDateStart());
    }

    public function testgetDateEndCanReturnInt(): void
    {
        self::assertSame(1_531_216_186, $this->subject->getDateEnd());
    }

    public function testGetExternalIdCanReturnString(): void
    {
        self::assertSame('some external id', $this->subject->getExternalId());
    }

    public function testGetFolderIdCanReturnInt(): void
    {
        self::assertSame(4545, $this->subject->getFolderId());
    }

    public function testGetDescriptionCanReturnString(): void
    {
        self::assertSame('some description', $this->subject->getDescription());
    }

    public function testGetStateCanReturnInt(): void
    {
        self::assertSame(1, $this->subject->getState());
    }

    public function testGetProfileCountCanReturnInt(): void
    {
        self::assertSame(200, $this->subject->getProfileCount());
    }
}
