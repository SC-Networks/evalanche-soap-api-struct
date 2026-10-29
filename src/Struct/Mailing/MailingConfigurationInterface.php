<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingConfigurationInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
interface MailingConfigurationInterface extends StructInterface
{
    public function getExternalTrackingCode(): string;

    public function setExternalTrackingCode(string $externalTrackingCode): MailingConfiguration;

    public function getCampaignId(): string;

    public function setCampaignId(string $campaignId): MailingConfiguration;

    public function getExternalXmlUrl(): string;

    public function setExternalXmlUrl(string $externalXmlUrl): MailingConfiguration;

    public function getSalutationFemale(): string;

    public function setSalutationFemale(string $salutationFemale): MailingConfiguration;

    public function getSalutationMale(): string;

    public function setSalutationMale(string $salutationMale): MailingConfiguration;

    public function getSalutationCompany(): string;

    public function setSalutationCompany(string $salutationCompany): MailingConfiguration;

    public function getSalutationFamily(): string;

    public function setSalutationFamily(string $salutationFamily): MailingConfiguration;

    public function getSalutationOther(): string;

    public function setSalutationOther(string $salutationOther): MailingConfiguration;

    public function getSenderEmail(): string;

    public function setSenderEmail(string $senderEmail): MailingConfiguration;

    public function getSenderName(): string;

    public function setSenderName(string $senderName): MailingConfiguration;

    public function getReplyName(): string;

    public function setReplyName(string $replyName): MailingConfiguration;

    public function getReplyEmail(): string;

    public function setReplyEmail(string $replyEmail): MailingConfiguration;

    public function getGrantUrl(): string;

    public function setGrantUrl(string $grantUrl): MailingConfiguration;

    public function getRevokeUrl(): string;

    public function setRevokeUrl(string $revokeUrl): MailingConfiguration;

    public function getGrantTrackingUrl(): string;

    public function setGrantTrackingUrl(string $grantTrackingUrl): MailingConfiguration;

    public function getRevokeTrackingUrl(): string;

    public function setRevokeTrackingUrl(string $revokeTrackingUrl): MailingConfiguration;

    public function getRevokeConfirmationUrl(): string;

    public function setRevokeConfirmationUrl(string $revokeConfirmationUrl): MailingConfiguration;

    public function getRevokeConfirmationActive(): bool;

    public function setRevokeConfirmationActive(bool $revokeConfirmationActive): MailingConfiguration;

    public function getInputfield0(): string;

    public function setInputfield0(string $inputfield0): MailingConfiguration;

    public function getInputfield1(): string;

    public function setInputfield1(string $inputfield1): MailingConfiguration;

    public function getInputfield2(): string;

    public function setInputfield2(string $inputfield2): MailingConfiguration;

    public function getInputfield3(): string;

    public function setInputfield3(string $inputfield3): MailingConfiguration;

    public function getInputfield4(): string;

    public function setInputfield4(string $inputfield4): MailingConfiguration;

    public function getInputfield5(): string;

    public function setInputfield5(string $inputfield5): MailingConfiguration;

    public function getInputfield6(): string;

    public function setInputfield6(string $inputfield6): MailingConfiguration;

    public function getInputfield7(): string;

    public function setInputfield7(string $inputfield7): MailingConfiguration;

    public function getInputfield8(): string;

    public function setInputfield8(string $inputfield8): MailingConfiguration;

    public function getInputfield9(): string;

    public function setInputfield9(string $inputfield9): MailingConfiguration;

    public function getTextarea0(): string;

    public function setTextarea0(string $textarea0): MailingConfiguration;

    public function getTextarea1(): string;

    public function setTextarea1(string $textarea1): MailingConfiguration;

    public function getTextarea2(): string;

    public function setTextarea2(string $textarea2): MailingConfiguration;

    public function getTextarea3(): string;

    public function setTextarea3(string $textarea3): MailingConfiguration;

    public function getTextarea4(): string;

    public function setTextarea4(string $textarea4): MailingConfiguration;

    public function getTextarea5(): string;

    public function setTextarea5(string $textarea5): MailingConfiguration;

    public function getTextarea6(): string;

    public function setTextarea6(string $textarea6): MailingConfiguration;

    public function getTextarea7(): string;

    public function setTextarea7(string $textarea7): MailingConfiguration;

    public function getTextarea8(): string;

    public function setTextarea8(string $textarea8): MailingConfiguration;

    public function getTextarea9(): string;

    public function setTextarea9(string $textarea9): MailingConfiguration;

    public function getHtmlarea0(): string;

    public function setHtmlarea0(string $htmlarea0): MailingConfiguration;

    public function getHtmlarea1(): string;

    public function setHtmlarea1(string $htmlarea1): MailingConfiguration;

    public function getHtmlarea2(): string;

    public function setHtmlarea2(string $htmlarea2): MailingConfiguration;

    public function getHtmlarea3(): string;

    public function setHtmlarea3(string $htmlarea3): MailingConfiguration;

    public function getHtmlarea4(): string;

    public function setHtmlarea4(string $htmlarea4): MailingConfiguration;

    public function getHtmlarea5(): string;

    public function setHtmlarea5(string $htmlarea5): MailingConfiguration;

    public function getHtmlarea6(): string;

    public function setHtmlarea6(string $htmlarea6): MailingConfiguration;

    public function getHtmlarea7(): string;

    public function setHtmlarea7(string $htmlarea7): MailingConfiguration;

    public function getHtmlarea8(): string;

    public function setHtmlarea8(string $htmlarea8): MailingConfiguration;

    public function getHtmlarea9(): string;

    public function setHtmlarea9(string $htmlarea9): MailingConfiguration;
}
