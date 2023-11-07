<?php

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ContainerDetailTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
class ContainerDetailTest extends StructTestCase
{
    /**
     * @var ContainerDetail
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ContainerDetail(
            1,
            'some name',
            'some url',
            4,
            5,
            6,
            7
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

    public function testGetUrlCanReturnString(): void
    {
        self::assertSame('some url', $this->subject->getUrl());
    }

    public function testGetTypeIdCanReturnInt(): void
    {
        self::assertSame(4, $this->subject->getTypeId());
    }

    public function testGetFolderIdCanReturnInt(): void
    {
        self::assertSame(5, $this->subject->getFolderId());
    }

    public function testGetMandatorIdCanReturnInt(): void
    {
        self::assertSame(6, $this->subject->getMandatorId());
    }

    public function testGetContainerTypeIdCanReturnInt(): void
    {
        self::assertSame(7, $this->subject->getContainerTypeId());
    }
}
