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
    public function __construct(
        private null|int $id = null,
        private null|int $articleId = null,
        private null|int $targetGroupId = null,
        private null|int $htmlPresetId = null,
        private null|int $textPresetId = null,
        private null|int $landingpagePresetId = null,
        private null|int $pdfPresetId = null,
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

    public function getHtmlPresetId(): int
    {
        return (int) $this->htmlPresetId;
    }

    public function getTextPresetId(): int
    {
        return (int) $this->textPresetId;
    }

    public function getLandingpagePresetId(): int
    {
        return (int) $this->landingpagePresetId;
    }

    public function getPdfPresetId(): int
    {
        return (int) $this->pdfPresetId;
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
