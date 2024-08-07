<?php

namespace Scn\EvalancheSoapStruct\Struct\Article;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ArticleDetailTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Article
 */
class ArticleDetailTest extends StructTestCase
{
    /**
     * @var ArticleDetail
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ArticleDetail(
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

    public function testGetArticleTypeIdCanReturnInt(): void
    {
        self::assertSame(7, $this->subject->getArticleTypeId());
    }
}
