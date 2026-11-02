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
     * @var null|string
     */
    protected $uniqueEntryCriteriaId;

    /**
     * @var null|string
     */
    protected $blockDuplicates;

    /**
     * @var null|string
     */
    protected $doNotResetUnsubscription;

    /**
     * @var null|string
     */
    protected $permissionMode;

    /**
     * @var null|string
     */
    protected $enablePostAddressValidation;

    /**
     * @var null|string
     */
    protected $successUrl;

    /**
     * @var null|string
     */
    protected $emailingId;

    /**
     * @var null|string
     */
    protected $emailingTargetgroupId;

    /**
     * @var null|string
     */
    protected $newsletterBccRecipientEmail;

    /**
     * @var null|string
     */
    protected $inquiryEmailingId;

    /**
     * @var null|string
     */
    protected $inquirySendOnChange;

    /**
     * @var null|string
     */
    protected $inquiryRecipientEmails;

    /**
     * @var null|string
     */
    protected $formLanguage;

    /**
     * @var null|string
     */
    protected $enableAutomatedEntryProtection;

    /**
     * @var null|string
     */
    protected $reCaptchaActivated;

    /**
     * @var null|string
     */
    protected $isMobileOptimized;

    /**
     * @var null|string
     */
    protected $isAutoSubmitForm;

    /**
     * @var null|string
     */
    protected $validationFormId;

    /**
     * @var null|string
     */
    protected $autoFormActionActivated;

    /**
     * @var null|string
     */
    protected $formApiState;

    /**
     * @var null|string
     */
    protected $formApiCorsDomains;

    /**
     * @var null|string
     */
    protected $externalTrackingcode;

    public function __construct(
        null|string $uniqueEntryCriteriaId = null,
        null|string $blockDuplicates = null,
        null|string $doNotResetUnsubscription = null,
        null|string $permissionMode = null,
        null|string $enablePostAddressValidation = null,
        null|string $successUrl = null,
        null|string $emailingId = null,
        null|string $emailingTargetgroupId = null,
        null|string $newsletterBccRecipientEmail = null,
        null|string $inquiryEmailingId = null,
        null|string $inquirySendOnChange = null,
        null|string $inquiryRecipientEmails = null,
        null|string $formLanguage = null,
        null|string $enableAutomatedEntryProtection = null,
        null|string $reCaptchaActivated = null,
        null|string $isMobileOptimized = null,
        null|string $isAutoSubmitForm = null,
        null|string $validationFormId = null,
        null|string $autoFormActionActivated = null,
        null|string $formApiState = null,
        null|string $formApiCorsDomains = null,
        null|string $externalTrackingcode = null
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
        return (string) $this->uniqueEntryCriteriaId;
    }

    public function setUniqueEntryCriteriaId(string $uniqueEntryCriteriaId): FormConfiguration
    {
        $this->uniqueEntryCriteriaId = $uniqueEntryCriteriaId;
        return $this;
    }

    public function getBlockDuplicates(): string
    {
        return (string) $this->blockDuplicates;
    }

    public function setBlockDuplicates(string $blockDuplicates): FormConfiguration
    {
        $this->blockDuplicates = $blockDuplicates;
        return $this;
    }

    public function getDoNotResetUnsubscription(): string
    {
        return (string) $this->doNotResetUnsubscription;
    }

    public function setDoNotResetUnsubscription(string $doNotResetUnsubscription): FormConfiguration
    {
        $this->doNotResetUnsubscription = $doNotResetUnsubscription;
        return $this;
    }

    public function getPermissionMode(): string
    {
        return (string) $this->permissionMode;
    }

    public function setPermissionMode(string $permissionMode): FormConfiguration
    {
        $this->permissionMode = $permissionMode;
        return $this;
    }

    public function getEnablePostAddressValidation(): string
    {
        return (string) $this->enablePostAddressValidation;
    }

    public function setEnablePostAddressValidation(string $enablePostAddressValidation): FormConfiguration
    {
        $this->enablePostAddressValidation = $enablePostAddressValidation;
        return $this;
    }

    public function getSuccessUrl(): string
    {
        return (string) $this->successUrl;
    }

    public function setSuccessUrl(string $successUrl): FormConfiguration
    {
        $this->successUrl = $successUrl;
        return $this;
    }

    public function getEmailingId(): string
    {
        return (string) $this->emailingId;
    }

    public function setEmailingId(string $emailingId): FormConfiguration
    {
        $this->emailingId = $emailingId;
        return $this;
    }

    public function getEmailingTargetgroupId(): string
    {
        return (string) $this->emailingTargetgroupId;
    }

    public function setEmailingTargetgroupId(string $emailingTargetgroupId): FormConfiguration
    {
        $this->emailingTargetgroupId = $emailingTargetgroupId;
        return $this;
    }

    public function getNewsletterBccRecipientEmail(): string
    {
        return (string) $this->newsletterBccRecipientEmail;
    }

    public function setNewsletterBccRecipientEmail(string $newsletterBccRecipientEmail): FormConfiguration
    {
        $this->newsletterBccRecipientEmail = $newsletterBccRecipientEmail;
        return $this;
    }

    public function getInquiryEmailingId(): string
    {
        return (string) $this->inquiryEmailingId;
    }

    public function setInquiryEmailingId(string $inquiryEmailingId): FormConfiguration
    {
        $this->inquiryEmailingId = $inquiryEmailingId;
        return $this;
    }

    public function getInquirySendOnChange(): string
    {
        return (string) $this->inquirySendOnChange;
    }

    public function setInquirySendOnChange(string $inquirySendOnChange): FormConfiguration
    {
        $this->inquirySendOnChange = $inquirySendOnChange;
        return $this;
    }

    public function getInquiryRecipientEmails(): string
    {
        return (string) $this->inquiryRecipientEmails;
    }

    public function setInquiryRecipientEmails(string $inquiryRecipientEmails): FormConfiguration
    {
        $this->inquiryRecipientEmails = $inquiryRecipientEmails;
        return $this;
    }

    public function getFormLanguage(): string
    {
        return (string) $this->formLanguage;
    }

    public function setFormLanguage(string $formLanguage): FormConfiguration
    {
        $this->formLanguage = $formLanguage;
        return $this;
    }

    public function getEnableAutomatedEntryProtection(): string
    {
        return (string) $this->enableAutomatedEntryProtection;
    }

    public function setEnableAutomatedEntryProtection(string $enableAutomatedEntryProtection): FormConfiguration
    {
        $this->enableAutomatedEntryProtection = $enableAutomatedEntryProtection;
        return $this;
    }

    public function getReCaptchaActivated(): string
    {
        return (string) $this->reCaptchaActivated;
    }

    public function setReCaptchaActivated(string $reCaptchaActivated): FormConfiguration
    {
        $this->reCaptchaActivated = $reCaptchaActivated;
        return $this;
    }

    public function getIsMobileOptimized(): string
    {
        return (string) $this->isMobileOptimized;
    }

    public function setIsMobileOptimized(string $isMobileOptimized): FormConfiguration
    {
        $this->isMobileOptimized = $isMobileOptimized;
        return $this;
    }

    public function getIsAutoSubmitForm(): string
    {
        return (string) $this->isAutoSubmitForm;
    }

    public function setIsAutoSubmitForm(string $isAutoSubmitForm): FormConfiguration
    {
        $this->isAutoSubmitForm = $isAutoSubmitForm;
        return $this;
    }

    public function getValidationFormId(): string
    {
        return (string) $this->validationFormId;
    }

    public function setValidationFormId(string $validationFormId): FormConfiguration
    {
        $this->validationFormId = $validationFormId;
        return $this;
    }

    public function getAutoFormActionActivated(): string
    {
        return (string) $this->autoFormActionActivated;
    }

    public function setAutoFormActionActivated(string $autoFormActionActivated): FormConfiguration
    {
        $this->autoFormActionActivated = $autoFormActionActivated;
        return $this;
    }

    public function getFormApiState(): string
    {
        return (string) $this->formApiState;
    }

    public function setFormApiState(string $formApiState): FormConfiguration
    {
        $this->formApiState = $formApiState;
        return $this;
    }

    public function getFormApiCorsDomains(): string
    {
        return (string) $this->formApiCorsDomains;
    }

    public function setFormApiCorsDomains(string $formApiCorsDomains): FormConfiguration
    {
        $this->formApiCorsDomains = $formApiCorsDomains;
        return $this;
    }

    public function getExternalTrackingcode(): string
    {
        return (string) $this->externalTrackingcode;
    }

    public function setExternalTrackingcode(string $externalTrackingcode): FormConfiguration
    {
        $this->externalTrackingcode = $externalTrackingcode;
        return $this;
    }
}
