<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use PHPUnit\Framework\TestCase;

class ContentGenerationVariableTest extends TestCase
{
    private string $name = 'some-name';

    private string $label = 'some-label';

    private string $default_value = 'some-default-value';

    private string $help_text = 'some-help-text';

    private ContentGenerationVariable $subject;

    protected function setUp(): void
    {
        $this->subject = new ContentGenerationVariable(
            $this->name,
            $this->default_value,
            $this->label,
            $this->help_text
        );
    }

    public function testGetNameReturnsValue(): void
    {
        self::assertSame(
            $this->name,
            $this->subject->getName()
        );
    }

    public function testGetDefaultValueReturnsValue(): void
    {
        self::assertSame(
            $this->default_value,
            $this->subject->getDefaultValue()
        );
    }

    public function testGetLabelValueReturnsValue(): void
    {
        self::assertSame(
            $this->label,
            $this->subject->getLabel()
        );
    }

    public function testGetHelpTextValueReturnsValue(): void
    {
        self::assertSame(
            $this->help_text,
            $this->subject->getHelpText()
        );
    }
}
