<?php

declare(strict_types=1);

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
    public function getUniqueEntryCriteriaId(): string;

    public function setUniqueEntryCriteriaId(string $uniqueEntryCriteriaId): FormConfiguration;

    public function getBlockDuplicates(): string;

    public function setBlockDuplicates(string $blockDuplicates): FormConfiguration;

    public function getDoNotResetUnsubscription(): string;

    public function setDoNotResetUnsubscription(string $doNotResetUnsubscription): FormConfiguration;

    public function getPermissionMode(): string;

    public function setPermissionMode(string $permissionMode): FormConfiguration;

    public function getEnablePostAddressValidation(): string;

    public function setEnablePostAddressValidation(string $enablePostAddressValidation): FormConfiguration;

    public function getSuccessUrl(): string;

    public function setSuccessUrl(string $successUrl): FormConfiguration;

    public function getEmailingId(): string;

    public function setEmailingId(string $emailingId): FormConfiguration;

    public function getEmailingTargetgroupId(): string;

    public function setEmailingTargetgroupId(string $emailingTargetgroupId): FormConfiguration;

    public function getNewsletterBccRecipientEmail(): string;

    public function setNewsletterBccRecipientEmail(string $newsletterBccRecipientEmail): FormConfiguration;

    public function getInquiryEmailingId(): string;

    public function setInquiryEmailingId(string $inquiryEmailingId): FormConfiguration;

    public function getInquirySendOnChange(): string;

    public function setInquirySendOnChange(string $inquirySendOnChange): FormConfiguration;

    /**
     * @return string
     */
    public function getInquiryRecipientEmails(): ?string;

    public function setInquiryRecipientEmails(string $inquiryRecipientEmails): FormConfiguration;

    public function getFormLanguage(): string;

    public function setFormLanguage(string $formLanguage): FormConfiguration;

    public function getEnableAutomatedEntryProtection(): string;

    public function setEnableAutomatedEntryProtection(string $enableAutomatedEntryProtection): FormConfiguration;

    public function getReCaptchaActivated(): string;

    public function setReCaptchaActivated(string $reCaptchaActivated): FormConfiguration;

    public function getIsMobileOptimized(): string;

    public function setIsMobileOptimized(string $isMobileOptimized): FormConfiguration;

    public function getIsAutoSubmitForm(): string;

    public function setIsAutoSubmitForm(string $isAutoSubmitForm): FormConfiguration;

    public function getValidationFormId(): string;

    public function setValidationFormId(string $validationFormId): FormConfiguration;

    public function getAutoFormActionActivated(): string;

    public function setAutoFormActionActivated(string $autoFormActionActivated): FormConfiguration;

    public function getFormApiState(): string;

    public function setFormApiState(string $formApiState): FormConfiguration;

    public function getFormApiCorsDomains(): string;

    public function setFormApiCorsDomains(string $formApiCorsDomains): FormConfiguration;

    public function getExternalTrackingcode(): string;

    public function setExternalTrackingcode(string $externalTrackingcode): FormConfiguration;
}
