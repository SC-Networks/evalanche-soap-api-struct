<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class LeadpageSlotTest extends GenericSetterGetterTestCase
{
    /** @var LeadpageSlot|null */
    private $subject;
    
    public function setUp(): void
    {
        $this->subject = new LeadpageSlot();
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
