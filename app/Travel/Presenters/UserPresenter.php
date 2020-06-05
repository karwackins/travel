<?php

namespace App\Travel\Presenters;
use App\TouristObject;
use App\Travel\Interfaces\FrontendRepositoryInterface;


Trait UserPresenter
{
    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->surname;
    }

}
