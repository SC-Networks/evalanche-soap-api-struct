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
    public function getId(): int;

    public function getReferenceId(): int;

    public function getName(): string;

    public function getOverall(): FormatStatisticItemInterface;

    public function getLandingPage(): FormatStatisticItemInterface;

    public function getPrint(): FormatStatisticItemInterface;

    public function getVoice(): FormatStatisticItemInterface;

    public function getSocialSharing(): FormatStatisticItemInterface;

    /**
     * @return LinkStatisticItemInterface[]
     */
    public function getLinks(): array;
}
