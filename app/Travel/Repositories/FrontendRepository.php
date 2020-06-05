<?php

namespace App\Travel\Repositories;
use App\TouristObject;
use App\Travel\Interfaces\FrontendRepositoryInterface;


class FrontendRepository implements FrontendRepositoryInterface
{
    public function getObjectsForMainPage()
    {
        return TouristObject::with(['city', 'photos'])->ordered()->paginate(8);
    }

    public function getObject($id)
    {
        return TouristObject::with('city')->find($id);
    }
}
