<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

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
     * @var \Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface[]
     */
    private $profileData;

    /**
     * @param int $profileId
     * @param int $newsletterId
     * @param int $lastStatusChange
     * @param int $status
     * @param string $previewUrl
     * @param \Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface[] $profileData
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

    /**
     * @return int
     */
    public function getProfileId(): int
    {
        return $this->profileId;
    }

    /**
     * @return int
     */
    public function getNewsletterId(): int
    {
        return $this->newsletterId;
    }

    /**
     * @return int
     */
    public function getLastStatusChange(): int
    {
        return $this->lastStatusChange;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getPreviewUrl(): string
    {
        return $this->previewUrl;
    }

    /**
     * @return \Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface[]
     */
    public function getProfileData(): array
    {
        return $this->profileData;
    }
}
