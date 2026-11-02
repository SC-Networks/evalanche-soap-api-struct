<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Represents the article template configuration for a certain article type in a slot
 */
class MailingSlotItem implements MailingSlotItemInterface
{
    public function __construct(
        private null|int $articleTypeId = null,
        private null|int $emailArticleTemplateId = null,
        private null|int $textArticleTemplateId = null,
        private null|int $landingpageArticleTemplateId = null,
        private null|int $pdfArticleTemplateId = null,
        private null|int $webArticleTemplateId = null,
        /** @var int[] */
        private array $emailAllowedArticleTemplateIds = [],
        /** @var int[] */
        private array $textAllowedArticleTemplateIds = [],
        /** @var int[] */
        private array $landingpageAllowedArticleTemplateIds = [],
        /** @var int[] */
        private array $webAllowedArticleTemplateIds = []
    ) {
    }

    public function getArticleTypeId(): int
    {
        return (int) $this->articleTypeId;
    }

    public function setArticleTypeId(int $articleTypeId): MailingSlotItemInterface
    {
        $this->articleTypeId = $articleTypeId;
        return $this;
    }

    public function getEmailArticleTemplateId(): int
    {
        return (int) $this->emailArticleTemplateId;
    }

    public function setEmailArticleTemplateId(int $emailArticleTemplateId): MailingSlotItemInterface
    {
        $this->emailArticleTemplateId = $emailArticleTemplateId;
        return $this;
    }

    public function getTextArticleTemplateId(): int
    {
        return (int) $this->textArticleTemplateId;
    }

    public function setTextArticleTemplateId(int $textArticleTemplateId): MailingSlotItemInterface
    {
        $this->textArticleTemplateId = $textArticleTemplateId;
        return $this;
    }

    public function getLandingpageArticleTemplateId(): int
    {
        return (int) $this->landingpageArticleTemplateId;
    }

    public function setLandingpageArticleTemplateId(int $landingpageArticleTemplateId): MailingSlotItemInterface
    {
        $this->landingpageArticleTemplateId = $landingpageArticleTemplateId;
        return $this;
    }

    public function getPdfArticleTemplateId(): int
    {
        return (int) $this->pdfArticleTemplateId;
    }

    public function setPdfArticleTemplateId(int $pdfArticleTemplateId): MailingSlotItemInterface
    {
        $this->pdfArticleTemplateId = $pdfArticleTemplateId;
        return $this;
    }

    public function getWebArticleTemplateId(): int
    {
        return (int) $this->webArticleTemplateId;
    }

    public function setWebArticleTemplateId(int $webArticleTemplateId): MailingSlotItemInterface
    {
        $this->webArticleTemplateId = $webArticleTemplateId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getEmailAllowedArticleTemplateIds(): array
    {
        return $this->emailAllowedArticleTemplateIds;
    }

    /**
     * @param int[] $emailAllowedArticleTemplateIds
     */
    public function setEmailAllowedArticleTemplateIds(array $emailAllowedArticleTemplateIds): MailingSlotItemInterface
    {
        $this->emailAllowedArticleTemplateIds = $emailAllowedArticleTemplateIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTextAllowedArticleTemplateIds(): array
    {
        return $this->textAllowedArticleTemplateIds;
    }

    /**
     * @param int[] $textAllowedArticleTemplateIds
     */
    public function setTextAllowedArticleTemplateIds(array $textAllowedArticleTemplateIds): MailingSlotItemInterface
    {
        $this->textAllowedArticleTemplateIds = $textAllowedArticleTemplateIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getLandingpageAllowedArticleTemplateIds(): array
    {
        return $this->landingpageAllowedArticleTemplateIds;
    }

    /**
     * @param int[] $landingpageAllowedArticleTemplateIds
     */
    public function setLandingpageAllowedArticleTemplateIds(array $landingpageAllowedArticleTemplateIds): MailingSlotItemInterface
    {
        $this->landingpageAllowedArticleTemplateIds = $landingpageAllowedArticleTemplateIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getWebAllowedArticleTemplateIds(): array
    {
        return $this->webAllowedArticleTemplateIds;
    }

    /**
     * @param int[] $webAllowedArticleTemplateIds
     */
    public function setWebAllowedArticleTemplateIds(array $webAllowedArticleTemplateIds): MailingSlotItemInterface
    {
        $this->webAllowedArticleTemplateIds = $webAllowedArticleTemplateIds;
        return $this;
    }
}
