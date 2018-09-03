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
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getUrl(): string;

    /**
     * @return int
     */
    public function getTypeId(): int;

    /**
     * @return int
     */
    public function getFolderId(): int;

    /**
     * @return int
     */
    public function getMandatorId(): int;

    /**
     * @return int
     */
    public function getTimestamp(): int;

    /**
     * @return int
     */
    public function getRecipients(): int;

    /**
     * @return bool
     */
    public function getSent(): bool;

    /**
     * @return string
     */
    public function getPreviewUrl(): string;

    /**
     * @return string
     */
    public function getReportUrl(): string;

    /**
     * @return string
     */
    public function getAdminUrl(): string;

    /**
     * @return string
     */
    public function getSubject(): string;

    /**
     * @return int
     */
    public function getTargetGroupId(): int;

    /**
     * @return int
     */
    public function getSendStartTime(): int;

    /**
     * @return int
     */
    public function getSendEndTime(): int;
}