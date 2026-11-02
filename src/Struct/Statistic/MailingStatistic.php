<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Represents a statistic about a Mailing.
 * Contains Information about Profile- Count, Duplicate- Count, Blacklists Count, Hard and Softbounces, Impressions.
 * Also includes MediaStatisticItems, ArticleStatisticItems, and LinkStatisticItems.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class MailingStatistic implements MailingStatisticInterface
{
    /**
     * @param MediaStatisticItemInterface[] $media
     * @param ArticleStatisticItemInterface[] $articles
     * @param LinkStatisticItemInterface[] $links
     */
    public function __construct(
        private null|int $addresses = null,
        private null|int $recipients = null,
        private null|int $duplicateCount = null,
        private null|int $blackListedCount = null,
        private null|int $robinsonListedCount = null,
        private null|int $hardBounceCount = null,
        private null|int $softBounceCount = null,
        private null|int $unSubscribeCount = null,
        private null|int $impressionCount = null,
        private null|int $uniqueImpressionCount = null,
        private null|int $clickCount = null,
        private null|int $uniqueClickCount = null,
        private array $media = [],
        private array $articles = [],
        private array $links = []
    ) {
    }

    public function getAddresses(): int
    {
        return (int) $this->addresses;
    }

    public function getRecipients(): int
    {
        return (int) $this->recipients;
    }

    public function getDuplicateCount(): int
    {
        return (int) $this->duplicateCount;
    }

    public function getBlackListedCount(): int
    {
        return (int) $this->blackListedCount;
    }

    public function getRobinsonListedCount(): int
    {
        return (int) $this->robinsonListedCount;
    }

    public function getHardBounceCount(): int
    {
        return (int) $this->hardBounceCount;
    }

    public function getSoftBounceCount(): int
    {
        return (int) $this->softBounceCount;
    }

    public function getUnSubscribeCount(): int
    {
        return (int) $this->unSubscribeCount;
    }

    public function getImpressionCount(): int
    {
        return (int) $this->impressionCount;
    }

    public function getUniqueImpressionCount(): int
    {
        return (int) $this->uniqueImpressionCount;
    }

    public function getClickCount(): int
    {
        return (int) $this->clickCount;
    }

    public function getUniqueClickCount(): int
    {
        return (int) $this->uniqueClickCount;
    }

    /**
     * @return MediaStatisticItemInterface[]
     */
    public function getMedia(): array
    {
        return $this->media;
    }

    /**
     * @return ArticleStatisticItemInterface[]
     */
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * @return LinkStatisticItemInterface[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }
}
