#!/usr/bin/env php
<?php

use SRWieZ\StarlinkClient\Dishy;
use SRWieZ\StarlinkClient\ObstructionMapGenerator;

error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);

if (! class_exists('\Composer\InstalledVersions')) {
    require __DIR__.'/../vendor/autoload.php';
}

if (class_exists('\NunoMaduro\Collision\Provider')) {
    (new \NunoMaduro\Collision\Provider)->register();
}

$dishy = new Dishy;

dump($dishy->getStatus());
// dump($dishy->getObstructionMap());
// $dishy->setSleepModeConfig(
//     start: 120,
//     duration: 2,
// );
// dump($dishy->getStatus());

$obsMap = $dishy->getObstructionMap();

(new ObstructionMapGenerator($obsMap))
    ->transparent()
    ->generate()
    ->asFile('assets/obstruction_map.png');

(new ObstructionMapGenerator($obsMap))
    ->transparent(false)
    ->grayscale()
    ->opacity(0.95)
    ->generate()
    ->asFile('assets/obstruction_map_grayscale.png');

/*
 * TODO: Some basic function to:
 *  - get the obstruction map
 *  - get the current state of the dish
 *  - reboot, stow, unstow the dish
 *  - set the sleep mode
 *  - get gps location
 *  - update the dish (send reboot if update is pending)
 */
