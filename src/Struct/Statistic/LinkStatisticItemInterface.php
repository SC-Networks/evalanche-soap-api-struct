<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface LinkStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface LinkStatisticItemInterface extends StructInterface
{
    public function getId(): int;

    public function getUrl(): string;

    public function getName(): string;

    public function getClickCount(): int;

    public function getUniqueClickCount(): int;
}
