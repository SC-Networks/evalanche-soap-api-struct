<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface;

/**
 * Contains profile data and sendout state for a specific mailing and a specific profile.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingStatus implements MailingStatusInterface
{
    /**
     * @param HashMapInterface[] $profileData
     */
    public function __construct(
        private null|int $profileId = null,
        private null|int $newsletterId = null,
        private null|int $lastStatusChange = null,
        private null|int $status = null,
        private null|string $previewUrl = null,
        private array $profileData = []
    ) {
    }

    public function getProfileId(): int
    {
        return (int) $this->profileId;
    }

    public function getNewsletterId(): int
    {
        return (int) $this->newsletterId;
    }

    public function getLastStatusChange(): int
    {
        return (int) $this->lastStatusChange;
    }

    public function getStatus(): int
    {
        return (int) $this->status;
    }

    public function getPreviewUrl(): string
    {
        return (string) $this->previewUrl;
    }

    /**
     * @return HashMapInterface[]
     */
    public function getProfileData(): array
    {
        return $this->profileData;
    }
}
