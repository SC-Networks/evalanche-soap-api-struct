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

    public function setUp()
    {
        $this->subject = new WorkflowDetail(
            56456,
            'some name',
            1531216185,
            1531216186,
            'some external id',
            4545,
            'some description',
            1,
            200
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(
            56456,
            $this->subject->getId()
        );
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetDateStartCanReturnInt()
    {
        $this->assertSame(1531216185, $this->subject->getDateStart());
    }

    public function testgetDateEndCanReturnInt()
    {
        $this->assertSame(1531216186, $this->subject->getDateEnd());
    }

    public function testGetExternalIdCanReturnString()
    {
        $this->assertSame('some external id', $this->subject->getExternalId());
    }

    public function testGetCategoryIdCanReturnInt()
    {
        $this->assertSame(4545, $this->subject->getCategoryId());
    }

    public function testGetDescriptionCanReturnString()
    {
        $this->assertSame('some description', $this->subject->getDescription());
    }

    public function testGetStateCanReturnInt()
    {
        $this->assertSame(1, $this->subject->getState());
    }

    public function testGetProfileCountCanReturnInt()
    {
        $this->assertSame(200, $this->subject->getProfileCount());
    }
}
