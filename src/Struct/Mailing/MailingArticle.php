<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Class MailingArticle
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

    /**
     * @param int $id
     * @param int $articleId
     * @param int $targetGroupId
     * @param int $htmlPresetId
     * @param int $textPresetId
     * @param int $landingpagePresetId
     * @param int $pdfPresetId
     * @param int $mobilePresetId
     * @param int $sortPos
     * @param int $slot
     */
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
    public function getHtmlPresetId(): int
    {
        return $this->htmlPresetId;
    }

    /**
     * @return int
     */
    public function getTextPresetId(): int
    {
        return $this->textPresetId;
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
    public function getPdfPresetId(): int
    {
        return $this->pdfPresetId;
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