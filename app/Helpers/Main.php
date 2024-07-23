<?php


namespace App\Helpers;
use App\Models\BusRoute;


class Main
{
    static function services(): array
    {
        return ['wifi', 'ticket', 'audio', 'duration', 'group', 'activity-period', 'accessibility', 'family' ];
    }

    static function busRoutes()
    {
        return BusRoute::all();
    }





}
