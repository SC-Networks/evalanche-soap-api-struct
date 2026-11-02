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
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|string $url = null,
        private null|int $typeId = null,
        private null|int $folderId = null,
        private null|int $mandatorId = null,
        private null|int $timestamp = null,
        private null|int $recipients = null,
        private null|bool $sent = null,
        private null|string $previewUrl = null,
        private null|string $reportUrl = null,
        private null|string $adminUrl = null,
        private null|string $subject = null,
        private null|int $targetGroupId = null,
        private null|int $sendStartTime = null,
        private null|int $sendEndTime = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function getUrl(): string
    {
        return (string) $this->url;
    }

    public function getTypeId(): int
    {
        return (int) $this->typeId;
    }

    public function getFolderId(): int
    {
        return (int) $this->folderId;
    }

    public function getMandatorId(): int
    {
        return (int) $this->mandatorId;
    }

    public function getTimestamp(): int
    {
        return (int) $this->timestamp;
    }

    public function getRecipients(): int
    {
        return (int) $this->recipients;
    }

    public function getSent(): bool
    {
        return (bool) $this->sent;
    }

    public function getPreviewUrl(): string
    {
        return (string) $this->previewUrl;
    }

    public function getReportUrl(): string
    {
        return (string) $this->reportUrl;
    }

    public function getAdminUrl(): string
    {
        return (string) $this->adminUrl;
    }

    public function getSubject(): string
    {
        return (string) $this->subject;
    }

    public function getTargetGroupId(): int
    {
        return (int) $this->targetGroupId;
    }

    public function getSendStartTime(): int
    {
        return (int) $this->sendStartTime;
    }

    public function getSendEndTime(): int
    {
        return (int) $this->sendEndTime;
    }
}
