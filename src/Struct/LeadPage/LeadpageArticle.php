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

    /**
     * @param int $id
     * @param int $articleId
     * @param int $targetGroupId
     * @param int $landingpagePresetId
     * @param int $mobilePresetId
     * @param int $sortPos
     * @param int $slot
     */
    public function __construct(
        int $id = null,
        int $articleId = null,
        int $targetGroupId = null,
        int $landingpagePresetId = null,
        int $mobilePresetId = null,
        int $sortPos = null,
        int $slot = null
    ) {
        $this->id = $id;
        $this->articleId = $articleId;
        $this->targetGroupId = $targetGroupId;
        $this->landingpagePresetId = $landingpagePresetId;
        $this->mobilePresetId = $mobilePresetId;
        $this->sortPos = $sortPos;
        $this->slot = $slot;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getArticleId(): int
    {
        return $this->articleId;
    }

    /**
     * @return int
     */
    public function getTargetGroupId(): int
    {
        return $this->targetGroupId;
    }

    /**
     * @return int
     */
    public function getLandingpagePresetId(): int
    {
        return $this->landingpagePresetId;
    }

    /**
     * @return int
     */
    public function getMobilePresetId(): int
    {
        return $this->mobilePresetId;
    }

    /**
     * @return int
     */
    public function getSortPos(): int
    {
        return $this->sortPos;
    }

    /**
     * @return int
     */
    public function getSlot(): int
    {
        return $this->slot;
    }
}
