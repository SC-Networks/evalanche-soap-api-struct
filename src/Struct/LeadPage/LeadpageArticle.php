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
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $articleId;

    /**
     * @var int
     */
    private $targetGroupId;

    /**
     * @var int
     */
    private $landingpagePresetId;

    /**
     * @var int
     */
    private $mobilePresetId;

    /**
     * @var int
     */
    private $sortPos;

    /**
     * @var int
     */
    private $slot;

    public function __construct(
        int $id = 0,
        int $articleId = 0,
        int $targetGroupId = 0,
        int $landingpagePresetId = 0,
        int $mobilePresetId = 0,
        int $sortPos = 0,
        int $slot = 0
    ) {
        $this->id = $id;
        $this->articleId = $articleId;
        $this->targetGroupId = $targetGroupId;
        $this->landingpagePresetId = $landingpagePresetId;
        $this->mobilePresetId = $mobilePresetId;
        $this->sortPos = $sortPos;
        $this->slot = $slot;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getArticleId(): int
    {
        return $this->articleId;
    }

    public function getTargetGroupId(): int
    {
        return $this->targetGroupId;
    }

    public function getLandingpagePresetId(): int
    {
        return $this->landingpagePresetId;
    }

    public function getMobilePresetId(): int
    {
        return $this->mobilePresetId;
    }

    public function getSortPos(): int
    {
        return $this->sortPos;
    }

    public function getSlot(): int
    {
        return $this->slot;
    }
}
