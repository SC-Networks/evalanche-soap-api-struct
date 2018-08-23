<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MailingArticleInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mailing
 */
interface MailingArticleInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getArticleId(): int;

    /**
     * @return int
     */
    public function getTargetGroupId(): int;

    /**
     * @return int
     */
    public function getHtmlPresetId(): int;

    /**
     * @return int
     */
    public function getTextPresetId(): int;

    /**
     * @return int
     */
    public function getLandingpagePresetId(): int;

    /**
     * @return int
     */
    public function getPdfPresetId(): int;

    /**
     * @return int
     */
    public function getMobilePresetId(): int;

    /**
     * @return int
     */
    public function getSortPos(): int;

    /**
     * @return int
     */
    public function getSlot(): int;
}