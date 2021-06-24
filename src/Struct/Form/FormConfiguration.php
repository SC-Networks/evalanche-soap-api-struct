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

    /**
     * @param string $uniqueEntryCriteriaId
     * @param string $blockDuplicates
     * @param string $doNotResetUnsubscription
     * @param string $permissionMode
     * @param string $enablePostAddressValidation
     * @param string $successUrl
     * @param string $emailingId
     * @param string $emailingTargetgroupId
     * @param string $newsletterBccRecipientEmail
     * @param string $inquiryEmailingId
     * @param string $inquirySendOnChange
     * @param string $inquiryRecipientEmails
     * @param string $formLanguage
     * @param string $enableAutomatedEntryProtection
     * @param string $reCaptchaActivated
     * @param string $isMobileOptimized
     * @param string $isAutoSubmitForm
     * @param string $validationFormId
     * @param string $autoFormActionActivated
     * @param string $formApiState
     * @param string $formApiCorsDomains
     * @param string $externalTrackingcode
     */
    public function __construct(
        string $uniqueEntryCriteriaId = null,
        string $blockDuplicates = null,
        string $doNotResetUnsubscription = null,
        string $permissionMode = null,
        string $enablePostAddressValidation = null,
        string $successUrl = null,
        string $emailingId = null,
        string $emailingTargetgroupId = null,
        string $newsletterBccRecipientEmail = null,
        string $inquiryEmailingId = null,
        string $inquirySendOnChange = null,
        string $inquiryRecipientEmails = null,
        string $formLanguage = null,
        string $enableAutomatedEntryProtection = null,
        string $reCaptchaActivated = null,
        string $isMobileOptimized = null,
        string $isAutoSubmitForm = null,
        string $validationFormId = null,
        string $autoFormActionActivated = null,
        string $formApiState = null,
        string $formApiCorsDomains = null,
        string $externalTrackingcode = null
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

    /**
     * @return string
     */
    public function getUniqueEntryCriteriaId(): string
    {
        return $this->uniqueEntryCriteriaId;
    }

    /**
     * @param string $uniqueEntryCriteriaId
     * @return FormConfiguration
     */
    public function setUniqueEntryCriteriaId(string $uniqueEntryCriteriaId): FormConfiguration
    {
        $this->uniqueEntryCriteriaId = $uniqueEntryCriteriaId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlockDuplicates(): string
    {
        return $this->blockDuplicates;
    }

    /**
     * @param string $blockDuplicates
     * @return FormConfiguration
     */
    public function setBlockDuplicates(string $blockDuplicates): FormConfiguration
    {
        $this->blockDuplicates = $blockDuplicates;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoNotResetUnsubscription(): string
    {
        return $this->doNotResetUnsubscription;
    }

    /**
     * @param string $doNotResetUnsubscription
     * @return FormConfiguration
     */
    public function setDoNotResetUnsubscription(string $doNotResetUnsubscription): FormConfiguration
    {
        $this->doNotResetUnsubscription = $doNotResetUnsubscription;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionMode(): string
    {
        return $this->permissionMode;
    }

    /**
     * @param string $permissionMode
     * @return FormConfiguration
     */
    public function setPermissionMode(string $permissionMode): FormConfiguration
    {
        $this->permissionMode = $permissionMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnablePostAddressValidation(): string
    {
        return $this->enablePostAddressValidation;
    }

    /**
     * @param string $enablePostAddressValidation
     * @return FormConfiguration
     */
    public function setEnablePostAddressValidation(string $enablePostAddressValidation): FormConfiguration
    {
        $this->enablePostAddressValidation = $enablePostAddressValidation;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuccessUrl(): string
    {
        return $this->successUrl;
    }

    /**
     * @param string $successUrl
     * @return FormConfiguration
     */
    public function setSuccessUrl(string $successUrl): FormConfiguration
    {
        $this->successUrl = $successUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailingId(): string
    {
        return $this->emailingId;
    }

    /**
     * @param string $emailingId
     * @return FormConfiguration
     */
    public function setEmailingId(string $emailingId): FormConfiguration
    {
        $this->emailingId = $emailingId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailingTargetgroupId(): string
    {
        return $this->emailingTargetgroupId;
    }

    /**
     * @param string $emailingTargetgroupId
     * @return FormConfiguration
     */
    public function setEmailingTargetgroupId(string $emailingTargetgroupId): FormConfiguration
    {
        $this->emailingTargetgroupId = $emailingTargetgroupId;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewsletterBccRecipientEmail(): string
    {
        return $this->newsletterBccRecipientEmail;
    }

    /**
     * @param string $newsletterBccRecipientEmail
     * @return FormConfiguration
     */
    public function setNewsletterBccRecipientEmail(string $newsletterBccRecipientEmail): FormConfiguration
    {
        $this->newsletterBccRecipientEmail = $newsletterBccRecipientEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getInquiryEmailingId(): string
    {
        return $this->inquiryEmailingId;
    }

    /**
     * @param string $inquiryEmailingId
     * @return FormConfiguration
     */
    public function setInquiryEmailingId(string $inquiryEmailingId): FormConfiguration
    {
        $this->inquiryEmailingId = $inquiryEmailingId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInquirySendOnChange(): string
    {
        return $this->inquirySendOnChange;
    }

    /**
     * @param string $inquirySendOnChange
     * @return FormConfiguration
     */
    public function setInquirySendOnChange(string $inquirySendOnChange): FormConfiguration
    {
        $this->inquirySendOnChange = $inquirySendOnChange;
        return $this;
    }

    /**
     * @return string
     */
    public function getInquiryRecipientEmails(): ?string
    {
        return $this->inquiryRecipientEmails;
    }

    /**
     * @param string $inquiryRecipientEmails
     * @return FormConfiguration
     */
    public function setInquiryRecipientEmails(string $inquiryRecipientEmails): FormConfiguration
    {
        $this->inquiryRecipientEmails = $inquiryRecipientEmails;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormLanguage(): string
    {
        return $this->formLanguage;
    }

    /**
     * @param string $formLanguage
     * @return FormConfiguration
     */
    public function setFormLanguage(string $formLanguage): FormConfiguration
    {
        $this->formLanguage = $formLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnableAutomatedEntryProtection(): string
    {
        return $this->enableAutomatedEntryProtection;
    }

    /**
     * @param string $enableAutomatedEntryProtection
     * @return FormConfiguration
     */
    public function setEnableAutomatedEntryProtection(string $enableAutomatedEntryProtection): FormConfiguration
    {
        $this->enableAutomatedEntryProtection = $enableAutomatedEntryProtection;
        return $this;
    }

    /**
     * @return string
     */
    public function getReCaptchaActivated(): string
    {
        return $this->reCaptchaActivated;
    }

    /**
     * @param string $reCaptchaActivated
     * @return FormConfiguration
     */
    public function setReCaptchaActivated(string $reCaptchaActivated): FormConfiguration
    {
        $this->reCaptchaActivated = $reCaptchaActivated;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsMobileOptimized(): string
    {
        return $this->isMobileOptimized;
    }

    /**
     * @param string $isMobileOptimized
     * @return FormConfiguration
     */
    public function setIsMobileOptimized(string $isMobileOptimized): FormConfiguration
    {
        $this->isMobileOptimized = $isMobileOptimized;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsAutoSubmitForm(): string
    {
        return $this->isAutoSubmitForm;
    }

    /**
     * @param string $isAutoSubmitForm
     * @return FormConfiguration
     */
    public function setIsAutoSubmitForm(string $isAutoSubmitForm): FormConfiguration
    {
        $this->isAutoSubmitForm = $isAutoSubmitForm;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidationFormId(): string
    {
        return $this->validationFormId;
    }

    /**
     * @param string $validationFormId
     * @return FormConfiguration
     */
    public function setValidationFormId(string $validationFormId): FormConfiguration
    {
        $this->validationFormId = $validationFormId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutoFormActionActivated(): string
    {
        return $this->autoFormActionActivated;
    }

    /**
     * @param string $autoFormActionActivated
     * @return FormConfiguration
     */
    public function setAutoFormActionActivated(string $autoFormActionActivated): FormConfiguration
    {
        $this->autoFormActionActivated = $autoFormActionActivated;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormApiState(): string
    {
        return $this->formApiState;
    }

    /**
     * @param string $formApiState
     * @return FormConfiguration
     */
    public function setFormApiState(string $formApiState): FormConfiguration
    {
        $this->formApiState = $formApiState;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormApiCorsDomains(): string
    {
        return $this->formApiCorsDomains;
    }

    /**
     * @param string $formApiCorsDomains
     * @return FormConfiguration
     */
    public function setFormApiCorsDomains(string $formApiCorsDomains): FormConfiguration
    {
        $this->formApiCorsDomains = $formApiCorsDomains;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalTrackingcode(): string
    {
        return $this->externalTrackingcode;
    }

    /**
     * @param string $externalTrackingcode
     * @return FormConfiguration
     */
    public function setExternalTrackingcode(string $externalTrackingcode): FormConfiguration
    {
        $this->externalTrackingcode = $externalTrackingcode;
        return $this;
    }
}
