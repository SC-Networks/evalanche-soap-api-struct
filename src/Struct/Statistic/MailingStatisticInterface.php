<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingStatisticInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface MailingStatisticInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getAddresses(): int;

    /**
     * @return int
     */
    public function getRecipients(): int;

    /**
     * @return int
     */
    public function getDuplicateCount(): int;

    /**
     * @return int
     */
    public function getBlackListedCount(): int;

    /**
     * @return int
     */
    public function getRobinsonListedCount(): int;

    /**
     * @return int
     */
    public function getHardBounceCount(): int;

    /**
     * @return int
     */
    public function getSoftBounceCount(): int;

    /**
     * @return int
     */
    public function getUnSubscribeCount(): int;

    /**
     * @return int
     */
    public function getImpressionCount(): int;

    /**
     * @return int
     */
    public function getUniqueImpressionCount(): int;

    /**
     * @return int
     */
    public function getClickCount(): int;

    /**
     * @return int
     */
    public function getUniqueClickCount(): int;

    /**
     * @return MediaStatisticItemInterface[]
     */
    public function getMedia(): array;

    /**
     * @return ArticleStatisticItemInterface[]
     */
    public function getArticles(): array;

    /**
     * @return LinkStatisticItemInterface[]
     */
    public function getLinks(): array;
}
