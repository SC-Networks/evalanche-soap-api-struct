<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

/**
 * Reference to an article in a leadpage
 *
 * @package Scn\EvalancheSoapStruct\Struct\Leadpage
 */
class LeadpageArticle implements LeadpageArticleInterface
{
    public function __construct(
        private null|int $id = null,
        private null|int $articleId = null,
        private null|int $targetGroupId = null,
        private null|int $landingpagePresetId = null,
        private null|int $mobilePresetId = null,
        private null|int $sortPos = null,
        private null|int $slot = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getArticleId(): int
    {
        return (int) $this->articleId;
    }

    public function getTargetGroupId(): int
    {
        return (int) $this->targetGroupId;
    }

    public function getLandingpagePresetId(): int
    {
        return (int) $this->landingpagePresetId;
    }

    public function getMobilePresetId(): int
    {
        return (int) $this->mobilePresetId;
    }

    public function getSortPos(): int
    {
        return (int) $this->sortPos;
    }

    public function getSlot(): int
    {
        return (int) $this->slot;
    }
}
