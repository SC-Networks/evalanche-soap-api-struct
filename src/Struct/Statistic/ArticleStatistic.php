<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Class ArticleStatistic
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class ArticleStatistic implements ArticleStatisticInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $referenceId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var FormatStatisticItem
     */
    private $overall;

    /**
     * @var FormatStatisticItem
     */
    private $landingPage;

    /**
     * @var FormatStatisticItem
     */
    private $print;

    /**
     * @var FormatStatisticItem
     */
    private $voice;

    /**
     * @var FormatStatisticItem
     */
    private $socialSharing;

    /**
     * @var LinkStatisticItem[]
     */
    private $links;

    /**
     * @param int $id
     * @param int $referenceId
     * @param string $name
     * @param FormatStatisticItemInterface $overall
     * @param FormatStatisticItemInterface $landingPage
     * @param FormatStatisticItemInterface $print
     * @param FormatStatisticItemInterface $voice
     * @param FormatStatisticItemInterface $socialSharing
     * @param LinkStatisticItemInterface[] $links
     */
    public function __construct(
        int $id = null,
        int $referenceId = null,
        string $name = null,
        FormatStatisticItemInterface $overall = null,
        FormatStatisticItemInterface $landingPage = null,
        FormatStatisticItemInterface $print = null,
        FormatStatisticItemInterface $voice = null,
        FormatStatisticItemInterface $socialSharing = null,
        array $links = null
    ) {
        $this->id = $id;
        $this->referenceId = $referenceId;
        $this->name = $name;
        $this->overall = $overall;
        $this->landingPage = $landingPage;
        $this->print = $print;
        $this->voice = $voice;
        $this->socialSharing = $socialSharing;
        $this->links = $links;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getReferenceId(): int
    {
        return $this->referenceId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return FormatStatisticItemInterface
     */
    public function getOverall(): FormatStatisticItemInterface
    {
        return $this->overall;
    }

    /**
     * @return FormatStatisticItemInterface
     */
    public function getLandingPage(): FormatStatisticItemInterface
    {
        return $this->landingPage;
    }

    /**
     * @return FormatStatisticItemInterface
     */
    public function getPrint(): FormatStatisticItemInterface
    {
        return $this->print;
    }

    /**
     * @return FormatStatisticItemInterface
     */
    public function getVoice(): FormatStatisticItemInterface
    {
        return $this->voice;
    }

    /**
     * @return FormatStatisticItemInterface
     */
    public function getSocialSharing(): FormatStatisticItemInterface
    {
        return $this->socialSharing;
    }

    /**
     * @return LinkStatisticItemInterface[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }
}