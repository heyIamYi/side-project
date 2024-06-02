<?php

namespace App\Services;

use App\Repositories\ArticleRepositoryInterface;

class ArticleService{
    protected $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function all()
    {
        return $this->articleRepository->all();
    }

    public function find($id)
    {
        return $this->articleRepository->find($id);
    }

    public function getArticleByCondition(array $condition)
    {
        return $this->articleRepository->getArticleByCondition($condition);
    }

}
