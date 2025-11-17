<?php

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents the article template configuration for a certain article type in a slot
 */
interface LeadpageSlotItemInterface extends StructInterface
{
    public function getArticleTypeId(): int;

    public function setArticleTypeId(int $articleTypeId): LeadpageSlotItemInterface;

    public function getLandingpageArticleTemplateId(): int;

    public function setLandingpageArticleTemplateId(int $landingpageArticleTemplateId): LeadpageSlotItemInterface;

    public function getWebArticleTemplateId(): int;

    public function setWebArticleTemplateId(int $webArticleTemplateId): LeadpageSlotItemInterface;

    /**
     * @return list<int>
     */
    public function getLandingpageAllowedArticleTemplateIds(): array;

    /**
     * @param list<int> $landingpageAllowedArticleTemplateIds
     */
    public function setLandingpageAllowedArticleTemplateIds(array $landingpageAllowedArticleTemplateIds): LeadpageSlotItemInterface;

    /**
     * @return list<int>
     */
    public function getWebAllowedArticleTemplateIds(): array;

    /**
     * @param list<int> $webAllowedArticleTemplateIds
     */
    public function setWebAllowedArticleTemplateIds(array $webAllowedArticleTemplateIds): LeadpageSlotItemInterface;
}
