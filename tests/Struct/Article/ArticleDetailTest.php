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

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(1, $this->subject->getId());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetUrlCanReturnString()
    {
        $this->assertSame('some url', $this->subject->getUrl());
    }

    public function testGetTypeIdCanReturnInt()
    {
        $this->assertSame(4, $this->subject->getTypeId());
    }

    public function testGetFolderIdCanReturnInt()
    {
        $this->assertSame(5, $this->subject->getFolderId());
    }

    public function testGetMandatorIdCanReturnInt()
    {
        $this->assertSame(6, $this->subject->getMandatorId());
    }

    public function testGetArticleTypeIdCanReturnInt()
    {
        $this->assertSame(7, $this->subject->getArticleTypeId());
    }
}
