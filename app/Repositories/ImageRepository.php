<?php


namespace App\Repositories;


use App\Image;
use Illuminate\Database\Eloquent\Collection;

class ImageRepository implements ImageRepostioryInterface
{
    public function getImagesByCategoryId(int $categoryId): ?Collection
    {
        return Image::where('category_id', $categoryId)->get();
    }

}
