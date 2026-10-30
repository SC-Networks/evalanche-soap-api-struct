<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\Exception\StructNotHydratedException;
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

    /**
     * @throws StructNotHydratedException
     */
    public function getOverall(): FormatStatisticItemInterface;

    /**
     * @throws StructNotHydratedException
     */
    public function getLandingPage(): FormatStatisticItemInterface;

    /**
     * @throws StructNotHydratedException
     */
    public function getPrint(): FormatStatisticItemInterface;

    /**
     * @throws StructNotHydratedException
     */
    public function getVoice(): FormatStatisticItemInterface;

    /**
     * @throws StructNotHydratedException
     */
    public function getSocialSharing(): FormatStatisticItemInterface;

    /**
     * @return LinkStatisticItemInterface[]
     */
    public function getLinks(): array;
}
