<?php

namespace App\Http\Controllers;

use App\Services\DogService;
use Illuminate\Http\Request;

class AllBreedsController extends Controller
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
     * @param $bot
     * @return void
     */
    public function random($bot)
    {
        $bot->reply($this->photos->random());
    }

    /**
     * Return a random dog image from a given breed.
     *
     * @param $bot
     * @param $name
     * @return void
     */
    public function byBreed($bot, $name)
    {
        $bot->reply($this->photos->byBreed($name));
    }
}
