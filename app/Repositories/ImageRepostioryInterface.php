<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Collection;

interface ImageRepostioryInterface
{
    public function getImagesByCategoryId(int $categoryId): ?Collection;
}
