<?php

//hero experience at level 0 to 99
/*error_reporting(0);
switch (true):

    case SPEED >= 50:
        $_hero_speed = round(SPEED / 10);
        break;

    case SPEED <= 10:
        $_hero_speed = 2;
        break;

endswitch;*/
$_hero_speed = 2;

$_hero_levels = array(
    50 * $_hero_speed,
    150 * $_hero_speed,
    300 * $_hero_speed,
    500 * $_hero_speed,
    750 * $_hero_speed,
    1050 * $_hero_speed,
    1400 * $_hero_speed,
    1800 * $_hero_speed,
    2250 * $_hero_speed,
    2750 * $_hero_speed,
    3300 * $_hero_speed,
    3900 * $_hero_speed,
    4550 * $_hero_speed,
    5250 * $_hero_speed,
    6000 * $_hero_speed,
    6800 * $_hero_speed,
    7650 * $_hero_speed,
    8550 * $_hero_speed,
    9500 * $_hero_speed,
    10500 * $_hero_speed,
    11550 * $_hero_speed,
    12650 * $_hero_speed,
    13800 * $_hero_speed,
    15000 * $_hero_speed,
    16250 * $_hero_speed,
    17550 * $_hero_speed,
    18900 * $_hero_speed,
    20300 * $_hero_speed,
    21750 * $_hero_speed,
    23250 * $_hero_speed,
    24800 * $_hero_speed,
    26400 * $_hero_speed,
    28050 * $_hero_speed,
    29750 * $_hero_speed,
    31500 * $_hero_speed,
    33300 * $_hero_speed,
    35150 * $_hero_speed,
    37050 * $_hero_speed,
    39000 * $_hero_speed,
    41000 * $_hero_speed,
    43050 * $_hero_speed,
    45150 * $_hero_speed,
    47300 * $_hero_speed,
    49500 * $_hero_speed,
    51750 * $_hero_speed,
    54050 * $_hero_speed,
    56400 * $_hero_speed,
    58800 * $_hero_speed,
    61250 * $_hero_speed,
    63750 * $_hero_speed,
    66300 * $_hero_speed,
    68900 * $_hero_speed,
    71550 * $_hero_speed,
    74250 * $_hero_speed,
    77000 * $_hero_speed,
    79800 * $_hero_speed,
    82650 * $_hero_speed,
    85550 * $_hero_speed,
    88500 * $_hero_speed,
    91500 * $_hero_speed,
    94550 * $_hero_speed,
    97650 * $_hero_speed,
    100800 * $_hero_speed,
    104000 * $_hero_speed,
    107250 * $_hero_speed,
    110550 * $_hero_speed,
    113900 * $_hero_speed,
    117300 * $_hero_speed,
    120750 * $_hero_speed,
    124250 * $_hero_speed,
    127800 * $_hero_speed,
    131400 * $_hero_speed,
    135050 * $_hero_speed,
    138750 * $_hero_speed,
    142500 * $_hero_speed,
    146300 * $_hero_speed,
    150150 * $_hero_speed,
    154050 * $_hero_speed,
    158000 * $_hero_speed,
    162000 * $_hero_speed,
    166050 * $_hero_speed,
    170150 * $_hero_speed,
    174300 * $_hero_speed,
    178500 * $_hero_speed,
    182750 * $_hero_speed,
    187050 * $_hero_speed,
    191400 * $_hero_speed,
    195800 * $_hero_speed,
    200250 * $_hero_speed,
    204750 * $_hero_speed,
    209300 * $_hero_speed,
    213900 * $_hero_speed,
    218550 * $_hero_speed,
    223250 * $_hero_speed,
    228000 * $_hero_speed,
    232800 * $_hero_speed,
    237650 * $_hero_speed,
    242550 * $_hero_speed,
    247500 * $_hero_speed,
    247500 * $_hero_speed);

