<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DogService;

class SubBreedController extends Controller
{
    /**
     * Controller constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->photos = new DogService;
    }

    /**
     * Return a random dog image from all breeds.
     *
     * @return void
     */
    public function random($bot, $breed, $subBreed)
    {
        $bot->reply($this->photos->bySubBreed($breed, $subBreed));
    }
}
