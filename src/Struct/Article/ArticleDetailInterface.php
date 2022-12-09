<?php

namespace Scn\EvalancheSoapStruct\Struct\Article;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Class ArticleDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Article
 */
interface ArticleDetailInterface extends StructInterface
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
    public function getArticleTypeId(): int;
}
