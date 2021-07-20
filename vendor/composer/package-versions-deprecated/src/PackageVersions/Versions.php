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
    const ROOT_PACKAGE_NAME = 'kunstmaan/cms-skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'box/spout' => 'v2.7.3@3681a3421a868ab9a65da156c554f756541f452b',
  'clue/stream-filter' => 'v1.5.0@aeb7d8ea49c7963d3b581378955dbf5bc49aa320',
  'composer/package-versions-deprecated' => '1.8.2@7a8001fe2c9befad9d001bf54ef0b4a17d950d0f',
  'defuse/php-encryption' => 'v2.3.1@77880488b9954b7884c25555c2a0ea9e7053f9d2',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '1.12.1@4cf401d14df219fa6f38b671f5493449151c9ad8',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.13.2@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '1.12.13@85460b85edd8f61a16ad311e7ffc5d255d3c937c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-migrations-bundle' => 'v1.3.2@49fa399181db4bf4f9f725126bd1cb65c4398dce',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => 'v1.8.1@215438c0eef3e5f9b7da7d09c6b90756071b43e6',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'elasticsearch/elasticsearch' => 'v7.13.1@45e17adacd3319958d6135e4ee3a21dbbe36a24b',
  'ezimuel/guzzlestreams' => '3.0.1@abe3791d231167f14eb80d413420d1eab91163a8',
  'ezimuel/ringphp' => '1.1.2@0b78f89d8e0bb9e380046c31adfa40347e9f663b',
  'friendsofsymfony/http-cache' => '2.10.1@cbc3f7d76b6cb25db7ef07cacb0a369a4a0116c1',
  'friendsofsymfony/http-cache-bundle' => '2.10.3@5d1f62825e995afdf86a720e47484ed2543283ac',
  'friendsofsymfony/user-bundle' => 'v2.1.2@1049935edd24ec305cc6cfde1875372fa9600446',
  'gedmo/doctrine-extensions' => 'v2.4.42@b6c4442b4f32ce05673fbdf1fa4a2d5e315cc0a4',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'http-interop/http-factory-guzzle' => '1.1.0@f69b581de4a224b534484c5b777a73cad3412074',
  'imagine/imagine' => '1.2.4@d2e18be6e930ca169e4f921ef73ebfc061bf55d8',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'jean85/pretty-package-versions' => '1.6.0@1e0104b46f045868f11942aea058cd7186d6c303',
  'knplabs/gaufrette' => 'v0.9.0@786247eba04d4693e88a80ca9fdabb634675dcac',
  'knplabs/knp-gaufrette-bundle' => 'v0.7.1@367c85c09da8633bcff0e65def700f271c0377f9',
  'knplabs/knp-menu' => 'v3.2.0@9e7f174862c9a91f1249d18b5c2fa039eef81b8f',
  'knplabs/knp-menu-bundle' => 'v3.1.0@2b4c3bcba1646aef17b5e368f3004b108330c59b',
  'kunstmaan/admin-bundle' => '5.8.0@51a0a11219eb4bf1f200dbd49fcee7486f503731',
  'kunstmaan/adminlist-bundle' => '5.8.0@cb6d2c8a63a7f0568589ca4caad635b33a8f9114',
  'kunstmaan/article-bundle' => '5.8.0@dfb915d0d0d417d7a0c434f0a92934b7ee19b747',
  'kunstmaan/config-bundle' => '5.8.0@e6afefc764df2612290f8980165ae10f4b1f7c0f',
  'kunstmaan/dashboard-bundle' => '5.8.0@77270ed37b0da87e4b476ca610923dcc08b7c735',
  'kunstmaan/form-bundle' => '5.8.0@3aadc18cf4ef9b98cba20e1f20ac26dac2172928',
  'kunstmaan/google-api-custom' => '1.0.2@fcb5e970cf50c75ce87e9fce4f0d5a6bbfd94864',
  'kunstmaan/media-bundle' => '5.8.0@d00284d7e261043f88711f1150d6c227469179ed',
  'kunstmaan/media-pagepart-bundle' => '5.8.0@79e9684db127a09a6b424f401d0523ca6acba69d',
  'kunstmaan/menu-bundle' => '5.8.0@dbd2a41a2b4f6325522f40c9f111ec461bb50d87',
  'kunstmaan/node-bundle' => '5.8.0@fc74c8c66e52e74a1b468276c791a6f872d8d3b7',
  'kunstmaan/node-search-bundle' => '5.8.0@b62cf45a3e11137e6ca3dc38dc3f59ac62925b62',
  'kunstmaan/pagepart-bundle' => '5.8.0@9ff0d337c8fa2969588c11b2662e3da4e521d739',
  'kunstmaan/redirect-bundle' => '5.8.0@cca46eb3b3eaa165dd272fb528f4d26fa4f8d7a7',
  'kunstmaan/search-bundle' => '5.8.0@e791b09ee884a65d510f06a0634092f3a2436aef',
  'kunstmaan/seo-bundle' => '5.8.0@055f6f0a36701112e6cf63ad72fe092d3d3f7486',
  'kunstmaan/sitemap-bundle' => '5.8.0@5a986b6fdb2909767e339efb4766cb77f217122d',
  'kunstmaan/translator-bundle' => '5.8.0@7db2d5cbe07cd64aa7060600ed21e15ee50aa42d',
  'kunstmaan/user-management-bundle' => '5.8.0@76b88aaa04bbeaa596a1b3cd0e6f31dd1f3c6c0e',
  'kunstmaan/utilities-bundle' => '5.8.0@a76ecc0ecce663ba90e8bf0ca08c7a31c818ecd1',
  'laminas/laminas-code' => '3.5.1@b549b70c0bb6e935d497f84f750c82653326ac77',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.3.0@13af2502d9bb6f7d33be2de4b51fb68c6cdb476e',
  'liip/imagine-bundle' => '2.6.1@00f3ccfccb33834b44f82c17cca80bfd83882bb3',
  'monolog/monolog' => '1.26.1@c6b00f05152ae2c9b04a448f99c7590beb6042f5',
  'nyholm/dsn' => '2.0.0@b3a54081dd6bc2e94ab1f6304f47d7b83250cb71',
  'ocramius/proxy-manager' => '2.8.1@371c8f2d9d1e888ce1f8f2137d9187252b07ee94',
  'pagerfanta/pagerfanta' => 'v2.7.1@630f38d57c86b67565b644db9d270ffb6d67123f',
  'php-http/client-common' => '1.11.0@11d34cad40647848aa98536494f9da63571af9da',
  'php-http/discovery' => '1.14.0@778f722e29250c1fac0bbdef2c122fa5d038c9eb',
  'php-http/guzzle6-adapter' => 'v1.1.1@a56941f9dc6110409cfcddc91546ee97039277ab',
  'php-http/httplug' => 'v1.1.0@1c6381726c18579c4ca2ef1ec1498fdae8bdf018',
  'php-http/message' => '1.11.1@887734d9c515ad9a564f6581a682fff87a6253cc',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'ruflin/elastica' => '7.1.1@8ecc5cdadd5bf0b69c1eb20e56246a940b43bdb7',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'sentry/sdk' => '2.2.0@089858b1b27d3705a5fd1c32d8d10beb55980190',
  'sentry/sentry' => '2.5.2@ce63f13e2cf9f72ec169413545a3f7312b2e45e3',
  'sentry/sentry-symfony' => '3.5.4@b3f9b7f0fff3725f0b7811aa4e070e4658b8722b',
  'stof/doctrine-extensions-bundle' => 'v1.6.0@ef469a9d3b8be23d4c746d558742cc1b3e2588cb',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony-cmf/routing' => '2.3.3@3c97e7b7709b313cecfb76d691ad4cc22acbf3f5',
  'symfony-cmf/routing-bundle' => '2.5.0@fb2284caa0bab2ffebe673e68e9c995da6ee4bdf',
  'symfony/acl-bundle' => 'v2.1.0@0aa31bd863fbed6a7714c475056d8da4367d3f57',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v4.4.25@a6b30fd4a9c992667b38d6f13efb20446761980a',
  'symfony/cache' => 'v4.4.26@fcdbaf8af546939eeed5e32399656da2ad371aaf',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v4.4.26@1cb26cdb8a9834d8494cadd284602fa0647b73e5',
  'symfony/console' => 'v4.4.26@9aa1eb46c1b12fada74dc0c529e93d1ccef22576',
  'symfony/css-selector' => 'v4.4.25@c1e29de6dc893b130b45d20d8051efbb040560a9',
  'symfony/debug' => 'v4.4.25@a8d2d5c94438548bff9f998ca874e202bb29d07f',
  'symfony/dependency-injection' => 'v4.4.26@a944d2f8e903dc99f5f1baf3eb74081352f0067f',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v4.4.25@6b88860981116fcddb2ff91043dfc8ad458e5e14',
  'symfony/dom-crawler' => 'v4.4.25@41d15bb6d6b95d2be763c514bb2494215d9c5eef',
  'symfony/dotenv' => 'v4.4.25@744c09920fbf1850860f399112e82ced4d19aed0',
  'symfony/error-handler' => 'v4.4.26@4001f01153d0eb5496fe11d8c76d1e56b47fdb88',
  'symfony/event-dispatcher' => 'v4.4.25@047773e7016e4fd45102cedf4bd2558ae0d0c32f',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.25@4515f7d3fa614a23c7acc1162d7ef069c165d7af',
  'symfony/filesystem' => 'v4.4.26@a501126eb6ec9288a3434af01b3d4499ec1268a0',
  'symfony/finder' => 'v4.4.25@ed33314396d968a8936c95f5bd1b88bd3b3e94a3',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => 'v4.4.26@c0b7a80561f45b2970f77c4a7958224189c126c0',
  'symfony/framework-bundle' => 'v4.4.26@fb29db31d6a1bb69271009c47ce19d59c6fef25a',
  'symfony/http-client' => 'v4.4.26@78bd3796452b2e47d585f807dbfca945cfe34a73',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v4.4.26@8759ed5c27c2a8a47cb60f367f4be6727f08d58b',
  'symfony/http-kernel' => 'v4.4.26@e08b2fb8a6eedd81c70522e514bad9b2c1fff881',
  'symfony/inflector' => 'v4.4.25@fc695ab721136b27aa84427a0fa80189761266ef',
  'symfony/intl' => 'v4.4.25@1a9d799a68e7f1caad20bfb0fae5b2d44871cf71',
  'symfony/mime' => 'v4.4.26@1a2bdd55e13e295f63a57a5838029bf41b1969bf',
  'symfony/monolog-bridge' => 'v4.4.26@f399c9d13a20ce3385e750fbe18e91b6ea8044d3',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/options-resolver' => 'v4.4.25@2e607d627c70aa56284a02d34fc60dfe3a9a352e',
  'symfony/orm-pack' => 'v2.1.0@357f6362067b1ebb94af321b79f8939fc9118751',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/polyfill-uuid' => 'v1.23.0@9165effa2eb8a31bb3fa608df9d529920d21ddd9',
  'symfony/process' => 'v4.4.26@7e812c84c3f2dba173d311de6e510edf701685a8',
  'symfony/property-access' => 'v4.4.25@3af7c21b4128eadbace0800b51054a81bff896c6',
  'symfony/property-info' => 'v4.4.25@18f7a0e58c9196c255ca8272f2c0de0b2bd563c6',
  'symfony/proxy-manager-bridge' => 'v4.4.18@373d72703ef24b6a22c8592f53c7f0e333d9f038',
  'symfony/routing' => 'v4.4.25@3a3c2f197ad0846ac6413225fc78868ba1c61434',
  'symfony/security-acl' => 'v3.1.2@3090d19879577c2993314c68a2cf6c5723744049',
  'symfony/security-bundle' => 'v4.4.26@48329a558dcfdc9ccb27dc08fc53ac72c4bdfd35',
  'symfony/security-core' => 'v4.4.26@3d17ab62cf4a227afea09bac7cf5d359658c1908',
  'symfony/security-csrf' => 'v4.4.25@644c7dbdf7cd6d410555532b6906d0195965ee2a',
  'symfony/security-guard' => 'v4.4.26@a517da0efcfde6f89bae6e8b7a3cb88f488485c5',
  'symfony/security-http' => 'v4.4.26@07adcd5550ea79ee0baca406040eac272ac8e3fd',
  'symfony/serializer' => 'v4.4.26@24f5f3024401c97b0c6f1874568369bdd1a378d9',
  'symfony/serializer-pack' => 'v1.0.4@61173947057d5e1bf1c79e2a6ab6a8430be0602e',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/swiftmailer-bundle' => 'v3.5.2@6b72355549f02823a2209180f9c035e46ca3f178',
  'symfony/templating' => 'v4.4.25@7b280e4252aeb029db4084b6a76531d8a8cd58f7',
  'symfony/translation' => 'v4.4.26@2f7fa60b8d10ca71c30dc46b0870143183a8f131',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v4.4.26@9d02487374439164ef508824977ecdd146b9509f',
  'symfony/twig-bundle' => 'v4.4.26@1aab630e70f0ab1b77529e7f061c9e5f1f11dca7',
  'symfony/validator' => 'v4.4.26@1f20bad74b6d62f1a5779eeed47e91f3fa476094',
  'symfony/var-dumper' => 'v4.4.26@a586efdf2aa832d05b9249e9115d24f6a2691160',
  'symfony/var-exporter' => 'v4.4.26@ac8cd05f3a70ee2805070ebdf7a0e0ddea574f91',
  'symfony/web-link' => 'v4.4.26@6381ec2bbe4aa9b3a19baca3aaaac9ddbcad4d6c',
  'symfony/yaml' => 'v4.4.26@e096ef4b4c4c9a2f72c2ac660f54352cd31c60f8',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v2.14.6@27e5cf2b05e3744accf39d4c68a3235d9966d260',
  'webimpress/safe-writer' => '2.2.0@9d37cc8bee20f7cb2f58f6e23e05097eab5072e6',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'white-october/pagerfanta-bundle' => 'v1.3.2@6df560869b5e09a3acf920890ab40598998b30ae',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'kunstmaan/fixtures-bundle' => '5.8.0@38aca890e68f6db72e8bb67fa5a3ae8382d8c625',
  'kunstmaan/generator-bundle' => '5.8.0@b56d757f220bf949c71046313fa03a237a249ada',
  'kunstmaan/sensio-generator-bundle' => 'v3.4.0@0b4ed93fb0081bcd41a03b2daa8c0eaa02c10dc6',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.11.0@fe14cf3672a149364fb66dfe11bf6549af899f94',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.7@d0dc8b6999c937616df4fb046792004b33fd31c5',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v4.4.25@729b1f0eca3ef18ea4e1a29b166145aff75d8fa1',
  'symfony/debug-bundle' => 'v4.4.20@1e136a4c6d8c2364b77e31c5bf124660cff6d084',
  'symfony/debug-pack' => 'v1.0.9@cfd5093378e9cafe500f05c777a22fe8a64a9342',
  'symfony/maker-bundle' => 'v1.33.0@f093d906c667cba7e3f74487d9e5e55aaf25a031',
  'symfony/phpunit-bridge' => 'v5.3.3@d7d3193df3b198f287777b61ef06cd59fdb0516d',
  'symfony/profiler-pack' => 'v1.0.5@29ec66471082b4eb068db11eb4f0a48c277653f7',
  'symfony/stopwatch' => 'v4.4.25@80d9ae0c8a02bd291abf372764c0fc68cbd06c42',
  'symfony/test-pack' => 'v1.0.8@d6da9926f785b0c4ebf3b0c6965398aac80e95ce',
  'symfony/web-profiler-bundle' => 'v4.4.26@686ce278ef5f37358e829bd6d9ab12a67352d363',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'paragonie/random_compat' => '2.*@592ad6a708cb3e5a6040b83c0c07b6d04d245bbc',
  'symfony/polyfill-ctype' => '*@592ad6a708cb3e5a6040b83c0c07b6d04d245bbc',
  'symfony/polyfill-iconv' => '*@592ad6a708cb3e5a6040b83c0c07b6d04d245bbc',
  'symfony/polyfill-php72' => '*@592ad6a708cb3e5a6040b83c0c07b6d04d245bbc',
  'symfony/polyfill-php71' => '*@592ad6a708cb3e5a6040b83c0c07b6d04d245bbc',
  'symfony/polyfill-php70' => '*@592ad6a708cb3e5a6040b83c0c07b6d04d245bbc',
  'symfony/polyfill-php56' => '*@592ad6a708cb3e5a6040b83c0c07b6d04d245bbc',
  'kunstmaan/cms-skeleton' => 'dev-dev@592ad6a708cb3e5a6040b83c0c07b6d04d245bbc',
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
