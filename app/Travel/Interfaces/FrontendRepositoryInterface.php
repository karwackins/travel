<?php


namespace App\Travel\Interfaces;
use App\TouristObject;


interface FrontendRepositoryInterface
{
    public function getObjectsForMainPage();
    public function getObject($id);
}
