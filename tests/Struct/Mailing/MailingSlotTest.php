<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class MailingSlotTest extends GenericSetterGetterTestCase
{
    /** @var MailingSlot|null */
    private $subject;
    
    public function setUp(): void
    {
        $this->subject = new MailingSlot();
    }

    public static function methodDataProvider(): array
    {
        return [
            ['Id', 'int'],
            ['Name', 'string'],
            ['SlotNumber', 'int'],
            ['SortTypeId', 'int'],
            ['SortTypeValue', 'int'],
            ['Items', 'array']
        ];
    }

    protected function getSubject()
    {
        return $this->subject;
    }
}
