<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class MailingConfigurationTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingConfigurationTest extends StructTestCase
{
    /**
     * @var MailingConfiguration
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new MailingConfiguration();
    }

    public function testGetExternalTrackingCodeCanReturnString()
    {
        $this->assertSame(
            'some tracking code',
            $this->subject->setExternalTrackingCode('some tracking code')->getExternalTrackingCode()
        );
    }

    public function testGetCampaignIdCanReturnString()
    {
        $this->assertSame(
            'some campaign id',
            $this->subject->setCampaignId('some campaign id')->getCampaignId()
        );
    }

    public function testGetExternalXmlUrlCanReturnString()
    {
        $this->assertSame(
            'some xml url',
            $this->subject->setExternalXmlUrl('some xml url')->getExternalXmlUrl()
        );
    }

    public function testGetSalutationFemaleCanReturnString()
    {
        $this->assertSame(
            'female',
            $this->subject->setSalutationFemale('female')->getSalutationFemale()
        );
    }

    public function testGetSalutationMaleCanReturnString()
    {
        $this->assertSame(
            'male',
            $this->subject->setSalutationMale('male')->getSalutationMale()
        );
    }

    public function testGetSalutationCompanyCanReturnString()
    {
        $this->assertSame(
            'company',
            $this->subject->setSalutationCompany('company')->getSalutationCompany()
        );
    }

    public function testGetSalutationFamilyCanReturnString()
    {
        $this->assertSame(
            'family',
            $this->subject->setSalutationFamily('family')->getSalutationFamily()
        );
    }

    public function testGetSalutationOtherCanReturnString()
    {
        $this->assertSame(
            'others',
            $this->subject->setSalutationOther('others')->getSalutationOther()
        );
    }

    public function testGetSenderEmailCanReturnString()
    {
        $this->assertSame(
            'some email',
            $this->subject->setSenderEmail('some email')->getSenderEmail()
        );
    }

    public function testgetSenderNameCanReturnString()
    {
        $this->assertSame(
            'some sender',
            $this->subject->setSenderName('some sender')->getSenderName()
        );
    }

    public function testGetRepylNameCanReturnString()
    {
        $this->assertSame(
            'some reply name',
            $this->subject->setReplyName('some reply name')->getReplyName()
        );
    }

    public function testGetReplyMailCanReturnString()
    {
        $this->assertSame(
            'some reply mail',
            $this->subject->setReplyEmail('some reply mail')->getReplyEmail()
        );
    }

    public function testGetSomeGrantUrlCanReturnString()
    {
        $this->assertSame(
            'some grant url',
            $this->subject->setGrantUrl('some grant url')->getGrantUrl()
        );
    }

    public function testGetRevokeUrlCanReturnString()
    {
        $this->assertSame(
            'some revoke url',
            $this->subject->setRevokeUrl('some revoke url')->getRevokeUrl()
        );
    }

    public function testGetInputfield0CanReturnString()
    {
        $this->assertSame(
            'some inputfield 0',
            $this->subject->setInputfield0('some inputfield 0')->GetInputfield0()
        );
    }

    public function testGetInputfield1CanReturnString()
    {
        $this->assertSame(
            'some inputfield 1',
            $this->subject->setInputfield1('some inputfield 1')->GetInputfield1()
        );
    }

    public function testGetInputfield2CanReturnString()
    {
        $this->assertSame(
            'some inputfield 2',
            $this->subject->setInputfield2('some inputfield 2')->GetInputfield2()
        );
    }

    public function testGetInputfield3CanReturnString()
    {
        $this->assertSame(
            'some inputfield 3',
            $this->subject->setInputfield3('some inputfield 3')->GetInputfield3()
        );
    }

    public function testGetInputfield4CanReturnString()
    {
        $this->assertSame(
            'some inputfield 4',
            $this->subject->setInputfield4('some inputfield 4')->GetInputfield4()
        );
    }

    public function testGetInputfield5CanReturnString()
    {
        $this->assertSame(
            'some inputfield 5',
            $this->subject->setInputfield5('some inputfield 5')->GetInputfield5()
        );
    }

    public function testGetInputfield6CanReturnString()
    {
        $this->assertSame(
            'some inputfield 6',
            $this->subject->setInputfield6('some inputfield 6')->GetInputfield6()
        );
    }

    public function testGetInputfield7CanReturnString()
    {
        $this->assertSame(
            'some inputfield 7',
            $this->subject->setInputfield7('some inputfield 7')->GetInputfield7()
        );
    }

    public function testGetInputfield8CanReturnString()
    {
        $this->assertSame(
            'some inputfield 8',
            $this->subject->setInputfield8('some inputfield 8')->GetInputfield8()
        );
    }

    public function testGetInputfield9CanReturnString()
    {
        $this->assertSame(
            'some inputfield 9',
            $this->subject->setInputfield9('some inputfield 9')->GetInputfield9()
        );
    }

    public function testGetTextArea0CanReturnString()
    {
        $this->assertSame(
            'some textarea 0',
            $this->subject->setTextarea0('some textarea 0')->GetTextArea0()
        );
    }

    public function testGetTextArea1CanReturnString()
    {
        $this->assertSame(
            'some textarea 1',
            $this->subject->setTextarea1('some textarea 1')->GetTextArea1()
        );    }

    public function testGetTextArea2CanReturnString()
    {
        $this->assertSame(
            'some textarea 2',
            $this->subject->setTextarea2('some textarea 2')->GetTextArea2()
        );    }

    public function testGetTextArea3CanReturnString()
    {
        $this->assertSame(
            'some textarea 3',
            $this->subject->setTextarea3('some textarea 3')->GetTextArea3()
        );    }

    public function testGetTextArea4CanReturnString()
    {
        $this->assertSame(
            'some textarea 4',
            $this->subject->setTextarea4('some textarea 4')->GetTextArea4()
        );    }

    public function testGetTextArea5CanReturnString()
    {
        $this->assertSame(
            'some textarea 5',
            $this->subject->setTextarea5('some textarea 5')->GetTextArea5()
        );    }

    public function testGetTextArea6CanReturnString()
    {
        $this->assertSame(
            'some textarea 6',
            $this->subject->setTextarea6('some textarea 6')->GetTextArea6()
        );    }

    public function testGetTextArea7CanReturnString()
    {
        $this->assertSame(
            'some textarea 7',
            $this->subject->setTextarea7('some textarea 7')->GetTextArea7()
        );    }

    public function testGetTextArea8CanReturnString()
    {
        $this->assertSame(
            'some textarea 8',
            $this->subject->setTextarea8('some textarea 8')->GetTextArea8()
        );    }

    public function testGetTextArea9CanReturnString()
    {
        $this->assertSame(
            'some textarea 9',
            $this->subject->setTextarea9('some textarea 9')->GetTextArea9()
        );    }

    public function testGetHtmlArea0CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 0',
            $this->subject->setHtmlarea0('some htmlarea 0')->getHtmlarea0()
        );
    }

    public function testGetHtmlArea1CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 1',
            $this->subject->setHtmlarea1('some htmlarea 1')->getHtmlarea1()
        );
    }

    public function testGetHtmlArea2CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 2',
            $this->subject->setHtmlarea2('some htmlarea 2')->getHtmlarea2()
        );
    }

    public function testGetHtmlArea3CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 3',
            $this->subject->setHtmlarea3('some htmlarea 3')->getHtmlarea3()
        );
    }

    public function testGetHtmlArea4CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 4',
            $this->subject->setHtmlarea4('some htmlarea 4')->getHtmlarea4()
        );
    }

    public function testGetHtmlArea5CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 5',
            $this->subject->setHtmlarea5('some htmlarea 5')->getHtmlarea5()
        );
    }

    public function testGetHtmlArea6CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 6',
            $this->subject->setHtmlarea6('some htmlarea 6')->getHtmlarea6()
        );
    }

    public function testGetHtmlArea7CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 7',
            $this->subject->setHtmlarea7('some htmlarea 7')->getHtmlarea7()
        );
    }

    public function testGetHtmlArea8CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 8',
            $this->subject->setHtmlarea8('some htmlarea 8')->getHtmlarea8()
        );
    }

    public function testGetHtmlArea9CanReturnString()
    {
        $this->assertSame(
            'some htmlarea 9',
            $this->subject->setHtmlarea9('some htmlarea 9')->getHtmlarea9()
        );
    }
}
