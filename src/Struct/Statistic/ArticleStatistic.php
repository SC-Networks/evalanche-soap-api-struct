<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\Exception\StructNotHydratedException;

/**
 * Represents a article statistic. Contains information his name, as well as statistics about articles of all
 * output formats, Landinpage click statistics, PDF and Print click statistics,
 * Voice click statistics, Share to Social click statistics.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class ArticleStatistic implements ArticleStatisticInterface
{
    /**
     * @param list<LinkStatisticItemInterface> $links
     */
    public function __construct(
        private null|FormatStatisticItemInterface $overall = null,
        private null|FormatStatisticItemInterface $landingPage = null,
        private null|FormatStatisticItemInterface $print = null,
        private null|FormatStatisticItemInterface $voice = null,
        private null|FormatStatisticItemInterface $socialSharing = null,
        private int $id = 0,
        private int $referenceId = 0,
        private string $name = '',
        private array $links = []
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getReferenceId(): int
    {
        return $this->referenceId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOverall(): FormatStatisticItemInterface
    {
        if (!$this->overall instanceof FormatStatisticItemInterface) {
            throw new StructNotHydratedException();
        }
        return $this->overall;
    }

    public function getLandingPage(): FormatStatisticItemInterface
    {
        if (!$this->landingPage instanceof FormatStatisticItemInterface) {
            throw new StructNotHydratedException();
        }
        return $this->landingPage;
    }

    public function getPrint(): FormatStatisticItemInterface
    {
        if (!$this->print instanceof FormatStatisticItemInterface) {
            throw new StructNotHydratedException();
        }
        return $this->print;
    }

    public function getVoice(): FormatStatisticItemInterface
    {
        if (!$this->voice instanceof FormatStatisticItemInterface) {
            throw new StructNotHydratedException();
        }
        return $this->voice;
    }

    public function getSocialSharing(): FormatStatisticItemInterface
    {
        if (!$this->socialSharing instanceof FormatStatisticItemInterface) {
            throw new StructNotHydratedException();
        }
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
