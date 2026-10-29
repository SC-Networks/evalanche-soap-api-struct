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

    public function __construct(
        int $id = 0,
        string $name = '',
        string $url = '',
        int $typeId = 0,
        int $folderId = 0,
        int $mandatorId = 0,
        int $timestamp = 0,
        int $recipients = 0,
        bool $sent = false,
        string $previewUrl = '',
        string $reportUrl = '',
        string $adminUrl = '',
        string $subject = '',
        int $targetGroupId = 0,
        int $sendStartTime = 0,
        int $sendEndTime = 0
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

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTypeId(): int
    {
        return $this->typeId;
    }

    public function getFolderId(): int
    {
        return $this->folderId;
    }

    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getRecipients(): int
    {
        return $this->recipients;
    }

    public function getSent(): bool
    {
        return $this->sent;
    }

    public function getPreviewUrl(): string
    {
        return $this->previewUrl;
    }

    public function getReportUrl(): string
    {
        return $this->reportUrl;
    }

    public function getAdminUrl(): string
    {
        return $this->adminUrl;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getTargetGroupId(): int
    {
        return $this->targetGroupId;
    }

    public function getSendStartTime(): int
    {
        return $this->sendStartTime;
    }

    public function getSendEndTime(): int
    {
        return $this->sendEndTime;
    }
}
