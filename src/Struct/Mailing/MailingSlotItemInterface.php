<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents the article template configuration for a certain article type in a slot
 */
interface MailingSlotItemInterface extends StructInterface
{
    public function getArticleTypeId(): int;

    public function setArticleTypeId(int $articleTypeId): MailingSlotItemInterface;

    public function getEmailArticleTemplateId(): int;

    public function setEmailArticleTemplateId(int $emailArticleTemplateId): MailingSlotItemInterface;

    public function getTextArticleTemplateId(): int;

    public function setTextArticleTemplateId(int $textArticleTemplateId): MailingSlotItemInterface;

    public function getLandingpageArticleTemplateId(): int;

    public function setLandingpageArticleTemplateId(int $landingpageArticleTemplateId): MailingSlotItemInterface;

    public function getPdfArticleTemplateId(): int;

    public function setPdfArticleTemplateId(int $pdfArticleTemplateId): MailingSlotItemInterface;

    public function getWebArticleTemplateId(): int;

    public function setWebArticleTemplateId(int $webArticleTemplateId): MailingSlotItemInterface;

    /**
     * @return int[]
     */
    public function getEmailAllowedArticleTemplateIds(): array;

    /**
     * @param int[] $emailAllowedArticleTemplateIds
     */
    public function setEmailAllowedArticleTemplateIds(array $emailAllowedArticleTemplateIds): MailingSlotItemInterface;

    /**
     * @return int[]
     */
    public function getTextAllowedArticleTemplateIds(): array;

    /**
     * @param int[] $textAllowedArticleTemplateIds
     */
    public function setTextAllowedArticleTemplateIds(array $textAllowedArticleTemplateIds): MailingSlotItemInterface;

    /**
     * @return int[]
     */
    public function getLandingpageAllowedArticleTemplateIds(): array;

    /**
     * @param int[] $landingpageAllowedArticleTemplateIds
     */
    public function setLandingpageAllowedArticleTemplateIds(array $landingpageAllowedArticleTemplateIds): MailingSlotItemInterface;

    /**
     * @return int[]
     */
    public function getWebAllowedArticleTemplateIds(): array;

    /**
     * @param int[] $webAllowedArticleTemplateIds
     */
    public function setWebAllowedArticleTemplateIds(array $webAllowedArticleTemplateIds): MailingSlotItemInterface;
}
