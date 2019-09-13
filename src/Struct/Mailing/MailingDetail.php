<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Contains detailed informations about a specific mailing
 * like timestamp, amount of recipients, subject, sendout time, etc.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
class MailingDetail implements MailingDetailInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var int
     */
    private $typeId;

    /**
     * @var int
     */
    private $folderId;

    /**
     * @var int
     */
    private $mandatorId;

    /**
     * @var int
     */
    private $timestamp;

    /**
     * @var int
     */
    private $recipients;

    /**
     * @var bool
     */
    private $sent;

    /**
     * @var string
     */
    private $previewUrl;

    /**
     * @var string
     */
    private $reportUrl;

    /**
     * @var string
     */
    private $adminUrl;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var int
     */
    private $targetGroupId;

    /**
     * @var int
     */
    private $sendStartTime;

    /**
     * @var int
     */
    private $sendEndTime;

    /**
     * @param int $id
     * @param string $name
     * @param string $url
     * @param int $typeId
     * @param int $folderId
     * @param int $mandatorId
     * @param int $timestamp
     * @param int $recipients
     * @param bool $sent
     * @param string $previewUrl
     * @param string $reportUrl
     * @param string $adminUrl
     * @param string $subject
     * @param int $targetGroupId
     * @param int $sendStartTime
     * @param int $sendEndTime
     */
    public function __construct(
        int $id = null,
        string $name = null,
        string $url = null,
        int $typeId = null,
        int $folderId = null,
        int $mandatorId = null,
        int $timestamp = null,
        int $recipients = null,
        bool $sent = null,
        string $previewUrl = null,
        string $reportUrl = null,
        string $adminUrl = null,
        string $subject = null,
        int $targetGroupId = null,
        int $sendStartTime = null,
        int $sendEndTime = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->typeId = $typeId;
        $this->folderId = $folderId;
        $this->mandatorId = $mandatorId;
        $this->timestamp = $timestamp;
        $this->recipients = $recipients;
        $this->sent = $sent;
        $this->previewUrl = $previewUrl;
        $this->reportUrl = $reportUrl;
        $this->adminUrl = $adminUrl;
        $this->subject = $subject;
        $this->targetGroupId = $targetGroupId;
        $this->sendStartTime = $sendStartTime;
        $this->sendEndTime = $sendEndTime;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @return int
     */
    public function getFolderId(): int
    {
        return $this->folderId;
    }

    /**
     * @return int
     */
    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getRecipients(): int
    {
        return $this->recipients;
    }

    /**
     * @return bool
     */
    public function getSent(): bool
    {
        return $this->sent;
    }

    /**
     * @return string
     */
    public function getPreviewUrl(): string
    {
        return $this->previewUrl;
    }

    /**
     * @return string
     */
    public function getReportUrl(): string
    {
        return $this->reportUrl;
    }

    /**
     * @return string
     */
    public function getAdminUrl(): string
    {
        return $this->adminUrl;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return int
     */
    public function getTargetGroupId(): int
    {
        return $this->targetGroupId;
    }

    /**
     * @return int
     */
    public function getSendStartTime(): int
    {
        return $this->sendStartTime;
    }

    /**
     * @return int
     */
    public function getSendEndTime(): int
    {
        return $this->sendEndTime;
    }


    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
