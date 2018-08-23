<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Class MailingConfiguration
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingConfiguration implements MailingConfigurationInterface
{
    /**
     * @var string
     */
    private $externalTrackingCode;

    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var string
     */
    private $externalXmlUrl;

    /**
     * @var string
     */
    private $salutationFemale;

    /**
     * @var string
     */
    private $salutationMale;

    /**
     * @var string
     */
    private $salutationCompany;

    /**
     * @var string
     */
    private $salutationFamily;

    /**
     * @var string
     */
    private $salutationOther;

    /**
     * @var string
     */
    private $senderEmail;

    /**
     * @var string
     */
    private $senderName;

    /**
     * @var string
     */
    private $replyName;

    /**
     * @var string
     */
    private $replyEmail;

    /**
     * @var string
     */
    private $grantUrl;

    /**
     * @var string
     */
    private $revokeUrl;

    /**
     * @var string
     */
    private $inputfield0;

    /**
     * @var string
     */
    private $inputfield1;

    /**
     * @var string
     */
    private $inputfield2;

    /**
     * @var string
     */
    private $inputfield3;

    /**
     * @var string
     */
    private $inputfield4;

    /**
     * @var string
     */
    private $inputfield5;

    /**
     * @var string
     */
    private $inputfield6;

    /**
     * @var string
     */
    private $inputfield7;

    /**
     * @var string
     */
    private $inputfield8;

    /**
     * @var string
     */
    private $inputfield9;

    /**
     * @var string
     */
    private $textarea0;

    /**
     * @var string
     */
    private $textarea1;

    /**
     * @var string
     */
    private $textarea2;

    /**
     * @var string
     */
    private $textarea3;

    /**
     * @var string
     */
    private $textarea4;

    /**
     * @var string
     */
    private $textarea5;

    /**
     * @var string
     */
    private $textarea6;

    /**
     * @var string
     */
    private $textarea7;

    /**
     * @var string
     */
    private $textarea8;

    /**
     * @var string
     */
    private $textarea9;

    /**
     * @var string
     */
    private $htmlarea0;

    /**
     * @var string
     */
    private $htmlarea1;

    /**
     * @var string
     */
    private $htmlarea2;

    /**
     * @var string
     */
    private $htmlarea3;

    /**
     * @var string
     */
    private $htmlarea4;

    /**
     * @var string
     */
    private $htmlarea5;

    /**
     * @var string
     */
    private $htmlarea6;

    /**
     * @var string
     */
    private $htmlarea7;

    /**
     * @var string
     */
    private $htmlarea8;

    /**
     * @var string
     */
    private $htmlarea9;

    /**
     * @param string $externalTrackingCode
     * @param string $campaignId
     * @param string $externalXmlUrl
     * @param string $salutationFemale
     * @param string $salutationMale
     * @param string $salutationCompany
     * @param string $salutationFamily
     * @param string $salutationOther
     * @param string $senderEmail
     * @param string $senderName
     * @param string $replyName
     * @param string $replyEmail
     * @param string $grantUrl
     * @param string $revokeUrl
     * @param string $inputfield0
     * @param string $inputfield1
     * @param string $inputfield2
     * @param string $inputfield3
     * @param string $inputfield4
     * @param string $inputfield5
     * @param string $inputfield6
     * @param string $inputfield7
     * @param string $inputfield8
     * @param string $inputfield9
     * @param string $textarea0
     * @param string $textarea1
     * @param string $textarea2
     * @param string $textarea3
     * @param string $textarea4
     * @param string $textarea5
     * @param string $textarea6
     * @param string $textarea7
     * @param string $textarea8
     * @param string $textarea9
     * @param string $htmlarea0
     * @param string $htmlarea1
     * @param string $htmlarea2
     * @param string $htmlarea3
     * @param string $htmlarea4
     * @param string $htmlarea5
     * @param string $htmlarea6
     * @param string $htmlarea7
     * @param string $htmlarea8
     * @param string $htmlarea9
     */
    public function __construct(
        string $externalTrackingCode = null,
        string $campaignId = null,
        string $externalXmlUrl = null,
        string $salutationFemale = null,
        string $salutationMale = null,
        string $salutationCompany = null,
        string $salutationFamily = null,
        string $salutationOther = null,
        string $senderEmail = null,
        string $senderName = null,
        string $replyName = null,
        string $replyEmail = null,
        string $grantUrl = null,
        string $revokeUrl = null,
        string $inputfield0 = null,
        string $inputfield1 = null,
        string $inputfield2 = null,
        string $inputfield3 = null,
        string $inputfield4 = null,
        string $inputfield5 = null,
        string $inputfield6 = null,
        string $inputfield7 = null,
        string $inputfield8 = null,
        string $inputfield9 = null,
        string $textarea0 = null,
        string $textarea1 = null,
        string $textarea2 = null,
        string $textarea3 = null,
        string $textarea4 = null,
        string $textarea5 = null,
        string $textarea6 = null,
        string $textarea7 = null,
        string $textarea8 = null,
        string $textarea9 = null,
        string $htmlarea0 = null,
        string $htmlarea1 = null,
        string $htmlarea2 = null,
        string $htmlarea3 = null,
        string $htmlarea4 = null,
        string $htmlarea5 = null,
        string $htmlarea6 = null,
        string $htmlarea7 = null,
        string $htmlarea8 = null,
        string $htmlarea9 = null
    ) {
        $this->externalTrackingCode = $externalTrackingCode;
        $this->campaignId = $campaignId;
        $this->externalXmlUrl = $externalXmlUrl;
        $this->salutationFemale = $salutationFemale;
        $this->salutationMale = $salutationMale;
        $this->salutationCompany = $salutationCompany;
        $this->salutationFamily = $salutationFamily;
        $this->salutationOther = $salutationOther;
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
    }

    /**
     * @return string
     */
    public function getExternalTrackingCode(): string
    {
        return $this->externalTrackingCode;
    }

    /**
     * @param string $externalTrackingCode
     *
     * @return MailingConfiguration
     */
    public function setExternalTrackingCode(string $externalTrackingCode): MailingConfiguration
    {
        $this->externalTrackingCode = $externalTrackingCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * @param string $campaignId
     *
     * @return MailingConfiguration
     */
    public function setCampaignId(string $campaignId): MailingConfiguration
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalXmlUrl(): string
    {
        return $this->externalXmlUrl;
    }

    /**
     * @param string $externalXmlUrl
     *
     * @return MailingConfiguration
     */
    public function setExternalXmlUrl(string $externalXmlUrl): MailingConfiguration
    {
        $this->externalXmlUrl = $externalXmlUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalutationFemale(): string
    {
        return $this->salutationFemale;
    }

    /**
     * @param string $salutationFemale
     *
     * @return MailingConfiguration
     */
    public function setSalutationFemale(string $salutationFemale): MailingConfiguration
    {
        $this->salutationFemale = $salutationFemale;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalutationMale(): string
    {
        return $this->salutationMale;
    }

    /**
     * @param string $salutationMale
     *
     * @return MailingConfiguration
     */
    public function setSalutationMale(string $salutationMale): MailingConfiguration
    {
        $this->salutationMale = $salutationMale;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalutationCompany(): string
    {
        return $this->salutationCompany;
    }

    /**
     * @param string $salutationCompany
     *
     * @return MailingConfiguration
     */
    public function setSalutationCompany(string $salutationCompany): MailingConfiguration
    {
        $this->salutationCompany = $salutationCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalutationFamily(): string
    {
        return $this->salutationFamily;
    }

    /**
     * @param string $salutationFamily
     *
     * @return MailingConfiguration
     */
    public function setSalutationFamily(string $salutationFamily): MailingConfiguration
    {
        $this->salutationFamily = $salutationFamily;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalutationOther(): string
    {
        return $this->salutationOther;
    }

    /**
     * @param string $salutationOther
     *
     * @return MailingConfiguration
     */
    public function setSalutationOther(string $salutationOther): MailingConfiguration
    {
        $this->salutationOther = $salutationOther;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderEmail(): string
    {
        return $this->senderEmail;
    }

    /**
     * @param string $senderEmail
     *
     * @return MailingConfiguration
     */
    public function setSenderEmail(string $senderEmail): MailingConfiguration
    {
        $this->senderEmail = $senderEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     *
     * @return MailingConfiguration
     */
    public function setSenderName(string $senderName): MailingConfiguration
    {
        $this->senderName = $senderName;
        return $this;
    }

    /**
     * @return string
     */
    public function getReplyName(): string
    {
        return $this->replyName;
    }

    /**
     * @param string $replyName
     *
     * @return MailingConfiguration
     */
    public function setReplyName(string $replyName): MailingConfiguration
    {
        $this->replyName = $replyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getReplyEmail(): string
    {
        return $this->replyEmail;
    }

    /**
     * @param string $replyEmail
     *
     * @return MailingConfiguration
     */
    public function setReplyEmail(string $replyEmail): MailingConfiguration
    {
        $this->replyEmail = $replyEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrantUrl(): string
    {
        return $this->grantUrl;
    }

    /**
     * @param string $grantUrl
     *
     * @return MailingConfiguration
     */
    public function setGrantUrl(string $grantUrl): MailingConfiguration
    {
        $this->grantUrl = $grantUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevokeUrl(): string
    {
        return $this->revokeUrl;
    }

    /**
     * @param string $revokeUrl
     *
     * @return MailingConfiguration
     */
    public function setRevokeUrl(string $revokeUrl): MailingConfiguration
    {
        $this->revokeUrl = $revokeUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield0(): string
    {
        return $this->inputfield0;
    }

    /**
     * @param string $inputfield0
     *
     * @return MailingConfiguration
     */
    public function setInputfield0(string $inputfield0): MailingConfiguration
    {
        $this->inputfield0 = $inputfield0;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield1(): string
    {
        return $this->inputfield1;
    }

    /**
     * @param string $inputfield1
     *
     * @return MailingConfiguration
     */
    public function setInputfield1(string $inputfield1): MailingConfiguration
    {
        $this->inputfield1 = $inputfield1;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield2(): string
    {
        return $this->inputfield2;
    }

    /**
     * @param string $inputfield2
     *
     * @return MailingConfiguration
     */
    public function setInputfield2(string $inputfield2): MailingConfiguration
    {
        $this->inputfield2 = $inputfield2;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield3(): string
    {
        return $this->inputfield3;
    }

    /**
     * @param string $inputfield3
     *
     * @return MailingConfiguration
     */
    public function setInputfield3(string $inputfield3): MailingConfiguration
    {
        $this->inputfield3 = $inputfield3;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield4(): string
    {
        return $this->inputfield4;
    }

    /**
     * @param string $inputfield4
     *
     * @return MailingConfiguration
     */
    public function setInputfield4(string $inputfield4): MailingConfiguration
    {
        $this->inputfield4 = $inputfield4;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield5(): string
    {
        return $this->inputfield5;
    }

    /**
     * @param string $inputfield5
     *
     * @return MailingConfiguration
     */
    public function setInputfield5(string $inputfield5): MailingConfiguration
    {
        $this->inputfield5 = $inputfield5;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield6(): string
    {
        return $this->inputfield6;
    }

    /**
     * @param string $inputfield6
     *
     * @return MailingConfiguration
     */
    public function setInputfield6(string $inputfield6): MailingConfiguration
    {
        $this->inputfield6 = $inputfield6;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield7(): string
    {
        return $this->inputfield7;
    }

    /**
     * @param string $inputfield7
     *
     * @return MailingConfiguration
     */
    public function setInputfield7(string $inputfield7): MailingConfiguration
    {
        $this->inputfield7 = $inputfield7;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield8(): string
    {
        return $this->inputfield8;
    }

    /**
     * @param string $inputfield8
     *
     * @return MailingConfiguration
     */
    public function setInputfield8(string $inputfield8): MailingConfiguration
    {
        $this->inputfield8 = $inputfield8;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputfield9(): string
    {
        return $this->inputfield9;
    }

    /**
     * @param string $inputfield9
     *
     * @return MailingConfiguration
     */
    public function setInputfield9(string $inputfield9): MailingConfiguration
    {
        $this->inputfield9 = $inputfield9;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea0(): string
    {
        return $this->textarea0;
    }

    /**
     * @param string $textarea0
     *
     * @return MailingConfiguration
     */
    public function setTextarea0(string $textarea0): MailingConfiguration
    {
        $this->textarea0 = $textarea0;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea1(): string
    {
        return $this->textarea1;
    }

    /**
     * @param string $textarea1
     *
     * @return MailingConfiguration
     */
    public function setTextarea1(string $textarea1): MailingConfiguration
    {
        $this->textarea1 = $textarea1;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea2(): string
    {
        return $this->textarea2;
    }

    /**
     * @param string $textarea2
     *
     * @return MailingConfiguration
     */
    public function setTextarea2(string $textarea2): MailingConfiguration
    {
        $this->textarea2 = $textarea2;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea3(): string
    {
        return $this->textarea3;
    }

    /**
     * @param string $textarea3
     *
     * @return MailingConfiguration
     */
    public function setTextarea3(string $textarea3): MailingConfiguration
    {
        $this->textarea3 = $textarea3;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea4(): string
    {
        return $this->textarea4;
    }

    /**
     * @param string $textarea4
     *
     * @return MailingConfiguration
     */
    public function setTextarea4(string $textarea4): MailingConfiguration
    {
        $this->textarea4 = $textarea4;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea5(): string
    {
        return $this->textarea5;
    }

    /**
     * @param string $textarea5
     *
     * @return MailingConfiguration
     */
    public function setTextarea5(string $textarea5): MailingConfiguration
    {
        $this->textarea5 = $textarea5;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea6(): string
    {
        return $this->textarea6;
    }

    /**
     * @param string $textarea6
     *
     * @return MailingConfiguration
     */
    public function setTextarea6(string $textarea6): MailingConfiguration
    {
        $this->textarea6 = $textarea6;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea7(): string
    {
        return $this->textarea7;
    }

    /**
     * @param string $textarea7
     *
     * @return MailingConfiguration
     */
    public function setTextarea7(string $textarea7): MailingConfiguration
    {
        $this->textarea7 = $textarea7;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea8(): string
    {
        return $this->textarea8;
    }

    /**
     * @param string $textarea8
     *
     * @return MailingConfiguration
     */
    public function setTextarea8(string $textarea8): MailingConfiguration
    {
        $this->textarea8 = $textarea8;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextarea9(): string
    {
        return $this->textarea9;
    }

    /**
     * @param string $textarea9
     *
     * @return MailingConfiguration
     */
    public function setTextarea9(string $textarea9): MailingConfiguration
    {
        $this->textarea9 = $textarea9;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea0(): string
    {
        return $this->htmlarea0;
    }

    /**
     * @param string $htmlarea0
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea0(string $htmlarea0): MailingConfiguration
    {
        $this->htmlarea0 = $htmlarea0;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea1(): string
    {
        return $this->htmlarea1;
    }

    /**
     * @param string $htmlarea1
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea1(string $htmlarea1): MailingConfiguration
    {
        $this->htmlarea1 = $htmlarea1;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea2(): string
    {
        return $this->htmlarea2;
    }

    /**
     * @param string $htmlarea2
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea2(string $htmlarea2): MailingConfiguration
    {
        $this->htmlarea2 = $htmlarea2;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea3(): string
    {
        return $this->htmlarea3;
    }

    /**
     * @param string $htmlarea3
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea3(string $htmlarea3): MailingConfiguration
    {
        $this->htmlarea3 = $htmlarea3;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea4(): string
    {
        return $this->htmlarea4;
    }

    /**
     * @param string $htmlarea4
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea4(string $htmlarea4): MailingConfiguration
    {
        $this->htmlarea4 = $htmlarea4;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea5(): string
    {
        return $this->htmlarea5;
    }

    /**
     * @param string $htmlarea5
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea5(string $htmlarea5): MailingConfiguration
    {
        $this->htmlarea5 = $htmlarea5;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea6(): string
    {
        return $this->htmlarea6;
    }

    /**
     * @param string $htmlarea6
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea6(string $htmlarea6): MailingConfiguration
    {
        $this->htmlarea6 = $htmlarea6;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea7(): string
    {
        return $this->htmlarea7;
    }

    /**
     * @param string $htmlarea7
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea7(string $htmlarea7): MailingConfiguration
    {
        $this->htmlarea7 = $htmlarea7;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea8(): string
    {
        return $this->htmlarea8;
    }

    /**
     * @param string $htmlarea8
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea8(string $htmlarea8): MailingConfiguration
    {
        $this->htmlarea8 = $htmlarea8;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlarea9(): string
    {
        return $this->htmlarea9;
    }

    /**
     * @param string $htmlarea9
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea9(string $htmlarea9): MailingConfiguration
    {
        $this->htmlarea9 = $htmlarea9;
        return $this;
    }
}