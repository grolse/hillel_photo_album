<?php

namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
    /**
     * Получить все категории пользователя.
     *
     * @param User $user
     * @return Collection
     */
    public function getUserCategories(User $user): Collection;
}
