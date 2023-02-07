<?php

namespace Scn\EvalancheSoapStruct\Struct\Article;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

interface ArticleIndividualizationItemInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getTargetgroupId(): int;

    /**
     * @param int $targetgroupId
     */
    public function setTargetgroupId(int $targetgroupId): void;

    /**
     * @return int
     */
    public function getArticleId(): int;

    /**
     * @param int $articleId
     */
    public function setArticleId(int $articleId): void;
}
