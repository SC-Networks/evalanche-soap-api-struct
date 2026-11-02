<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class MailingSlotConfigurationTest extends GenericSetterGetterTestCase
{
    private MailingSlotConfiguration $subject;
    
    public function setUp(): void
    {
        $this->subject = new MailingSlotConfiguration(
            items: [],
        );
    }

    public static function methodDataProvider(): array
    {
        return [
            ['Items', 'array'],
        ];
    }

    protected function getSubject(): MailingSlotConfiguration
    {
        return $this->subject;
    }
}
