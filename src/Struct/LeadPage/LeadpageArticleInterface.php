<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingArticleInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Leadpage
 */
interface LeadpageArticleInterface extends StructInterface
{
    public function getId(): int;

    public function getArticleId(): int;

    public function getTargetGroupId(): int;

    public function getLandingpagePresetId(): int;

    public function getMobilePresetId(): int;

    public function getSortPos(): int;

    public function getSlot(): int;
}
