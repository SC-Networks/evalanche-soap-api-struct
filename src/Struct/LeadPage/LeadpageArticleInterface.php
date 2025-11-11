<?php

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingArticleInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Leadpage
 */
interface LeadpageArticleInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getArticleId(): int;

    /**
     * @return int
     */
    public function getTargetGroupId(): int;

    /**
     * @return int
     */
    public function getLandingpagePresetId(): int;

    /**
     * @return int
     */
    public function getMobilePresetId(): int;

    /**
     * @return int
     */
    public function getSortPos(): int;

    /**
     * @return int
     */
    public function getSlot(): int;
}
