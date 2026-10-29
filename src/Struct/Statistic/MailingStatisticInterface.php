<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingStatisticInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface MailingStatisticInterface extends StructInterface
{
    public function getAddresses(): int;

    public function getRecipients(): int;

    public function getDuplicateCount(): int;

    public function getBlackListedCount(): int;

    public function getRobinsonListedCount(): int;

    public function getHardBounceCount(): int;

    public function getSoftBounceCount(): int;

    public function getUnSubscribeCount(): int;

    public function getImpressionCount(): int;

    public function getUniqueImpressionCount(): int;

    public function getClickCount(): int;

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
