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
}
