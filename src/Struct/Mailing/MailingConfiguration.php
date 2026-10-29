<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Contains information about the configuration of a specific mailing
 * like campaign id, individual salutations, reply address, input fields, etc.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingConfiguration implements MailingConfigurationInterface
{
    /**
     * @var string
     */
    protected $externalTrackingCode;

    /**
     * @var string
     */
    protected $campaignId;

    /**
     * @var string
     */
    protected $externalXmlUrl;

    /**
     * @var string
     */
    protected $salutationFemale;

    /**
     * @var string
     */
    protected $salutationMale;

    /**
     * @var string
     */
    protected $salutationCompany;

    /**
     * @var string
     */
    protected $salutationFamily;

    /**
     * @var string
     */
    protected $salutationOther;

    /**
     * @var string
     */
    protected $salutationDivers;

    /**
     * @var string
     */
    protected $senderEmail;

    /**
     * @var string
     */
    protected $senderName;

    /**
     * @var string
     */
    protected $replyName;

    /**
     * @var string
     */
    protected $replyEmail;

    /**
     * @var string
     */
    protected $grantUrl;

    /** @var string */
    protected $grantTrackingUrl;

    /** @var string */
    protected $revokeTrackingUrl;

    /** @var string */
    protected $revokeConfirmationUrl;

    /** @var bool */
    protected $revokeConfirmationActive;

    /**
     * @var string
     */
    protected $revokeUrl;

    /**
     * @var string
     */
    protected $inputfield0;

    /**
     * @var string
     */
    protected $inputfield1;

    /**
     * @var string
     */
    protected $inputfield2;

    /**
     * @var string
     */
    protected $inputfield3;

    /**
     * @var string
     */
    protected $inputfield4;

    /**
     * @var string
     */
    protected $inputfield5;

    /**
     * @var string
     */
    protected $inputfield6;

    /**
     * @var string
     */
    protected $inputfield7;

    /**
     * @var string
     */
    protected $inputfield8;

    /**
     * @var string
     */
    protected $inputfield9;

    /**
     * @var string
     */
    protected $textarea0;

    /**
     * @var string
     */
    protected $textarea1;

    /**
     * @var string
     */
    protected $textarea2;

    /**
     * @var string
     */
    protected $textarea3;

    /**
     * @var string
     */
    protected $textarea4;

    /**
     * @var string
     */
    protected $textarea5;

    /**
     * @var string
     */
    protected $textarea6;

    /**
     * @var string
     */
    protected $textarea7;

    /**
     * @var string
     */
    protected $textarea8;

    /**
     * @var string
     */
    protected $textarea9;

    /**
     * @var string
     */
    protected $htmlarea0;

    /**
     * @var string
     */
    protected $htmlarea1;

    /**
     * @var string
     */
    protected $htmlarea2;

    /**
     * @var string
     */
    protected $htmlarea3;

    /**
     * @var string
     */
    protected $htmlarea4;

    /**
     * @var string
     */
    protected $htmlarea5;

    /**
     * @var string
     */
    protected $htmlarea6;

    /**
     * @var string
     */
    protected $htmlarea7;

    /**
     * @var string
     */
    protected $htmlarea8;

    /**
     * @var string
     */
    protected $htmlarea9;

    public function __construct(
        string $externalTrackingCode = '',
        string $campaignId = '',
        string $externalXmlUrl = '',
        string $salutationFemale = '',
        string $salutationMale = '',
        string $salutationCompany = '',
        string $salutationFamily = '',
        string $salutationOther = '',
        string $salutationDivers = '',
        string $senderEmail = '',
        string $senderName = '',
        string $replyName = '',
        string $replyEmail = '',
        string $grantUrl = '',
        string $revokeUrl = '',
        string $inputfield0 = '',
        string $inputfield1 = '',
        string $inputfield2 = '',
        string $inputfield3 = '',
        string $inputfield4 = '',
        string $inputfield5 = '',
        string $inputfield6 = '',
        string $inputfield7 = '',
        string $inputfield8 = '',
        string $inputfield9 = '',
        string $textarea0 = '',
        string $textarea1 = '',
        string $textarea2 = '',
        string $textarea3 = '',
        string $textarea4 = '',
        string $textarea5 = '',
        string $textarea6 = '',
        string $textarea7 = '',
        string $textarea8 = '',
        string $textarea9 = '',
        string $htmlarea0 = '',
        string $htmlarea1 = '',
        string $htmlarea2 = '',
        string $htmlarea3 = '',
        string $htmlarea4 = '',
        string $htmlarea5 = '',
        string $htmlarea6 = '',
        string $htmlarea7 = '',
        string $htmlarea8 = '',
        string $htmlarea9 = '',
        string $revokeTrackingUrl = '',
        string $grantTrackingUrl = '',
        string $revokeConfirmationUrl = '',
        bool $revokeConfirmationActive = false
    ) {
        $this->externalTrackingCode = $externalTrackingCode;
        $this->campaignId = $campaignId;
        $this->externalXmlUrl = $externalXmlUrl;
        $this->salutationFemale = $salutationFemale;
        $this->salutationMale = $salutationMale;
        $this->salutationCompany = $salutationCompany;
        $this->salutationFamily = $salutationFamily;
        $this->salutationOther = $salutationOther;
        $this->salutationDivers = $salutationDivers;
        $this->senderEmail = $senderEmail;
        $this->senderName = $senderName;
        $this->replyName = $replyName;
        $this->replyEmail = $replyEmail;
        $this->grantUrl = $grantUrl;
        $this->revokeUrl = $revokeUrl;
        $this->inputfield0 = $inputfield0;
        $this->inputfield1 = $inputfield1;
        $this->inputfield2 = $inputfield2;
        $this->inputfield3 = $inputfield3;
        $this->inputfield4 = $inputfield4;
        $this->inputfield5 = $inputfield5;
        $this->inputfield6 = $inputfield6;
        $this->inputfield7 = $inputfield7;
        $this->inputfield8 = $inputfield8;
        $this->inputfield9 = $inputfield9;
        $this->textarea0 = $textarea0;
        $this->textarea1 = $textarea1;
        $this->textarea2 = $textarea2;
        $this->textarea3 = $textarea3;
        $this->textarea4 = $textarea4;
        $this->textarea5 = $textarea5;
        $this->textarea6 = $textarea6;
        $this->textarea7 = $textarea7;
        $this->textarea8 = $textarea8;
        $this->textarea9 = $textarea9;
        $this->htmlarea0 = $htmlarea0;
        $this->htmlarea1 = $htmlarea1;
        $this->htmlarea2 = $htmlarea2;
        $this->htmlarea3 = $htmlarea3;
        $this->htmlarea4 = $htmlarea4;
        $this->htmlarea5 = $htmlarea5;
        $this->htmlarea6 = $htmlarea6;
        $this->htmlarea7 = $htmlarea7;
        $this->htmlarea8 = $htmlarea8;
        $this->htmlarea9 = $htmlarea9;
        $this->grantTrackingUrl = $grantTrackingUrl;
        $this->revokeTrackingUrl = $revokeTrackingUrl;
        $this->revokeConfirmationUrl = $revokeConfirmationUrl;
        $this->revokeConfirmationActive = $revokeConfirmationActive;
    }

    public function getExternalTrackingCode(): string
    {
        return $this->externalTrackingCode;
    }

    public function setExternalTrackingCode(string $externalTrackingCode): MailingConfiguration
    {
        $this->externalTrackingCode = $externalTrackingCode;
        return $this;
    }

    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    public function setCampaignId(string $campaignId): MailingConfiguration
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    public function getExternalXmlUrl(): string
    {
        return $this->externalXmlUrl;
    }

    public function setExternalXmlUrl(string $externalXmlUrl): MailingConfiguration
    {
        $this->externalXmlUrl = $externalXmlUrl;
        return $this;
    }

    public function getSalutationFemale(): string
    {
        return $this->salutationFemale;
    }

    public function setSalutationFemale(string $salutationFemale): MailingConfiguration
    {
        $this->salutationFemale = $salutationFemale;
        return $this;
    }

    public function getSalutationMale(): string
    {
        return $this->salutationMale;
    }

    public function setSalutationMale(string $salutationMale): MailingConfiguration
    {
        $this->salutationMale = $salutationMale;
        return $this;
    }

    public function getSalutationCompany(): string
    {
        return $this->salutationCompany;
    }

    public function setSalutationCompany(string $salutationCompany): MailingConfiguration
    {
        $this->salutationCompany = $salutationCompany;
        return $this;
    }

    public function getSalutationFamily(): string
    {
        return $this->salutationFamily;
    }

    public function setSalutationFamily(string $salutationFamily): MailingConfiguration
    {
        $this->salutationFamily = $salutationFamily;
        return $this;
    }

    public function getSalutationOther(): string
    {
        return $this->salutationOther;
    }

    public function setSalutationOther(string $salutationOther): MailingConfiguration
    {
        $this->salutationOther = $salutationOther;
        return $this;
    }

    public function getSalutationDivers(): string
    {
        return $this->salutationOther;
    }

    public function setSalutationDivers(string $salutationOther): MailingConfiguration
    {
        $this->salutationOther = $salutationOther;
        return $this;
    }

    public function getSenderEmail(): string
    {
        return $this->senderEmail;
    }

    public function setSenderEmail(string $senderEmail): MailingConfiguration
    {
        $this->senderEmail = $senderEmail;
        return $this;
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function setSenderName(string $senderName): MailingConfiguration
    {
        $this->senderName = $senderName;
        return $this;
    }

    public function getReplyName(): string
    {
        return $this->replyName;
    }

    public function setReplyName(string $replyName): MailingConfiguration
    {
        $this->replyName = $replyName;
        return $this;
    }

    public function getReplyEmail(): string
    {
        return $this->replyEmail;
    }

    public function setReplyEmail(string $replyEmail): MailingConfiguration
    {
        $this->replyEmail = $replyEmail;
        return $this;
    }

    public function getGrantUrl(): string
    {
        return $this->grantUrl;
    }

    public function setGrantUrl(string $grantUrl): MailingConfiguration
    {
        $this->grantUrl = $grantUrl;
        return $this;
    }

    public function getRevokeUrl(): string
    {
        return $this->revokeUrl;
    }

    public function setRevokeUrl(string $revokeUrl): MailingConfiguration
    {
        $this->revokeUrl = $revokeUrl;
        return $this;
    }

    public function getGrantTrackingUrl(): string
    {
        return $this->grantTrackingUrl;
    }

    public function setGrantTrackingUrl(string $grantTrackingUrl): MailingConfiguration
    {
        $this->grantTrackingUrl = $grantTrackingUrl;
        return $this;
    }

    public function getRevokeTrackingUrl(): string
    {
        return $this->revokeTrackingUrl;
    }

    public function setRevokeTrackingUrl(string $revokeTrackingUrl): MailingConfiguration
    {
        $this->revokeTrackingUrl = $revokeTrackingUrl;
        return $this;
    }

    public function getRevokeConfirmationUrl(): string
    {
        return $this->revokeConfirmationUrl;
    }

    public function setRevokeConfirmationUrl(string $revokeConfirmationUrl): MailingConfiguration
    {
        $this->revokeConfirmationUrl = $revokeConfirmationUrl;
        return $this;
    }

    public function getRevokeConfirmationActive(): bool
    {
        return $this->revokeConfirmationActive;
    }

    public function setRevokeConfirmationActive(bool $revokeConfirmationActive): MailingConfiguration
    {
        $this->revokeConfirmationActive = $revokeConfirmationActive;
        return $this;
    }

    public function getInputfield0(): string
    {
        return $this->inputfield0;
    }

    public function setInputfield0(string $inputfield0): MailingConfiguration
    {
        $this->inputfield0 = $inputfield0;
        return $this;
    }

    public function getInputfield1(): string
    {
        return $this->inputfield1;
    }

    public function setInputfield1(string $inputfield1): MailingConfiguration
    {
        $this->inputfield1 = $inputfield1;
        return $this;
    }

    public function getInputfield2(): string
    {
        return $this->inputfield2;
    }

    public function setInputfield2(string $inputfield2): MailingConfiguration
    {
        $this->inputfield2 = $inputfield2;
        return $this;
    }

    public function getInputfield3(): string
    {
        return $this->inputfield3;
    }

    public function setInputfield3(string $inputfield3): MailingConfiguration
    {
        $this->inputfield3 = $inputfield3;
        return $this;
    }

    public function getInputfield4(): string
    {
        return $this->inputfield4;
    }

    public function setInputfield4(string $inputfield4): MailingConfiguration
    {
        $this->inputfield4 = $inputfield4;
        return $this;
    }

    public function getInputfield5(): string
    {
        return $this->inputfield5;
    }

    public function setInputfield5(string $inputfield5): MailingConfiguration
    {
        $this->inputfield5 = $inputfield5;
        return $this;
    }

    public function getInputfield6(): string
    {
        return $this->inputfield6;
    }

    public function setInputfield6(string $inputfield6): MailingConfiguration
    {
        $this->inputfield6 = $inputfield6;
        return $this;
    }

    public function getInputfield7(): string
    {
        return $this->inputfield7;
    }

    public function setInputfield7(string $inputfield7): MailingConfiguration
    {
        $this->inputfield7 = $inputfield7;
        return $this;
    }

    public function getInputfield8(): string
    {
        return $this->inputfield8;
    }

    public function setInputfield8(string $inputfield8): MailingConfiguration
    {
        $this->inputfield8 = $inputfield8;
        return $this;
    }

    public function getInputfield9(): string
    {
        return $this->inputfield9;
    }

    public function setInputfield9(string $inputfield9): MailingConfiguration
    {
        $this->inputfield9 = $inputfield9;
        return $this;
    }

    public function getTextarea0(): string
    {
        return $this->textarea0;
    }

    public function setTextarea0(string $textarea0): MailingConfiguration
    {
        $this->textarea0 = $textarea0;
        return $this;
    }

    public function getTextarea1(): string
    {
        return $this->textarea1;
    }

    public function setTextarea1(string $textarea1): MailingConfiguration
    {
        $this->textarea1 = $textarea1;
        return $this;
    }

    public function getTextarea2(): string
    {
        return $this->textarea2;
    }

    public function setTextarea2(string $textarea2): MailingConfiguration
    {
        $this->textarea2 = $textarea2;
        return $this;
    }

    public function getTextarea3(): string
    {
        return $this->textarea3;
    }

    public function setTextarea3(string $textarea3): MailingConfiguration
    {
        $this->textarea3 = $textarea3;
        return $this;
    }

    public function getTextarea4(): string
    {
        return $this->textarea4;
    }

    public function setTextarea4(string $textarea4): MailingConfiguration
    {
        $this->textarea4 = $textarea4;
        return $this;
    }

    public function getTextarea5(): string
    {
        return $this->textarea5;
    }

    public function setTextarea5(string $textarea5): MailingConfiguration
    {
        $this->textarea5 = $textarea5;
        return $this;
    }

    public function getTextarea6(): string
    {
        return $this->textarea6;
    }

    public function setTextarea6(string $textarea6): MailingConfiguration
    {
        $this->textarea6 = $textarea6;
        return $this;
    }

    public function getTextarea7(): string
    {
        return $this->textarea7;
    }

    public function setTextarea7(string $textarea7): MailingConfiguration
    {
        $this->textarea7 = $textarea7;
        return $this;
    }

    public function getTextarea8(): string
    {
        return $this->textarea8;
    }

    public function setTextarea8(string $textarea8): MailingConfiguration
    {
        $this->textarea8 = $textarea8;
        return $this;
    }

    public function getTextarea9(): string
    {
        return $this->textarea9;
    }

    public function setTextarea9(string $textarea9): MailingConfiguration
    {
        $this->textarea9 = $textarea9;
        return $this;
    }

    public function getHtmlarea0(): string
    {
        return $this->htmlarea0;
    }

    public function setHtmlarea0(string $htmlarea0): MailingConfiguration
    {
        $this->htmlarea0 = $htmlarea0;
        return $this;
    }

    public function getHtmlarea1(): string
    {
        return $this->htmlarea1;
    }

    public function setHtmlarea1(string $htmlarea1): MailingConfiguration
    {
        $this->htmlarea1 = $htmlarea1;
        return $this;
    }

    public function getHtmlarea2(): string
    {
        return $this->htmlarea2;
    }

    public function setHtmlarea2(string $htmlarea2): MailingConfiguration
    {
        $this->htmlarea2 = $htmlarea2;
        return $this;
    }

    public function getHtmlarea3(): string
    {
        return $this->htmlarea3;
    }

    public function setHtmlarea3(string $htmlarea3): MailingConfiguration
    {
        $this->htmlarea3 = $htmlarea3;
        return $this;
    }

    public function getHtmlarea4(): string
    {
        return $this->htmlarea4;
    }

    public function setHtmlarea4(string $htmlarea4): MailingConfiguration
    {
        $this->htmlarea4 = $htmlarea4;
        return $this;
    }

    public function getHtmlarea5(): string
    {
        return $this->htmlarea5;
    }

    public function setHtmlarea5(string $htmlarea5): MailingConfiguration
    {
        $this->htmlarea5 = $htmlarea5;
        return $this;
    }

    public function getHtmlarea6(): string
    {
        return $this->htmlarea6;
    }

    public function setHtmlarea6(string $htmlarea6): MailingConfiguration
    {
        $this->htmlarea6 = $htmlarea6;
        return $this;
    }

    public function getHtmlarea7(): string
    {
        return $this->htmlarea7;
    }

    public function setHtmlarea7(string $htmlarea7): MailingConfiguration
    {
        $this->htmlarea7 = $htmlarea7;
        return $this;
    }

    public function getHtmlarea8(): string
    {
        return $this->htmlarea8;
    }

    public function setHtmlarea8(string $htmlarea8): MailingConfiguration
    {
        $this->htmlarea8 = $htmlarea8;
        return $this;
    }

    public function getHtmlarea9(): string
    {
        return $this->htmlarea9;
    }

    public function setHtmlarea9(string $htmlarea9): MailingConfiguration
    {
        $this->htmlarea9 = $htmlarea9;
        return $this;
    }
}