//	hero_t$tribe
//	roman = hero_t1
//	teuton = hero_t2
//	gaul = hero_t3
//	all times on 1x basic and need to merge with server speed
//	formull => ($time/SPEED*1.5);
$_hero_t1 = array(array('wood' => 130, 'clay' => 120, 'iron' => 180, 'crop' => 80, 'time' => 3600), array('wood' => 270, 'clay' => 240, 'iron' => 380, 'crop' => 160, 'time' => 7200),
    array('wood' => 420, 'clay' => 370, 'iron' => 590, 'crop' => 240, 'time' => 10800), array('wood' => 590, 'clay' => 520, 'iron' => 810, 'crop' => 340, 'time' => 14400),
    array('wood' => 760, 'clay' => 670, 'iron' => 1050, 'crop' => 440, 'time' => 18000), array('wood' => 950, 'clay' => 850, 'iron' => 1300, 'crop' => 550, 'time' => 21600),
    array('wood' => 1150, 'clay' => 1000, 'iron' => 1600, 'crop' => 650, 'time' => 25200), array('wood' => 1350, 'clay' => 1200, 'iron' => 1850, 'crop' => 800, 'time' => 28800),
    array('wood' => 1550, 'clay' => 1400, 'iron' => 2150, 'crop' => 900, 'time' => 32400), array('wood' => 1800, 'clay' => 1600, 'iron' => 2500, 'crop' => 1050, 'time' => 36000),
    array('wood' => 2000, 'clay' => 1800, 'iron' => 2800, 'crop' => 1200, 'time' => 39600), array('wood' => 2300, 'clay' => 2000, 'iron' => 3200, 'crop' => 1300, 'time' => 43200),
    array('wood' => 2500, 'clay' => 2200, 'iron' => 3500, 'crop' => 1500, 'time' => 46800), array('wood' => 2800, 'clay' => 2500, 'iron' => 3900, 'crop' => 1600, 'time' => 50400),
    array('wood' => 3100, 'clay' => 2700, 'iron' => 4300, 'crop' => 1800, 'time' => 54000), array('wood' => 3400, 'clay' => 3000, 'iron' => 4700, 'crop' => 2000, 'time' => 57600),
    array('wood' => 3700, 'clay' => 3300, 'iron' => 5100, 'crop' => 2100, 'time' => 61200), array('wood' => 4000, 'clay' => 3500, 'iron' => 5500, 'crop' => 2300, 'time' => 64800),
    array('wood' => 4300, 'clay' => 3800, 'iron' => 6000, 'crop' => 2500, 'time' => 68400), array('wood' => 4700, 'clay' => 4100, 'iron' => 6500, 'crop' => 2700, 'time' => 72000),
    array('wood' => 5000, 'clay' => 4400, 'iron' => 6900, 'crop' => 2900, 'time' => 75600), array('wood' => 5400, 'clay' => 4700, 'iron' => 7400, 'crop' => 3100, 'time' => 79200),
    array('wood' => 5700, 'clay' => 5100, 'iron' => 7900, 'crop' => 3300, 'time' => 82800), array('wood' => 6100, 'clay' => 5400, 'iron' => 8500, 'crop' => 3500, 'time' => 86400),
    array('wood' => 6500, 'clay' => 5800, 'iron' => 9000, 'crop' => 3800, 'time' => 86400), array('wood' => 6900, 'clay' => 6100, 'iron' => 9600, 'crop' => 4000, 'time' => 86400),
    array('wood' => 7300, 'clay' => 6500, 'iron' => 10100, 'crop' => 4200, 'time' => 86400), array('wood' => 7700, 'clay' => 6800, 'iron' => 10700, 'crop' => 4500, 'time' => 86400),
    array('wood' => 8200, 'clay' => 7200, 'iron' => 11300, 'crop' => 4700, 'time' => 86400), array('wood' => 8600, 'clay' => 7600, 'iron' => 11900, 'crop' => 5000, 'time' => 86400),
    array('wood' => 9100, 'clay' => 8000, 'iron' => 12600, 'crop' => 5200, 'time' => 86400), array('wood' => 9500, 'clay' => 8400, 'iron' => 13200, 'crop' => 5500, 'time' => 86400),
    array('wood' => 10000, 'clay' => 8900, 'iron' => 13900, 'crop' => 5800, 'time' => 86400), array('wood' => 10500, 'clay' => 9300, 'iron' => 14500, 'crop' => 6100, 'time' => 86400),
    array('wood' => 11000, 'clay' => 9700, 'iron' => 15200, 'crop' => 6300, 'time' => 86400), array('wood' => 11500, 'clay' => 10200, 'iron' => 15900, 'crop' => 6600, 'time' => 86400),
    array('wood' => 12000, 'clay' => 10600, 'iron' => 16700, 'crop' => 6900, 'time' => 86400), array('wood' => 12600, 'clay' => 11100, 'iron' => 17400, 'crop' => 7200, 'time' => 86400),
    array('wood' => 13100, 'clay' => 11600, 'iron' => 18100, 'crop' => 7600, 'time' => 86400), array('wood' => 13700, 'clay' => 12100, 'iron' => 18900, 'crop' => 7900, 'time' => 86400),
    array('wood' => 14200, 'clay' => 12600, 'iron' => 19700, 'crop' => 8200, 'time' => 86400), array('wood' => 14800, 'clay' => 13100, 'iron' => 20500, 'crop' => 8500, 'time' => 86400),
    array('wood' => 15400, 'clay' => 13600, 'iron' => 21300, 'crop' => 8900, 'time' => 86400), array('wood' => 16000, 'clay' => 14100, 'iron' => 22100, 'crop' => 9200, 'time' => 86400),
    array('wood' => 16600, 'clay' => 14700, 'iron' => 22900, 'crop' => 9600, 'time' => 86400), array('wood' => 17200, 'clay' => 15200, 'iron' => 23800, 'crop' => 9900, 'time' => 86400),
    array('wood' => 17800, 'clay' => 15800, 'iron' => 24700, 'crop' => 10300, 'time' => 86400), array('wood' => 18500, 'clay' => 16300, 'iron' => 25600, 'crop' => 10600, 'time' => 86400),
    array('wood' => 19100, 'clay' => 16900, 'iron' => 26500, 'crop' => 11000, 'time' => 86400), array('wood' => 19800, 'clay' => 17500, 'iron' => 27400, 'crop' => 11400, 'time' => 86400),
    array('wood' => 20400, 'clay' => 18100, 'iron' => 28300, 'crop' => 11800, 'time' => 86400), array('wood' => 21100, 'clay' => 18700, 'iron' => 29300, 'crop' => 12200, 'time' => 86400),
    array('wood' => 21800, 'clay' => 19300, 'iron' => 30200, 'crop' => 12600, 'time' => 86400), array('wood' => 22500, 'clay' => 19900, 'iron' => 31200, 'crop' => 13000, 'time' => 86400),
    array('wood' => 23200, 'clay' => 20600, 'iron' => 32200, 'crop' => 13400, 'time' => 86400), array('wood' => 24000, 'clay' => 21200, 'iron' => 33200, 'crop' => 13800, 'time' => 86400),
    array('wood' => 24700, 'clay' => 21900, 'iron' => 34200, 'crop' => 14300, 'time' => 86400), array('wood' => 25400, 'clay' => 22500, 'iron' => 35200, 'crop' => 14700, 'time' => 86400),
    array('wood' => 26200, 'clay' => 23200, 'iron' => 36300, 'crop' => 15100, 'time' => 86400), array('wood' => 27000, 'clay' => 23900, 'iron' => 37400, 'crop' => 15600, 'time' => 86400),
    array('wood' => 27800, 'clay' => 24600, 'iron' => 38400, 'crop' => 16000, 'time' => 86400), array('wood' => 28500, 'clay' => 25300, 'iron' => 39500, 'crop' => 16500, 'time' => 86400),
    array('wood' => 29300, 'clay' => 26000, 'iron' => 40600, 'crop' => 16900, 'time' => 86400), array('wood' => 30200, 'clay' => 26700, 'iron' => 41800, 'crop' => 17400, 'time' => 86400),
    array('wood' => 31000, 'clay' => 27400, 'iron' => 42900, 'crop' => 17900, 'time' => 86400), array('wood' => 31800, 'clay' => 28100, 'iron' => 44100, 'crop' => 18400, 'time' => 86400),
    array('wood' => 32700, 'clay' => 28900, 'iron' => 45200, 'crop' => 18800, 'time' => 86400), array('wood' => 33500, 'clay' => 29700, 'iron' => 46400, 'crop' => 19300, 'time' => 86400),
    array('wood' => 34400, 'clay' => 30400, 'iron' => 47600, 'crop' => 19800, 'time' => 86400), array('wood' => 35300, 'clay' => 31200, 'iron' => 48800, 'crop' => 20300, 'time' => 86400),
    array('wood' => 36200, 'clay' => 32000, 'iron' => 50100, 'crop' => 20900, 'time' => 86400), array('wood' => 37100, 'clay' => 32800, 'iron' => 51300, 'crop' => 21400, 'time' => 86400),
    array('wood' => 38000, 'clay' => 33600, 'iron' => 52600, 'crop' => 21900, 'time' => 86400), array('wood' => 38900, 'clay' => 34400, 'iron' => 53800, 'crop' => 22400, 'time' => 86400),
    array('wood' => 39800, 'clay' => 35200, 'iron' => 55100, 'crop' => 23000, 'time' => 86400), array('wood' => 40800, 'clay' => 36100, 'iron' => 56400, 'crop' => 23500, 'time' => 86400),
    array('wood' => 41700, 'clay' => 36900, 'iron' => 57700, 'crop' => 24100, 'time' => 86400), array('wood' => 42700, 'clay' => 37700, 'iron' => 59100, 'crop' => 24600, 'time' => 86400),
    array('wood' => 43600, 'clay' => 38600, 'iron' => 60400, 'crop' => 25200, 'time' => 86400), array('wood' => 44600, 'clay' => 39500, 'iron' => 61800, 'crop' => 25700, 'time' => 86400),
    array('wood' => 45600, 'clay' => 40400, 'iron' => 63200, 'crop' => 26300, 'time' => 86400), array('wood' => 46600, 'clay' => 41300, 'iron' => 64600, 'crop' => 26900, 'time' => 86400),
    array('wood' => 47700, 'clay' => 42200, 'iron' => 66000, 'crop' => 27500, 'time' => 86400), array('wood' => 48700, 'clay' => 43100, 'iron' => 67400, 'crop' => 28100, 'time' => 86400),
    array('wood' => 49700, 'clay' => 44000, 'iron' => 68900, 'crop' => 28700, 'time' => 86400), array('wood' => 50800, 'clay' => 44900, 'iron' => 70300, 'crop' => 29300, 'time' => 86400),
    array('wood' => 51800, 'clay' => 45900, 'iron' => 71800, 'crop' => 29900, 'time' => 86400), array('wood' => 52900, 'clay' => 46800, 'iron' => 73300, 'crop' => 30500, 'time' => 86400),
    array('wood' => 54000, 'clay' => 47800, 'iron' => 74800, 'crop' => 31100, 'time' => 86400), array('wood' => 55100, 'clay' => 48700, 'iron' => 76300, 'crop' => 31800, 'time' => 86400),
    array('wood' => 56200, 'clay' => 49700, 'iron' => 77800, 'crop' => 32400, 'time' => 86400), array('wood' => 57300, 'clay' => 50700, 'iron' => 79300, 'crop' => 33100, 'time' => 86400),
    array('wood' => 58400, 'clay' => 51700, 'iron' => 80900, 'crop' => 33700, 'time' => 86400), array('wood' => 59600, 'clay' => 52700, 'iron' => 82500, 'crop' => 34400, 'time' => 86400),
    array('wood' => 60700, 'clay' => 53700, 'iron' => 84100, 'crop' => 35000, 'time' => 86400), array('wood' => 61900, 'clay' => 54700, 'iron' => 85700, 'crop' => 35700, 'time' => 86400),
    array('wood' => 63100, 'clay' => 55800, 'iron' => 87300, 'crop' => 36400, 'time' => 86400), array('wood' => 64200, 'clay' => 56800, 'iron' => 88900, 'crop' => 37100, 'time' => 86400),
    array('wood' => 65400, 'clay' => 57900, 'iron' => 90600, 'crop' => 37700, 'time' => 86400), array('wood' => 66600, 'clay' => 58900, 'iron' => 92300, 'crop' => 38400, 'time' => 86400),
    array('wood' => 66600, 'clay' => 58900, 'iron' => 92300, 'crop' => 38400, 'time' => 86400));

