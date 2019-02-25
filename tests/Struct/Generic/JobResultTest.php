<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class JobResultTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class JobResultTest extends StructTestCase
{
    /**
     * @var JobResult
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new JobResult(
            'some id',
            4,
            'some description',
            'some namespace',
            'some method',
            4,
            76,
            [
                $this->getMockBuilder(HashMapInterface::class)->getMock(),
                $this->getMockBuilder(HashMapInterface::class)->getMock()
            ],
            500,
            1000
        );
    }

    public function testGetIdCanReturnString()
    {
        $this->assertSame('some id', $this->subject->getId());
    }

    public function testGetStatusCanReturnInt()
    {
        $this->assertSame(4, $this->subject->getStatus());
    }

    public function testGetStatusDescriptionCanReturnString()
    {
        $this->assertSame('some description', $this->subject->getStatusDescription());
    }

    public function testGetNamespaceCanReturnString()
    {
        $this->assertSame('some namespace', $this->subject->getNamespace());
    }

    public function testGetMethodCanReturnString()
    {
        $this->assertSame('some method', $this->subject->getMethod());
    }

    public function testGetResourceIdCanReturnInt()
    {
        $this->assertSame(4, $this->subject->getResourceId());
    }

    public function testGetResultChunksCanReturnInt()
    {
        $this->assertSame(76, $this->subject->getResultChunks());
    }

    public function testGetResultCanReturnArrayOfHashMapInterface()
    {
        $this->assertCount(2, $this->subject->getResult());
        $this->assertContainsOnlyInstancesOf(HashMapInterface::class, $this->subject->getResult());
    }

    public function testGetChunksLeftCanReturnInt()
    {
        $this->assertSame(500, $this->subject->getChunksLeft());
    }

    public function testGetResultSizeCanReturnInt()
    {
        $this->assertSame(1000, $this->subject->getResultSize());
    }
}
