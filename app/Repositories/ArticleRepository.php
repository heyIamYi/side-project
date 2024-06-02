<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function all()
    {
        return Article::all();
    }

    public function find($id)
    {
        return Article::find($id);
    }

    public function create(array $data)
    {
        return Article::create($data);
    }

    public function update($id, array $data)
    {
        return Article::find($id)->update($data);
    }

    public function delete($id)
    {
        return Article::destroy($id);
    }

    public function getArticleByCondition(array $condition)
    {
        $query = Article::query();

        foreach ($condition as $key => $value) {
            $query->where($key, $value);
        }

        return $query->get();
    }
}
