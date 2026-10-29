<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Reference to an article in a mailing
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingArticle implements MailingArticleInterface
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
    private $htmlPresetId;

    /**
     * @var int
     */
    private $textPresetId;

    /**
     * @var int
     */
    private $landingpagePresetId;

    /**
     * @var int
     */
    private $pdfPresetId;

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
        int $id = null,
        int $articleId = null,
        int $targetGroupId = null,
        int $htmlPresetId = null,
        int $textPresetId = null,
        int $landingpagePresetId = null,
        int $pdfPresetId = null,
        int $mobilePresetId = null,
        int $sortPos = null,
        int $slot = null
    ) {
        $this->id = $id;
        $this->articleId = $articleId;
        $this->targetGroupId = $targetGroupId;
        $this->htmlPresetId = $htmlPresetId;
        $this->textPresetId = $textPresetId;
        $this->landingpagePresetId = $landingpagePresetId;
        $this->pdfPresetId = $pdfPresetId;
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

    public function getHtmlPresetId(): int
    {
        return $this->htmlPresetId;
    }

    public function getTextPresetId(): int
    {
        return $this->textPresetId;
    }

    public function getLandingpagePresetId(): int
    {
        return $this->landingpagePresetId;
    }

    public function getPdfPresetId(): int
    {
        return $this->pdfPresetId;
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
