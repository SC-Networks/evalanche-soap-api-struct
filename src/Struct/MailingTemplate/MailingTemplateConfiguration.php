<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\MailingTemplate;

use Scn\EvalancheSoapStruct\Struct\Mailing\MailingConfiguration;

/**
 * Contains information about the configuration of a specific mailing template
 * like campaign id, individual salutations, reply address, input fields, etc.
 */
class MailingTemplateConfiguration extends MailingConfiguration implements MailingTemplateConfigurationInterface
{
    /**
     * @var string
     */
    protected $containerType;

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
     * @param string $containerType
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
        string $htmlarea9 = null,
        string $containerType = null
    ) {
        parent::__construct(
            $externalTrackingCode,
            $campaignId,
            $externalXmlUrl,
            $salutationFemale,
            $salutationMale,
            $salutationCompany,
            $salutationFamily,
            $salutationOther,
            $senderEmail,
            $senderName,
            $replyName,
            $replyEmail,
            $grantUrl,
            $revokeUrl,
            $inputfield0,
            $inputfield1,
            $inputfield2,
            $inputfield3,
            $inputfield4,
            $inputfield5,
            $inputfield6,
            $inputfield7,
            $inputfield8,
            $inputfield9,
            $textarea0,
            $textarea1,
            $textarea2,
            $textarea3,
            $textarea4,
            $textarea5,
            $textarea6,
            $textarea7,
            $textarea8,
            $textarea9,
            $htmlarea0,
            $htmlarea1,
            $htmlarea2,
            $htmlarea3,
            $htmlarea4,
            $htmlarea5,
            $htmlarea6,
            $htmlarea7,
            $htmlarea8,
            $htmlarea9
        );
        $this->containerType = $containerType;
    }

    /**
     * @return string
     */
    public function getContainerType(): string
    {
        return $this->containerType;
    }

    /**
     * @param string $containerType
     *
     * @return $this
     */
    public function setContainerType(string $containerType): MailingTemplateConfiguration
    {
        $this->containerType = $containerType;
        return $this;
    }
}
