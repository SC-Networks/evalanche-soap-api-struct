<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Article;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Class ArticleDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Article
 */
interface ArticleDetailInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getUrl(): string;

    public function getTypeId(): int;

    public function getFolderId(): int;

    public function getMandatorId(): int;

    public function getArticleTypeId(): int;
}
