<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPageTemplate;

use Scn\EvalancheSoapStruct\Struct\LeadPage\LeadpageConfiguration;
use Scn\EvalancheSoapStruct\Struct\LeadPage\LeadpageConfigurationInterface;
use Scn\EvalancheSoapStruct\StructTestCase;

class LeadpageTemplateConfigurationTest extends StructTestCase
{
    private LeadpageTemplateConfigurationInterface $subject;

    public function setUp(): void
    {
        $this->subject = new LeadpageTemplateConfiguration();
    }

    public function testGetMacroLibraryCanReturnString(): void
    {
        self::assertSame('some macro library', $this->subject->setMacroLibrary('some macro library')->getMacroLibrary());
    }

    public function testGetInputfield0CanReturnString(): void
    {
        self::assertSame('some inputfield 0', $this->subject->setInputfield0('some inputfield 0')->GetInputfield0());
    }

    public function testGetInputfield1CanReturnString(): void
    {
        self::assertSame('some inputfield 1', $this->subject->setInputfield1('some inputfield 1')->GetInputfield1());
    }

    public function testGetInputfield2CanReturnString(): void
    {
        self::assertSame('some inputfield 2', $this->subject->setInputfield2('some inputfield 2')->GetInputfield2());
    }

    public function testGetInputfield3CanReturnString(): void
    {
        self::assertSame('some inputfield 3', $this->subject->setInputfield3('some inputfield 3')->GetInputfield3());
    }

    public function testGetInputfield4CanReturnString(): void
    {
        self::assertSame('some inputfield 4', $this->subject->setInputfield4('some inputfield 4')->GetInputfield4());
    }

    public function testGetInputfield5CanReturnString(): void
    {
        self::assertSame('some inputfield 5', $this->subject->setInputfield5('some inputfield 5')->GetInputfield5());
    }

    public function testGetInputfield6CanReturnString(): void
    {
        self::assertSame('some inputfield 6', $this->subject->setInputfield6('some inputfield 6')->GetInputfield6());
    }

    public function testGetInputfield7CanReturnString(): void
    {
        self::assertSame('some inputfield 7', $this->subject->setInputfield7('some inputfield 7')->GetInputfield7());
    }

    public function testGetInputfield8CanReturnString(): void
    {
        self::assertSame('some inputfield 8', $this->subject->setInputfield8('some inputfield 8')->GetInputfield8());
    }

    public function testGetInputfield9CanReturnString(): void
    {
        self::assertSame('some inputfield 9', $this->subject->setInputfield9('some inputfield 9')->GetInputfield9());
    }

    public function testGetTextArea0CanReturnString(): void
    {
        self::assertSame('some textarea 0', $this->subject->setTextarea0('some textarea 0')->GetTextArea0());
    }

    public function testGetTextArea1CanReturnString(): void
    {
        self::assertSame('some textarea 1', $this->subject->setTextarea1('some textarea 1')->GetTextArea1());
    }

    public function testGetTextArea2CanReturnString(): void
    {
        self::assertSame('some textarea 2', $this->subject->setTextarea2('some textarea 2')->GetTextArea2());
    }

    public function testGetTextArea3CanReturnString(): void
    {
        self::assertSame('some textarea 3', $this->subject->setTextarea3('some textarea 3')->GetTextArea3());
    }

    public function testGetTextArea4CanReturnString(): void
    {
        self::assertSame('some textarea 4', $this->subject->setTextarea4('some textarea 4')->GetTextArea4());
    }

    public function testGetTextArea5CanReturnString(): void
    {
        self::assertSame('some textarea 5', $this->subject->setTextarea5('some textarea 5')->GetTextArea5());
    }

    public function testGetTextArea6CanReturnString(): void
    {
        self::assertSame('some textarea 6', $this->subject->setTextarea6('some textarea 6')->GetTextArea6());
    }

    public function testGetTextArea7CanReturnString(): void
    {
        self::assertSame('some textarea 7', $this->subject->setTextarea7('some textarea 7')->GetTextArea7());
    }

    public function testGetTextArea8CanReturnString(): void
    {
        self::assertSame('some textarea 8', $this->subject->setTextarea8('some textarea 8')->GetTextArea8());
    }

    public function testGetTextArea9CanReturnString(): void
    {
        self::assertSame('some textarea 9', $this->subject->setTextarea9('some textarea 9')->GetTextArea9());
    }

    public function testGetHtmlArea0CanReturnString(): void
    {
        self::assertSame('some htmlarea 0', $this->subject->setHtmlarea0('some htmlarea 0')->getHtmlarea0());
    }

    public function testGetHtmlArea1CanReturnString(): void
    {
        self::assertSame('some htmlarea 1', $this->subject->setHtmlarea1('some htmlarea 1')->getHtmlarea1());
    }

    public function testGetHtmlArea2CanReturnString(): void
    {
        self::assertSame('some htmlarea 2', $this->subject->setHtmlarea2('some htmlarea 2')->getHtmlarea2());
    }

    public function testGetHtmlArea3CanReturnString(): void
    {
        self::assertSame('some htmlarea 3', $this->subject->setHtmlarea3('some htmlarea 3')->getHtmlarea3());
    }

    public function testGetHtmlArea4CanReturnString(): void
    {
        self::assertSame('some htmlarea 4', $this->subject->setHtmlarea4('some htmlarea 4')->getHtmlarea4());
    }

    public function testGetHtmlArea5CanReturnString(): void
    {
        self::assertSame('some htmlarea 5', $this->subject->setHtmlarea5('some htmlarea 5')->getHtmlarea5());
    }

    public function testGetHtmlArea6CanReturnString(): void
    {
        self::assertSame('some htmlarea 6', $this->subject->setHtmlarea6('some htmlarea 6')->getHtmlarea6());
    }

    public function testGetHtmlArea7CanReturnString(): void
    {
        self::assertSame('some htmlarea 7', $this->subject->setHtmlarea7('some htmlarea 7')->getHtmlarea7());
    }

    public function testGetHtmlArea8CanReturnString(): void
    {
        self::assertSame('some htmlarea 8', $this->subject->setHtmlarea8('some htmlarea 8')->getHtmlarea8());
    }

    public function testGetHtmlArea9CanReturnString(): void
    {
        self::assertSame('some htmlarea 9', $this->subject->setHtmlarea9('some htmlarea 9')->getHtmlarea9());
    }
}
