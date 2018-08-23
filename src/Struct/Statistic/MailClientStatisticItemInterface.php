<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailClientStatisticItemInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface MailClientStatisticItemInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return int
     */
    public function getCount(): int;
}