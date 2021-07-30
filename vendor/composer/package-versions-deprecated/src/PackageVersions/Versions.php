<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.2@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.2@4202ce675d29e70a8b9ee763bec021b6f44caccb',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.2.0@072c11c1dcfced4505e29a0487b06ea774c403f4',
  'doctrine/orm' => '2.9.3@82e77cf5089a1303733f75f0f0ed01be3ab9ec22',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'erusev/parsedown' => '1.7.4@cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.3.0@13af2502d9bb6f7d33be2de4b51fb68c6cdb476e',
  'league/uri-parser' => '1.4.1@671548427e4c932352d9b9279fdfa345bf63fa00',
  'masterminds/html5' => '2.7.5@f640ac1bdddff06ea333a920c95bbad8872429ab',
  'monolog/monolog' => '2.3.2@71312564759a7db5b789296369c1a264efc43aad',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.1.5@62c5909f49cf74dccdf50a294511cc24be2f969c',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.3.4@9bd222a8fdd13ecca91384e403247103198f80a1',
  'symfony/cache' => 'v5.3.4@944db6004fc374fbe032d18e07cce51cc4e1e661',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v5.3.4@4268f3059c904c61636275182707f81645517a37',
  'symfony/console' => 'v5.3.6@51b71afd6d2dc8f5063199357b9880cea8d8bfe2',
  'symfony/dependency-injection' => 'v5.3.4@5a825e4b386066167a8b55487091cb62beec74c2',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v5.3.4@70bffec510b08e4830d851ad485a996b130fcd7c',
  'symfony/dotenv' => 'v5.3.6@b6d44663cff8c9880ee64d232870293a11e14cd6',
  'symfony/error-handler' => 'v5.3.4@281f6c4660bcf5844bb0346fe3a4664722fe4c73',
  'symfony/event-dispatcher' => 'v5.3.4@f2fd2208157553874560f3645d4594303058c4bd',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/expression-language' => 'v5.3.4@d4367d36217dd395b10f61649a6bf2c1367140d8',
  'symfony/filesystem' => 'v5.3.4@343f4fe324383ca46792cae728a3b6e2f708fb32',
  'symfony/finder' => 'v5.3.4@17f50e06018baec41551a71a15731287dbaab186',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => 'v5.3.4@7d3ece4f98a1d4f7fea4331982ff210dd08bb2f9',
  'symfony/framework-bundle' => 'v5.3.4@2c5ed14a5992a2d04dfdb238a5f9589bab0a68d8',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.6@a8388f7b7054a7401997008ce9cd8c6b0ab7ac75',
  'symfony/http-kernel' => 'v5.3.6@60030f209018356b3b553b9dbd84ad2071c1b7e0',
  'symfony/intl' => 'v5.3.4@f1d1420771b3a94fcf2fda06728c61eba5de4b90',
  'symfony/mailer' => 'v5.3.4@c1f83da2296741110be35dd779f2a9e412cec466',
  'symfony/mime' => 'v5.3.4@633e4e8afe9e529e5599d71238849a4218dd497b',
  'symfony/monolog-bridge' => 'v5.3.4@a0d881165b902a04f41e873426aa52a068064ac4',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/options-resolver' => 'v5.3.4@a603e5701bd6e305cfc777a8b50bf081ef73105e',
  'symfony/password-hasher' => 'v5.3.4@61dd1e90fa0ebf6f4982787b1e033a9606357d7e',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-messageformatter' => 'v1.23.0@22c4bba53bfadde90a4c1b32088e720638a42a83',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/property-access' => 'v5.3.4@098681253076af7070df7d9debe5f75733eea189',
  'symfony/property-info' => 'v5.3.4@0f42009150679a7a256eb6ee106401af5d974ed2',
  'symfony/routing' => 'v5.3.4@0a35d2f57d73c46ab6d042ced783b81d09a624c4',
  'symfony/runtime' => 'v5.3.4@685a4a5491e25c7f2dd251d8fcca583b427ff290',
  'symfony/security-bundle' => 'v5.3.4@7db2c7d6a1f15bdccbcb6d6807d60d0bd4a9d7ae',
  'symfony/security-core' => 'v5.3.6@69b9a6a62d8914f10010646619bcd4485a71f119',
  'symfony/security-csrf' => 'v5.3.4@94b533195cf7fb21f3fae8ce349861c6401d969e',
  'symfony/security-guard' => 'v5.3.4@4e43b41c3809fdaea72ade100dae8c07045a2fa9',
  'symfony/security-http' => 'v5.3.6@ed6647291bd0afdbc3d41997c3dc7aa2eed8ca5b',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v5.3.4@b24c6a92c6db316fee69e38c80591e080e41536c',
  'symfony/string' => 'v5.3.3@bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
  'symfony/translation' => 'v5.3.4@d89ad7292932c2699cbe4af98d72c5c6bbc504c1',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v5.3.4@587c45ef49256279502b4a29146b9e87ad23426f',
  'symfony/twig-bundle' => 'v5.3.4@345965b40c1847ebdbb2ab0eb98c71a98a5e167b',
  'symfony/twig-pack' => 'v1.0.1@08a73e833e07921c464336deb7630f93e85ef930',
  'symfony/validator' => 'v5.3.6@4a87a29d0ebca780a90b7aaba02bc04f5678eb36',
  'symfony/var-dumper' => 'v5.3.6@3dd8ddd1e260e58ecc61bb78da3b6584b3bfcba0',
  'symfony/var-exporter' => 'v5.3.4@b7898a65fc91e7c41de7a88c7db9aee9c0d432f0',
  'symfony/webpack-encore-bundle' => 'v1.12.0@9943a59f8551b7a8181e19a2b4efa60e5907c667',
  'symfony/yaml' => 'v5.3.6@4500fe63dc9c6ffc32d3b1cb0448c329f9c814b7',
  'tgalopin/html-sanitizer' => '1.4.0@56cca6b48de4e50d16a4f549e3e677ae0d561e91',
  'tgalopin/html-sanitizer-bundle' => '1.3.0@87e07cee80136d845a21faa3116982990884a89a',
  'twig/extra-bundle' => 'v3.3.1@e12a8ee63387abb83fb7e4c897663bfb94ac22b6',
  'twig/intl-extra' => 'v3.3.0@919e8f945c30bd3efeb6a4d79722cda538116658',
  'twig/markdown-extra' => 'v3.3.1@a9fe276dbb7f837c3f4ecc6dad89bcccb9fc8bc9',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'dama/doctrine-test-bundle' => 'v6.6.0@8cfd3f9a4cc0f26101e6170f592900384b78b799',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'nikic/php-parser' => 'v4.12.0@6608f01670c3cc5079e18c1dab1104e002579143',
  'symfony/browser-kit' => 'v5.3.4@c1e3f64fcc631c96e2c5843b666db66679ced11c',
  'symfony/css-selector' => 'v5.3.4@7fb120adc7f600a59027775b224c13a33530dd90',
  'symfony/debug-bundle' => 'v5.3.4@356c7d2acb6bc93b1c091255068ccfb9ad55a3e0',
  'symfony/dom-crawler' => 'v5.3.4@2dd8890bd01be59a5221999c05ccf0fcafcb354f',
  'symfony/maker-bundle' => 'v1.33.0@f093d906c667cba7e3f74487d9e5e55aaf25a031',
  'symfony/phpunit-bridge' => 'v5.3.4@bc368b765a651424b19f5759953ce2873e7d448b',
  'symfony/web-profiler-bundle' => 'v5.3.5@95fb24b09551688a09cffac95a2ddbb907833f07',
  'symfony/polyfill-php72' => '*@8a722d0dcb21e72dab8388a3ed38f14e9c4b360f',
  'symfony/polyfill-php73' => '*@8a722d0dcb21e72dab8388a3ed38f14e9c4b360f',
  '__root__' => 'dev-master@8a722d0dcb21e72dab8388a3ed38f14e9c4b360f',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}