<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Article;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

interface ArticleIndividualizationItemInterface extends StructInterface
{
    public function getTargetgroupId(): int;

    public function setTargetgroupId(int $targetgroupId): void;

    public function getArticleId(): int;

    public function setArticleId(int $articleId): void;
}
