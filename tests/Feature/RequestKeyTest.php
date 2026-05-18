<?php

use SpaceX\API\Device\DishClearObstructionMapRequest;
use SpaceX\API\Device\DishGetObstructionMapRequest;
use SpaceX\API\Device\DishPowerSaveRequest;
use SpaceX\API\Device\DishStowRequest;
use SpaceX\API\Device\GetHistoryRequest;
use SpaceX\API\Device\GetLocationRequest;
use SpaceX\API\Device\GetStatusRequest;
use SpaceX\API\Device\RebootRequest;
use SRWieZ\StarlinkClient\Dishy;

it('returns the correct key', function ($class, $expected) {
    expect(Dishy::getRequestKey(new $class))
        ->toBe($expected);
})->with([
    [GetStatusRequest::class, 'get_status'],
    [GetLocationRequest::class, 'get_location'],
    [GetHistoryRequest::class, 'get_history'],
    [RebootRequest::class, 'reboot'],
    [DishStowRequest::class, 'dish_stow'],
    [DishPowerSaveRequest::class, 'dish_power_save'],
    [DishGetObstructionMapRequest::class, 'dish_get_obstruction_map'],
    [DishClearObstructionMapRequest::class, 'dish_clear_obstruction_map'],
]);
