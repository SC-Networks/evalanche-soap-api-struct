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

    public function testPermissionMode(): void
    {
        self::assertSame('some permission', $this->subject->setPermissionMode('some permission')->getPermissionMode());
    }

    public function testIsAutoSubmitForm(): void
    {
        self::assertSame('is auto submit form', $this->subject->setIsAutoSubmitForm('is auto submit form')->getIsAutoSubmitForm());
    }

    public function testBlockDuplicates(): void
    {
        self::assertSame('block duplicates', $this->subject->setBlockDuplicates('block duplicates')->getBlockDuplicates());
    }

    public function testUniqueEntryCriteriaId(): void
    {
        self::assertSame('unique entry criteria id', $this->subject->setUniqueEntryCriteriaId('unique entry criteria id')->getUniqueEntryCriteriaId());
    }

    public function testNewsletterBccRecipientEmail(): void
    {
        self::assertSame('some email', $this->subject->setNewsletterBccRecipientEmail('some email')->getNewsletterBccRecipientEmail());
    }

    public function testReCaptchaActivated(): void
    {
        self::assertSame('some bool', $this->subject->setReCaptchaActivated('some bool')->getReCaptchaActivated());
    }

    public function testSuccessUrl(): void
    {
        self::assertSame('success url', $this->subject->setSuccessUrl('success url')->getSuccessUrl());
    }

    public function testFormLanguage(): void
    {
        self::assertSame('some language', $this->subject->setFormLanguage('some language')->getFormLanguage());
    }

    public function testFormApiState(): void
    {
        self::assertSame('some api state', $this->subject->setFormApiState('some api state')->getFormApiState());
    }

    public function testEmailingId(): void
    {
        self::assertSame('some emailing id', $this->subject->setEmailingId('some emailing id')->getEmailingId());
    }

    public function testEmailingTargetgroupId(): void
    {
        self::assertSame('some emailing targetgroup id', $this->subject->setEmailingTargetgroupId('some emailing targetgroup id')->getEmailingTargetgroupId());
    }

    public function testFormApiCorsDomains(): void
    {
        self::assertSame('some domains', $this->subject->setFormApiCorsDomains('some domains')->getFormApiCorsDomains());
    }

    public function testInquirySendOnChange(): void
    {
        self::assertSame('some send on change', $this->subject->setInquirySendOnChange('some send on change')->getInquirySendOnChange());
    }

    public function testEnableAutomatedEntryProtection(): void
    {
        self::assertSame('some entry protection bool', $this->subject
            ->setEnableAutomatedEntryProtection('some entry protection bool')
            ->getEnableAutomatedEntryProtection());
    }

    public function testInquiryEmailingId(): void
    {
        self::assertSame('inquiry emailing id', $this->subject->setInquiryEmailingId('inquiry emailing id')->getInquiryEmailingId());
    }

    public function testEnablePostAddressValidation(): void
    {
        self::assertSame('post address validation bool', $this->subject
            ->setEnablePostAddressValidation('post address validation bool')
            ->getEnablePostAddressValidation());
    }

    public function testExternalTrackingcode(): void
    {
        self::assertSame('external trackingcode', $this->subject->setExternalTrackingcode('external trackingcode')->getExternalTrackingcode());
    }

    public function testAutoFormActionActivated(): void
    {
        self::assertSame('auto form action activated', $this->subject->setAutoFormActionActivated('auto form action activated')->getAutoFormActionActivated());
    }

    public function testIsMobileOptimized(): void
    {
        self::assertSame('is mobile optimized', $this->subject->setIsMobileOptimized('is mobile optimized')->getIsMobileOptimized());
    }

    public function testDoNotResetUnsubscription(): void
    {
        self::assertSame('do not reset unsubscription', $this->subject->setDoNotResetUnsubscription('do not reset unsubscription')->getDoNotResetUnsubscription());
    }

    public function testInquiryRecipientEmails(): void
    {
        self::assertSame('emails', $this->subject->setInquiryRecipientEmails('emails')->getInquiryRecipientEmails());
    }

    public function testValidationFormId(): void
    {
        self::assertSame('validation form id', $this->subject->setValidationFormId('validation form id')->getValidationFormId());
    }
}
