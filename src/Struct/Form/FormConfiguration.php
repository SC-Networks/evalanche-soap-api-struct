<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Form;

/**
 * Contains information about the configuration of a specific form
 * like campaign id, individual salutations, reply address, input fields, etc.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Form
 */
class FormConfiguration implements FormConfigurationInterface
{
    /**
     * @var string
     */
    protected $uniqueEntryCriteriaId;

    /**
     * @var string
     */
    protected $blockDuplicates;

    /**
     * @var string
     */
    protected $doNotResetUnsubscription;

    /**
     * @var string
     */
    protected $permissionMode;

    /**
     * @var string
     */
    protected $enablePostAddressValidation;

    /**
     * @var string
     */
    protected $successUrl;

    /**
     * @var string
     */
    protected $emailingId;

    /**
     * @var string
     */
    protected $emailingTargetgroupId;

    /**
     * @var string
     */
    protected $newsletterBccRecipientEmail;

    /**
     * @var string
     */
    protected $inquiryEmailingId;

    /**
     * @var string
     */
    protected $inquirySendOnChange;

    /**
     * @var string
     */
    protected $inquiryRecipientEmails;

    /**
     * @var string
     */
    protected $formLanguage;

    /**
     * @var string
     */
    protected $enableAutomatedEntryProtection;

    /**
     * @var string
     */
    protected $reCaptchaActivated;

    /**
     * @var string
     */
    protected $isMobileOptimized;

    /**
     * @var string
     */
    protected $isAutoSubmitForm;

    /**
     * @var string
     */
    protected $validationFormId;

    /**
     * @var string
     */
    protected $autoFormActionActivated;

    /**
     * @var string
     */
    protected $formApiState;

    /**
     * @var string
     */
    protected $formApiCorsDomains;

    /**
     * @var string
     */
    protected $externalTrackingcode;

    public function __construct(
        string $uniqueEntryCriteriaId = '',
        string $blockDuplicates = '',
        string $doNotResetUnsubscription = '',
        string $permissionMode = '',
        string $enablePostAddressValidation = '',
        string $successUrl = '',
        string $emailingId = '',
        string $emailingTargetgroupId = '',
        string $newsletterBccRecipientEmail = '',
        string $inquiryEmailingId = '',
        string $inquirySendOnChange = '',
        string $inquiryRecipientEmails = '',
        string $formLanguage = '',
        string $enableAutomatedEntryProtection = '',
        string $reCaptchaActivated = '',
        string $isMobileOptimized = '',
        string $isAutoSubmitForm = '',
        string $validationFormId = '',
        string $autoFormActionActivated = '',
        string $formApiState = '',
        string $formApiCorsDomains = '',
        string $externalTrackingcode = ''
    ) {
        $this->uniqueEntryCriteriaId = $uniqueEntryCriteriaId;
        $this->blockDuplicates = $blockDuplicates;
        $this->doNotResetUnsubscription = $doNotResetUnsubscription;
        $this->permissionMode = $permissionMode;
        $this->enablePostAddressValidation = $enablePostAddressValidation;
        $this->successUrl = $successUrl;
        $this->emailingId = $emailingId;
        $this->emailingTargetgroupId = $emailingTargetgroupId;
        $this->newsletterBccRecipientEmail = $newsletterBccRecipientEmail;
        $this->inquiryEmailingId = $inquiryEmailingId;
        $this->inquirySendOnChange = $inquirySendOnChange;
        $this->inquiryRecipientEmails = $inquiryRecipientEmails;
        $this->formLanguage = $formLanguage;
        $this->enableAutomatedEntryProtection = $enableAutomatedEntryProtection;
        $this->reCaptchaActivated = $reCaptchaActivated;
        $this->isMobileOptimized = $isMobileOptimized;
        $this->isAutoSubmitForm = $isAutoSubmitForm;
        $this->validationFormId = $validationFormId;
        $this->autoFormActionActivated = $autoFormActionActivated;
        $this->formApiState = $formApiState;
        $this->formApiCorsDomains = $formApiCorsDomains;
        $this->externalTrackingcode = $externalTrackingcode;
    }

    public function getUniqueEntryCriteriaId(): string
    {
        return $this->uniqueEntryCriteriaId;
    }

    public function setUniqueEntryCriteriaId(string $uniqueEntryCriteriaId): FormConfiguration
    {
        $this->uniqueEntryCriteriaId = $uniqueEntryCriteriaId;
        return $this;
    }

    public function getBlockDuplicates(): string
    {
        return $this->blockDuplicates;
    }

    public function setBlockDuplicates(string $blockDuplicates): FormConfiguration
    {
        $this->blockDuplicates = $blockDuplicates;
        return $this;
    }

    public function getDoNotResetUnsubscription(): string
    {
        return $this->doNotResetUnsubscription;
    }

    public function setDoNotResetUnsubscription(string $doNotResetUnsubscription): FormConfiguration
    {
        $this->doNotResetUnsubscription = $doNotResetUnsubscription;
        return $this;
    }

    public function getPermissionMode(): string
    {
        return $this->permissionMode;
    }

