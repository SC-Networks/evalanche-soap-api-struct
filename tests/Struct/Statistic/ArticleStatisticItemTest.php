<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class ArticleStatisticItemTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class ArticleStatisticItemTest extends StructTestCase
{
    /**
     * @var ArticleStatisticItem
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ArticleStatisticItem(
            777,
            'some name',
            444,
            666
        );
    }

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(777, $this->subject->getId());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testGetClickCountCanReturnInt()
    {
        $this->assertSame(444, $this->subject->getClickCount());
    }

    public function testGetUniqueClickCountCanReturnInt()
    {
        $this->assertSame(666, $this->subject->getUniqueClickCount());
    }
}
