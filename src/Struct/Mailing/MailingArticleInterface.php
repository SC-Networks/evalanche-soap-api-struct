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
    public function getId(): int;

    public function getArticleId(): int;

    public function getTargetGroupId(): int;

    public function getHtmlPresetId(): int;

    public function getTextPresetId(): int;

    public function getLandingpagePresetId(): int;

    public function getPdfPresetId(): int;

    public function getMobilePresetId(): int;

    public function getSortPos(): int;

    public function getSlot(): int;
}
