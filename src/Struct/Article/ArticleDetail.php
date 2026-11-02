<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Article;

/**
 * Contains detailed information about a specific article
 *
 * @package Scn\EvalancheSoapStruct\Struct\Article
 */
class ArticleDetail implements ArticleDetailInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|string $url = null,
        private null|int $typeId = null,
        private null|int $folderId = null,
        private null|int $mandatorId = null,
        private null|int $articleTypeId = null
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

    public function getArticleTypeId(): int
    {
        return (int) $this->articleTypeId;
    }
}
