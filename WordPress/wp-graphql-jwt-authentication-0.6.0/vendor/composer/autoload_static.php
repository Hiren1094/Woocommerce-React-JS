<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb81212723df6ec6a4125604686c14dbf
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\JWT_Authentication\\' => 29,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\JWT_Authentication\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWK' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWK.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\Key' => __DIR__ . '/..' . '/firebase/php-jwt/src/Key.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'WPGraphQL\\JWT_Authentication\\Auth' => __DIR__ . '/../..' . '/src/Auth.php',
        'WPGraphQL\\JWT_Authentication\\Login' => __DIR__ . '/../..' . '/src/Login.php',
        'WPGraphQL\\JWT_Authentication\\ManageTokens' => __DIR__ . '/../..' . '/src/ManageTokens.php',
        'WPGraphQL\\JWT_Authentication\\RefreshToken' => __DIR__ . '/../..' . '/src/RefreshToken.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb81212723df6ec6a4125604686c14dbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb81212723df6ec6a4125604686c14dbf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb81212723df6ec6a4125604686c14dbf::$classMap;

        }, null, ClassLoader::class);
    }
}
