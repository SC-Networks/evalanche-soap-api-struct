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
        string $containerType = null,
        string $salutationDivers = null,
        string $revokeTrackingUrl = null,
        string $grantTrackingUrl = null,
        string $revokeConfirmationUrl = null,
        bool $revokeConfirmationActive = false
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
            $salutationDivers,
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
            $htmlarea9,
            $revokeTrackingUrl,
            $grantTrackingUrl,
            $revokeConfirmationUrl,
            $revokeConfirmationActive
        );
        $this->containerType = $containerType;
    }

    public function getContainerType(): string
    {
        return $this->containerType;
    }

    public function setContainerType(string $containerType): MailingTemplateConfiguration
    {
        $this->containerType = $containerType;
        return $this;
    }
}
