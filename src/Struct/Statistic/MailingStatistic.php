<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Class MailingStatistic
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
     * @param int $addresses
     * @param int $recipients
     * @param int $duplicateCount
     * @param int $blackListedCount
     * @param int $robinsonListedCount
     * @param int $hardBounceCount
     * @param int $softBounceCount
     * @param int $unSubscribeCount
     * @param int $impressionCount
     * @param int $uniqueImpressionCount
     * @param int $clickCount
     * @param int $uniqueClickCount
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

    /**
     * @return int
     */
    public function getAddresses(): int
    {
        return $this->addresses;
    }

    /**
     * @return int
     */
    public function getRecipients(): int
    {
        return $this->recipients;
    }

    /**
     * @return int
     */
    public function getDuplicateCount(): int
    {
        return $this->duplicateCount;
    }

    /**
     * @return int
     */
    public function getBlackListedCount(): int
    {
        return $this->blackListedCount;
    }

    /**
     * @return int
     */
    public function getRobinsonListedCount(): int
    {
        return $this->robinsonListedCount;
    }

    /**
     * @return int
     */
    public function getHardBounceCount(): int
    {
        return $this->hardBounceCount;
    }

    /**
     * @return int
     */
    public function getSoftBounceCount(): int
    {
        return $this->softBounceCount;
    }

    /**
     * @return int
     */
    public function getUnSubscribeCount(): int
    {
        return $this->unSubscribeCount;
    }

    /**
     * @return int
     */
    public function getImpressionCount(): int
    {
        return $this->impressionCount;
    }

    /**
     * @return int
     */
    public function getUniqueImpressionCount(): int
    {
        return $this->uniqueImpressionCount;
    }

    /**
     * @return int
     */
    public function getClickCount(): int
    {
        return $this->clickCount;
    }

    /**
     * @return int
     */
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