<?php

namespace Scn\EvalancheSoapStruct\Struct\Form;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Contains information about the configuration of a specific form
 * like campaign id, individual salutations, reply address, input fields, etc.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Form
 */
interface FormConfigurationInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getUniqueEntryCriteriaId(): string;

    /**
     * @param string $uniqueEntryCriteriaId
     * @return FormConfiguration
     */
    public function setUniqueEntryCriteriaId(string $uniqueEntryCriteriaId): FormConfiguration;

    /**
     * @return string
     */
    public function getBlockDuplicates(): string;

    /**
     * @param string $blockDuplicates
     * @return FormConfiguration
     */
    public function setBlockDuplicates(string $blockDuplicates): FormConfiguration;

    /**
     * @return string
     */
    public function getDoNotResetUnsubscription(): string;

    /**
     * @param string $doNotResetUnsubscription
     * @return FormConfiguration
     */
    public function setDoNotResetUnsubscription(string $doNotResetUnsubscription): FormConfiguration;

    /**
     * @return string
     */
    public function getPermissionMode(): string;

    /**
     * @param string $permissionMode
     * @return FormConfiguration
     */
    public function setPermissionMode(string $permissionMode): FormConfiguration;

    /**
     * @return string
     */
    public function getEnablePostAddressValidation(): string;

    /**
     * @param string $enablePostAddressValidation
     * @return FormConfiguration
     */
    public function setEnablePostAddressValidation(string $enablePostAddressValidation): FormConfiguration;

    /**
     * @return string
     */
    public function getSuccessUrl(): string;

    /**
     * @param string $successUrl
     * @return FormConfiguration
     */
    public function setSuccessUrl(string $successUrl): FormConfiguration;

    /**
     * @return string
     */
    public function getEmailingId(): string;

    /**
     * @param string $emailingId
     * @return FormConfiguration
     */
    public function setEmailingId(string $emailingId): FormConfiguration;

    /**
     * @return string
     */
    public function getEmailingTargetgroupId(): string;

    /**
     * @param string $emailingTargetgroupId
     * @return FormConfiguration
     */
    public function setEmailingTargetgroupId(string $emailingTargetgroupId): FormConfiguration;

    /**
     * @return string
     */
    public function getNewsletterBccRecipientEmail(): string;

    /**
     * @param string $newsletterBccRecipientEmail
     * @return FormConfiguration
     */
    public function setNewsletterBccRecipientEmail(string $newsletterBccRecipientEmail): FormConfiguration;

    /**
     * @return string
     */
    public function getInquiryEmailingId(): string;

    /**
     * @param string $inquiryEmailingId
     * @return FormConfiguration
     */
    public function setInquiryEmailingId(string $inquiryEmailingId): FormConfiguration;

    /**
     * @return string
     */
    public function getInquirySendOnChange(): string;

    /**
     * @param string $inquirySendOnChange
     * @return FormConfiguration
     */
    public function setInquirySendOnChange(string $inquirySendOnChange): FormConfiguration;

    /**
     * @return string
     */
    public function getInquiryRecipientEmails(): ?string;

    /**
     * @param string $inquiryRecipientEmails
     * @return FormConfiguration
     */
    public function setInquiryRecipientEmails(string $inquiryRecipientEmails): FormConfiguration;

    /**
     * @return string
     */
    public function getFormLanguage(): string;

    /**
     * @param string $formLanguage
     * @return FormConfiguration
     */
    public function setFormLanguage(string $formLanguage): FormConfiguration;

    /**
     * @return string
     */
    public function getEnableAutomatedEntryProtection(): string;

    /**
     * @param string $enableAutomatedEntryProtection
     * @return FormConfiguration
     */
    public function setEnableAutomatedEntryProtection(string $enableAutomatedEntryProtection): FormConfiguration;

    /**
     * @return string
     */
    public function getReCaptchaActivated(): string;

    /**
     * @param string $reCaptchaActivated
     * @return FormConfiguration
     */
    public function setReCaptchaActivated(string $reCaptchaActivated): FormConfiguration;

    /**
     * @return string
     */
    public function getIsMobileOptimized(): string;

    /**
     * @param string $isMobileOptimized
     * @return FormConfiguration
     */
    public function setIsMobileOptimized(string $isMobileOptimized): FormConfiguration;

    /**
     * @return string
     */
    public function getIsAutoSubmitForm(): string;

    /**
     * @param string $isAutoSubmitForm
     * @return FormConfiguration
     */
    public function setIsAutoSubmitForm(string $isAutoSubmitForm): FormConfiguration;

    /**
     * @return string
     */
    public function getValidationFormId(): string;

    /**
     * @param string $validationFormId
     * @return FormConfiguration
     */
    public function setValidationFormId(string $validationFormId): FormConfiguration;

    /**
     * @return string
     */
    public function getAutoFormActionActivated(): string;

    /**
     * @param string $autoFormActionActivated
     * @return FormConfiguration
     */
    public function setAutoFormActionActivated(string $autoFormActionActivated): FormConfiguration;

    /**
     * @return string
     */
    public function getFormApiState(): string;

    /**
     * @param string $formApiState
     * @return FormConfiguration
     */
    public function setFormApiState(string $formApiState): FormConfiguration;

    /**
     * @return string
     */
    public function getFormApiCorsDomains(): string;

    /**
     * @param string $formApiCorsDomains
     * @return FormConfiguration
     */
    public function setFormApiCorsDomains(string $formApiCorsDomains): FormConfiguration;

    /**
     * @return string
     */
    public function getExternalTrackingcode(): string;

    /**
     * @param string $externalTrackingcode
     * @return FormConfiguration
     */
    public function setExternalTrackingcode(string $externalTrackingcode): FormConfiguration;
}
