<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class MailingSlotConfigurationTest extends GenericSetterGetterTestCase
{
    /** @var MailingSlotConfiguration|null */
    private $subject;
    
    public function setUp(): void
    {
        $this->subject = new MailingSlotConfiguration();
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