$_hero_t2 = array(array('wood' => 180, 'clay' => 130, 'iron' => 120, 'crop' => 80, 'time' => 3600), array('wood' => 380, 'clay' => 270, 'iron' => 240, 'crop' => 160, 'time' => 7200),
    array('wood' => 590, 'clay' => 420, 'iron' => 370, 'crop' => 240, 'time' => 10800), array('wood' => 810, 'clay' => 590, 'iron' => 520, 'crop' => 340, 'time' => 14400),
    array('wood' => 1050, 'clay' => 760, 'iron' => 670, 'crop' => 440, 'time' => 18000), array('wood' => 1300, 'clay' => 950, 'iron' => 850, 'crop' => 550, 'time' => 21600),
    array('wood' => 1600, 'clay' => 1150, 'iron' => 1000, 'crop' => 650, 'time' => 25200), array('wood' => 1850, 'clay' => 1350, 'iron' => 1200, 'crop' => 800, 'time' => 28800),
    array('wood' => 2150, 'clay' => 1550, 'iron' => 1400, 'crop' => 900, 'time' => 32400), array('wood' => 2500, 'clay' => 1800, 'iron' => 1600, 'crop' => 1050, 'time' => 36000),
    array('wood' => 2800, 'clay' => 2000, 'iron' => 1800, 'crop' => 1200, 'time' => 39600), array('wood' => 3200, 'clay' => 2300, 'iron' => 2000, 'crop' => 1300, 'time' => 43200),
    array('wood' => 3500, 'clay' => 2500, 'iron' => 2200, 'crop' => 1500, 'time' => 46800), array('wood' => 3900, 'clay' => 2800, 'iron' => 2500, 'crop' => 1600, 'time' => 50400),
    array('wood' => 4300, 'clay' => 3100, 'iron' => 2700, 'crop' => 1800, 'time' => 54000), array('wood' => 4700, 'clay' => 3400, 'iron' => 3000, 'crop' => 2000, 'time' => 57600),
    array('wood' => 5100, 'clay' => 3700, 'iron' => 3300, 'crop' => 2100, 'time' => 61200), array('wood' => 5500, 'clay' => 4000, 'iron' => 3500, 'crop' => 2300, 'time' => 64800),
    array('wood' => 6000, 'clay' => 4300, 'iron' => 3800, 'crop' => 2500, 'time' => 68400), array('wood' => 6500, 'clay' => 4700, 'iron' => 4100, 'crop' => 2700, 'time' => 72000),
    array('wood' => 6900, 'clay' => 5000, 'iron' => 4400, 'crop' => 2900, 'time' => 75600), array('wood' => 7400, 'clay' => 5400, 'iron' => 4700, 'crop' => 3100, 'time' => 79200),
    array('wood' => 7900, 'clay' => 5700, 'iron' => 5100, 'crop' => 3300, 'time' => 82800), array('wood' => 8500, 'clay' => 6100, 'iron' => 5400, 'crop' => 3500, 'time' => 86400),
    array('wood' => 9000, 'clay' => 6500, 'iron' => 5800, 'crop' => 3800, 'time' => 86400), array('wood' => 9600, 'clay' => 6900, 'iron' => 6100, 'crop' => 4000, 'time' => 86400),
    array('wood' => 10100, 'clay' => 7300, 'iron' => 6500, 'crop' => 4200, 'time' => 86400), array('wood' => 10700, 'clay' => 7700, 'iron' => 6800, 'crop' => 4500, 'time' => 86400),
    array('wood' => 11300, 'clay' => 8200, 'iron' => 7200, 'crop' => 4700, 'time' => 86400), array('wood' => 11900, 'clay' => 8600, 'iron' => 7600, 'crop' => 5000, 'time' => 86400),
    array('wood' => 12600, 'clay' => 9100, 'iron' => 8000, 'crop' => 5200, 'time' => 86400), array('wood' => 13200, 'clay' => 9500, 'iron' => 8400, 'crop' => 5500, 'time' => 86400),
    array('wood' => 13900, 'clay' => 10000, 'iron' => 8900, 'crop' => 5800, 'time' => 86400), array('wood' => 14500, 'clay' => 10500, 'iron' => 9300, 'crop' => 6100, 'time' => 86400),
    array('wood' => 15200, 'clay' => 11000, 'iron' => 9700, 'crop' => 6300, 'time' => 86400), array('wood' => 15900, 'clay' => 11500, 'iron' => 10200, 'crop' => 6600, 'time' => 86400),
    array('wood' => 16700, 'clay' => 12000, 'iron' => 10600, 'crop' => 6900, 'time' => 86400), array('wood' => 17400, 'clay' => 12600, 'iron' => 11100, 'crop' => 7200, 'time' => 86400),
    array('wood' => 18100, 'clay' => 13100, 'iron' => 11600, 'crop' => 7600, 'time' => 86400), array('wood' => 18900, 'clay' => 13700, 'iron' => 12100, 'crop' => 7900, 'time' => 86400),
    array('wood' => 19700, 'clay' => 14200, 'iron' => 12600, 'crop' => 8200, 'time' => 86400), array('wood' => 20500, 'clay' => 14800, 'iron' => 13100, 'crop' => 8500, 'time' => 86400),
    array('wood' => 21300, 'clay' => 15400, 'iron' => 13600, 'crop' => 8900, 'time' => 86400), array('wood' => 22100, 'clay' => 16000, 'iron' => 14100, 'crop' => 9200, 'time' => 86400),
    array('wood' => 22900, 'clay' => 16600, 'iron' => 14700, 'crop' => 9600, 'time' => 86400), array('wood' => 23800, 'clay' => 17200, 'iron' => 15200, 'crop' => 9900, 'time' => 86400),
    array('wood' => 24700, 'clay' => 17800, 'iron' => 15800, 'crop' => 10300, 'time' => 86400), array('wood' => 25600, 'clay' => 18500, 'iron' => 16300, 'crop' => 10600, 'time' => 86400),
    array('wood' => 26500, 'clay' => 19100, 'iron' => 16900, 'crop' => 11000, 'time' => 86400), array('wood' => 27400, 'clay' => 19800, 'iron' => 17500, 'crop' => 11400, 'time' => 86400),
    array('wood' => 28300, 'clay' => 20400, 'iron' => 18100, 'crop' => 11800, 'time' => 86400), array('wood' => 29300, 'clay' => 21100, 'iron' => 18700, 'crop' => 12200, 'time' => 86400),
    array('wood' => 30200, 'clay' => 21800, 'iron' => 19300, 'crop' => 12600, 'time' => 86400), array('wood' => 31200, 'clay' => 22500, 'iron' => 19900, 'crop' => 13000, 'time' => 86400),
    array('wood' => 32200, 'clay' => 23200, 'iron' => 20600, 'crop' => 13400, 'time' => 86400), array('wood' => 33200, 'clay' => 24000, 'iron' => 21200, 'crop' => 13800, 'time' => 86400),
    array('wood' => 34200, 'clay' => 24700, 'iron' => 21900, 'crop' => 14300, 'time' => 86400), array('wood' => 35200, 'clay' => 25400, 'iron' => 22500, 'crop' => 14700, 'time' => 86400),
    array('wood' => 36300, 'clay' => 26200, 'iron' => 23200, 'crop' => 15100, 'time' => 86400), array('wood' => 37400, 'clay' => 27000, 'iron' => 23900, 'crop' => 15600, 'time' => 86400),
    array('wood' => 38400, 'clay' => 27800, 'iron' => 24600, 'crop' => 16000, 'time' => 86400), array('wood' => 39500, 'clay' => 28500, 'iron' => 25300, 'crop' => 16500, 'time' => 86400),
    array('wood' => 40600, 'clay' => 29300, 'iron' => 26000, 'crop' => 16900, 'time' => 86400), array('wood' => 41800, 'clay' => 30200, 'iron' => 26700, 'crop' => 17400, 'time' => 86400),
    array('wood' => 42900, 'clay' => 31000, 'iron' => 27400, 'crop' => 17900, 'time' => 86400), array('wood' => 44100, 'clay' => 31800, 'iron' => 28100, 'crop' => 18400, 'time' => 86400),
    array('wood' => 45200, 'clay' => 32700, 'iron' => 28900, 'crop' => 18800, 'time' => 86400), array('wood' => 46400, 'clay' => 33500, 'iron' => 29700, 'crop' => 19300, 'time' => 86400),
    array('wood' => 47600, 'clay' => 34400, 'iron' => 30400, 'crop' => 19800, 'time' => 86400), array('wood' => 48800, 'clay' => 35300, 'iron' => 31200, 'crop' => 20300, 'time' => 86400),
    array('wood' => 50100, 'clay' => 36200, 'iron' => 32000, 'crop' => 20900, 'time' => 86400), array('wood' => 51300, 'clay' => 37100, 'iron' => 32800, 'crop' => 21400, 'time' => 86400),
    array('wood' => 52600, 'clay' => 38000, 'iron' => 33600, 'crop' => 21900, 'time' => 86400), array('wood' => 53800, 'clay' => 38900, 'iron' => 34400, 'crop' => 22400, 'time' => 86400),
    array('wood' => 55100, 'clay' => 39800, 'iron' => 35200, 'crop' => 23000, 'time' => 86400), array('wood' => 56400, 'clay' => 40800, 'iron' => 36100, 'crop' => 23500, 'time' => 86400),
    array('wood' => 57700, 'clay' => 41700, 'iron' => 36900, 'crop' => 24100, 'time' => 86400), array('wood' => 59100, 'clay' => 42700, 'iron' => 37700, 'crop' => 24600, 'time' => 86400),
    array('wood' => 60400, 'clay' => 43600, 'iron' => 38600, 'crop' => 25200, 'time' => 86400), array('wood' => 61800, 'clay' => 44600, 'iron' => 39500, 'crop' => 25700, 'time' => 86400),
    array('wood' => 63200, 'clay' => 45600, 'iron' => 40400, 'crop' => 26300, 'time' => 86400), array('wood' => 64600, 'clay' => 46600, 'iron' => 41300, 'crop' => 26900, 'time' => 86400),
    array('wood' => 66000, 'clay' => 47700, 'iron' => 42200, 'crop' => 27500, 'time' => 86400), array('wood' => 67400, 'clay' => 48700, 'iron' => 43100, 'crop' => 28100, 'time' => 86400),
    array('wood' => 68900, 'clay' => 49700, 'iron' => 44000, 'crop' => 28700, 'time' => 86400), array('wood' => 70300, 'clay' => 50800, 'iron' => 44900, 'crop' => 29300, 'time' => 86400),
    array('wood' => 71800, 'clay' => 51800, 'iron' => 45900, 'crop' => 29900, 'time' => 86400), array('wood' => 73300, 'clay' => 52900, 'iron' => 46800, 'crop' => 30500, 'time' => 86400),
    array('wood' => 74800, 'clay' => 54000, 'iron' => 47800, 'crop' => 31100, 'time' => 86400), array('wood' => 76300, 'clay' => 55100, 'iron' => 48700, 'crop' => 31800, 'time' => 86400),
    array('wood' => 77800, 'clay' => 56200, 'iron' => 49700, 'crop' => 32400, 'time' => 86400), array('wood' => 79300, 'clay' => 57300, 'iron' => 50700, 'crop' => 33100, 'time' => 86400),
    array('wood' => 80900, 'clay' => 58400, 'iron' => 51700, 'crop' => 33700, 'time' => 86400), array('wood' => 82500, 'clay' => 59600, 'iron' => 52700, 'crop' => 34400, 'time' => 86400),
    array('wood' => 84100, 'clay' => 60700, 'iron' => 53700, 'crop' => 35000, 'time' => 86400), array('wood' => 85700, 'clay' => 61900, 'iron' => 54700, 'crop' => 35700, 'time' => 86400),
    array('wood' => 87300, 'clay' => 63100, 'iron' => 55800, 'crop' => 36400, 'time' => 86400), array('wood' => 88900, 'clay' => 64200, 'iron' => 56800, 'crop' => 37100, 'time' => 86400),
    array('wood' => 90600, 'clay' => 65400, 'iron' => 57900, 'crop' => 37700, 'time' => 86400), array('wood' => 92300, 'clay' => 66600, 'iron' => 58900, 'crop' => 38400, 'time' => 86400),
    array('wood' => 92300, 'clay' => 66600, 'iron' => 58900, 'crop' => 38400, 'time' => 86400));

