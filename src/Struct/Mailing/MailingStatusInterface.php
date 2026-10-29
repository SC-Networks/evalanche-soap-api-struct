<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;
use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingStatusInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
interface MailingStatusInterface extends StructInterface
{
    public function getProfileId(): int;

    public function getNewsletterId(): int;

    public function getLastStatusChange(): int;

    public function getStatus(): int;

    public function getPreviewUrl(): string;

    /**
     * @return HashMapInterface[]
     */
    public function getProfileData(): array;
}
