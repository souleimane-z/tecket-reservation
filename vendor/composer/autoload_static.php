<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b78f52495b3775cbdd321b5a8b3f3cb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Svg\\' => 4,
            'Sbzam\\TicketReservation\\' => 24,
            'Sabberworm\\CSS\\' => 15,
        ),
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Svg\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/php-svg-lib/src/Svg',
        ),
        'Sbzam\\TicketReservation\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/php-font-lib/src/FontLib',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dompdf\\Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b78f52495b3775cbdd321b5a8b3f3cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b78f52495b3775cbdd321b5a8b3f3cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b78f52495b3775cbdd321b5a8b3f3cb::$classMap;

        }, null, ClassLoader::class);
    }
}
