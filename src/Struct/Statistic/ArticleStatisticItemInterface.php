<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ArticleStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface ArticleStatisticItemInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getClickCount(): int;

    public function getUniqueClickCount(): int;
}
