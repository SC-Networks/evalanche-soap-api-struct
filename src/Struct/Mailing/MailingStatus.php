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
     * @var int
     */
    private $profileId;

    /**
     * @var int
     */
    private $newsletterId;

    /**
     * @var int
     */
    private $lastStatusChange;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $previewUrl;

    /**
     * @var HashMapInterface[]
     */
    private $profileData;

    /**
     * @param HashMapInterface[] $profileData
     */
    public function __construct(
        int $profileId = null,
        int $newsletterId = null,
        int $lastStatusChange = null,
        int $status = null,
        string $previewUrl = null,
        array $profileData = null
    ) {
        $this->profileId = $profileId;
        $this->newsletterId = $newsletterId;
        $this->lastStatusChange = $lastStatusChange;
        $this->status = $status;
        $this->previewUrl = $previewUrl;
        $this->profileData = $profileData;
    }

    public function getProfileId(): int
    {
        return $this->profileId;
    }

    public function getNewsletterId(): int
    {
        return $this->newsletterId;
    }

    public function getLastStatusChange(): int
    {
        return $this->lastStatusChange;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getPreviewUrl(): string
    {
        return $this->previewUrl;
    }

    /**
     * @return HashMapInterface[]
     */
    public function getProfileData(): array
    {
        return $this->profileData;
    }
}
