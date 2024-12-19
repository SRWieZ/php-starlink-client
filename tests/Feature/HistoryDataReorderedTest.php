<?php

use SRWieZ\StarlinkClient\Dishy;

it('reorder history data with the circula buffer over 900', function () {

    $current = 1000;

    // Circular buffer over 900
    $test_array = array_merge(
        range(901, 1000),
        range(101, 900)
    );

    $result = Dishy::reorderHistoryData($test_array, $current);

    expect($test_array[0])->toBe(901)
        ->and($test_array[100])->toBe(101)
        ->and($test_array[899])->toBe(900)
        ->and($result[0])->toBe(101)
        ->and($result[100])->toBe(201)
        ->and($result[899])->toBe(1000);
});

it('reorder history data with the circula buffer under 900', function () {

    $current = 100;

    // Circular buffer under 900
    $test_array = array_merge(
        range(1, 100),
        array_fill(0, 800, 0)
    );

    $result = Dishy::reorderHistoryData($test_array, $current);

    expect($test_array[0])->toBe(1)
        ->and($test_array[99])->toBe(100)
        ->and($test_array[100])->toBe(0)
        ->and($test_array[799])->toBe(0)
        ->and($result[0])->toBe(0)
        ->and($result[799])->toBe(0)
        ->and($result[800])->toBe(1)
        ->and($result[899])->toBe(100);
});

it('reorder history data with the circula buffer at 900', function () {

    $current = 900;

    // Circular buffer at 900
    $test_array = range(1, 900);

    $result = Dishy::reorderHistoryData($test_array, $current);

    expect($test_array[0])->toBe(1)
        ->and($test_array[899])->toBe(900)
        ->and($result[0])->toBe(1)
        ->and($result[899])->toBe(900);
});
