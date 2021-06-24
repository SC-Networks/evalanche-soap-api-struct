<?php

namespace Scn\EvalancheSoapStruct\Struct\Form;

use Scn\EvalancheSoapStruct\StructTestCase;

class FormConfigurationTest extends StructTestCase
{
    /**
     * @var FormConfiguration
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new FormConfiguration();
    }

    public function testPermissionMode()
    {
        $this->assertSame(
            'some permission',
            $this->subject->setPermissionMode('some permission')->getPermissionMode()
        );
    }

    public function testIsAutoSubmitForm()
    {
        $this->assertSame(
            'is auto submit form',
            $this->subject->setIsAutoSubmitForm('is auto submit form')->getIsAutoSubmitForm()
        );
    }

    public function testBlockDuplicates()
    {
        $this->assertSame(
            'block duplicates',
            $this->subject->setBlockDuplicates('block duplicates')->getBlockDuplicates()
        );
    }

    public function testUniqueEntryCriteriaId()
    {
        $this->assertSame(
            'unique entry criteria id',
            $this->subject->setUniqueEntryCriteriaId('unique entry criteria id')->getUniqueEntryCriteriaId()
        );
    }

    public function testNewsletterBccRecipientEmail()
    {
        $this->assertSame(
            'some email',
            $this->subject->setNewsletterBccRecipientEmail('some email')->getNewsletterBccRecipientEmail()
        );
    }

    public function testReCaptchaActivated()
    {
        $this->assertSame(
            'some bool',
            $this->subject->setReCaptchaActivated('some bool')->getReCaptchaActivated()
        );
    }

    public function testSuccessUrl()
    {
        $this->assertSame(
            'success url',
            $this->subject->setSuccessUrl('success url')->getSuccessUrl()
        );
    }

    public function testFormLanguage()
    {
        $this->assertSame(
            'some language',
            $this->subject->setFormLanguage('some language')->getFormLanguage()
        );
    }

    public function testFormApiState()
    {
        $this->assertSame(
            'some api state',
            $this->subject->setFormApiState('some api state')->getFormApiState()
        );
    }

    public function testEmailingId()
    {
        $this->assertSame(
            'some emailing id',
            $this->subject->setEmailingId('some emailing id')->getEmailingId()
        );
    }

    public function testEmailingTargetgroupId()
    {
        $this->assertSame(
            'some emailing targetgroup id',
            $this->subject->setEmailingTargetgroupId('some emailing targetgroup id')->getEmailingTargetgroupId()
        );
    }

    public function testFormApiCorsDomains()
    {
        $this->assertSame(
            'some domains',
            $this->subject->setFormApiCorsDomains('some domains')->getFormApiCorsDomains()
        );
    }

    public function testInquirySendOnChange()
    {
        $this->assertSame(
            'some send on change',
            $this->subject->setInquirySendOnChange('some send on change')->getInquirySendOnChange()
        );
    }

    public function testEnableAutomatedEntryProtection()
    {
        $this->assertSame(
            'some entry protection bool',
            $this->subject
                ->setEnableAutomatedEntryProtection('some entry protection bool')
                ->getEnableAutomatedEntryProtection()
        );
    }

    public function testInquiryEmailingId()
    {
        $this->assertSame(
            'inquiry emailing id',
            $this->subject->setInquiryEmailingId('inquiry emailing id')->getInquiryEmailingId()
        );
    }

    public function testEnablePostAddressValidation()
    {
        $this->assertSame(
            'post address validation bool',
            $this->subject
                ->setEnablePostAddressValidation('post address validation bool')
                ->getEnablePostAddressValidation()
        );
    }

    public function testExternalTrackingcode()
    {
        $this->assertSame(
            'external trackingcode',
            $this->subject->setExternalTrackingcode('external trackingcode')->getExternalTrackingcode()
        );
    }

    public function testAutoFormActionActivated()
    {
        $this->assertSame(
            'auto form action activated',
            $this->subject->setAutoFormActionActivated('auto form action activated')->getAutoFormActionActivated()
        );
    }

    public function testIsMobileOptimized()
    {
        $this->assertSame(
            'is mobile optimized',
            $this->subject->setIsMobileOptimized('is mobile optimized')->getIsMobileOptimized()
        );
    }

    public function testDoNotResetUnsubscription()
    {
        $this->assertSame(
            'do not reset unsubscription',
            $this->subject->setDoNotResetUnsubscription('do not reset unsubscription')->getDoNotResetUnsubscription()
        );
    }

    public function testInquiryRecipientEmails()
    {
        $this->assertSame(
            'emails',
            $this->subject->setInquiryRecipientEmails('emails')->getInquiryRecipientEmails()
        );
    }

    public function testValidationFormId()
    {
        $this->assertSame(
            'validation form id',
            $this->subject->setValidationFormId('validation form id')->getValidationFormId()
        );
    }
}
