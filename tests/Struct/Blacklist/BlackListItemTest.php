<?php

namespace Scn\EvalancheSoapStruct\Struct\Blacklist;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class BlackListItemTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Blacklist
 */
class BlackListItemTest extends StructTestCase
{
    /**
     * @var BlackListItem
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new BlackListItem(
            'some@email.de',
            'some description'
        );
    }

    public function testGetEmailCanReturnString(): void
    {
        self::assertSame('some@email.de', $this->subject->getEmail());
    }

    public function testGetDescriptionCanReturnString(): void
    {
        self::assertSame('some description', $this->subject->getDescription());
    }
}
