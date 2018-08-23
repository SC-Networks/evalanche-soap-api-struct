<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ArticleStatisticInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface ArticleStatisticInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getReferenceId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return FormatStatisticItemInterface
     */
    public function getOverall(): FormatStatisticItemInterface;

    /**
     * @return FormatStatisticItemInterface
     */
    public function getLandingPage(): FormatStatisticItemInterface;

    /**
     * @return FormatStatisticItemInterface
     */
    public function getPrint(): FormatStatisticItemInterface;

    /**
     * @return FormatStatisticItemInterface
     */
    public function getVoice(): FormatStatisticItemInterface;

    /**
     * @return FormatStatisticItemInterface
     */
    public function getSocialSharing(): FormatStatisticItemInterface;

    /**
     * @return LinkStatisticItemInterface[]
     */
    public function getLinks(): array;
}