$_hero_t3 = array(array('wood' => 120, 'clay' => 180, 'iron' => 130, 'crop' => 80, 'time' => 3600), array('wood' => 240, 'clay' => 380, 'iron' => 270, 'crop' => 160, 'time' => 7200),
    array('wood' => 370, 'clay' => 590, 'iron' => 420, 'crop' => 240, 'time' => 10800), array('wood' => 520, 'clay' => 810, 'iron' => 590, 'crop' => 340, 'time' => 14400),
    array('wood' => 670, 'clay' => 1050, 'iron' => 760, 'crop' => 440, 'time' => 18000), array('wood' => 850, 'clay' => 1300, 'iron' => 950, 'crop' => 550, 'time' => 21600),
    array('wood' => 1000, 'clay' => 1600, 'iron' => 1150, 'crop' => 650, 'time' => 25200), array('wood' => 1200, 'clay' => 1850, 'iron' => 1350, 'crop' => 800, 'time' => 28800),
    array('wood' => 1400, 'clay' => 2150, 'iron' => 1550, 'crop' => 900, 'time' => 32400), array('wood' => 1600, 'clay' => 2500, 'iron' => 1800, 'crop' => 1050, 'time' => 36000),
    array('wood' => 1800, 'clay' => 2800, 'iron' => 2000, 'crop' => 1200, 'time' => 39600), array('wood' => 2000, 'clay' => 3200, 'iron' => 2300, 'crop' => 1300, 'time' => 43200),
    array('wood' => 2200, 'clay' => 3500, 'iron' => 2500, 'crop' => 1500, 'time' => 46800), array('wood' => 2500, 'clay' => 3900, 'iron' => 2800, 'crop' => 1600, 'time' => 50400),
    array('wood' => 2700, 'clay' => 4300, 'iron' => 3100, 'crop' => 1800, 'time' => 54000), array('wood' => 3000, 'clay' => 4700, 'iron' => 3400, 'crop' => 2000, 'time' => 57600),
    array('wood' => 3300, 'clay' => 5100, 'iron' => 3700, 'crop' => 2100, 'time' => 61200), array('wood' => 3500, 'clay' => 5500, 'iron' => 4000, 'crop' => 2300, 'time' => 64800),
    array('wood' => 3800, 'clay' => 6000, 'iron' => 4300, 'crop' => 2500, 'time' => 68400), array('wood' => 4100, 'clay' => 6500, 'iron' => 4700, 'crop' => 2700, 'time' => 72000),
    array('wood' => 4400, 'clay' => 6900, 'iron' => 5000, 'crop' => 2900, 'time' => 75600), array('wood' => 4700, 'clay' => 7400, 'iron' => 5400, 'crop' => 3100, 'time' => 79200),
    array('wood' => 5100, 'clay' => 7900, 'iron' => 5700, 'crop' => 3300, 'time' => 82800), array('wood' => 5400, 'clay' => 8500, 'iron' => 6100, 'crop' => 3500, 'time' => 86400),
    array('wood' => 5800, 'clay' => 9000, 'iron' => 6500, 'crop' => 3800, 'time' => 86400), array('wood' => 6100, 'clay' => 9600, 'iron' => 6900, 'crop' => 4000, 'time' => 86400),
    array('wood' => 6500, 'clay' => 10100, 'iron' => 7300, 'crop' => 4200, 'time' => 86400), array('wood' => 6800, 'clay' => 10700, 'iron' => 7700, 'crop' => 4500, 'time' => 86400),
    array('wood' => 7200, 'clay' => 11300, 'iron' => 8200, 'crop' => 4700, 'time' => 86400), array('wood' => 7600, 'clay' => 11900, 'iron' => 8600, 'crop' => 5000, 'time' => 86400),
    array('wood' => 8000, 'clay' => 12600, 'iron' => 9100, 'crop' => 5200, 'time' => 86400), array('wood' => 8400, 'clay' => 13200, 'iron' => 9500, 'crop' => 5500, 'time' => 86400),
    array('wood' => 8900, 'clay' => 13900, 'iron' => 10000, 'crop' => 5800, 'time' => 86400), array('wood' => 9300, 'clay' => 14500, 'iron' => 10500, 'crop' => 6100, 'time' => 86400),
    array('wood' => 9700, 'clay' => 15200, 'iron' => 11000, 'crop' => 6300, 'time' => 86400), array('wood' => 10200, 'clay' => 15900, 'iron' => 11500, 'crop' => 6600, 'time' => 86400),
    array('wood' => 10600, 'clay' => 16700, 'iron' => 12000, 'crop' => 6900, 'time' => 86400), array('wood' => 11100, 'clay' => 17400, 'iron' => 12600, 'crop' => 7200, 'time' => 86400),
    array('wood' => 11600, 'clay' => 18100, 'iron' => 13100, 'crop' => 7600, 'time' => 86400), array('wood' => 12100, 'clay' => 18900, 'iron' => 13700, 'crop' => 7900, 'time' => 86400),
    array('wood' => 12600, 'clay' => 19700, 'iron' => 14200, 'crop' => 8200, 'time' => 86400), array('wood' => 13100, 'clay' => 20500, 'iron' => 14800, 'crop' => 8500, 'time' => 86400),
    array('wood' => 13600, 'clay' => 21300, 'iron' => 15400, 'crop' => 8900, 'time' => 86400), array('wood' => 14100, 'clay' => 22100, 'iron' => 16000, 'crop' => 9200, 'time' => 86400),
    array('wood' => 14700, 'clay' => 22900, 'iron' => 16600, 'crop' => 9600, 'time' => 86400), array('wood' => 15200, 'clay' => 23800, 'iron' => 17200, 'crop' => 9900, 'time' => 86400),
    array('wood' => 15800, 'clay' => 24700, 'iron' => 17800, 'crop' => 10300, 'time' => 86400), array('wood' => 16300, 'clay' => 25600, 'iron' => 18500, 'crop' => 10600, 'time' => 86400),
    array('wood' => 16900, 'clay' => 26500, 'iron' => 19100, 'crop' => 11000, 'time' => 86400), array('wood' => 17500, 'clay' => 27400, 'iron' => 19800, 'crop' => 11400, 'time' => 86400),
    array('wood' => 18100, 'clay' => 28300, 'iron' => 20400, 'crop' => 11800, 'time' => 86400), array('wood' => 18700, 'clay' => 29300, 'iron' => 21100, 'crop' => 12200, 'time' => 86400),
    array('wood' => 19300, 'clay' => 30200, 'iron' => 21800, 'crop' => 12600, 'time' => 86400), array('wood' => 19900, 'clay' => 31200, 'iron' => 22500, 'crop' => 13000, 'time' => 86400),
    array('wood' => 20600, 'clay' => 32200, 'iron' => 23200, 'crop' => 13400, 'time' => 86400), array('wood' => 21200, 'clay' => 33200, 'iron' => 24000, 'crop' => 13800, 'time' => 86400),
    array('wood' => 21900, 'clay' => 34200, 'iron' => 24700, 'crop' => 14300, 'time' => 86400), array('wood' => 22500, 'clay' => 35200, 'iron' => 25400, 'crop' => 14700, 'time' => 86400),
    array('wood' => 23200, 'clay' => 36300, 'iron' => 26200, 'crop' => 15100, 'time' => 86400), array('wood' => 23900, 'clay' => 37400, 'iron' => 27000, 'crop' => 15600, 'time' => 86400),
    array('wood' => 24600, 'clay' => 38400, 'iron' => 27800, 'crop' => 16000, 'time' => 86400), array('wood' => 25300, 'clay' => 39500, 'iron' => 28500, 'crop' => 16500, 'time' => 86400),
    array('wood' => 26000, 'clay' => 40600, 'iron' => 29300, 'crop' => 16900, 'time' => 86400), array('wood' => 26700, 'clay' => 41800, 'iron' => 30200, 'crop' => 17400, 'time' => 86400),
    array('wood' => 27400, 'clay' => 42900, 'iron' => 31000, 'crop' => 17900, 'time' => 86400), array('wood' => 28100, 'clay' => 44100, 'iron' => 31800, 'crop' => 18400, 'time' => 86400),
    array('wood' => 28900, 'clay' => 45200, 'iron' => 32700, 'crop' => 18800, 'time' => 86400), array('wood' => 29700, 'clay' => 46400, 'iron' => 33500, 'crop' => 19300, 'time' => 86400),
    array('wood' => 30400, 'clay' => 47600, 'iron' => 34400, 'crop' => 19800, 'time' => 86400), array('wood' => 31200, 'clay' => 48800, 'iron' => 35300, 'crop' => 20300, 'time' => 86400),
    array('wood' => 32000, 'clay' => 50100, 'iron' => 36200, 'crop' => 20900, 'time' => 86400), array('wood' => 32800, 'clay' => 51300, 'iron' => 37100, 'crop' => 21400, 'time' => 86400),
    array('wood' => 33600, 'clay' => 52600, 'iron' => 38000, 'crop' => 21900, 'time' => 86400), array('wood' => 34400, 'clay' => 53800, 'iron' => 38900, 'crop' => 22400, 'time' => 86400),
    array('wood' => 35200, 'clay' => 55100, 'iron' => 39800, 'crop' => 23000, 'time' => 86400), array('wood' => 36100, 'clay' => 56400, 'iron' => 40800, 'crop' => 23500, 'time' => 86400),
    array('wood' => 36900, 'clay' => 57700, 'iron' => 41700, 'crop' => 24100, 'time' => 86400), array('wood' => 37700, 'clay' => 59100, 'iron' => 42700, 'crop' => 24600, 'time' => 86400),
    array('wood' => 38600, 'clay' => 60400, 'iron' => 43600, 'crop' => 25200, 'time' => 86400), array('wood' => 39500, 'clay' => 61800, 'iron' => 44600, 'crop' => 25700, 'time' => 86400),
    array('wood' => 40400, 'clay' => 63200, 'iron' => 45600, 'crop' => 26300, 'time' => 86400), array('wood' => 41300, 'clay' => 64600, 'iron' => 46600, 'crop' => 26900, 'time' => 86400),
    array('wood' => 42200, 'clay' => 66000, 'iron' => 47700, 'crop' => 27500, 'time' => 86400), array('wood' => 43100, 'clay' => 67400, 'iron' => 48700, 'crop' => 28100, 'time' => 86400),
    array('wood' => 44000, 'clay' => 68900, 'iron' => 49700, 'crop' => 28700, 'time' => 86400), array('wood' => 44900, 'clay' => 70300, 'iron' => 50800, 'crop' => 29300, 'time' => 86400),
    array('wood' => 45900, 'clay' => 71800, 'iron' => 51800, 'crop' => 29900, 'time' => 86400), array('wood' => 46800, 'clay' => 73300, 'iron' => 52900, 'crop' => 30500, 'time' => 86400),
    array('wood' => 47800, 'clay' => 74800, 'iron' => 54000, 'crop' => 31100, 'time' => 86400), array('wood' => 48700, 'clay' => 76300, 'iron' => 55100, 'crop' => 31800, 'time' => 86400),
    array('wood' => 49700, 'clay' => 77800, 'iron' => 56200, 'crop' => 32400, 'time' => 86400), array('wood' => 50700, 'clay' => 79300, 'iron' => 57300, 'crop' => 33100, 'time' => 86400),
    array('wood' => 51700, 'clay' => 80900, 'iron' => 58400, 'crop' => 33700, 'time' => 86400), array('wood' => 52700, 'clay' => 82500, 'iron' => 59600, 'crop' => 34400, 'time' => 86400),
    array('wood' => 53700, 'clay' => 84100, 'iron' => 60700, 'crop' => 35000, 'time' => 86400), array('wood' => 54700, 'clay' => 85700, 'iron' => 61900, 'crop' => 35700, 'time' => 86400),
    array('wood' => 55800, 'clay' => 87300, 'iron' => 63100, 'crop' => 36400, 'time' => 86400), array('wood' => 56800, 'clay' => 88900, 'iron' => 64200, 'crop' => 37100, 'time' => 86400),
    array('wood' => 57900, 'clay' => 90600, 'iron' => 65400, 'crop' => 37700, 'time' => 86400), array('wood' => 58900, 'clay' => 92300, 'iron' => 66600, 'crop' => 38400, 'time' => 86400),
    array('wood' => 58900, 'clay' => 92300, 'iron' => 66600, 'crop' => 38400, 'time' => 86400));