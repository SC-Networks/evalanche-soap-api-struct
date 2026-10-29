<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
interface MailingDetailInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getUrl(): string;

    public function getTypeId(): int;

    public function getFolderId(): int;

    public function getMandatorId(): int;

    public function getTimestamp(): int;

    public function getRecipients(): int;

    public function getSent(): bool;

    public function getPreviewUrl(): string;

    public function getReportUrl(): string;

    public function getAdminUrl(): string;

    public function getSubject(): string;

    public function getTargetGroupId(): int;

    public function getSendStartTime(): int;

    public function getSendEndTime(): int;
}
