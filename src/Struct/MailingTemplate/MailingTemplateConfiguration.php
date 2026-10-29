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
        string $externalTrackingCode = '',
        string $campaignId = '',
        string $externalXmlUrl = '',
        string $salutationFemale = '',
        string $salutationMale = '',
        string $salutationCompany = '',
        string $salutationFamily = '',
        string $salutationOther = '',
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
        string $containerType = '',
        string $salutationDivers = '',
        string $revokeTrackingUrl = '',
        string $grantTrackingUrl = '',
        string $revokeConfirmationUrl = '',
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
