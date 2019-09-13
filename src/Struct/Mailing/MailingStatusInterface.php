<?php

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
    /**
     * @return int
     */
    public function getProfileId(): int;

    /**
     * @return int
     */
    public function getNewsletterId(): int;

    /**
     * @return int
     */
    public function getLastStatusChange(): int;

    /**
     * @return int
     */
    public function getStatus(): int;

    /**
     * @return string
     */
    public function getPreviewUrl(): string;

    /**
     * @return HashMapInterface[]
     */
    public function getProfileData(): array;
}
