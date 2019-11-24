<?php


namespace App\Http\Controllers;


use App\Repositories\ImageRepostioryInterface;

class ImagesController extends Controller
{
    private $imageRepository;

    public function __construct(ImageRepostioryInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function list($id)
    {
        $images = $this->imageRepository->getImagesByCategoryId($id);
        return view('images.list', compact('images'));
    }
}
