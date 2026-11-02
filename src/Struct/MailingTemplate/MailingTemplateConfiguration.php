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
     * @var null|string
     */
    protected $containerType;

    public function __construct(
        null|string $externalTrackingCode = null,
        null|string $campaignId = null,
        null|string $externalXmlUrl = null,
        null|string $salutationFemale = null,
        null|string $salutationMale = null,
        null|string $salutationCompany = null,
        null|string $salutationFamily = null,
        null|string $salutationOther = null,
        null|string $senderEmail = null,
        null|string $senderName = null,
        null|string $replyName = null,
        null|string $replyEmail = null,
        null|string $grantUrl = null,
        null|string $revokeUrl = null,
        null|string $inputfield0 = null,
        null|string $inputfield1 = null,
        null|string $inputfield2 = null,
        null|string $inputfield3 = null,
        null|string $inputfield4 = null,
        null|string $inputfield5 = null,
        null|string $inputfield6 = null,
        null|string $inputfield7 = null,
        null|string $inputfield8 = null,
        null|string $inputfield9 = null,
        null|string $textarea0 = null,
        null|string $textarea1 = null,
        null|string $textarea2 = null,
        null|string $textarea3 = null,
        null|string $textarea4 = null,
        null|string $textarea5 = null,
        null|string $textarea6 = null,
        null|string $textarea7 = null,
        null|string $textarea8 = null,
        null|string $textarea9 = null,
        null|string $htmlarea0 = null,
        null|string $htmlarea1 = null,
        null|string $htmlarea2 = null,
        null|string $htmlarea3 = null,
        null|string $htmlarea4 = null,
        null|string $htmlarea5 = null,
        null|string $htmlarea6 = null,
        null|string $htmlarea7 = null,
        null|string $htmlarea8 = null,
        null|string $htmlarea9 = null,
        null|string $containerType = null,
        null|string $salutationDivers = null,
        null|string $revokeTrackingUrl = null,
        null|string $grantTrackingUrl = null,
        null|string $revokeConfirmationUrl = null,
        null|bool $revokeConfirmationActive = null
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
        return (string) $this->containerType;
    }

    public function setContainerType(string $containerType): MailingTemplateConfiguration
    {
        $this->containerType = $containerType;
        return $this;
    }
}
