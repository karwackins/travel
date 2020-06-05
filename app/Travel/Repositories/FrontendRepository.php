<?php

namespace App\Travel\Repositories;
use App\TouristObject;
use App\Travel\Interfaces\FrontendRepositoryInterface;


class FrontendRepository implements FrontendRepositoryInterface
{
    public function getObjectsForMainPage()
    {
        return TouristObject::all();
    }
}
