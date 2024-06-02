<?php

namespace App\Repositories;

interface ArticleRepositoryInterface
{
    public function all(); // 取得所有資料

    public function find($id); // 取得單一資料

    public function create(array $data); // 新增資料

    public function update($id, array $data); // 更新資料

    public function delete($id); // 刪除資料

    public function getArticleByCondition(array $condition); // 依條件取得資料
}
