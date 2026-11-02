<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class LeadpageSlotConfigurationTest extends GenericSetterGetterTestCase
{
    private LeadpageSlotConfiguration $subject;
    
    public function setUp(): void
    {
        $this->subject = new LeadpageSlotConfiguration(
            items: [],
        );
    }

    public static function methodDataProvider(): array
    {
        return [
            ['Items', 'array'],
        ];
    }

    protected function getSubject(): LeadpageSlotConfiguration
    {
        return $this->subject;
    }
}
