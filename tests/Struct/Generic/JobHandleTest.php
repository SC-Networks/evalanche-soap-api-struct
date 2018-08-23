<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class JobHandleTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class JobHandleTest extends StructTestCase
{
    /**
     * @var JobHandle
     */
    private $subject;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->subject = new JobHandle(
            'some id',
            4,
            'some description',
            'some namespace',
            'some method',
            4,
            76
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

}