    public function setPermissionMode(string $permissionMode): FormConfiguration
    {
        $this->permissionMode = $permissionMode;
        return $this;
    }

    public function getEnablePostAddressValidation(): string
    {
        return $this->enablePostAddressValidation;
    }

    public function setEnablePostAddressValidation(string $enablePostAddressValidation): FormConfiguration
    {
        $this->enablePostAddressValidation = $enablePostAddressValidation;
        return $this;
    }

    public function getSuccessUrl(): string
    {
        return $this->successUrl;
    }

    public function setSuccessUrl(string $successUrl): FormConfiguration
    {
        $this->successUrl = $successUrl;
        return $this;
    }

    public function getEmailingId(): string
    {
        return $this->emailingId;
    }

    public function setEmailingId(string $emailingId): FormConfiguration
    {
        $this->emailingId = $emailingId;
        return $this;
    }

    public function getEmailingTargetgroupId(): string
    {
        return $this->emailingTargetgroupId;
    }

    public function setEmailingTargetgroupId(string $emailingTargetgroupId): FormConfiguration
    {
        $this->emailingTargetgroupId = $emailingTargetgroupId;
        return $this;
    }

    public function getNewsletterBccRecipientEmail(): string
    {
        return $this->newsletterBccRecipientEmail;
    }

    public function setNewsletterBccRecipientEmail(string $newsletterBccRecipientEmail): FormConfiguration
    {
        $this->newsletterBccRecipientEmail = $newsletterBccRecipientEmail;
        return $this;
    }

    public function getInquiryEmailingId(): string
    {
        return $this->inquiryEmailingId;
    }

    public function setInquiryEmailingId(string $inquiryEmailingId): FormConfiguration
    {
        $this->inquiryEmailingId = $inquiryEmailingId;
        return $this;
    }

    public function getInquirySendOnChange(): string
    {
        return $this->inquirySendOnChange;
    }

    public function setInquirySendOnChange(string $inquirySendOnChange): FormConfiguration
    {
        $this->inquirySendOnChange = $inquirySendOnChange;
        return $this;
    }

    public function getInquiryRecipientEmails(): string
    {
        return $this->inquiryRecipientEmails;
    }

    public function setInquiryRecipientEmails(string $inquiryRecipientEmails): FormConfiguration
    {
        $this->inquiryRecipientEmails = $inquiryRecipientEmails;
        return $this;
    }

    public function getFormLanguage(): string
    {
        return $this->formLanguage;
    }

    public function setFormLanguage(string $formLanguage): FormConfiguration
    {
        $this->formLanguage = $formLanguage;
        return $this;
    }

    public function getEnableAutomatedEntryProtection(): string
    {
        return $this->enableAutomatedEntryProtection;
    }

    public function setEnableAutomatedEntryProtection(string $enableAutomatedEntryProtection): FormConfiguration
    {
        $this->enableAutomatedEntryProtection = $enableAutomatedEntryProtection;
        return $this;
    }

    public function getReCaptchaActivated(): string
    {
        return $this->reCaptchaActivated;
    }

    public function setReCaptchaActivated(string $reCaptchaActivated): FormConfiguration
    {
        $this->reCaptchaActivated = $reCaptchaActivated;
        return $this;
    }

    public function getIsMobileOptimized(): string
    {
        return $this->isMobileOptimized;
    }

    public function setIsMobileOptimized(string $isMobileOptimized): FormConfiguration
    {
        $this->isMobileOptimized = $isMobileOptimized;
        return $this;
    }

    public function getIsAutoSubmitForm(): string
    {
        return $this->isAutoSubmitForm;
    }

    public function setIsAutoSubmitForm(string $isAutoSubmitForm): FormConfiguration
    {
        $this->isAutoSubmitForm = $isAutoSubmitForm;
        return $this;
    }

    public function getValidationFormId(): string
    {
        return $this->validationFormId;
    }

    public function setValidationFormId(string $validationFormId): FormConfiguration
    {
        $this->validationFormId = $validationFormId;
        return $this;
    }

    public function getAutoFormActionActivated(): string
    {
        return $this->autoFormActionActivated;
    }

    public function setAutoFormActionActivated(string $autoFormActionActivated): FormConfiguration
    {
        $this->autoFormActionActivated = $autoFormActionActivated;
        return $this;
    }

    public function getFormApiState(): string
    {
        return $this->formApiState;
    }

    public function setFormApiState(string $formApiState): FormConfiguration
    {
        $this->formApiState = $formApiState;
        return $this;
    }

    public function getFormApiCorsDomains(): string
    {
        return $this->formApiCorsDomains;
    }

    public function setFormApiCorsDomains(string $formApiCorsDomains): FormConfiguration
    {
        $this->formApiCorsDomains = $formApiCorsDomains;
        return $this;
    }

    public function getExternalTrackingcode(): string
    {
        return $this->externalTrackingcode;
    }

    public function setExternalTrackingcode(string $externalTrackingcode): FormConfiguration
    {
        $this->externalTrackingcode = $externalTrackingcode;
        return $this;
    }
}
