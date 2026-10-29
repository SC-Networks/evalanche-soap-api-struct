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
    private $articleTypeId;

    public function __construct(
        int $id = 0,
        string $name = '',
        string $url = '',
        int $typeId = 0,
        int $folderId = 0,
        int $mandatorId = 0,
        int $articleTypeId = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->typeId = $typeId;
        $this->folderId = $folderId;
        $this->mandatorId = $mandatorId;
        $this->articleTypeId = $articleTypeId;
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

    public function getArticleTypeId(): int
    {
        return $this->articleTypeId;
    }
}
