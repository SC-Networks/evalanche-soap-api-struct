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

    public function setUp()
    {
        $this->subject = new BlackListItem(
            'some@email.de',
            'some description'
        );
    }

    public function testGetEmailCanReturnString()
    {
        $this->assertSame('some@email.de', $this->subject->getEmail());
    }

    public function testGetDescriptionCanReturnString()
    {
        $this->assertSame('some description', $this->subject->getDescription());
    }
}
