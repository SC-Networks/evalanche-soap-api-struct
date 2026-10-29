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
     * @var int
     */
    private $addresses;

    /**
     * @var int
     */
    private $recipients;

    /**
     * @var int
     */
    private $duplicateCount;

    /**
     * @var int
     */
    private $blackListedCount;

    /**
     * @var int
     */
    private $robinsonListedCount;

    /**
     * @var int
     */
    private $hardBounceCount;

    /**
     * @var int
     */
    private $softBounceCount;

    /**
     * @var int
     */
    private $unSubscribeCount;

    /**
     * @var int
     */
    private $impressionCount;

    /**
     * @var int
     */
    private $uniqueImpressionCount;

    /**
     * @var int
     */
    private $clickCount;

    /**
     * @var int
     */
    private $uniqueClickCount;

    /**
     * @var MediaStatisticItem[]
     */
    private $media;

    /**
     * @var ArticleStatisticItem[]
     */
    private $articles;

    /**
     * @var LinkStatisticItem[]
     */
    private $links;

    /**
     * @param MediaStatisticItemInterface[] $media
     * @param ArticleStatisticItemInterface[] $articles
     * @param LinkStatisticItemInterface[] $links
     */
    public function __construct(
        int $addresses = null,
        int $recipients = null,
        int $duplicateCount = null,
        int $blackListedCount = null,
        int $robinsonListedCount = null,
        int $hardBounceCount = null,
        int $softBounceCount = null,
        int $unSubscribeCount = null,
        int $impressionCount = null,
        int $uniqueImpressionCount = null,
        int $clickCount = null,
        int $uniqueClickCount = null,
        array $media = null,
        array $articles = null,
        array $links = null
    ) {
        $this->addresses = $addresses;
        $this->recipients = $recipients;
        $this->duplicateCount = $duplicateCount;
        $this->blackListedCount = $blackListedCount;
        $this->robinsonListedCount = $robinsonListedCount;
        $this->hardBounceCount = $hardBounceCount;
        $this->softBounceCount = $softBounceCount;
        $this->unSubscribeCount = $unSubscribeCount;
        $this->impressionCount = $impressionCount;
        $this->uniqueImpressionCount = $uniqueImpressionCount;
        $this->clickCount = $clickCount;
        $this->uniqueClickCount = $uniqueClickCount;
        $this->media = $media;
        $this->articles = $articles;
        $this->links = $links;
    }

    public function getAddresses(): int
    {
        return $this->addresses;
    }

    public function getRecipients(): int
    {
        return $this->recipients;
    }

    public function getDuplicateCount(): int
    {
        return $this->duplicateCount;
    }

    public function getBlackListedCount(): int
    {
        return $this->blackListedCount;
    }

    public function getRobinsonListedCount(): int
    {
        return $this->robinsonListedCount;
    }

    public function getHardBounceCount(): int
    {
        return $this->hardBounceCount;
    }

    public function getSoftBounceCount(): int
    {
        return $this->softBounceCount;
    }

    public function getUnSubscribeCount(): int
    {
        return $this->unSubscribeCount;
    }

    public function getImpressionCount(): int
    {
        return $this->impressionCount;
    }

    public function getUniqueImpressionCount(): int
    {
        return $this->uniqueImpressionCount;
    }

    public function getClickCount(): int
    {
        return $this->clickCount;
    }

    public function getUniqueClickCount(): int
    {
        return $this->uniqueClickCount;
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
