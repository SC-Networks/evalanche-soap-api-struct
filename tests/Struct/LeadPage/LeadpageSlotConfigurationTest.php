<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class LeadpageSlotConfigurationTest extends GenericSetterGetterTestCase
{
    /** @var LeadpageSlotConfiguration|null */
    private $subject;
    
    public function setUp(): void
    {
        $this->subject = new LeadpageSlotConfiguration();
    }

    public static function methodDataProvider(): array
    {
        return [
            ['Items', 'array'],
        ];
    }

    protected function getSubject()
    {
        return $this->subject;
    }
}
