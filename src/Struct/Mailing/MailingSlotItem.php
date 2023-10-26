<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Represents the article template configuration for a certain article type in a slot
 */
class MailingSlotItem implements MailingSlotItemInterface
{
    /** @var int */
    private $articleTypeId;

    /** @var int */
    private $emailArticleTemplateId;

    /** @var int */
    private $textArticleTemplateId;

    /** @var int */
    private $landingpageArticleTemplateId;

    /** @var int */
    private $pdfArticleTemplateId;

    /** @var int */
    private $webArticleTemplateId;

    /** @var int[] */
    private $emailAllowedArticleTemplateIds;

    /** @var int[] */
    private $textAllowedArticleTemplateIds;

    /** @var int[] */
    private $landingpageAllowedArticleTemplateIds;

    /** @var int[] */
    private $webAllowedArticleTemplateIds;

    public function __construct(
        int $articleTypeId = null,
        int $emailArticleTemplateId = null,
        int $textArticleTemplateId = null,
        int $landingpageArticleTemplateId = null,
        int $pdfArticleTemplateId = null,
        int $webArticleTemplateId = null,
        array $emailAllowedArticleTemplateIds = null,
        array $textAllowedArticleTemplateIds = null,
        array $landingpageAllowedArticleTemplateIds = null,
        array $webAllowedArticleTemplateIds = null
    ) {
        $this->articleTypeId = $articleTypeId;
        $this->emailArticleTemplateId = $emailArticleTemplateId;
        $this->textArticleTemplateId = $textArticleTemplateId;
        $this->landingpageArticleTemplateId = $landingpageArticleTemplateId;
        $this->pdfArticleTemplateId = $pdfArticleTemplateId;
        $this->webArticleTemplateId = $webArticleTemplateId;
        $this->emailAllowedArticleTemplateIds = $emailAllowedArticleTemplateIds;
        $this->textAllowedArticleTemplateIds = $textAllowedArticleTemplateIds;
        $this->landingpageAllowedArticleTemplateIds = $landingpageAllowedArticleTemplateIds;
        $this->webAllowedArticleTemplateIds = $webAllowedArticleTemplateIds;
    }

    public function getArticleTypeId(): int
    {
        return $this->articleTypeId;
    }

    public function setArticleTypeId(int $articleTypeId): MailingSlotItemInterface
    {
        $this->articleTypeId = $articleTypeId;
        return $this;
    }

    public function getEmailArticleTemplateId(): int
    {
        return $this->emailArticleTemplateId;
    }

    public function setEmailArticleTemplateId(int $emailArticleTemplateId): MailingSlotItemInterface
    {
        $this->emailArticleTemplateId = $emailArticleTemplateId;
        return $this;
    }

    public function getTextArticleTemplateId(): int
    {
        return $this->textArticleTemplateId;
    }

    public function setTextArticleTemplateId(int $textArticleTemplateId): MailingSlotItemInterface
    {
        $this->textArticleTemplateId = $textArticleTemplateId;
        return $this;
    }

    public function getLandingpageArticleTemplateId(): int
    {
        return $this->landingpageArticleTemplateId;
    }

    public function setLandingpageArticleTemplateId(int $landingpageArticleTemplateId): MailingSlotItemInterface
    {
        $this->landingpageArticleTemplateId = $landingpageArticleTemplateId;
        return $this;
    }

    public function getPdfArticleTemplateId(): int
    {
        return $this->pdfArticleTemplateId;
    }

    public function setPdfArticleTemplateId(int $pdfArticleTemplateId): MailingSlotItemInterface
    {
        $this->pdfArticleTemplateId = $pdfArticleTemplateId;
        return $this;
    }

    public function getWebArticleTemplateId(): int
    {
        return $this->webArticleTemplateId;
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