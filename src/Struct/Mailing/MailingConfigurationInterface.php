<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingConfigurationInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
interface MailingConfigurationInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getExternalTrackingCode(): string;

    /**
     * @param string $externalTrackingCode
     *
     * @return MailingConfiguration
     */
    public function setExternalTrackingCode(string $externalTrackingCode): MailingConfiguration;

    /**
     * @return string
     */
    public function getCampaignId(): string;

    /**
     * @param string $campaignId
     *
     * @return MailingConfiguration
     */
    public function setCampaignId(string $campaignId): MailingConfiguration;

    /**
     * @return string
     */
    public function getExternalXmlUrl(): string;

    /**
     * @param string $externalXmlUrl
     *
     * @return MailingConfiguration
     */
    public function setExternalXmlUrl(string $externalXmlUrl): MailingConfiguration;

    /**
     * @return string
     */
    public function getSalutationFemale(): string;

    /**
     * @param string $salutationFemale
     *
     * @return MailingConfiguration
     */
    public function setSalutationFemale(string $salutationFemale): MailingConfiguration;

    /**
     * @return string
     */
    public function getSalutationMale(): string;

    /**
     * @param string $salutationMale
     *
     * @return MailingConfiguration
     */
    public function setSalutationMale(string $salutationMale): MailingConfiguration;

    /**
     * @return string
     */
    public function getSalutationCompany(): string;

    /**
     * @param string $salutationCompany
     *
     * @return MailingConfiguration
     */
    public function setSalutationCompany(string $salutationCompany): MailingConfiguration;

    /**
     * @return string
     */
    public function getSalutationFamily(): string;

    /**
     * @param string $salutationFamily
     *
     * @return MailingConfiguration
     */
    public function setSalutationFamily(string $salutationFamily): MailingConfiguration;

    /**
     * @return string
     */
    public function getSalutationOther(): string;

    /**
     * @param string $salutationOther
     *
     * @return MailingConfiguration
     */
    public function setSalutationOther(string $salutationOther): MailingConfiguration;

    /**
     * @return string
     */
    public function getSenderEmail(): string;

    /**
     * @param string $senderEmail
     *
     * @return MailingConfiguration
     */
    public function setSenderEmail(string $senderEmail): MailingConfiguration;

    /**
     * @return string
     */
    public function getSenderName(): string;

    /**
     * @param string $senderName
     *
     * @return MailingConfiguration
     */
    public function setSenderName(string $senderName): MailingConfiguration;

    /**
     * @return string
     */
    public function getReplyName(): string;

    /**
     * @param string $replyName
     *
     * @return MailingConfiguration
     */
    public function setReplyName(string $replyName): MailingConfiguration;

    /**
     * @return string
     */
    public function getReplyEmail(): string;

    /**
     * @param string $replyEmail
     *
     * @return MailingConfiguration
     */
    public function setReplyEmail(string $replyEmail): MailingConfiguration;

    /**
     * @return string
     */
    public function getGrantUrl(): string;

    /**
     * @param string $grantUrl
     *
     * @return MailingConfiguration
     */
    public function setGrantUrl(string $grantUrl): MailingConfiguration;

    /**
     * @return string
     */
    public function getRevokeUrl(): string;

    /**
     * @param string $revokeUrl
     *
     * @return MailingConfiguration
     */
    public function setRevokeUrl(string $revokeUrl): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield0(): string;

    /**
     * @param string $inputfield0
     *
     * @return MailingConfiguration
     */
    public function setInputfield0(string $inputfield0): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield1(): string;

    /**
     * @param string $inputfield1
     *
     * @return MailingConfiguration
     */
    public function setInputfield1(string $inputfield1): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield2(): string;

    /**
     * @param string $inputfield2
     *
     * @return MailingConfiguration
     */
    public function setInputfield2(string $inputfield2): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield3(): string;

    /**
     * @param string $inputfield3
     *
     * @return MailingConfiguration
     */
    public function setInputfield3(string $inputfield3): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield4(): string;

    /**
     * @param string $inputfield4
     *
     * @return MailingConfiguration
     */
    public function setInputfield4(string $inputfield4): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield5(): string;

    /**
     * @param string $inputfield5
     *
     * @return MailingConfiguration
     */
    public function setInputfield5(string $inputfield5): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield6(): string;

    /**
     * @param string $inputfield6
     *
     * @return MailingConfiguration
     */
    public function setInputfield6(string $inputfield6): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield7(): string;

    /**
     * @param string $inputfield7
     *
     * @return MailingConfiguration
     */
    public function setInputfield7(string $inputfield7): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield8(): string;

    /**
     * @param string $inputfield8
     *
     * @return MailingConfiguration
     */
    public function setInputfield8(string $inputfield8): MailingConfiguration;

    /**
     * @return string
     */
    public function getInputfield9(): string;

    /**
     * @param string $inputfield9
     *
     * @return MailingConfiguration
     */
    public function setInputfield9(string $inputfield9): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea0(): string;

    /**
     * @param string $textarea0
     *
     * @return MailingConfiguration
     */
    public function setTextarea0(string $textarea0): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea1(): string;

    /**
     * @param string $textarea1
     *
     * @return MailingConfiguration
     */
    public function setTextarea1(string $textarea1): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea2(): string;

    /**
     * @param string $textarea2
     *
     * @return MailingConfiguration
     */
    public function setTextarea2(string $textarea2): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea3(): string;

    /**
     * @param string $textarea3
     *
     * @return MailingConfiguration
     */
    public function setTextarea3(string $textarea3): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea4(): string;

    /**
     * @param string $textarea4
     *
     * @return MailingConfiguration
     */
    public function setTextarea4(string $textarea4): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea5(): string;

    /**
     * @param string $textarea5
     *
     * @return MailingConfiguration
     */
    public function setTextarea5(string $textarea5): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea6(): string;

    /**
     * @param string $textarea6
     *
     * @return MailingConfiguration
     */
    public function setTextarea6(string $textarea6): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea7(): string;

    /**
     * @param string $textarea7
     *
     * @return MailingConfiguration
     */
    public function setTextarea7(string $textarea7): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea8(): string;

    /**
     * @param string $textarea8
     *
     * @return MailingConfiguration
     */
    public function setTextarea8(string $textarea8): MailingConfiguration;

    /**
     * @return string
     */
    public function getTextarea9(): string;

    /**
     * @param string $textarea9
     *
     * @return MailingConfiguration
     */
    public function setTextarea9(string $textarea9): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea0(): string;

    /**
     * @param string $htmlarea0
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea0(string $htmlarea0): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea1(): string;

    /**
     * @param string $htmlarea1
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea1(string $htmlarea1): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea2(): string;

    /**
     * @param string $htmlarea2
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea2(string $htmlarea2): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea3(): string;

    /**
     * @param string $htmlarea3
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea3(string $htmlarea3): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea4(): string;

    /**
     * @param string $htmlarea4
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea4(string $htmlarea4): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea5(): string;

    /**
     * @param string $htmlarea5
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea5(string $htmlarea5): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea6(): string;

    /**
     * @param string $htmlarea6
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea6(string $htmlarea6): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea7(): string;

    /**
     * @param string $htmlarea7
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea7(string $htmlarea7): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea8(): string;

    /**
     * @param string $htmlarea8
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea8(string $htmlarea8): MailingConfiguration;

    /**
     * @return string
     */
    public function getHtmlarea9(): string;

    /**
     * @param string $htmlarea9
     *
     * @return MailingConfiguration
     */
    public function setHtmlarea9(string $htmlarea9): MailingConfiguration;

    /**
     * @return string
     */
    public function getContainerType(): string;

    /**
     * @param string $containerType
     *
     * @return $this
     */
    public function setContainerType(string $containerType): MailingConfiguration;
}
