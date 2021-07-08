<?php

namespace ContainerXzOVlxQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelDevContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\DefaultController' => 'getDefaultControllerService',
            'Kunstmaan\\MediaBundle\\Helper\\Imagine\\ImagineController' => 'getImagineControllerService',
            'Kunstmaan\\NodeBundle\\Helper\\PageCloningHelper' => 'getPageCloningHelperService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\ApplyAclCommand' => 'getApplyAclCommandService',
            'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\CreateGroupCommand' => 'getCreateGroupCommandService',
            'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\CreateRoleCommand' => 'getCreateRoleCommandService',
            'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\CreateUserCommand' => 'getCreateUserCommandService',
            'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\ExceptionCommand' => 'getExceptionCommandService',
            'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\UpdateAclCommand' => 'getUpdateAclCommandService',
            'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\DashboardCommand' => 'getDashboardCommandService',
            'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsConfigFlushCommand' => 'getGoogleAnalyticsConfigFlushCommandService',
            'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsConfigsListCommand' => 'getGoogleAnalyticsConfigsListCommandService',
            'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataCollectCommand' => 'getGoogleAnalyticsDataCollectCommandService',
            'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataFlushCommand' => 'getGoogleAnalyticsDataFlushCommandService',
            'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsOverviewsGenerateCommand' => 'getGoogleAnalyticsOverviewsGenerateCommandService',
            'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsOverviewsListCommand' => 'getGoogleAnalyticsOverviewsListCommandService',
            'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsSegmentsListCommand' => 'getGoogleAnalyticsSegmentsListCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateAdminListCommand' => 'getGenerateAdminListCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateAdminTestsCommand' => 'getGenerateAdminTestsCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateArticleCommand' => 'getGenerateArticleCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateConfigCommand' => 'getGenerateConfigCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateDefaultPagePartsCommand' => 'getGenerateDefaultPagePartsCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateDefaultSiteCommand' => 'getGenerateDefaultSiteCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateEntityCommand' => 'getGenerateEntityCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateFormPageCommand' => 'getGenerateFormPageCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateFormPagePartsCommand' => 'getGenerateFormPagePartsCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateLayoutCommand' => 'getGenerateLayoutCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GeneratePageCommand' => 'getGeneratePageCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GeneratePagePartCommand' => 'getGeneratePagePartCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateSearchPageCommand' => 'getGenerateSearchPageCommandService',
            'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\InstallCommand' => 'getInstallCommandService',
            'console.command.public_alias.Kunstmaan\\NodeBundle\\Command\\CronUpdateNodeCommand' => 'getCronUpdateNodeCommandService',
            'console.command.public_alias.Kunstmaan\\NodeBundle\\Command\\InitAclCommand' => 'getInitAclCommandService',
            'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\ExportTranslationsCommand' => 'getExportTranslationsCommandService',
            'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\ImportTranslationsCommand' => 'getImportTranslationsCommandService',
            'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\ImportTranslationsFromFileCommand' => 'getImportTranslationsFromFileCommandService',
            'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\MigrationsDiffCommand' => 'getMigrationsDiffCommandService',
            'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\TranslationCacheCommand' => 'getTranslationCacheCommandService',
            'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\TranslationFlagCommand' => 'getTranslationFlagCommandService',
            'console.command.public_alias.Kunstmaan\\UtilitiesBundle\\Command\\CipherCommand' => 'getCipherCommandService',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService',
            'console.command.public_alias.doctrine_migrations.diff_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService',
            'console.command.public_alias.doctrine_migrations.execute_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService',
            'console.command.public_alias.doctrine_migrations.generate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService',
            'console.command.public_alias.doctrine_migrations.latest_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService',
            'console.command.public_alias.doctrine_migrations.migrate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService',
            'console.command.public_alias.doctrine_migrations.status_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService',
            'console.command.public_alias.doctrine_migrations.version_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService',
            'console.command.public_alias.kunstmaan_media.command.cleandeletedmedia' => 'getConsole_Command_PublicAlias_KunstmaanMedia_Command_CleandeletedmediaService',
            'console.command.public_alias.kunstmaan_media.command.rebuildfoldertree' => 'getConsole_Command_PublicAlias_KunstmaanMedia_Command_RebuildfoldertreeService',
            'console.command.public_alias.kunstmaan_media.command.renamesoftdeleted' => 'getConsole_Command_PublicAlias_KunstmaanMedia_Command_RenamesoftdeletedService',
            'console.command.public_alias.kunstmaan_search.command.delete' => 'getConsole_Command_PublicAlias_KunstmaanSearch_Command_DeleteService',
            'console.command.public_alias.kunstmaan_search.command.populate' => 'getConsole_Command_PublicAlias_KunstmaanSearch_Command_PopulateService',
            'console.command.public_alias.kunstmaan_search.command.setup' => 'getConsole_Command_PublicAlias_KunstmaanSearch_Command_SetupService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'data_collector.cache' => 'getDataCollector_CacheService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService',
            'fos_user.group.controller' => 'getFosUser_Group_ControllerService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'http_kernel' => 'getHttpKernelService',
            'knp_gaufrette.filesystem_map' => 'getKnpGaufrette_FilesystemMapService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'kunstmaan_admin.acl.helper' => 'getKunstmaanAdmin_Acl_HelperService',
            'kunstmaan_admin.acl.manager' => 'getKunstmaanAdmin_Acl_ManagerService',
            'kunstmaan_admin.adminroute.helper' => 'getKunstmaanAdmin_Adminroute_HelperService',
            'kunstmaan_admin.clone.helper' => 'getKunstmaanAdmin_Clone_HelperService',
            'kunstmaan_admin.domain_configuration' => 'getKunstmaanAdmin_DomainConfigurationService',
            'kunstmaan_admin.versionchecker' => 'getKunstmaanAdmin_VersioncheckerService',
            'kunstmaan_adminlist.factory' => 'getKunstmaanAdminlist_FactoryService',
            'kunstmaan_adminlist.service.export' => 'getKunstmaanAdminlist_Service_ExportService',
            'kunstmaan_config.controller.config' => 'getKunstmaanConfig_Controller_ConfigService',
            'kunstmaan_dashboard.helper.google.analytics.config' => 'getKunstmaanDashboard_Helper_Google_Analytics_ConfigService',
            'kunstmaan_dashboard.helper.google.analytics.query' => 'getKunstmaanDashboard_Helper_Google_Analytics_QueryService',
            'kunstmaan_dashboard.helper.google.analytics.service' => 'getKunstmaanDashboard_Helper_Google_Analytics_ServiceService',
            'kunstmaan_dashboard.helper.google.client' => 'getKunstmaanDashboard_Helper_Google_ClientService',
            'kunstmaan_dashboard.manager.widgets' => 'getKunstmaanDashboard_Manager_WidgetsService',
            'kunstmaan_fixtures.builder.builder' => 'getKunstmaanFixtures_Builder_BuilderService',
            'kunstmaan_fixtures.parser.parser' => 'getKunstmaanFixtures_Parser_ParserService',
            'kunstmaan_fixtures.populator.populator' => 'getKunstmaanFixtures_Populator_PopulatorService',
            'kunstmaan_form.form_handler' => 'getKunstmaanForm_FormHandlerService',
            'kunstmaan_form.form_mailer' => 'getKunstmaanForm_FormMailerService',
            'kunstmaan_media.folder_manager' => 'getKunstmaanMedia_FolderManagerService',
            'kunstmaan_media.media_creator_service' => 'getKunstmaanMedia_MediaCreatorServiceService',
            'kunstmaan_media.media_handlers.file' => 'getKunstmaanMedia_MediaHandlers_FileService',
            'kunstmaan_media.media_manager' => 'getKunstmaanMedia_MediaManagerService',
            'kunstmaan_menu.menu.service' => 'getKunstmaanMenu_Menu_ServiceService',
            'kunstmaan_node.acl_permission_creator_service' => 'getKunstmaanNode_AclPermissionCreatorServiceService',
            'kunstmaan_node.actions_menu_builder' => 'getKunstmaanNode_ActionsMenuBuilderService',
            'kunstmaan_node.admin_node.node_version_lock_helper' => 'getKunstmaanNode_AdminNode_NodeVersionLockHelperService',
            'kunstmaan_node.admin_node.publisher' => 'getKunstmaanNode_AdminNode_PublisherService',
            'kunstmaan_node.node_menu' => 'getKunstmaanNode_NodeMenuService',
            'kunstmaan_node.page_creator_service' => 'getKunstmaanNode_PageCreatorServiceService',
            'kunstmaan_node.pages_configuration' => 'getKunstmaanNode_PagesConfigurationService',
            'kunstmaan_node.url_replace.controller' => 'getKunstmaanNode_UrlReplace_ControllerService',
            'kunstmaan_node_search.search.service' => 'getKunstmaanNodeSearch_Search_ServiceService',
            'kunstmaan_node_search.service.search_view_renderer' => 'getKunstmaanNodeSearch_Service_SearchViewRendererService',
            'kunstmaan_page_part.page_part_configuration_reader' => 'getKunstmaanPagePart_PagePartConfigurationReaderService',
            'kunstmaan_pageparts.pagepart_creator_service' => 'getKunstmaanPageparts_PagepartCreatorServiceService',
            'kunstmaan_search.search.factory.analysis' => 'getKunstmaanSearch_Search_Factory_AnalysisService',
            'kunstmaan_translator.repository.translation' => 'getKunstmaanTranslator_Repository_TranslationService',
            'kunstmaan_translator.service.exporter.command_handler' => 'getKunstmaanTranslator_Service_Exporter_CommandHandlerService',
            'kunstmaan_translator.service.importer.command_handler' => 'getKunstmaanTranslator_Service_Importer_CommandHandlerService',
            'kunstmaan_translator.service.importer.importer' => 'getKunstmaanTranslator_Service_Importer_ImporterService',
            'kunstmaan_translator.service.migrations.migrations' => 'getKunstmaanTranslator_Service_Migrations_MigrationsService',
            'kunstmaan_translator.service.translator.cache_validator' => 'getKunstmaanTranslator_Service_Translator_CacheValidatorService',
            'kunstmaan_translator.service.translator.loader' => 'getKunstmaanTranslator_Service_Translator_LoaderService',
            'kunstmaan_translator.service.translator.resource_cacher' => 'getKunstmaanTranslator_Service_Translator_ResourceCacherService',
            'kunstmaan_utilities.slugifier' => 'getKunstmaanUtilities_SlugifierService',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.config.stack_collection' => 'getLiipImagine_Config_StackCollectionService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService',
            'liip_imagine.filter.loader.fixed' => 'getLiipImagine_Filter_Loader_FixedService',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService',
            'liip_imagine.filter.loader.resample' => 'getLiipImagine_Filter_Loader_ResampleService',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'mime_types' => 'getMimeTypesService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        ];
        $this->aliases = [
            'Liip\\ImagineBundle\\Controller\\ImagineController' => 'Kunstmaan\\MediaBundle\\Helper\\Imagine\\ImagineController',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'liip_imagine.controller' => 'Kunstmaan\\MediaBundle\\Helper\\Imagine\\ImagineController',
            'mailer' => 'swiftmailer.mailer.default',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || class_alias(__NAMESPACE__."\\$class", $class, false);

        return $factory();
    }

    /*
     * Gets the public 'App\Controller\DefaultController' shared autowired service.
     *
     * @return \App\Controller\DefaultController
     */
    protected function getDefaultControllerService()
    {
        $this->services['App\\Controller\\DefaultController'] = $instance = new \App\Controller\DefaultController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]))->withContext('App\\Controller\\DefaultController', $this));

        return $instance;
    }

    /*
     * Gets the public 'Kunstmaan\MediaBundle\Helper\Imagine\ImagineController' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\Imagine\ImagineController
     */
    protected function getImagineControllerService()
    {
        $a = ($this->services['liip_imagine.data.manager'] ?? $this->getLiipImagine_Data_ManagerService());

        return $this->services['Kunstmaan\\MediaBundle\\Helper\\Imagine\\ImagineController'] = new \Kunstmaan\MediaBundle\Helper\Imagine\ImagineController(new \Liip\ImagineBundle\Service\FilterService($a, ($this->services['liip_imagine.filter.manager'] ?? $this->getLiipImagine_Filter_ManagerService()), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), false, $this->parameters['liip_imagine.webp.options'], ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService())), $a, ($this->services['liip_imagine.cache.signer'] ?? ($this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET')))), new \Liip\ImagineBundle\Config\Controller\ControllerConfig(301));
    }

    /*
     * Gets the public 'Kunstmaan\NodeBundle\Helper\PageCloningHelper' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\PageCloningHelper
     */
    protected function getPageCloningHelperService()
    {
        return $this->services['Kunstmaan\\NodeBundle\\Helper\\PageCloningHelper'] = new \Kunstmaan\NodeBundle\Helper\PageCloningHelper(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['kunstmaan_admin.clone.helper'] ?? $this->getKunstmaanAdmin_Clone_HelperService()), ($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? ($this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), NULL);
    }

    /*
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('S7GgE8jdDs', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.kunstmaan_versioncheck' => ($this->privates['cache.kunstmaan_versioncheck'] ?? $this->getCache_KunstmaanVersioncheckService())]);
    }

    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'cache.kunstmaan_versioncheck' => ($this->privates['cache.kunstmaan_versioncheck'] ?? $this->getCache_KunstmaanVersioncheckService()), 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? ($this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? ($this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())), 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? ($this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))]);
    }

    /*
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('EnHRQyfFVS', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /*
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /*
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 1 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 2 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 3 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 4 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 5 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 6 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
        }, 7), false, ($this->targetDir.''.'/srcApp_KernelDevContainerDeprecations.log'));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\AdminBundle\Command\ApplyAclCommand' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Command\ApplyAclCommand
     */
    protected function getApplyAclCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\ApplyAclCommand'] = new \Kunstmaan\AdminBundle\Command\ApplyAclCommand(($this->services['kunstmaan_admin.acl.manager'] ?? $this->getKunstmaanAdmin_Acl_ManagerService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['kunstmaan_utilities.shell'] ?? ($this->privates['kunstmaan_utilities.shell'] = new \Kunstmaan\UtilitiesBundle\Helper\Shell\Shell())));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\AdminBundle\Command\CreateGroupCommand' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Command\CreateGroupCommand
     */
    protected function getCreateGroupCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\CreateGroupCommand'] = new \Kunstmaan\AdminBundle\Command\CreateGroupCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\AdminBundle\Command\CreateRoleCommand' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Command\CreateRoleCommand
     */
    protected function getCreateRoleCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\CreateRoleCommand'] = new \Kunstmaan\AdminBundle\Command\CreateRoleCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\AdminBundle\Command\CreateUserCommand' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Command\CreateUserCommand
     */
    protected function getCreateUserCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\CreateUserCommand'] = new \Kunstmaan\AdminBundle\Command\CreateUserCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['fos_user.group_manager'] ?? $this->getFosUser_GroupManagerService()), 'Kunstmaan\\AdminBundle\\Entity\\User', 'en');
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\AdminBundle\Command\ExceptionCommand' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Command\ExceptionCommand
     */
    protected function getExceptionCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\ExceptionCommand'] = new \Kunstmaan\AdminBundle\Command\ExceptionCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\AdminBundle\Command\UpdateAclCommand' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Command\UpdateAclCommand
     */
    protected function getUpdateAclCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\UpdateAclCommand'] = new \Kunstmaan\AdminBundle\Command\UpdateAclCommand(($this->services['kunstmaan_admin.acl.manager'] ?? $this->getKunstmaanAdmin_Acl_ManagerService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['kunstmaan_admin.security.acl.permission.map'] ?? ($this->privates['kunstmaan_admin.security.acl.permission.map'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionMap())), $this->parameters['security.role_hierarchy.roles']);
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\DashboardBundle\Command\DashboardCommand' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Command\DashboardCommand
     */
    protected function getDashboardCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\DashboardCommand'] = new \Kunstmaan\DashboardBundle\Command\DashboardCommand(($this->services['kunstmaan_dashboard.manager.widgets'] ?? $this->getKunstmaanDashboard_Manager_WidgetsService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\DashboardBundle\Command\GoogleAnalyticsConfigFlushCommand' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsConfigFlushCommand
     */
    protected function getGoogleAnalyticsConfigFlushCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsConfigFlushCommand'] = new \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsConfigFlushCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\DashboardBundle\Command\GoogleAnalyticsConfigsListCommand' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsConfigsListCommand
     */
    protected function getGoogleAnalyticsConfigsListCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsConfigsListCommand'] = new \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsConfigsListCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\DashboardBundle\Command\GoogleAnalyticsDataCollectCommand' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsDataCollectCommand
     */
    protected function getGoogleAnalyticsDataCollectCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataCollectCommand'] = new \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsDataCollectCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['kunstmaan_dashboard.helper.google.analytics.service'] ?? $this->getKunstmaanDashboard_Helper_Google_Analytics_ServiceService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\DashboardBundle\Command\GoogleAnalyticsDataFlushCommand' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsDataFlushCommand
     */
    protected function getGoogleAnalyticsDataFlushCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataFlushCommand'] = new \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsDataFlushCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\DashboardBundle\Command\GoogleAnalyticsOverviewsGenerateCommand' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsOverviewsGenerateCommand
     */
    protected function getGoogleAnalyticsOverviewsGenerateCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsOverviewsGenerateCommand'] = new \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsOverviewsGenerateCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\DashboardBundle\Command\GoogleAnalyticsOverviewsListCommand' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsOverviewsListCommand
     */
    protected function getGoogleAnalyticsOverviewsListCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsOverviewsListCommand'] = new \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsOverviewsListCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\DashboardBundle\Command\GoogleAnalyticsSegmentsListCommand' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsSegmentsListCommand
     */
    protected function getGoogleAnalyticsSegmentsListCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsSegmentsListCommand'] = new \Kunstmaan\DashboardBundle\Command\GoogleAnalyticsSegmentsListCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateAdminListCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateAdminListCommand
     */
    protected function getGenerateAdminListCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateAdminListCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateAdminListCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateAdminTestsCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateAdminTestsCommand
     */
    protected function getGenerateAdminTestsCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateAdminTestsCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateAdminTestsCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateArticleCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateArticleCommand
     */
    protected function getGenerateArticleCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateArticleCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateArticleCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateConfigCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateConfigCommand
     */
    protected function getGenerateConfigCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateConfigCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateConfigCommand(\dirname(__DIR__, 4));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateDefaultPagePartsCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateDefaultPagePartsCommand
     */
    protected function getGenerateDefaultPagePartsCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateDefaultPagePartsCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateDefaultPagePartsCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateDefaultSiteCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateDefaultSiteCommand
     */
    protected function getGenerateDefaultSiteCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateDefaultSiteCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateDefaultSiteCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateEntityCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateEntityCommand
     */
    protected function getGenerateEntityCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateEntityCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateEntityCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateFormPageCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateFormPageCommand
     */
    protected function getGenerateFormPageCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateFormPageCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateFormPageCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateFormPagePartsCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateFormPagePartsCommand
     */
    protected function getGenerateFormPagePartsCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateFormPagePartsCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateFormPagePartsCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateLayoutCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateLayoutCommand
     */
    protected function getGenerateLayoutCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateLayoutCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateLayoutCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GeneratePageCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GeneratePageCommand
     */
    protected function getGeneratePageCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GeneratePageCommand'] = new \Kunstmaan\GeneratorBundle\Command\GeneratePageCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GeneratePagePartCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GeneratePagePartCommand
     */
    protected function getGeneratePagePartCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GeneratePagePartCommand'] = new \Kunstmaan\GeneratorBundle\Command\GeneratePagePartCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\GenerateSearchPageCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\GenerateSearchPageCommand
     */
    protected function getGenerateSearchPageCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateSearchPageCommand'] = new \Kunstmaan\GeneratorBundle\Command\GenerateSearchPageCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\GeneratorBundle\Command\InstallCommand' shared service.
     *
     * @return \Kunstmaan\GeneratorBundle\Command\InstallCommand
     */
    protected function getInstallCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\InstallCommand'] = new \Kunstmaan\GeneratorBundle\Command\InstallCommand(\dirname(__DIR__, 4));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\NodeBundle\Command\CronUpdateNodeCommand' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Command\CronUpdateNodeCommand
     */
    protected function getCronUpdateNodeCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\NodeBundle\\Command\\CronUpdateNodeCommand'] = new \Kunstmaan\NodeBundle\Command\CronUpdateNodeCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['kunstmaan_node.admin_node.publisher'] ?? $this->getKunstmaanNode_AdminNode_PublisherService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\NodeBundle\Command\InitAclCommand' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Command\InitAclCommand
     */
    protected function getInitAclCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\NodeBundle\\Command\\InitAclCommand'] = new \Kunstmaan\NodeBundle\Command\InitAclCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? ($this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy())));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\TranslatorBundle\Command\ExportTranslationsCommand' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Command\ExportTranslationsCommand
     */
    protected function getExportTranslationsCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\ExportTranslationsCommand'] = new \Kunstmaan\TranslatorBundle\Command\ExportTranslationsCommand(($this->services['kunstmaan_translator.service.exporter.command_handler'] ?? $this->getKunstmaanTranslator_Service_Exporter_CommandHandlerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\TranslatorBundle\Command\ImportTranslationsCommand' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Command\ImportTranslationsCommand
     */
    protected function getImportTranslationsCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\ImportTranslationsCommand'] = new \Kunstmaan\TranslatorBundle\Command\ImportTranslationsCommand(($this->services['kunstmaan_translator.service.importer.command_handler'] ?? $this->getKunstmaanTranslator_Service_Importer_CommandHandlerService()), 'own', []);
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\TranslatorBundle\Command\ImportTranslationsFromFileCommand' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Command\ImportTranslationsFromFileCommand
     */
    protected function getImportTranslationsFromFileCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\ImportTranslationsFromFileCommand'] = new \Kunstmaan\TranslatorBundle\Command\ImportTranslationsFromFileCommand(($this->services['kunstmaan_translator.service.importer.importer'] ?? $this->getKunstmaanTranslator_Service_Importer_ImporterService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), $this->parameters['kuma_translator.managed_locales']);
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\TranslatorBundle\Command\MigrationsDiffCommand' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Command\MigrationsDiffCommand
     */
    protected function getMigrationsDiffCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\MigrationsDiffCommand'] = new \Kunstmaan\TranslatorBundle\Command\MigrationsDiffCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\TranslatorBundle\Command\TranslationCacheCommand' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Command\TranslationCacheCommand
     */
    protected function getTranslationCacheCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\TranslationCacheCommand'] = new \Kunstmaan\TranslatorBundle\Command\TranslationCacheCommand(($this->services['kunstmaan_translator.service.translator.resource_cacher'] ?? $this->getKunstmaanTranslator_Service_Translator_ResourceCacherService()), ($this->services['kunstmaan_translator.service.translator.cache_validator'] ?? $this->getKunstmaanTranslator_Service_Translator_CacheValidatorService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\TranslatorBundle\Command\TranslationFlagCommand' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Command\TranslationFlagCommand
     */
    protected function getTranslationFlagCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\TranslationFlagCommand'] = new \Kunstmaan\TranslatorBundle\Command\TranslationFlagCommand(($this->services['kunstmaan_translator.repository.translation'] ?? $this->getKunstmaanTranslator_Repository_TranslationService()));
    }

    /*
     * Gets the public 'console.command.public_alias.Kunstmaan\UtilitiesBundle\Command\CipherCommand' shared service.
     *
     * @return \Kunstmaan\UtilitiesBundle\Command\CipherCommand
     */
    protected function getCipherCommandService()
    {
        return $this->services['console.command.public_alias.Kunstmaan\\UtilitiesBundle\\Command\\CipherCommand'] = new \Kunstmaan\UtilitiesBundle\Command\CipherCommand(new \Kunstmaan\UtilitiesBundle\Helper\Cipher\UrlSafeCipher($this->getEnv('APP_SECRET')));
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_migrations.diff_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_migrations.execute_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_migrations.generate_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_migrations.latest_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_migrations.migrate_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_migrations.status_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_migrations.version_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.kunstmaan_media.command.cleandeletedmedia' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Command\CleanDeletedMediaCommand
     */
    protected function getConsole_Command_PublicAlias_KunstmaanMedia_Command_CleandeletedmediaService()
    {
        $this->services['console.command.public_alias.kunstmaan_media.command.cleandeletedmedia'] = $instance = new \Kunstmaan\MediaBundle\Command\CleanDeletedMediaCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['kunstmaan_media.media_manager'] ?? $this->getKunstmaanMedia_MediaManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'console.command.public_alias.kunstmaan_media.command.rebuildfoldertree' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Command\RebuildFolderTreeCommand
     */
    protected function getConsole_Command_PublicAlias_KunstmaanMedia_Command_RebuildfoldertreeService()
    {
        $this->services['console.command.public_alias.kunstmaan_media.command.rebuildfoldertree'] = $instance = new \Kunstmaan\MediaBundle\Command\RebuildFolderTreeCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'console.command.public_alias.kunstmaan_media.command.renamesoftdeleted' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Command\RenameSoftDeletedCommand
     */
    protected function getConsole_Command_PublicAlias_KunstmaanMedia_Command_RenamesoftdeletedService()
    {
        return $this->services['console.command.public_alias.kunstmaan_media.command.renamesoftdeleted'] = new \Kunstmaan\MediaBundle\Command\RenameSoftDeletedCommand(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['kunstmaan_media.media_manager'] ?? $this->getKunstmaanMedia_MediaManagerService()));
    }

    /*
     * Gets the public 'console.command.public_alias.kunstmaan_search.command.delete' shared service.
     *
     * @return \Kunstmaan\SearchBundle\Command\DeleteIndexCommand
     */
    protected function getConsole_Command_PublicAlias_KunstmaanSearch_Command_DeleteService()
    {
        $this->services['console.command.public_alias.kunstmaan_search.command.delete'] = $instance = new \Kunstmaan\SearchBundle\Command\DeleteIndexCommand(($this->privates['kunstmaan_search.search_configuration_chain'] ?? $this->getKunstmaanSearch_SearchConfigurationChainService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'console.command.public_alias.kunstmaan_search.command.populate' shared service.
     *
     * @return \Kunstmaan\SearchBundle\Command\PopulateIndexCommand
     */
    protected function getConsole_Command_PublicAlias_KunstmaanSearch_Command_PopulateService()
    {
        $this->services['console.command.public_alias.kunstmaan_search.command.populate'] = $instance = new \Kunstmaan\SearchBundle\Command\PopulateIndexCommand(($this->privates['kunstmaan_search.search_configuration_chain'] ?? $this->getKunstmaanSearch_SearchConfigurationChainService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'console.command.public_alias.kunstmaan_search.command.setup' shared service.
     *
     * @return \Kunstmaan\SearchBundle\Command\SetupIndexCommand
     */
    protected function getConsole_Command_PublicAlias_KunstmaanSearch_Command_SetupService()
    {
        $this->services['console.command.public_alias.kunstmaan_search.command.setup'] = $instance = new \Kunstmaan\SearchBundle\Command\SetupIndexCommand(($this->privates['kunstmaan_search.search_configuration_chain'] ?? $this->getKunstmaanSearch_SearchConfigurationChainService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Sentry\\SentryBundle\\Command\\SentryTestCommand' => ['privates', 'Sentry\\SentryBundle\\Command\\SentryTestCommand', 'getSentryTestCommandService', false],
            'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand' => ['privates', 'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand', 'getInitAclCommand2Service', false],
            'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand' => ['privates', 'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand', 'getSetAclCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.fixtures_load_command' => ['privates', 'doctrine.fixtures_load_command', 'getDoctrine_FixturesLoadCommandService', false],
            'doctrine.generate_entities_command' => ['privates', 'doctrine.generate_entities_command', 'getDoctrine_GenerateEntitiesCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'fos_user.command.activate_user' => ['privates', 'fos_user.command.activate_user', 'getFosUser_Command_ActivateUserService', false],
            'fos_user.command.change_password' => ['privates', 'fos_user.command.change_password', 'getFosUser_Command_ChangePasswordService', false],
            'fos_user.command.create_user' => ['privates', 'fos_user.command.create_user', 'getFosUser_Command_CreateUserService', false],
            'fos_user.command.deactivate_user' => ['privates', 'fos_user.command.deactivate_user', 'getFosUser_Command_DeactivateUserService', false],
            'fos_user.command.demote_user' => ['privates', 'fos_user.command.demote_user', 'getFosUser_Command_DemoteUserService', false],
            'fos_user.command.promote_user' => ['privates', 'fos_user.command.promote_user', 'getFosUser_Command_PromoteUserService', false],
            'knp_gaufrette.command.filesystem_keys' => ['privates', 'knp_gaufrette.command.filesystem_keys', 'getKnpGaufrette_Command_FilesystemKeysService', false],
            'liip_imagine.command.cache_remove' => ['privates', 'liip_imagine.command.cache_remove', 'getLiipImagine_Command_CacheRemoveService', false],
            'liip_imagine.command.cache_resolve' => ['privates', 'liip_imagine.command.cache_resolve', 'getLiipImagine_Command_CacheResolveService', false],
            'maker.auto_command.make_auth' => ['privates', 'maker.auto_command.make_auth', 'getMaker_AutoCommand_MakeAuthService', false],
            'maker.auto_command.make_command' => ['privates', 'maker.auto_command.make_command', 'getMaker_AutoCommand_MakeCommandService', false],
            'maker.auto_command.make_controller' => ['privates', 'maker.auto_command.make_controller', 'getMaker_AutoCommand_MakeControllerService', false],
            'maker.auto_command.make_crud' => ['privates', 'maker.auto_command.make_crud', 'getMaker_AutoCommand_MakeCrudService', false],
            'maker.auto_command.make_docker_database' => ['privates', 'maker.auto_command.make_docker_database', 'getMaker_AutoCommand_MakeDockerDatabaseService', false],
            'maker.auto_command.make_entity' => ['privates', 'maker.auto_command.make_entity', 'getMaker_AutoCommand_MakeEntityService', false],
            'maker.auto_command.make_fixtures' => ['privates', 'maker.auto_command.make_fixtures', 'getMaker_AutoCommand_MakeFixturesService', false],
            'maker.auto_command.make_form' => ['privates', 'maker.auto_command.make_form', 'getMaker_AutoCommand_MakeFormService', false],
            'maker.auto_command.make_message' => ['privates', 'maker.auto_command.make_message', 'getMaker_AutoCommand_MakeMessageService', false],
            'maker.auto_command.make_messenger_middleware' => ['privates', 'maker.auto_command.make_messenger_middleware', 'getMaker_AutoCommand_MakeMessengerMiddlewareService', false],
            'maker.auto_command.make_migration' => ['privates', 'maker.auto_command.make_migration', 'getMaker_AutoCommand_MakeMigrationService', false],
            'maker.auto_command.make_registration_form' => ['privates', 'maker.auto_command.make_registration_form', 'getMaker_AutoCommand_MakeRegistrationFormService', false],
            'maker.auto_command.make_reset_password' => ['privates', 'maker.auto_command.make_reset_password', 'getMaker_AutoCommand_MakeResetPasswordService', false],
            'maker.auto_command.make_serializer_encoder' => ['privates', 'maker.auto_command.make_serializer_encoder', 'getMaker_AutoCommand_MakeSerializerEncoderService', false],
            'maker.auto_command.make_serializer_normalizer' => ['privates', 'maker.auto_command.make_serializer_normalizer', 'getMaker_AutoCommand_MakeSerializerNormalizerService', false],
            'maker.auto_command.make_subscriber' => ['privates', 'maker.auto_command.make_subscriber', 'getMaker_AutoCommand_MakeSubscriberService', false],
            'maker.auto_command.make_test' => ['privates', 'maker.auto_command.make_test', 'getMaker_AutoCommand_MakeTestService', false],
            'maker.auto_command.make_twig_extension' => ['privates', 'maker.auto_command.make_twig_extension', 'getMaker_AutoCommand_MakeTwigExtensionService', false],
            'maker.auto_command.make_user' => ['privates', 'maker.auto_command.make_user', 'getMaker_AutoCommand_MakeUserService', false],
            'maker.auto_command.make_validator' => ['privates', 'maker.auto_command.make_validator', 'getMaker_AutoCommand_MakeValidatorService', false],
            'maker.auto_command.make_voter' => ['privates', 'maker.auto_command.make_voter', 'getMaker_AutoCommand_MakeVoterService', false],
            'monolog.command.server_log' => ['privates', 'monolog.command.server_log', 'getMonolog_Command_ServerLogService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService', false],
            'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService', false],
            'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'var_dumper.command.server_dump' => ['privates', 'var_dumper.command.server_dump', 'getVarDumper_Command_ServerDumpService', false],
        ], [
            'Sentry\\SentryBundle\\Command\\SentryTestCommand' => 'Sentry\\SentryBundle\\Command\\SentryTestCommand',
            'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand' => 'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand',
            'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand' => 'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.fixtures_load_command' => 'Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand',
            'doctrine.generate_entities_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'fos_user.command.activate_user' => 'FOS\\UserBundle\\Command\\ActivateUserCommand',
            'fos_user.command.change_password' => 'FOS\\UserBundle\\Command\\ChangePasswordCommand',
            'fos_user.command.create_user' => 'FOS\\UserBundle\\Command\\CreateUserCommand',
            'fos_user.command.deactivate_user' => 'FOS\\UserBundle\\Command\\DeactivateUserCommand',
            'fos_user.command.demote_user' => 'FOS\\UserBundle\\Command\\DemoteUserCommand',
            'fos_user.command.promote_user' => 'FOS\\UserBundle\\Command\\PromoteUserCommand',
            'knp_gaufrette.command.filesystem_keys' => 'Knp\\Bundle\\GaufretteBundle\\Command\\FilesystemKeysCommand',
            'liip_imagine.command.cache_remove' => 'Liip\\ImagineBundle\\Command\\RemoveCacheCommand',
            'liip_imagine.command.cache_resolve' => 'Liip\\ImagineBundle\\Command\\ResolveCacheCommand',
            'maker.auto_command.make_auth' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_command' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_controller' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_crud' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_docker_database' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_entity' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_fixtures' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_message' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_messenger_middleware' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_migration' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_registration_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_reset_password' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_encoder' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_normalizer' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_subscriber' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_twig_extension' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_user' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_validator' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_voter' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'monolog.command.server_log' => 'Symfony\\Bridge\\Monolog\\Command\\ServerLogCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'swiftmailer.command.debug' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand',
            'swiftmailer.command.new_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand',
            'swiftmailer.command.send_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
            'var_dumper.command.server_dump' => 'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'security:encode-password' => 'security.command.user_password_encoder', 'acl:init' => 'Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand', 'acl:set' => 'Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand', 'fos:user:activate' => 'fos_user.command.activate_user', 'fos:user:change-password' => 'fos_user.command.change_password', 'fos:user:create' => 'fos_user.command.create_user', 'fos:user:deactivate' => 'fos_user.command.deactivate_user', 'fos:user:demote' => 'fos_user.command.demote_user', 'fos:user:promote' => 'fos_user.command.promote_user', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:generate:entities' => 'doctrine.generate_entities_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'gaufrette:filesystem:keys' => 'knp_gaufrette.command.filesystem_keys', 'liip:imagine:cache:remove' => 'liip_imagine.command.cache_remove', 'liip:imagine:cache:resolve' => 'liip_imagine.command.cache_resolve', 'doctrine:fixtures:load' => 'doctrine.fixtures_load_command', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email', 'server:dump' => 'var_dumper.command.server_dump', 'server:log' => 'monolog.command.server_log', 'sentry:test' => 'Sentry\\SentryBundle\\Command\\SentryTestCommand', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:docker:database' => 'maker.auto_command.make_docker_database', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:message' => 'maker.auto_command.make_message', 'make:messenger-middleware' => 'maker.auto_command.make_messenger_middleware', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:reset-password' => 'maker.auto_command.make_reset_password', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:test' => 'maker.auto_command.make_test', 'make:unit-test' => 'maker.auto_command.make_test', 'make:functional-test' => 'maker.auto_command.make_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration']);
    }

    /*
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /*
     * Gets the public 'data_collector.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DataCollector\CacheDataCollector
     */
    protected function getDataCollector_CacheService()
    {
        return $this->services['data_collector.cache'] = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
    }

    /*
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Gedmo\\Tree\\TreeListener' => ['privates', 'Gedmo\\Tree\\TreeListener', 'getTreeListenerService', false],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
            'fos_user.user_listener' => ['privates', 'fos_user.user_listener', 'getFosUser_UserListenerService', false],
            'kunstmaan_admin.doctrine_mapping.listener' => ['privates', 'kunstmaan_admin.doctrine_mapping.listener', 'getKunstmaanAdmin_DoctrineMapping_ListenerService', false],
            'kunstmaan_media.listener.doctrine' => ['privates', 'kunstmaan_media.listener.doctrine', 'getKunstmaanMedia_Listener_DoctrineService', false],
            'kunstmaan_node.doctrine_mapping.listener' => ['privates', 'kunstmaan_node.doctrine_mapping.listener', 'getKunstmaanNode_DoctrineMapping_ListenerService', false],
            'kunstmaan_node.nodetranslation.listener' => ['privates', 'kunstmaan_node.nodetranslation.listener', 'getKunstmaanNode_Nodetranslation_ListenerService', false],
            'kunstmaan_node_search.node_index_update.listener' => ['privates', 'kunstmaan_node_search.node_index_update.listener', 'getKunstmaanNodeSearch_NodeIndexUpdate_ListenerService', false],
            'security.acl.dbal.schema_listener' => ['privates', 'security.acl.dbal.schema_listener', 'getSecurity_Acl_Dbal_SchemaListenerService', false],
            'stof_doctrine_extensions.listener.translatable' => ['privates', 'stof_doctrine_extensions.listener.translatable', 'getStofDoctrineExtensions_Listener_TranslatableService', false],
        ], [
            'Gedmo\\Tree\\TreeListener' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'fos_user.user_listener' => '?',
            'kunstmaan_admin.doctrine_mapping.listener' => '?',
            'kunstmaan_media.listener.doctrine' => '?',
            'kunstmaan_node.doctrine_mapping.listener' => '?',
            'kunstmaan_node.nodetranslation.listener' => '?',
            'kunstmaan_node_search.node_index_update.listener' => '?',
            'security.acl.dbal.schema_listener' => '?',
            'stof_doctrine_extensions.listener.translatable' => '?',
        ]), [0 => 'fos_user.user_listener', 1 => 'Gedmo\\Tree\\TreeListener', 2 => 'stof_doctrine_extensions.listener.translatable']);
        $a->addEventListener([0 => 'postGenerateSchema'], 'security.acl.dbal.schema_listener');
        $a->addEventListener([0 => 'loadClassMetadata'], 'kunstmaan_admin.doctrine_mapping.listener');
        $a->addEventListener([0 => 'onFlush'], 'kunstmaan_node.nodetranslation.listener');
        $a->addEventListener([0 => 'prePersist'], 'kunstmaan_node.nodetranslation.listener');
        $a->addEventListener([0 => 'preUpdate'], 'kunstmaan_node.nodetranslation.listener');
        $a->addEventListener([0 => 'loadClassMetadata'], 'kunstmaan_node.doctrine_mapping.listener');
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');
        $a->addEventListener([0 => 'preUpdate'], 'kunstmaan_node_search.node_index_update.listener');
        $a->addEventListener([0 => 'prePersist'], 'kunstmaan_media.listener.doctrine');
        $a->addEventListener([0 => 'preUpdate'], 'kunstmaan_media.listener.doctrine');
        $a->addEventListener([0 => 'postPersist'], 'kunstmaan_media.listener.doctrine');
        $a->addEventListener([0 => 'postUpdate'], 'kunstmaan_media.listener.doctrine');
        $a->addEventListener([0 => 'preRemove'], 'kunstmaan_media.listener.doctrine');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'charset' => 'utf8mb4', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driver' => 'pdo_mysql', 'driverOptions' => [], 'defaultTableOptions' => ['collate' => 'utf8mb4_unicode_ci']], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $c = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translatable/Entity'), 1 => (\dirname(__DIR__, 4).'/src/Entity'), 2 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Entity'), 3 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Entity'), 4 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Entity'), 5 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/config-bundle/Entity'), 6 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Entity'), 7 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Entity'), 8 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Entity'), 9 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Entity'), 10 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Entity'), 11 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Entity'), 12 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/sitemap-bundle/Entity'), 13 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Entity'), 14 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Entity'), 15 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Entity'), 16 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Entity'), 17 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Entity')]);

        $b->addDriver($c, 'Gedmo\\Translatable\\Entity');
        $b->addDriver($c, 'App\\Entity');
        $b->addDriver($c, 'Kunstmaan\\AdminBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\AdminListBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\NodeBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\ConfigBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\DashboardBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\PagePartBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\NodeSearchBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\RedirectBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\MediaBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\SeoBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\SitemapBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\TranslatorBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\MenuBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\MediaPagePartBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\FormBundle\\Entity');
        $b->addDriver($c, 'Kunstmaan\\ArticleBundle\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'], '.orm.xml')), 'FOS\\UserBundle\\Model');

        $a->setEntityNamespaces(['GedmoTranslatable' => 'Gedmo\\Translatable\\Entity', 'App' => 'App\\Entity', 'KunstmaanAdminBundle' => 'Kunstmaan\\AdminBundle\\Entity', 'KunstmaanAdminListBundle' => 'Kunstmaan\\AdminListBundle\\Entity', 'KunstmaanNodeBundle' => 'Kunstmaan\\NodeBundle\\Entity', 'KunstmaanConfigBundle' => 'Kunstmaan\\ConfigBundle\\Entity', 'KunstmaanDashboardBundle' => 'Kunstmaan\\DashboardBundle\\Entity', 'KunstmaanPagePartBundle' => 'Kunstmaan\\PagePartBundle\\Entity', 'KunstmaanNodeSearchBundle' => 'Kunstmaan\\NodeSearchBundle\\Entity', 'KunstmaanRedirectBundle' => 'Kunstmaan\\RedirectBundle\\Entity', 'KunstmaanMediaBundle' => 'Kunstmaan\\MediaBundle\\Entity', 'KunstmaanSeoBundle' => 'Kunstmaan\\SeoBundle\\Entity', 'KunstmaanSitemapBundle' => 'Kunstmaan\\SitemapBundle\\Entity', 'KunstmaanTranslatorBundle' => 'Kunstmaan\\TranslatorBundle\\Entity', 'KunstmaanMenuBundle' => 'Kunstmaan\\MenuBundle\\Entity', 'KunstmaanMediaPagePartBundle' => 'Kunstmaan\\MediaPagePartBundle\\Entity', 'KunstmaanFormBundle' => 'Kunstmaan\\FormBundle\\Entity', 'KunstmaanArticleBundle' => 'Kunstmaan\\ArticleBundle\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.metadata'] ?? ($this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.query'] ?? ($this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.result'] ?? ($this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()))));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])))));

        $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, false)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false)));
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['kunstmaan_admin.login.listener'] ?? $this->getKunstmaanAdmin_Login_ListenerService());
        }, 1 => 'onSecurityInteractivelogin'], 0);
        $instance->addListener('kunstmaan_admin.onDeepCloneAndSave', [0 => function () {
            return ($this->privates['kunstmaan_admin.clone.listener'] ?? ($this->privates['kunstmaan_admin.clone.listener'] = new \Kunstmaan\AdminBundle\EventListener\CloneListener()));
        }, 1 => 'onDeepCloneAndSave'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['kunstmaan_admin.session_security'] ?? $this->getKunstmaanAdmin_SessionSecurityService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['kunstmaan_admin.session_security'] ?? $this->getKunstmaanAdmin_SessionSecurityService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ($this->privates['kunstmaan_admin.password_resetting.listener'] ?? $this->getKunstmaanAdmin_PasswordResetting_ListenerService());
        }, 1 => 'onPasswordResettingSuccess'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['kunstmaan_admin.password_check.listener'] ?? $this->getKunstmaanAdmin_PasswordCheck_ListenerService());
        }, 1 => 'onKernelRequest'], 1);
        $instance->addListener('console.exception', [0 => function () {
            return ($this->privates['kunstmaan_admin.consolelogger.listener'] ?? $this->getKunstmaanAdmin_Consolelogger_ListenerService());
        }, 1 => 'onConsoleException'], 0);
        $instance->addListener('kunstmaan_node.adaptForm', [0 => function () {
            return ($this->privates['kunstmaan_node.node_tabs.listener'] ?? ($this->privates['kunstmaan_node.node_tabs.listener'] = new \Kunstmaan\NodeBundle\EventListener\NodeTabListener()));
        }, 1 => 'adaptForm'], 0);
        $instance->addListener('kunstmaan_admin.adaptSimpleForm', [0 => function () {
            return ($this->privates['kunstmaan_node.entity_tabs.listener'] ?? $this->getKunstmaanNode_EntityTabs_ListenerService());
        }, 1 => 'adaptForm'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['kunstmaan_node.fix_date.listener'] ?? ($this->privates['kunstmaan_node.fix_date.listener'] = new \Kunstmaan\NodeBundle\EventListener\FixDateListener()));
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kunstmaan_node.adaptForm', [0 => function () {
            return ($this->privates['kunstmaan_node.edit_node.listener'] ?? $this->getKunstmaanNode_EditNode_ListenerService());
        }, 1 => 'adaptForm'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['kunstmaan_node.slug.listener'] ?? $this->getKunstmaanNode_Slug_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kunstmaan_node.slug.security', [0 => function () {
            return ($this->privates['kunstmaan_node.slug.security.listener'] ?? $this->getKunstmaanNode_Slug_Security_ListenerService());
        }, 1 => 'onSlugSecurityEvent'], 0);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['kunstmaan_node.render.context.listener'] ?? $this->getKunstmaanNode_Render_Context_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kunstmaan_node.adaptForm', [0 => function () {
            return ($this->privates['kunstmaan_pageparts.edit_node.listener'] ?? $this->getKunstmaanPageparts_EditNode_ListenerService());
        }, 1 => 'adaptForm'], 0);
        $instance->addListener('kunstmaan_admin.postDeepCloneAndSave', [0 => function () {
            return ($this->privates['kunstmaan_pageparts.clone.listener'] ?? $this->getKunstmaanPageparts_Clone_ListenerService());
        }, 1 => 'postDeepCloneAndSave'], 0);
        $instance->addListener('kunstmaan_node.postPublish', [0 => function () {
            return ($this->privates['kunstmaan_node_search.node_index_update.listener'] ?? $this->getKunstmaanNodeSearch_NodeIndexUpdate_ListenerService());
        }, 1 => 'onPostPublish'], 0);
        $instance->addListener('kunstmaan_node.postPersist', [0 => function () {
            return ($this->privates['kunstmaan_node_search.node_index_update.listener'] ?? $this->getKunstmaanNodeSearch_NodeIndexUpdate_ListenerService());
        }, 1 => 'onPostPersist'], 0);
        $instance->addListener('kunstmaan_node.postDelete', [0 => function () {
            return ($this->privates['kunstmaan_node_search.node_index_update.listener'] ?? $this->getKunstmaanNodeSearch_NodeIndexUpdate_ListenerService());
        }, 1 => 'onPostDelete'], 0);
        $instance->addListener('kunstmaan_node.postUnPublish', [0 => function () {
            return ($this->privates['kunstmaan_node_search.node_index_update.listener'] ?? $this->getKunstmaanNodeSearch_NodeIndexUpdate_ListenerService());
        }, 1 => 'onPostUnPublish'], 0);
        $instance->addListener('kunstmaan_node.adaptForm', [0 => function () {
            return ($this->privates['kunstmaan_seo.node.listener'] ?? $this->getKunstmaanSeo_Node_ListenerService());
        }, 1 => 'adaptForm'], 0);
        $instance->addListener('kunstmaan_admin.postDeepCloneAndSave', [0 => function () {
            return ($this->privates['kunstmaan_seo.clone.listener'] ?? $this->getKunstmaanSeo_Clone_ListenerService());
        }, 1 => 'postDeepCloneAndSave'], 0);
        $instance->addListener('kunstmaan_node.configureSubActionMenu', [0 => function () {
            return ($this->privates['kunstmaan_form.configure_sub_actions_menu_listener'] ?? $this->getKunstmaanForm_ConfigureSubActionsMenuListenerService());
        }, 1 => 'onSubActionMenuConfigure'], 0);
        $instance->addListener('kunstmaan_form.add_submission', [0 => function () {
            return ($this->privates['kunstmaan_form.send_email_listener'] ?? $this->getKunstmaanForm_SendEmailListenerService());
        }, 1 => 'onSubmission'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['Sentry\\SentryBundle\\EventListener\\ConsoleListener'] ?? $this->getConsoleListenerService());
        }, 1 => 'onConsoleCommand'], 1);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['Sentry\\SentryBundle\\EventListener\\ErrorListener'] ?? $this->getErrorListenerService());
        }, 1 => 'onConsoleError'], 128);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['Sentry\\SentryBundle\\EventListener\\ErrorListener'] ?? $this->getErrorListenerService());
        }, 1 => 'onException'], 128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['Sentry\\SentryBundle\\EventListener\\RequestListener'] ?? $this->getRequestListenerService());
        }, 1 => 'onKernelRequest'], 1);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['Sentry\\SentryBundle\\EventListener\\RequestListener'] ?? $this->getRequestListenerService());
        }, 1 => 'onKernelController'], 1);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['Sentry\\SentryBundle\\EventListener\\SubRequestListener'] ?? ($this->privates['Sentry\\SentryBundle\\EventListener\\SubRequestListener'] = new \Sentry\SentryBundle\EventListener\SubRequestListener()));
        }, 1 => 'onKernelRequest'], 1);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['Sentry\\SentryBundle\\EventListener\\SubRequestListener'] ?? ($this->privates['Sentry\\SentryBundle\\EventListener\\SubRequestListener'] = new \Sentry\SentryBundle\EventListener\SubRequestListener()));
        }, 1 => 'onKernelFinishRequest'], 1);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['esi_listener'] ?? $this->getEsiListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] ?? ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener()));
        }, 1 => 'onException'], 512);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] ?? ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener()));
        }, 1 => 'onException'], 512);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['stof_doctrine_extensions.event_listener.locale'] ?? $this->getStofDoctrineExtensions_EventListener_LocaleService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['kunstmaan_admin.admin_locale.listener'] ?? $this->getKunstmaanAdmin_AdminLocale_ListenerService());
        }, 1 => 'onKernelRequest'], 5);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['kunstmaan_admin.exception.listener'] ?? $this->getKunstmaanAdmin_Exception_ListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['kunstmaan_admin.toolbar.listener'] ?? $this->getKunstmaanAdmin_Toolbar_ListenerService());
        }, 1 => 'onKernelResponse'], -125);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['kunstmaan_admin.consolelogger.subscriber'] ?? $this->getKunstmaanAdmin_Consolelogger_SubscriberService());
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kunstmaan_node.postDelete', [0 => function () {
            return ($this->privates['kunstmaan_adminlist.subscriber.adminlist'] ?? $this->getKunstmaanAdminlist_Subscriber_AdminlistService());
        }, 1 => 'postDelete'], 0);
        $instance->addListener('kunstmaan_node.copyPageTranslation', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'onCopyPageTranslation'], 0);
        $instance->addListener('kunstmaan_node.recopyPageTranslation', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'onRecopyPageTranslation'], 0);
        $instance->addListener('kunstmaan_node.emptyPageTranslation', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'onAddEmptyPageTranslation'], 0);
        $instance->addListener('kunstmaan_node.postPublish', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'postPublish'], 0);
        $instance->addListener('kunstmaan_node.postUnPublish', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'postUnPublish'], 0);
        $instance->addListener('kunstmaan_node.postDelete', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'postDelete'], 0);
        $instance->addListener('kunstmaan_node.addNode', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'onAddNode'], 0);
        $instance->addListener('kunstmaan_node.postPersist', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'postPersist'], 0);
        $instance->addListener('kunstmaan_node.createPublicVersion', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'onCreatePublicVersion'], 0);
        $instance->addListener('kunstmaan_node.createDraftVersion', [0 => function () {
            return ($this->privates['kunstmaan_node.log_page_events.subscriber'] ?? $this->getKunstmaanNode_LogPageEvents_SubscriberService());
        }, 1 => 'onCreateDraftVersion'], 0);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->getFosUser_Security_InteractiveLoginListenerService());
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->getFosUser_Security_InteractiveLoginListenerService());
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetRequest'], 0);
        $instance->addListener('kunstmaan_usermanagement.delete.after', [0 => function () {
            return ($this->privates['Kunstmaan\\UserManagementBundle\\EventSubscriber\\UserDeleteEventSubscriber'] ?? $this->getUserDeleteEventSubscriberService());
        }, 1 => 'auditLogUserDelete'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->getDebug_DumpListenerService());
        }, 1 => 'configure'], 1024);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);

        return $instance;
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /*
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the public 'fos_user.change_password.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ChangePasswordController
     */
    protected function getFosUser_ChangePassword_ControllerService()
    {
        $this->services['fos_user.change_password.controller'] = $instance = new \FOS\UserBundle\Controller\ChangePasswordController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', $this->parameters['fos_user.change_password.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.group.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\GroupController
     */
    protected function getFosUser_Group_ControllerService()
    {
        $this->services['fos_user.group.controller'] = $instance = new \FOS\UserBundle\Controller\GroupController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_group_form', 'FOS\\UserBundle\\Form\\Type\\GroupFormType', $this->parameters['fos_user.group.form.validation_groups']), ($this->services['fos_user.group_manager'] ?? $this->getFosUser_GroupManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.group_manager' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\GroupManager
     */
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager(($this->privates['fos_user.object_manager'] ?? $this->getFosUser_ObjectManagerService()), 'Kunstmaan\\AdminBundle\\Entity\\Group');
    }

    /*
     * Gets the public 'fos_user.profile.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ProfileController
     */
    protected function getFosUser_Profile_ControllerService()
    {
        $this->services['fos_user.profile.controller'] = $instance = new \FOS\UserBundle\Controller\ProfileController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', $this->parameters['fos_user.profile.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.registration.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\RegistrationController
     */
    protected function getFosUser_Registration_ControllerService()
    {
        $this->services['fos_user.registration.controller'] = $instance = new \FOS\UserBundle\Controller\RegistrationController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', $this->parameters['fos_user.registration.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.resetting.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ResettingController
     */
    protected function getFosUser_Resetting_ControllerService()
    {
        $this->services['fos_user.resetting.controller'] = $instance = new \FOS\UserBundle\Controller\ResettingController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', $this->parameters['fos_user.resetting.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), new \FOS\UserBundle\Util\TokenGenerator(), new \FOS\UserBundle\Mailer\TwigSwiftMailer(($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['twig'] ?? $this->getTwigService()), ['template' => ['confirmation' => '@FOSUser/Registration/email.txt.twig', 'resetting' => '@FOSUser/Resetting/email.txt.twig'], 'from_email' => ['confirmation' => $this->parameters['fos_user.registration.confirmation.from_email'], 'resetting' => $this->parameters['fos_user.resetting.email.from_email']]]), 7200);

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.security.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\SecurityController
     */
    protected function getFosUser_Security_ControllerService()
    {
        $this->services['fos_user.security.controller'] = $instance = new \FOS\UserBundle\Controller\SecurityController(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.user_manager' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager
     */
    protected function getFosUser_UserManagerService()
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()), ($this->privates['fos_user.object_manager'] ?? $this->getFosUser_ObjectManagerService()), 'Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->getSecurity_UserValueResolverService());
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /*
     * Gets the public 'knp_gaufrette.filesystem_map' shared service.
     *
     * @return \Knp\Bundle\GaufretteBundle\FilesystemMap
     */
    protected function getKnpGaufrette_FilesystemMapService()
    {
        return $this->services['knp_gaufrette.filesystem_map'] = new \Knp\Bundle\GaufretteBundle\FilesystemMap([]);
    }

    /*
     * Gets the public 'knp_menu.factory' shared service.
     *
     * @return \Knp\Menu\MenuFactory
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(($this->services['router'] ?? $this->getRouterService())), 0);

        return $instance;
    }

    /*
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.voter.router'] ?? $this->getKnpMenu_Voter_RouterService());
        }, 1));
    }

    /*
     * Gets the public 'kunstmaan_admin.acl.helper' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Security\Acl\AclHelper
     */
    protected function getKunstmaanAdmin_Acl_HelperService()
    {
        return $this->services['kunstmaan_admin.acl.helper'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\AclHelper(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), false);
    }

    /*
     * Gets the public 'kunstmaan_admin.acl.manager' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Service\AclManager
     */
    protected function getKunstmaanAdmin_Acl_ManagerService()
    {
        return $this->services['kunstmaan_admin.acl.manager'] = new \Kunstmaan\AdminBundle\Service\AclManager(($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? ($this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy())), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['kunstmaan_admin.permissionadmin'] ?? $this->getKunstmaanAdmin_PermissionadminService()));
    }

    /*
     * Gets the public 'kunstmaan_admin.adminroute.helper' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\AdminRouteHelper
     */
    protected function getKunstmaanAdmin_Adminroute_HelperService()
    {
        return $this->services['kunstmaan_admin.adminroute.helper'] = new \Kunstmaan\AdminBundle\Helper\AdminRouteHelper('admin', ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'kunstmaan_admin.clone.helper' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\CloneHelper
     */
    protected function getKunstmaanAdmin_Clone_HelperService()
    {
        return $this->services['kunstmaan_admin.clone.helper'] = new \Kunstmaan\AdminBundle\Helper\CloneHelper(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the public 'kunstmaan_admin.domain_configuration' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\DomainConfiguration
     */
    protected function getKunstmaanAdmin_DomainConfigurationService()
    {
        return $this->services['kunstmaan_admin.domain_configuration'] = new \Kunstmaan\AdminBundle\Helper\DomainConfiguration(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true, 'en', 'nl|fr|en');
    }

    /*
     * Gets the public 'kunstmaan_admin.versionchecker' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\VersionCheck\VersionChecker
     */
    protected function getKunstmaanAdmin_VersioncheckerService()
    {
        return $this->services['kunstmaan_admin.versionchecker'] = new \Kunstmaan\AdminBundle\Helper\VersionCheck\VersionChecker($this, ($this->privates['cache.kunstmaan_versioncheck'] ?? $this->getCache_KunstmaanVersioncheckService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the public 'kunstmaan_adminlist.factory' shared service.
     *
     * @return \Kunstmaan\AdminListBundle\AdminList\AdminListFactory
     */
    protected function getKunstmaanAdminlist_FactoryService()
    {
        return $this->services['kunstmaan_adminlist.factory'] = new \Kunstmaan\AdminListBundle\AdminList\AdminListFactory();
    }

    /*
     * Gets the public 'kunstmaan_adminlist.service.export' shared service.
     *
     * @return \Kunstmaan\AdminListBundle\Service\ExportService
     */
    protected function getKunstmaanAdminlist_Service_ExportService()
    {
        return $this->services['kunstmaan_adminlist.service.export'] = new \Kunstmaan\AdminListBundle\Service\ExportService(($this->services['twig'] ?? $this->getTwigService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the public 'kunstmaan_config.controller.config' shared service.
     *
     * @return \Kunstmaan\ConfigBundle\Controller\ConfigController
     */
    protected function getKunstmaanConfig_Controller_ConfigService()
    {
        return $this->services['kunstmaan_config.controller.config'] = new \Kunstmaan\ConfigBundle\Controller\ConfigController(($this->services['router'] ?? $this->getRouterService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), $this->parameters['kunstmaan_config'], ($this->services['form.factory'] ?? $this->getForm_FactoryService()));
    }

    /*
     * Gets the public 'kunstmaan_dashboard.helper.google.analytics.config' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Helper\Google\Analytics\ConfigHelper
     */
    protected function getKunstmaanDashboard_Helper_Google_Analytics_ConfigService()
    {
        return $this->services['kunstmaan_dashboard.helper.google.analytics.config'] = new \Kunstmaan\DashboardBundle\Helper\Google\Analytics\ConfigHelper(($this->services['kunstmaan_dashboard.helper.google.analytics.service'] ?? $this->getKunstmaanDashboard_Helper_Google_Analytics_ServiceService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'kunstmaan_dashboard.helper.google.analytics.query' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Helper\Google\Analytics\QueryHelper
     */
    protected function getKunstmaanDashboard_Helper_Google_Analytics_QueryService()
    {
        return $this->services['kunstmaan_dashboard.helper.google.analytics.query'] = new \Kunstmaan\DashboardBundle\Helper\Google\Analytics\QueryHelper(($this->services['kunstmaan_dashboard.helper.google.analytics.service'] ?? $this->getKunstmaanDashboard_Helper_Google_Analytics_ServiceService()), ($this->services['kunstmaan_dashboard.helper.google.analytics.config'] ?? $this->getKunstmaanDashboard_Helper_Google_Analytics_ConfigService()));
    }

    /*
     * Gets the public 'kunstmaan_dashboard.helper.google.analytics.service' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Helper\Google\Analytics\ServiceHelper
     */
    protected function getKunstmaanDashboard_Helper_Google_Analytics_ServiceService()
    {
        return $this->services['kunstmaan_dashboard.helper.google.analytics.service'] = new \Kunstmaan\DashboardBundle\Helper\Google\Analytics\ServiceHelper(($this->services['kunstmaan_dashboard.helper.google.client'] ?? $this->getKunstmaanDashboard_Helper_Google_ClientService()));
    }

    /*
     * Gets the public 'kunstmaan_dashboard.helper.google.client' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Helper\Google\ClientHelper
     */
    protected function getKunstmaanDashboard_Helper_Google_ClientService()
    {
        $a = new \Google_Client();
        $a->setApplicationName($this->getEnv('GOOGLE_API_APP_NAME'));
        $a->setClientId($this->getEnv('GOOGLE_API_CLIENT_ID'));
        $a->setClientSecret($this->getEnv('GOOGLE_API_CLIENT_SECRET'));
        $a->setDeveloperKey($this->getEnv('GOOGLE_API_DEV_KEY'));
        $a->setScopes('https://www.googleapis.com/auth/analytics.readonly');
        $a->setUseObjects(true);

        return $this->services['kunstmaan_dashboard.helper.google.client'] = new \Kunstmaan\DashboardBundle\Helper\Google\ClientHelper($a, ($this->services['router'] ?? $this->getRouterService()), 'KunstmaanDashboardBundle_setToken');
    }

    /*
     * Gets the public 'kunstmaan_dashboard.manager.widgets' shared service.
     *
     * @return \Kunstmaan\DashboardBundle\Manager\WidgetManager
     */
    protected function getKunstmaanDashboard_Manager_WidgetsService()
    {
        $this->services['kunstmaan_dashboard.manager.widgets'] = $instance = new \Kunstmaan\DashboardBundle\Manager\WidgetManager();

        $instance->addWidget(new \Kunstmaan\DashboardBundle\Widget\DashboardWidget('Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataCollectCommand', 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsController', $this));

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_fixtures.builder.builder' shared service.
     *
     * @return \Kunstmaan\FixturesBundle\Builder\BuildingSupervisor
     */
    protected function getKunstmaanFixtures_Builder_BuilderService()
    {
        $a = ($this->services['kunstmaan_fixtures.populator.populator'] ?? $this->getKunstmaanFixtures_Populator_PopulatorService());

        $this->services['kunstmaan_fixtures.builder.builder'] = $instance = new \Kunstmaan\FixturesBundle\Builder\BuildingSupervisor(($this->services['kunstmaan_fixtures.parser.parser'] ?? $this->getKunstmaanFixtures_Parser_ParserService()), $a);

        $b = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

        $instance->addBuilder(new \Kunstmaan\FixturesBundle\Builder\PageBuilder($b, ($this->services['kunstmaan_node.acl_permission_creator_service'] ?? $this->getKunstmaanNode_AclPermissionCreatorServiceService()), $a, ($this->services['kunstmaan_utilities.slugifier'] ?? ($this->services['kunstmaan_utilities.slugifier'] = new \Kunstmaan\UtilitiesBundle\Helper\Slugifier())), ($this->services['kunstmaan_node.pages_configuration'] ?? ($this->services['kunstmaan_node.pages_configuration'] = new \Kunstmaan\NodeBundle\Helper\PagesConfiguration([]))), 'Kunstmaan\\AdminBundle\\Entity\\User'), 'PageBuilder');
        $instance->addBuilder(new \Kunstmaan\FixturesBundle\Builder\PagePartBuilder($b, $a), 'PagePartBuilder');
        $instance->addBuilder(new \Kunstmaan\FixturesBundle\Builder\MediaBuilder($b, ($this->services['kunstmaan_media.media_handlers.file'] ?? $this->getKunstmaanMedia_MediaHandlers_FileService()), new \Kunstmaan\MediaBundle\Helper\MimeTypeGuesserFactory()), 'MediaBuilder');
        $instance->addBuilder(new \Kunstmaan\FixturesBundle\Builder\MenuItemBuilder(), 'MenuItemBuilder');
        $instance->addProvider(new \Kunstmaan\FixturesBundle\Provider\Spec(), 'Spec');
        $instance->addProvider(new \Kunstmaan\FixturesBundle\Provider\NodeTranslation($b), 'NodeTranslation');
        $instance->addProvider(new \Kunstmaan\FixturesBundle\Provider\Node(), 'Node');

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_fixtures.parser.parser' shared service.
     *
     * @return \Kunstmaan\FixturesBundle\Parser\Parser
     */
    protected function getKunstmaanFixtures_Parser_ParserService()
    {
        $this->services['kunstmaan_fixtures.parser.parser'] = $instance = new \Kunstmaan\FixturesBundle\Parser\Parser();

        $instance->addParser(new \Kunstmaan\FixturesBundle\Parser\Property\Method(), 'PropertyMethod');
        $instance->addParser(new \Kunstmaan\FixturesBundle\Parser\Property\Reference(), 'PropertyReference');
        $instance->addSpecParser(new \Kunstmaan\FixturesBundle\Parser\Spec\Range(), 'SpecRange');
        $instance->addSpecParser(new \Kunstmaan\FixturesBundle\Parser\Spec\Listed(), 'SpecListed');

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_fixtures.populator.populator' shared service.
     *
     * @return \Kunstmaan\FixturesBundle\Populator\Populator
     */
    protected function getKunstmaanFixtures_Populator_PopulatorService()
    {
        $this->services['kunstmaan_fixtures.populator.populator'] = $instance = new \Kunstmaan\FixturesBundle\Populator\Populator();

        $instance->addPopulator(new \Kunstmaan\FixturesBundle\Populator\Methods\Property(), 'Property');
        $instance->addPopulator(new \Kunstmaan\FixturesBundle\Populator\Methods\Setter(), 'Setter');
        $instance->addPopulator(new \Kunstmaan\FixturesBundle\Populator\Methods\ArrayAdd(), 'Array');

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_form.form_handler' shared service.
     *
     * @return \Kunstmaan\FormBundle\Helper\FormHandler
     */
    protected function getKunstmaanForm_FormHandlerService()
    {
        return $this->services['kunstmaan_form.form_handler'] = new \Kunstmaan\FormBundle\Helper\FormHandler($this);
    }

    /*
     * Gets the public 'kunstmaan_form.form_mailer' shared service.
     *
     * @return \Kunstmaan\FormBundle\Helper\FormMailer
     */
    protected function getKunstmaanForm_FormMailerService()
    {
        return $this->services['kunstmaan_form.form_mailer'] = new \Kunstmaan\FormBundle\Helper\FormMailer(($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'kunstmaan_media.folder_manager' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\FolderManager
     */
    protected function getKunstmaanMedia_FolderManagerService()
    {
        return $this->services['kunstmaan_media.folder_manager'] = new \Kunstmaan\MediaBundle\Helper\FolderManager(($this->privates['kunstmaan_media.repository.folder'] ?? $this->getKunstmaanMedia_Repository_FolderService()));
    }

    /*
     * Gets the public 'kunstmaan_media.media_creator_service' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\Services\MediaCreatorService
     */
    protected function getKunstmaanMedia_MediaCreatorServiceService()
    {
        return $this->services['kunstmaan_media.media_creator_service'] = new \Kunstmaan\MediaBundle\Helper\Services\MediaCreatorService($this);
    }

    /*
     * Gets the public 'kunstmaan_media.media_handlers.file' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\File\FileHandler
     */
    protected function getKunstmaanMedia_MediaHandlers_FileService()
    {
        $this->services['kunstmaan_media.media_handlers.file'] = $instance = new \Kunstmaan\MediaBundle\Helper\File\FileHandler(0, ($this->services['mime_types'] ?? ($this->services['mime_types'] = new \Symfony\Component\Mime\MimeTypes())));

        $instance->setFileSystem(($this->privates['kunstmaan_media.filesystem'] ?? $this->getKunstmaanMedia_FilesystemService()));
        $instance->setMediaPath('/uploads/media/');
        $instance->setBlacklistedExtensions($this->parameters['kunstmaan_media.blacklisted_extensions']);
        $instance->setSlugifier(($this->services['kunstmaan_utilities.slugifier'] ?? ($this->services['kunstmaan_utilities.slugifier'] = new \Kunstmaan\UtilitiesBundle\Helper\Slugifier())));

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_media.media_manager' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\MediaManager
     */
    protected function getKunstmaanMedia_MediaManagerService()
    {
        $this->services['kunstmaan_media.media_manager'] = $instance = new \Kunstmaan\MediaBundle\Helper\MediaManager();

        $a = ($this->services['kunstmaan_media.media_handlers.file'] ?? $this->getKunstmaanMedia_MediaHandlers_FileService());
        $b = new \Kunstmaan\MediaBundle\Helper\Image\ImageHandler(1, ($this->services['mime_types'] ?? ($this->services['mime_types'] = new \Symfony\Component\Mime\MimeTypes())), NULL, NULL);
        $b->setFileSystem(($this->privates['kunstmaan_media.filesystem'] ?? $this->getKunstmaanMedia_FilesystemService()));
        $b->setMediaPath('/uploads/media/');
        $b->setBlacklistedExtensions($this->parameters['kunstmaan_media.blacklisted_extensions']);
        $b->setSlugifier(($this->services['kunstmaan_utilities.slugifier'] ?? ($this->services['kunstmaan_utilities.slugifier'] = new \Kunstmaan\UtilitiesBundle\Helper\Slugifier())));

        $instance->setDefaultHandler($a);
        $instance->addHandler(new \Kunstmaan\MediaBundle\Helper\RemoteSlide\RemoteSlideHandler(1));
        $instance->addHandler(new \Kunstmaan\MediaBundle\Helper\RemoteVideo\RemoteVideoHandler(1, $this->parameters['kunstmaan_media.remote_video']));
        $instance->addHandler(new \Kunstmaan\MediaBundle\Helper\RemoteAudio\RemoteAudioHandler(1, 'YOUR_CLIENT_ID'));
        $instance->addHandler($b);
        $instance->addHandler($a);

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_menu.menu.service' shared service.
     *
     * @return \Kunstmaan\MenuBundle\Service\MenuService
     */
    protected function getKunstmaanMenu_Menu_ServiceService()
    {
        return $this->services['kunstmaan_menu.menu.service'] = new \Kunstmaan\MenuBundle\Service\MenuService([], ($this->services['kunstmaan_admin.domain_configuration'] ?? $this->getKunstmaanAdmin_DomainConfigurationService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), 'Kunstmaan\\MenuBundle\\Entity\\Menu');
    }

    /*
     * Gets the public 'kunstmaan_node.acl_permission_creator_service' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\Services\ACLPermissionCreatorService
     */
    protected function getKunstmaanNode_AclPermissionCreatorServiceService()
    {
        return $this->services['kunstmaan_node.acl_permission_creator_service'] = new \Kunstmaan\NodeBundle\Helper\Services\ACLPermissionCreatorService(($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? ($this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy())));
    }

    /*
     * Gets the public 'kunstmaan_node.actions_menu_builder' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\Menu\ActionsMenuBuilder
     */
    protected function getKunstmaanNode_ActionsMenuBuilderService()
    {
        return $this->services['kunstmaan_node.actions_menu_builder'] = new \Kunstmaan\NodeBundle\Helper\Menu\ActionsMenuBuilder(($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['kunstmaan_node.pages_configuration'] ?? ($this->services['kunstmaan_node.pages_configuration'] = new \Kunstmaan\NodeBundle\Helper\PagesConfiguration([]))), false, false);
    }

    /*
     * Gets the public 'kunstmaan_node.admin_node.node_version_lock_helper' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\NodeAdmin\NodeVersionLockHelper
     */
    protected function getKunstmaanNode_AdminNode_NodeVersionLockHelperService()
    {
        return $this->services['kunstmaan_node.admin_node.node_version_lock_helper'] = new \Kunstmaan\NodeBundle\Helper\NodeAdmin\NodeVersionLockHelper($this, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the public 'kunstmaan_node.admin_node.publisher' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\NodeAdmin\NodeAdminPublisher
     */
    protected function getKunstmaanNode_AdminNode_PublisherService()
    {
        return $this->services['kunstmaan_node.admin_node.publisher'] = new \Kunstmaan\NodeBundle\Helper\NodeAdmin\NodeAdminPublisher(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['kunstmaan_admin.clone.helper'] ?? $this->getKunstmaanAdmin_Clone_HelperService()));
    }

    /*
     * Gets the public 'kunstmaan_node.node_menu' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\NodeMenu
     */
    protected function getKunstmaanNode_NodeMenuService()
    {
        return $this->services['kunstmaan_node.node_menu'] = new \Kunstmaan\NodeBundle\Helper\NodeMenu(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['kunstmaan_admin.acl.helper'] ?? $this->getKunstmaanAdmin_Acl_HelperService()), ($this->services['kunstmaan_admin.domain_configuration'] ?? $this->getKunstmaanAdmin_DomainConfigurationService()));
    }

    /*
     * Gets the public 'kunstmaan_node.page_creator_service' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\Services\PageCreatorService
     */
    protected function getKunstmaanNode_PageCreatorServiceService()
    {
        return $this->services['kunstmaan_node.page_creator_service'] = new \Kunstmaan\NodeBundle\Helper\Services\PageCreatorService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['kunstmaan_node.acl_permission_creator_service'] ?? $this->getKunstmaanNode_AclPermissionCreatorServiceService()), 'Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /*
     * Gets the public 'kunstmaan_node.pages_configuration' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\PagesConfiguration
     */
    protected function getKunstmaanNode_PagesConfigurationService()
    {
        return $this->services['kunstmaan_node.pages_configuration'] = new \Kunstmaan\NodeBundle\Helper\PagesConfiguration([]);
    }

    /*
     * Gets the public 'kunstmaan_node.url_replace.controller' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Controller\UrlReplaceController
     */
    protected function getKunstmaanNode_UrlReplace_ControllerService()
    {
        return $this->services['kunstmaan_node.url_replace.controller'] = new \Kunstmaan\NodeBundle\Controller\UrlReplaceController(($this->privates['kunstmaan_node.helper.url'] ?? $this->getKunstmaanNode_Helper_UrlService()));
    }

    /*
     * Gets the public 'kunstmaan_node_search.search.service' shared service.
     *
     * @return \Kunstmaan\NodeSearchBundle\Services\SearchService
     */
    protected function getKunstmaanNodeSearch_Search_ServiceService()
    {
        $a = new \Kunstmaan\NodeSearchBundle\Search\NodeSearcher();
        $a->setSearch(($this->privates['kunstmaan_search.search'] ?? $this->getKunstmaanSearch_SearchService()));
        $a->setIndexName('nodeindex');
        $a->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        $a->setDomainConfiguration(($this->services['kunstmaan_admin.domain_configuration'] ?? $this->getKunstmaanAdmin_DomainConfigurationService()));
        $a->setEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
        $a->setUseMatchQueryForTitle(false);

        return $this->services['kunstmaan_node_search.search.service'] = new \Kunstmaan\NodeSearchBundle\Services\SearchService($this, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 10, ['kunstmaan_node_search.search.node' => $a]);
    }

    /*
     * Gets the public 'kunstmaan_node_search.service.search_view_renderer' shared service.
     *
     * @return \Kunstmaan\NodeSearchBundle\Services\SearchViewRenderer
     */
    protected function getKunstmaanNodeSearch_Service_SearchViewRendererService()
    {
        return $this->services['kunstmaan_node_search.service.search_view_renderer'] = new \Kunstmaan\NodeSearchBundle\Services\SearchViewRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['kunstmaan_node_search.service.indexable_pageparts'] ?? $this->getKunstmaanNodeSearch_Service_IndexablePagepartsService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'kunstmaan_page_part.page_part_configuration_reader' shared service.
     *
     * @return \Kunstmaan\PagePartBundle\PagePartConfigurationReader\PagePartConfigurationReader
     */
    protected function getKunstmaanPagePart_PagePartConfigurationReaderService()
    {
        return $this->services['kunstmaan_page_part.page_part_configuration_reader'] = new \Kunstmaan\PagePartBundle\PagePartConfigurationReader\PagePartConfigurationReader(new \Kunstmaan\PagePartBundle\PagePartConfigurationReader\PagePartConfigurationParser(($this->services['kernel'] ?? $this->get('kernel', 1)), $this->parameters['kunstmaan_page_part.page_parts_presets']));
    }

    /*
     * Gets the public 'kunstmaan_pageparts.pagepart_creator_service' shared service.
     *
     * @return \Kunstmaan\PagePartBundle\Helper\Services\PagePartCreatorService
     */
    protected function getKunstmaanPageparts_PagepartCreatorServiceService()
    {
        $this->services['kunstmaan_pageparts.pagepart_creator_service'] = $instance = new \Kunstmaan\PagePartBundle\Helper\Services\PagePartCreatorService();

        $instance->setEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_search.search.factory.analysis' shared service.
     *
     * @return \Kunstmaan\SearchBundle\Search\LanguageAnalysisFactory
     */
    protected function getKunstmaanSearch_Search_Factory_AnalysisService()
    {
        return $this->services['kunstmaan_search.search.factory.analysis'] = new \Kunstmaan\SearchBundle\Search\LanguageAnalysisFactory();
    }

    /*
     * Gets the public 'kunstmaan_translator.repository.translation' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Repository\TranslationRepository
     */
    protected function getKunstmaanTranslator_Repository_TranslationService()
    {
        return $this->services['kunstmaan_translator.repository.translation'] = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('Kunstmaan\\TranslatorBundle\\Entity\\Translation');
    }

    /*
     * Gets the public 'kunstmaan_translator.service.exporter.command_handler' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Command\Exporter\ExportCommandHandler
     */
    protected function getKunstmaanTranslator_Service_Exporter_CommandHandlerService()
    {
        $this->services['kunstmaan_translator.service.exporter.command_handler'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Command\Exporter\ExportCommandHandler();

        $a = new \Kunstmaan\TranslatorBundle\Service\Command\Exporter\Exporter();
        $a->setExporters(['yml' => new \Kunstmaan\TranslatorBundle\Service\Command\Exporter\YamlFileExporter(), 'csv' => new \Kunstmaan\TranslatorBundle\Service\Command\Exporter\CSVFileExporter()]);

        $instance->setManagedLocales($this->parameters['kuma_translator.managed_locales']);
        $instance->setKernel(($this->services['kernel'] ?? $this->get('kernel', 1)));
        $instance->setTranslationRepository(($this->services['kunstmaan_translator.repository.translation'] ?? $this->getKunstmaanTranslator_Repository_TranslationService()));
        $instance->setExporter($a);

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_translator.service.importer.command_handler' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Command\Importer\ImportCommandHandler
     */
    protected function getKunstmaanTranslator_Service_Importer_CommandHandlerService()
    {
        $this->services['kunstmaan_translator.service.importer.command_handler'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Command\Importer\ImportCommandHandler();

        $a = new \Kunstmaan\TranslatorBundle\Service\TranslationFileExplorer();
        $a->setFileFormats($this->parameters['kuma_translator.file_formats']);

        $instance->setManagedLocales($this->parameters['kuma_translator.managed_locales']);
        $instance->setKernel(($this->services['kernel'] ?? $this->get('kernel', 1)));
        $instance->setTranslationFileExplorer($a);
        $instance->setImporter(($this->services['kunstmaan_translator.service.importer.importer'] ?? $this->getKunstmaanTranslator_Service_Importer_ImporterService()));

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_translator.service.importer.importer' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Command\Importer\Importer
     */
    protected function getKunstmaanTranslator_Service_Importer_ImporterService()
    {
        $this->services['kunstmaan_translator.service.importer.importer'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Command\Importer\Importer(new \Kunstmaan\TranslatorBundle\Service\TranslationGroupManager(($this->services['kunstmaan_translator.repository.translation'] ?? $this->getKunstmaanTranslator_Repository_TranslationService())));

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));
        $instance->addLoader('database', ($this->services['kunstmaan_translator.service.translator.loader'] ?? $this->getKunstmaanTranslator_Service_Translator_LoaderService()));

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_translator.service.migrations.migrations' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Migrations\MigrationsService
     */
    protected function getKunstmaanTranslator_Service_Migrations_MigrationsService()
    {
        $this->services['kunstmaan_translator.service.migrations.migrations'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Migrations\MigrationsService();

        $instance->setTranslationRepository(($this->services['kunstmaan_translator.repository.translation'] ?? $this->getKunstmaanTranslator_Repository_TranslationService()));
        $instance->setEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_translator.service.translator.cache_validator' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Translator\CacheValidator
     */
    protected function getKunstmaanTranslator_Service_Translator_CacheValidatorService()
    {
        $this->services['kunstmaan_translator.service.translator.cache_validator'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Translator\CacheValidator();

        $instance->setCacheDir(($this->targetDir.''.'/translations'));
        $instance->setTranslationRepository(($this->services['kunstmaan_translator.repository.translation'] ?? $this->getKunstmaanTranslator_Repository_TranslationService()));

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_translator.service.translator.loader' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Translator\Loader
     */
    protected function getKunstmaanTranslator_Service_Translator_LoaderService()
    {
        $this->services['kunstmaan_translator.service.translator.loader'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Translator\Loader();

        $instance->setTranslationRepository(($this->services['kunstmaan_translator.repository.translation'] ?? $this->getKunstmaanTranslator_Repository_TranslationService()));

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_translator.service.translator.resource_cacher' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Translator\ResourceCacher
     */
    protected function getKunstmaanTranslator_Service_Translator_ResourceCacherService()
    {
        $this->services['kunstmaan_translator.service.translator.resource_cacher'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Translator\ResourceCacher();

        $instance->setDebug(false);
        $instance->setCacheDir(($this->targetDir.''.'/translations'));
        $instance->setLogger(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

        return $instance;
    }

    /*
     * Gets the public 'kunstmaan_utilities.slugifier' shared service.
     *
     * @return \Kunstmaan\UtilitiesBundle\Helper\Slugifier
     */
    protected function getKunstmaanUtilities_SlugifierService()
    {
        return $this->services['kunstmaan_utilities.slugifier'] = new \Kunstmaan\UtilitiesBundle\Helper\Slugifier();
    }

    /*
     * Gets the public 'liip_imagine.binary.loader.default' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader
     */
    protected function getLiipImagine_Binary_Loader_DefaultService()
    {
        $a = \Symfony\Component\Mime\MimeTypes::getDefault();

        return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($a, $a, new \Liip\ImagineBundle\Binary\Locator\FileSystemLocator([0 => (\dirname(__DIR__, 4).'/public')], false));
    }

    /*
     * Gets the public 'liip_imagine.cache.manager' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\Imagine\CacheManager
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Kunstmaan\MediaBundle\Helper\Imagine\CacheManager(($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['liip_imagine.cache.signer'] ?? ($this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET')))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'default');

        $instance->addResolver('default', ($this->services['liip_imagine.cache.resolver.default'] ?? $this->getLiipImagine_Cache_Resolver_DefaultService()));
        $instance->addResolver('no_cache', ($this->services['liip_imagine.cache.resolver.no_cache_web_path'] ?? $this->getLiipImagine_Cache_Resolver_NoCacheWebPathService()));

        return $instance;
    }

    /*
     * Gets the public 'liip_imagine.cache.resolver.default' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\Imagine\WebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Kunstmaan\MediaBundle\Helper\Imagine\WebPathResolver(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), (\dirname(__DIR__, 4).'/public'), 'uploads/cache', ($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()));
    }

    /*
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /*
     * Gets the public 'liip_imagine.cache.signer' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('APP_SECRET'));
    }

    /*
     * Gets the public 'liip_imagine.config.stack_collection' shared service.
     *
     * @return \Liip\ImagineBundle\Config\StackCollection
     */
    protected function getLiipImagine_Config_StackCollectionService()
    {
        $a = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\SizeFactory();
        $b = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\PointFactory();

        return $this->services['liip_imagine.config.stack_collection'] = new \Liip\ImagineBundle\Config\StackCollection(new \Liip\ImagineBundle\Config\StackBuilder(new \Liip\ImagineBundle\Factory\Config\StackFactory(), new \Liip\ImagineBundle\Config\FilterFactoryCollection(new \Liip\ImagineBundle\Factory\Config\Filter\AutoRotateFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\BackgroundFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\CropFactory($a, $b), new \Liip\ImagineBundle\Factory\Config\Filter\DownscaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\FlipFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\GrayscaleFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\InterlaceFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\PasteFactory($b), new \Liip\ImagineBundle\Factory\Config\Filter\RelativeResizeFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ResizeFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\RotateFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ScaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\StripFactory(), new \Liip\ImagineBundle\Factory\Config\Filter\ThumbnailFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\UpscaleFactory($a), new \Liip\ImagineBundle\Factory\Config\Filter\WatermarkFactory())), $this->parameters['liip_imagine.filter_sets']);
    }

    /*
     * Gets the public 'liip_imagine.data.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager(($this->privates['liip_imagine.binary.mime_type_guesser'] ?? $this->getLiipImagine_Binary_MimeTypeGuesserService()), \Symfony\Component\Mime\MimeTypes::getDefault(), ($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), 'default', NULL);

        $instance->addLoader('default', ($this->services['liip_imagine.binary.loader.default'] ?? $this->getLiipImagine_Binary_Loader_DefaultService()));

        return $instance;
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.background' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\Imagine\BackgroundFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Kunstmaan\MediaBundle\Helper\Imagine\BackgroundFilterLoader(($this->privates['liip_imagine.imagick'] ?? $this->getLiipImagine_ImagickService()));
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.downscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_DownscaleService()
    {
        return $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.fixed' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_FixedService()
    {
        return $this->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.flip' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_FlipService()
    {
        return $this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.grayscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_GrayscaleService()
    {
        return $this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.interlace' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_InterlaceService()
    {
        return $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.resample' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResampleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ResampleService()
    {
        return $this->services['liip_imagine.filter.loader.resample'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResampleFilterLoader(($this->privates['liip_imagine.imagick'] ?? $this->getLiipImagine_ImagickService()));
    }

    /*
     * Gets the public 'liip_imagine.filter.loader.rotate' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_RotateService()
    {
        return $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader();
    }

    /*
     * Gets the public 'liip_imagine.filter.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        $a = ($this->privates['liip_imagine.imagick'] ?? $this->getLiipImagine_ImagickService());

        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(($this->privates['liip_imagine.filter.configuration'] ?? $this->getLiipImagine_Filter_ConfigurationService()), $a, ($this->privates['liip_imagine.binary.mime_type_guesser'] ?? $this->getLiipImagine_Binary_MimeTypeGuesserService()));

        $instance->addLoader('relative_resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader());
        $instance->addLoader('resize', new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader());
        $instance->addLoader('thumbnail', new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader());
        $instance->addLoader('crop', new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader());
        $instance->addLoader('grayscale', ($this->services['liip_imagine.filter.loader.grayscale'] ?? ($this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader())));
        $instance->addLoader('paste_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($a, \dirname(__DIR__, 4)));
        $instance->addLoader('paste', new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($a, (\dirname(__DIR__, 4).'/src')));
        $instance->addLoader('watermark', new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($a, (\dirname(__DIR__, 4).'/src')));
        $instance->addLoader('watermark_image', new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($a, \dirname(__DIR__, 4)));
        $instance->addLoader('strip', new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader());
        $instance->addLoader('scale', new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader());
        $instance->addLoader('upscale', new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader());
        $instance->addLoader('downscale', ($this->services['liip_imagine.filter.loader.downscale'] ?? ($this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader())));
        $instance->addLoader('auto_rotate', new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader());
        $instance->addLoader('rotate', ($this->services['liip_imagine.filter.loader.rotate'] ?? ($this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader())));
        $instance->addLoader('flip', ($this->services['liip_imagine.filter.loader.flip'] ?? ($this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader())));
        $instance->addLoader('interlace', ($this->services['liip_imagine.filter.loader.interlace'] ?? ($this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader())));
        $instance->addLoader('resample', ($this->services['liip_imagine.filter.loader.resample'] ?? $this->getLiipImagine_Filter_Loader_ResampleService()));
        $instance->addLoader('fixed', ($this->services['liip_imagine.filter.loader.fixed'] ?? ($this->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader())));
        $instance->addLoader('background', ($this->services['liip_imagine.filter.loader.background'] ?? $this->getLiipImagine_Filter_Loader_BackgroundService()));
        $instance->addPostProcessor('jpegoptim', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true, NULL));
        $instance->addPostProcessor('optipng', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true, NULL));
        $instance->addPostProcessor('pngquant', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant'));
        $instance->addPostProcessor('mozjpeg', new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg'));

        return $instance;
    }

    /*
     * Gets the public 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        return $this->services['mime_types'] = new \Symfony\Component\Mime\MimeTypes();
    }

    /*
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = ($this->services['translator'] ?? $this->getTranslatorService());
        $e = new \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector();
        $e->registerClient('http_client', ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()));
        $f = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $f->setKernel($b);
        }
        $g = new \Kunstmaan\AdminBundle\Toolbar\BundleVersionDataCollector(($this->services['kunstmaan_admin.versionchecker'] ?? $this->getKunstmaanAdmin_VersioncheckerService()), ($this->privates['cache.kunstmaan_versioncheck'] ?? $this->getCache_KunstmaanVersioncheckService()));
        $g->setTemplate('@KunstmaanAdmin/Toolbar/bundles_version.html.twig');
        $h = new \Kunstmaan\AdminBundle\Toolbar\ExceptionDataCollector(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
        $h->setTemplate('@KunstmaanAdmin/Toolbar/exception.html.twig');
        $i = ($this->services['router'] ?? $this->getRouterService());

        $j = new \Kunstmaan\NodeBundle\Toolbar\NodeDataCollector(($this->services['kunstmaan_node.node_menu'] ?? $this->getKunstmaanNode_NodeMenuService()), $i);

        $k = ($this->services['kunstmaan_admin.adminroute.helper'] ?? $this->getKunstmaanAdmin_Adminroute_HelperService());

        $j->setAdminRouteHelper($k);
        $j->setTemplate('@KunstmaanNode/Toolbar/node.html.twig');
        $l = new \Kunstmaan\TranslatorBundle\Toolbar\TranslatorDataCollector($d, $i);
        $l->setAdminRouteHelper($k);
        $l->setTemplate('@KunstmaanTranslator/Toolbar/translations.html.twig');

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/srcApp_KernelDevContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(NULL, $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add(($this->services['data_collector.cache'] ?? ($this->services['data_collector.cache'] = new \Symfony\Component\Cache\DataCollector\CacheDataCollector())));
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($d));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), NULL));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(new \Twig\Profiler\Profile(), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($e);
        $instance->add(new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService())));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add($f);
        $instance->add($g);
        $instance->add($h);
        $instance->add($j);
        $instance->add($l);

        return $instance;
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

        $a = ($this->services['kunstmaan_admin.domain_configuration'] ?? $this->getKunstmaanAdmin_DomainConfigurationService());
        $b = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

        $instance->setContext(($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
        $instance->add(($this->privates['router.default'] ?? $this->getRouter_DefaultService()), '100');
        $instance->add(new \Kunstmaan\NodeBundle\Router\SlugRouter($a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $b, 'admin'), 0);
        $instance->add(new \Kunstmaan\RedirectBundle\Router\RedirectRouter($b->getRepository('Kunstmaan\\RedirectBundle\\Entity\\Redirect'), $a), 1);

        return $instance;
    }

    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src/Resources'), [0 => (\dirname(__DIR__, 4).'/src')], false);
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]))));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, [], ['utf8' => true]);
    }

    /*
     * Gets the public 'security.acl.dbal.schema' shared service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\Schema
     */
    protected function getSecurity_Acl_Dbal_SchemaService()
    {
        return $this->services['security.acl.dbal.schema'] = new \Symfony\Component\Security\Acl\Dbal\Schema(['class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'], ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));
    }

    /*
     * Gets the public 'security.acl.provider' shared service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\MutableAclProvider
     */
    protected function getSecurity_Acl_ProviderService()
    {
        return $this->services['security.acl.provider'] = new \Symfony\Component\Security\Acl\Dbal\MutableAclProvider(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), new \Symfony\Component\Security\Acl\Domain\PermissionGrantingStrategy(), ['class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'], NULL);
    }

    /*
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /*
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService());

        $b = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($a);

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(false), 1 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $b), 4 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->services['mime_types'] ?? ($this->services['mime_types'] = new \Symfony\Component\Mime\MimeTypes()))), 7 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, $b, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['property_info.cache'] ?? $this->getPropertyInfo_CacheService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($a), NULL, [])], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }

    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->services['profiler'])) {
                yield 'profiler' => ($this->services['profiler'] ?? null);
            }
            if (isset($this->services['validator'])) {
                yield 'debug.validator' => ($this->services['validator'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($this->privates['cache.kunstmaan_versioncheck'])) {
                yield 'cache.kunstmaan_versioncheck' => ($this->privates['cache.kunstmaan_versioncheck'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->privates['swiftmailer.email_sender.listener'])) {
                yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
            }
            if (isset($this->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
            }
            if (isset($this->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->privates['cache.kunstmaan_versioncheck'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->privates['swiftmailer.email_sender.listener'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'cache.kunstmaan_versioncheck' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'swiftmailer.email_sender.listener' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset']]);
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /*
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(($this->services['swiftmailer.transport'] ?? $this->getSwiftmailer_TransportService()));
    }

    /*
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        return $this->services['swiftmailer.mailer.default.transport.real'] = \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SwiftmailerTransportFactory::createTransport(['transport' => 'smtp', 'url' => $this->getEnv('MAILER_URL'), 'username' => NULL, 'password' => NULL, 'host' => 'localhost', 'port' => NULL, 'timeout' => 30, 'source_ip' => NULL, 'local_domain' => NULL, 'encryption' => NULL, 'auth_mode' => NULL, 'command' => '/usr/sbin/sendmail -t -i', 'stream_options' => []], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())));
    }

    /*
     * Gets the public 'swiftmailer.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_TransportService()
    {
        return $this->services['swiftmailer.transport'] = new \Swift_Transport_SpoolTransport(($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), new \Swift_MemorySpool());
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Toolbar\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Kunstmaan\TranslatorBundle\Toolbar\DataCollectorTranslator(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /*
     * Gets the public 'translator.default' shared service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Translator\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Translator\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kunstmaan_translator.service.translator.loader' => ['services', 'kunstmaan_translator.service.translator.loader', 'getKunstmaanTranslator_Service_Translator_LoaderService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'kunstmaan_translator.service.translator.loader' => '?',
            'request_stack' => '?',
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json'], 'kunstmaan_translator.service.translator.loader' => [0 => 'database']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false], false);

        $instance->setTranslationRepository(($this->services['kunstmaan_translator.repository.translation'] ?? $this->getKunstmaanTranslator_Repository_TranslationService()));
        $instance->setResourceCacher(($this->services['kunstmaan_translator.service.translator.resource_cacher'] ?? $this->getKunstmaanTranslator_Service_Translator_ResourceCacherService()));
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 'tl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bs.xlf'), 'bs', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uz.xlf'), 'uz', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 'th', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 'be', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), 'zh_TW', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf'), 'sq', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 'tr', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf'), 'cy', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 'af', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 'lv', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 'nn', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 'vi', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 'no', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 'tl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bs.xlf'), 'bs', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uz.xlf'), 'uz', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.th.xlf'), 'th', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 'be', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_TW.xlf'), 'zh_TW', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sq.xlf'), 'sq', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 'tr', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.af.xlf'), 'af', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 'lv', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 'nn', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 'vi', 'validators');
        $instance->addResource('xlf', (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 'no', 'validators');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff'), 'ru', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff'), 'tr', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff'), 'pl', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.no.xliff'), 'no', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff'), 'hr', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff'), 'ca', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff'), 'ro', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.oc.xliff'), 'oc', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff'), 'pt', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff'), 'nl', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff'), 'th', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff'), 'az', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff'), 'fr', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fi.xliff'), 'fi', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.gl.xliff'), 'gl', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff'), 'da', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sw.xliff'), 'sw', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff'), 'sl', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff'), 'es', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff'), 'uk', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff'), 'en', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff'), 'fa', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff'), 'ar', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff'), 'sr_Cyrl', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff'), 'de', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff'), 'cs', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sv.xliff'), 'sv', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff'), 'zh_CN', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff'), 'sr_Latn', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff'), 'it', 'pagerfanta');
        $instance->addResource('xliff', (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff'), 'sk', 'pagerfanta');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/validators.nl.yml'), 'nl', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 'nb', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 'ru', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 'cs', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 'uk', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 'fr', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 'bg', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 'fa', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 'pl', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 'sv', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml'), 'el', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 'ja', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 'th', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml'), 'eo', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 'ca', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 'zh_CN', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml'), 'vi', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 'ro', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 'sk', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 'id', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn_BD.yml'), 'bn_BD', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 'fi', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 'da', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 'nl', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 'hu', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 'ky', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn.yml'), 'bn', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 'es', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.gl.yml'), 'gl', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml'), 'lv', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 'it', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 'sl', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 'de', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml'), 'et', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 'ar', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 'pt', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml'), 'tr', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 'hr', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 'he', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 'eu', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 'lt', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 'eo', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 'ca', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 'th', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 'ja', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 'en', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 'el', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 'sv', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 'pl', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 'bg', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 'fa', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml'), 'sr_Latn', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 'fr', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 'uk', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 'cs', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 'ru', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml'), 'nb', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml'), 'he', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 'hr', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 'lt', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml'), 'eu', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 'pt', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 'tr', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml'), 'lb', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 'ar', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 'de', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 'sl', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 'lv', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml'), 'af', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn.yml'), 'bn', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 'es', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 'nl', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml'), 'da', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 'fi', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 'ky', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 'hu', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml'), 'id', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn_BD.yml'), 'bn_BD', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 'vi', 'FOSUserBundle');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 'sk', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 'ro', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 'pt_BR', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/validators.nl.yml'), 'nl', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/validators.nl.yml'), 'nl', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/generator-bundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/generator-bundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/generator-bundle/Resources/translations/messages.hu.yml'), 'hu', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/generator-bundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/generator-bundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/generator-bundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/generator-bundle/Resources/translations/messages.pl.yml'), 'pl', 'messages');
        $instance->addResource('yml', (\dirname(__DIR__, 4).'/vendor/kunstmaan/generator-bundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addDatabaseResources();
        $instance->setFallbackLocales($this->parameters['kunstmaan_admin.admin_locales']);
        $instance->setFallbackLocales($this->parameters['kunstmaan_admin.admin_locales']);

        return $instance;
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService()), ['debug' => false, 'strict_variables' => false, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $a = ($this->services['translator'] ?? $this->getTranslatorService());
        $b = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $c = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $d = ($this->services['router'] ?? $this->getRouterService());
        $e = ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService());
        $f = new \Pagerfanta\View\ViewFactory();

        $g = new \Pagerfanta\View\DefaultView();
        $h = new \Pagerfanta\View\TwitterBootstrapView();
        $i = new \Pagerfanta\View\TwitterBootstrap3View();
        $j = new \Pagerfanta\View\TwitterBootstrap4View();
        $k = new \Pagerfanta\View\SemanticUiView();

        $f->add(['default' => $g, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($g, $a), 'twitter_bootstrap' => $h, 'twitter_bootstrap3' => $i, 'twitter_bootstrap4' => $j, 'semantic_ui' => $k, 'twitter_bootstrap4_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap4TranslatedView($j, $a), 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($i, $a), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($h, $a), 'semantic_ui_translated' => new \WhiteOctober\PagerfantaBundle\View\SemanticUiTranslatedView($k, $a)]);
        $l = new \Kunstmaan\AdminBundle\Helper\Menu\MenuBuilder($b);

        $m = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());
        $n = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $o = ($this->services['kunstmaan_node.pages_configuration'] ?? ($this->services['kunstmaan_node.pages_configuration'] = new \Kunstmaan\NodeBundle\Helper\PagesConfiguration([])));
        $p = ($this->services['kunstmaan_admin.domain_configuration'] ?? $this->getKunstmaanAdmin_DomainConfigurationService());

        $l->addAdaptMenu(new \Kunstmaan\AdminBundle\Helper\Menu\ModulesMenuAdaptor(), 200);
        $l->addAdaptMenu(new \Kunstmaan\AdminBundle\Helper\Menu\SettingsMenuAdaptor($e, true), 100);
        $l->addAdaptMenu(new \Kunstmaan\NodeBundle\Helper\Menu\PageMenuAdaptor($m, new \Kunstmaan\AdminBundle\Helper\Security\Acl\AclNativeHelper($m, $n, ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), false), $o, $p), 250);
        $l->addAdaptMenu(new \Kunstmaan\ConfigBundle\Helper\Menu\ConfigMenuAdaptor($this->parameters['kunstmaan_config'], $e), 0);
        $l->addAdaptMenu(new \Kunstmaan\RedirectBundle\Helper\Menu\RedirectMenuAdaptor(), 0);
        $l->addAdaptMenu(new \Kunstmaan\MediaBundle\Helper\Menu\MediaMenuAdaptor(($this->privates['kunstmaan_media.repository.folder'] ?? $this->getKunstmaanMedia_Repository_FolderService())), 150);
        $l->addAdaptMenu(new \Kunstmaan\SeoBundle\Helper\Menu\SeoManagementMenuAdaptor($e), 0);
        $l->addAdaptMenu(new \Kunstmaan\TranslatorBundle\Service\Menu\TranslatorMenuAdaptor(), 0);
        $l->addAdaptMenu(new \Kunstmaan\UserManagementBundle\Helper\Menu\UserManagementMenuAdaptor($e), 250);
        $l->addAdaptMenu(new \Kunstmaan\MenuBundle\Service\MenuAdaptor([]), 0);
        $l->addAdaptMenu(new \Kunstmaan\FormBundle\Helper\Menu\FormSubmissionsMenuAdaptor(), 0);
        $q = new \Kunstmaan\AdminBundle\Helper\AdminPanel\AdminPanel();
        $q->addAdminPanelAdaptor(new \Kunstmaan\AdminBundle\Helper\AdminPanel\DefaultAdminPanelAdaptor($n), 0);
        $r = new \Knp\Menu\Util\MenuManipulator();
        $s = ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService());
        $t = new \Kunstmaan\PagePartBundle\Twig\Extension\PagePartAdminTwigExtension();
        $t->setUsesExtendedPagePartChooser(true);
        $u = new \Kunstmaan\SeoBundle\Twig\SeoTwigExtension($m);
        $u->setWebsiteTitle('MyProject');
        $u->setRequestCache(($this->services['cache.app'] ?? $this->getCache_AppService()));
        $v = new \Kunstmaan\SeoBundle\Twig\GoogleAnalyticsTwigExtension();
        $v->setAccountID('');
        $v->setOrderPreparer(new \Kunstmaan\SeoBundle\Helper\OrderPreparer());
        $v->setOrderConverter(new \Kunstmaan\SeoBundle\Helper\OrderConverter());
        $w = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $w->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $c]);
        $x = new \Symfony\Bridge\Twig\AppVariable();
        $x->setEnvironment('dev');
        $x->setDebug(false);
        if ($this->has('security.token_storage')) {
            $x->setTokenStorage($n);
        }
        if ($this->has('request_stack')) {
            $x->setRequestStack($b);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($b, '', false)), [])));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($c, \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($b, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($e));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService())));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension('default', $f, $d, $b));
        $instance->addExtension(new \Kunstmaan\UtilitiesBundle\Twig\UtilitiesTwigExtension(($this->services['kunstmaan_utilities.slugifier'] ?? ($this->services['kunstmaan_utilities.slugifier'] = new \Kunstmaan\UtilitiesBundle\Helper\Slugifier()))));
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\MenuTwigExtension($l, $q));
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\LocaleSwitcherTwigExtension($p));
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\MultiDomainAdminTwigExtension($p));
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\DateByLocaleExtension());
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\FormToolsExtension(new \Kunstmaan\AdminBundle\Helper\FormHelper()));
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\AdminPermissionsTwigExtension());
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\AdminRouteHelperTwigExtension(($this->services['kunstmaan_admin.adminroute.helper'] ?? $this->getKunstmaanAdmin_Adminroute_HelperService())));
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\TabsTwigExtension());
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\GoogleSignInTwigExtension(false, NULL));
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\SidebarTwigExtension());
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\ToolbarTwigExtension());
        $instance->addExtension(new \Kunstmaan\AdminBundle\Twig\AdminBundleTwigExtension('MyProject', 'en', 'nl|fr|en'));
        $instance->addExtension(new \Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension());
        $instance->addExtension(new \Kunstmaan\NodeBundle\Twig\PagesConfigurationTwigExtension($o));
        $instance->addExtension(new \Kunstmaan\NodeBundle\Twig\UrlReplaceTwigExtension(($this->privates['kunstmaan_node.helper.url'] ?? $this->getKunstmaanNode_Helper_UrlService())));
        $instance->addExtension(new \Kunstmaan\NodeBundle\Twig\NodeTwigExtension($m, $d, ($this->services['kunstmaan_node.node_menu'] ?? $this->getKunstmaanNode_NodeMenuService()), $b));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'list' => ['privates', 'knp_menu.renderer.list', 'getKnpMenu_Renderer_ListService', false],
            'twig' => ['privates', 'knp_menu.renderer.twig', 'getKnpMenu_Renderer_TwigService', false],
        ], [
            'list' => '?',
            'twig' => '?',
        ]), 'twig', [], false), new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['knp_menu.menu_provider.lazy'] ?? $this->getKnpMenu_MenuProvider_LazyService());
            yield 1 => ($this->privates['knp_menu.menu_provider.builder_alias'] ?? $this->getKnpMenu_MenuProvider_BuilderAliasService());
        }, 2)), $r, $s), $s, $r));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Kunstmaan\ConfigBundle\Twig\ConfigTwigExtension($m, $this->parameters['kunstmaan_config']));
        $instance->addExtension(new \Twig\Extensions\TextExtension());
        $instance->addExtension($t);
        $instance->addExtension(new \Kunstmaan\PagePartBundle\Twig\Extension\PagePartTwigExtension($m));
        $instance->addExtension(new \Kunstmaan\PagePartBundle\Twig\Extension\PageTemplateTwigExtension(($this->privates['kunstmaan_page_part.page_template.page_template_configuration_service'] ?? $this->getKunstmaanPagePart_PageTemplate_PageTemplateConfigurationServiceService())));
        $instance->addExtension(new \Kunstmaan\NodeSearchBundle\Twig\KunstmaanNodeSearchTwigExtension($m, ($this->privates['kunstmaan_node_search.service.indexable_pageparts'] ?? $this->getKunstmaanNodeSearch_Service_IndexablePagepartsService())));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\FilterExtension(($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService())));
        $instance->addExtension($u);
        $instance->addExtension($v);
        $instance->addExtension(new \Kunstmaan\SitemapBundle\Twig\SitemapTwigExtension());
        $instance->addExtension(new \Kunstmaan\MenuBundle\Twig\MenuTwigExtension($m->getRepository('Kunstmaan\\MenuBundle\\Entity\\MenuItem'), new \Kunstmaan\MenuBundle\Service\RenderService($d)));
        $instance->addExtension(new \Kunstmaan\ArticleBundle\Twig\ArticleTwigExtension($m, $d));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($w));
        $instance->addGlobal('app', $x);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->addGlobal('form_submission_webdir', '/uploads/formsubmissions/');
        $instance->addGlobal('upload_dir', '/uploads/media/');
        $instance->addGlobal('mediabundleisactive', true);
        $instance->addGlobal('mediamanager', ($this->services['kunstmaan_media.media_manager'] ?? $this->getKunstmaanMedia_MediaManagerService()));
        $instance->addGlobal('nodebundleisactive', true);
        $instance->addGlobal('publish_later_stepping', '15');
        $instance->addGlobal('unpublish_later_stepping', '15');
        $instance->addGlobal('datePicker_startDate', '01/01/1970');
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), false);
    }

    /*
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /*
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);
        $instance->addCasters(['Closure' => 'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo']);

        return $instance;
    }

    /*
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     *
     * @deprecated The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        @trigger_error('The "web_profiler.controller.exception" service is deprecated since Symfony 4.4, use the "web_profiler.controller.exception_panel" service instead.', E_USER_DEPRECATED);

        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), false, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()));
    }

    /*
     * Gets the public 'web_profiler.controller.exception_panel' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController
     */
    protected function getWebProfiler_Controller_ExceptionPanelService()
    {
        return $this->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), ($this->services['profiler'] ?? $this->getProfilerService()));
    }

    /*
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($this->services['router'] ?? $this->getRouterService()), ($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), $this->parameters['data_collector.templates'], ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }

    /*
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), NULL, new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0));
    }

    /*
     * Gets the private '.debug.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\TraceableHttpClient
     */
    protected function get_Debug_HttpClientService()
    {
        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $b = new \Symfony\Bridge\Monolog\Logger('http_client');
        $b->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $b->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $b->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $a->setLogger($b);

        return $this->privates['.debug.http_client'] = new \Symfony\Component\HttpClient\TraceableHttpClient($a);
    }

    /*
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /*
     * Gets the private 'App\Form\PageParts\AudioPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\AudioPagePartAdminType
     */
    protected function getAudioPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\AudioPagePartAdminType'] = new \App\Form\PageParts\AudioPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\ButtonPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\ButtonPagePartAdminType
     */
    protected function getButtonPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\ButtonPagePartAdminType'] = new \App\Form\PageParts\ButtonPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\DownloadPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\DownloadPagePartAdminType
     */
    protected function getDownloadPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\DownloadPagePartAdminType'] = new \App\Form\PageParts\DownloadPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\HeaderPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\HeaderPagePartAdminType
     */
    protected function getHeaderPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\HeaderPagePartAdminType'] = new \App\Form\PageParts\HeaderPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\ImagePagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\ImagePagePartAdminType
     */
    protected function getImagePagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\ImagePagePartAdminType'] = new \App\Form\PageParts\ImagePagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\IntroTextPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\IntroTextPagePartAdminType
     */
    protected function getIntroTextPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\IntroTextPagePartAdminType'] = new \App\Form\PageParts\IntroTextPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\LinePagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\LinePagePartAdminType
     */
    protected function getLinePagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\LinePagePartAdminType'] = new \App\Form\PageParts\LinePagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\LinkPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\LinkPagePartAdminType
     */
    protected function getLinkPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\LinkPagePartAdminType'] = new \App\Form\PageParts\LinkPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\RawHtmlPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\RawHtmlPagePartAdminType
     */
    protected function getRawHtmlPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\RawHtmlPagePartAdminType'] = new \App\Form\PageParts\RawHtmlPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\TextPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\TextPagePartAdminType
     */
    protected function getTextPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\TextPagePartAdminType'] = new \App\Form\PageParts\TextPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\ToTopPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\ToTopPagePartAdminType
     */
    protected function getToTopPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\ToTopPagePartAdminType'] = new \App\Form\PageParts\ToTopPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\TocPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\TocPagePartAdminType
     */
    protected function getTocPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\TocPagePartAdminType'] = new \App\Form\PageParts\TocPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\PageParts\VideoPagePartAdminType' shared autowired service.
     *
     * @return \App\Form\PageParts\VideoPagePartAdminType
     */
    protected function getVideoPagePartAdminTypeService()
    {
        return $this->privates['App\\Form\\PageParts\\VideoPagePartAdminType'] = new \App\Form\PageParts\VideoPagePartAdminType();
    }

    /*
     * Gets the private 'App\Form\Pages\BehatTestPageAdminType' shared autowired service.
     *
     * @return \App\Form\Pages\BehatTestPageAdminType
     */
    protected function getBehatTestPageAdminTypeService()
    {
        return $this->privates['App\\Form\\Pages\\BehatTestPageAdminType'] = new \App\Form\Pages\BehatTestPageAdminType();
    }

    /*
     * Gets the private 'App\Form\Pages\ContentPageAdminType' shared autowired service.
     *
     * @return \App\Form\Pages\ContentPageAdminType
     */
    protected function getContentPageAdminTypeService()
    {
        return $this->privates['App\\Form\\Pages\\ContentPageAdminType'] = new \App\Form\Pages\ContentPageAdminType();
    }

    /*
     * Gets the private 'App\Form\Pages\HomePageAdminType' shared autowired service.
     *
     * @return \App\Form\Pages\HomePageAdminType
     */
    protected function getHomePageAdminTypeService()
    {
        return $this->privates['App\\Form\\Pages\\HomePageAdminType'] = new \App\Form\Pages\HomePageAdminType();
    }

    /*
     * Gets the private 'Gedmo\Tree\TreeListener' shared service.
     *
     * @return \Gedmo\Tree\TreeListener
     */
    protected function getTreeListenerService()
    {
        $this->privates['Gedmo\\Tree\\TreeListener'] = $instance = new \Gedmo\Tree\TreeListener();

        $instance->setAnnotationReader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        return $instance;
    }

    /*
     * Gets the private 'Kunstmaan\UserManagementBundle\EventSubscriber\UserDeleteEventSubscriber' shared service.
     *
     * @return \Kunstmaan\UserManagementBundle\EventSubscriber\UserDeleteEventSubscriber
     */
    protected function getUserDeleteEventSubscriberService()
    {
        return $this->privates['Kunstmaan\\UserManagementBundle\\EventSubscriber\\UserDeleteEventSubscriber'] = new \Kunstmaan\UserManagementBundle\EventSubscriber\UserDeleteEventSubscriber(($this->privates['kunstmaan_admin.logger'] ?? $this->getKunstmaanAdmin_LoggerService()));
    }

    /*
     * Gets the private 'Sentry\SentryBundle\Command\SentryTestCommand' shared service.
     *
     * @return \Sentry\SentryBundle\Command\SentryTestCommand
     */
    protected function getSentryTestCommandService()
    {
        $this->privates['Sentry\\SentryBundle\\Command\\SentryTestCommand'] = $instance = new \Sentry\SentryBundle\Command\SentryTestCommand();

        $instance->setName('sentry:test');

        return $instance;
    }

    /*
     * Gets the private 'Sentry\SentryBundle\EventListener\ConsoleListener' shared service.
     *
     * @return \Sentry\SentryBundle\EventListener\ConsoleListener
     */
    protected function getConsoleListenerService()
    {
        return $this->privates['Sentry\\SentryBundle\\EventListener\\ConsoleListener'] = new \Sentry\SentryBundle\EventListener\ConsoleListener(($this->privates['Sentry\\State\\HubInterface'] ?? $this->getHubInterfaceService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'Sentry\SentryBundle\EventListener\ErrorListener' shared service.
     *
     * @return \Sentry\SentryBundle\EventListener\ErrorListener
     */
    protected function getErrorListenerService()
    {
        return $this->privates['Sentry\\SentryBundle\\EventListener\\ErrorListener'] = new \Sentry\SentryBundle\EventListener\ErrorListener(($this->privates['Sentry\\State\\HubInterface'] ?? $this->getHubInterfaceService()));
    }

    /*
     * Gets the private 'Sentry\SentryBundle\EventListener\RequestListener' shared service.
     *
     * @return \Sentry\SentryBundle\EventListener\RequestListener
     */
    protected function getRequestListenerService()
    {
        return $this->privates['Sentry\\SentryBundle\\EventListener\\RequestListener'] = new \Sentry\SentryBundle\EventListener\RequestListener(($this->privates['Sentry\\State\\HubInterface'] ?? $this->getHubInterfaceService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the private 'Sentry\State\HubInterface' shared service.
     *
     * @return \Sentry\State\Hub
     */
    protected function getHubInterfaceService()
    {
        $this->privates['Sentry\\State\\HubInterface'] = $instance = \Sentry\SentryBundle\SentryBundle::getCurrentHub();

        $a = new \Sentry\Options(['dsn' => $this->getEnv('SENTRY_DSN')]);
        $a->setEnvironment('dev');
        $a->setPrefixes([0 => \dirname(__DIR__, 4), 1 => '/usr/local/Cellar/php@7.4/7.4.21/share/php@7.4/pear']);
        $a->setRelease('No version set (parsed as 1.0.0)@');
        $a->setTags([]);
        $a->setInAppExcludedPaths([0 => $this->targetDir.'', 1 => (\dirname(__DIR__, 4).'/vendor')]);
        $a->setInAppIncludedPaths([]);
        $a->setClassSerializers([]);
        $a->setIntegrations(\Sentry\SentryBundle\DependencyInjection\IntegrationFilterFactory::create([]));

        $b = new \Sentry\ClientBuilder($a);
        \Sentry\SentryBundle\DependencyInjection\ClientBuilderConfigurator::configure($b);

        $instance->bindClient($b->getClient());

        return $instance;
    }

    /*
     * Gets the private 'Symfony\Bundle\AclBundle\Command\InitAclCommand' shared service.
     *
     * @return \Symfony\Bundle\AclBundle\Command\InitAclCommand
     */
    protected function getInitAclCommand2Service()
    {
        $this->privates['Symfony\\Bundle\\AclBundle\\Command\\InitAclCommand'] = $instance = new \Symfony\Bundle\AclBundle\Command\InitAclCommand(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['security.acl.dbal.schema'] ?? $this->getSecurity_Acl_Dbal_SchemaService()));

        $instance->setName('acl:init');

        return $instance;
    }

    /*
     * Gets the private 'Symfony\Bundle\AclBundle\Command\SetAclCommand' shared service.
     *
     * @return \Symfony\Bundle\AclBundle\Command\SetAclCommand
     */
    protected function getSetAclCommandService()
    {
        $this->privates['Symfony\\Bundle\\AclBundle\\Command\\SetAclCommand'] = $instance = new \Symfony\Bundle\AclBundle\Command\SetAclCommand(($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()));

        $instance->setName('acl:set');

        return $instance;
    }

    /*
     * Gets the private 'annotations.cache_adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    protected function getAnnotations_CacheAdapterService()
    {
        return \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
    }

    /*
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', false);
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\PsrCachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\PsrCachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheAdapterService(), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('BUnQw7g1zB', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.kunstmaan_versioncheck' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_KunstmaanVersioncheckService()
    {
        $this->privates['cache.kunstmaan_versioncheck'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('XAWvXeh6Co', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('bx6NsAvqmK', 0, $this->getParameter('container.build_id'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('gi0AlQulrB', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('-PYAZ4ys5O', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('-bYktghIlP', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('4sti-+8SYn', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cmf_routing.route_type_form_type' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType
     */
    protected function getCmfRouting_RouteTypeFormTypeService()
    {
        return $this->privates['cmf_routing.route_type_form_type'] = new \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType();
    }

    /*
     * Gets the private 'cmf_routing.validator.route_defaults' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Validator\Constraints\RouteDefaultsTwigValidator
     */
    protected function getCmfRouting_Validator_RouteDefaultsService()
    {
        return $this->privates['cmf_routing.validator.route_defaults'] = new \Symfony\Cmf\Bundle\RoutingBundle\Validator\Constraints\RouteDefaultsTwigValidator(($this->privates['controller_resolver'] ?? $this->getControllerResolverService()), ($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService()));
    }

    /*
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /*
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.property_access', 7 => 'cache.security_expression_language', 8 => 'cache.kunstmaan_versioncheck', 9 => 'cache.doctrine.orm.default.metadata', 10 => 'cache.doctrine.orm.default.result', 11 => 'cache.doctrine.orm.default.query']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.kunstmaan_versioncheck' => ($this->privates['cache.kunstmaan_versioncheck'] ?? $this->getCache_KunstmaanVersioncheckService());
        }, 2));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /*
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form\\PageParts', 2 => 'App\\Form\\Pages', 3 => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type', 4 => 'Kunstmaan\\AdminBundle\\Form', 5 => 'Kunstmaan\\NodeBundle\\Form\\Type', 6 => 'Kunstmaan\\NodeBundle\\Form', 7 => 'FOS\\UserBundle\\Form\\Type', 8 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 9 => 'Kunstmaan\\RedirectBundle\\Form', 10 => 'Liip\\ImagineBundle\\Form\\Type', 11 => ''], [0 => 'App\\Form\\PageParts\\AudioPagePartAdminType', 1 => 'App\\Form\\PageParts\\ButtonPagePartAdminType', 2 => 'App\\Form\\PageParts\\DownloadPagePartAdminType', 3 => 'App\\Form\\PageParts\\HeaderPagePartAdminType', 4 => 'App\\Form\\PageParts\\ImagePagePartAdminType', 5 => 'App\\Form\\PageParts\\IntroTextPagePartAdminType', 6 => 'App\\Form\\PageParts\\LinePagePartAdminType', 7 => 'App\\Form\\PageParts\\LinkPagePartAdminType', 8 => 'App\\Form\\PageParts\\RawHtmlPagePartAdminType', 9 => 'App\\Form\\PageParts\\TextPagePartAdminType', 10 => 'App\\Form\\PageParts\\ToTopPagePartAdminType', 11 => 'App\\Form\\PageParts\\TocPagePartAdminType', 12 => 'App\\Form\\PageParts\\VideoPagePartAdminType', 13 => 'App\\Form\\Pages\\BehatTestPageAdminType', 14 => 'App\\Form\\Pages\\ContentPageAdminType', 15 => 'App\\Form\\Pages\\HomePageAdminType', 16 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 17 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 18 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 19 => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType', 20 => 'Kunstmaan\\AdminBundle\\Form\\ColorType', 21 => 'Kunstmaan\\AdminBundle\\Form\\RangeType', 22 => 'Kunstmaan\\AdminBundle\\Form\\WysiwygType', 23 => 'Kunstmaan\\NodeBundle\\Form\\Type\\URLChooserType', 24 => 'Kunstmaan\\NodeBundle\\Form\\Type\\SlugType', 25 => 'Kunstmaan\\NodeBundle\\Form\\NodeChoiceType', 26 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 27 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 28 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 29 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 30 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 31 => 'FOS\\UserBundle\\Form\\Type\\GroupFormType', 32 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 33 => 'Kunstmaan\\RedirectBundle\\Form\\RedirectAdminType', 34 => 'Liip\\ImagineBundle\\Form\\Type\\ImageType', 35 => 'Kunstmaan\\MediaBundle\\Form\\Type\\MediaType', 36 => 'Kunstmaan\\MediaBundle\\Form\\Type\\IconFontType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:router');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? ($this->privates['translation.reader'] = new \Symfony\Component\Translation\Reader\TranslationReader())), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), '', [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 9 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Toolbar/TranslatorDataCollector.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 11 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/DefaultTranslatedView.php'), 12 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap4TranslatedView.php'), 13 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap3TranslatedView.php'), 14 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrapTranslatedView.php'), 15 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/SemanticUiTranslatedView.php'), 16 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/EventListener/AdminLocaleListener.php'), 17 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Helper/VersionCheck/VersionChecker.php'), 18 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/EventListener/PasswordCheckListener.php'), 19 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Service/ExportService.php'), 20 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/FlashListener.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? ($this->privates['translation.reader'] = new \Symfony\Component\Translation\Reader\TranslationReader())), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'en', (\dirname(__DIR__, 4).'/translations'), '', [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 9 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Toolbar/TranslatorDataCollector.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 11 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/DefaultTranslatedView.php'), 12 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap4TranslatedView.php'), 13 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap3TranslatedView.php'), 14 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrapTranslatedView.php'), 15 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/SemanticUiTranslatedView.php'), 16 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/EventListener/AdminLocaleListener.php'), 17 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Helper/VersionCheck/VersionChecker.php'), 18 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/EventListener/PasswordCheckListener.php'), 19 => (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Service/ExportService.php'), 20 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/EventListener/FlashListener.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /*
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /*
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /*
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('console');
        $a->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }

    /*
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /*
     * Gets the private 'controller_resolver' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getControllerResolverService()
    {
        return $this->privates['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))));
    }

    /*
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), false);
    }

    /*
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService()), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()))]), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /*
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->getDebug_FileLinkFormatter_UrlFormatService());
        });
    }

    /*
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    protected function getDebug_FileLinkFormatter_UrlFormatService()
    {
        return $this->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat(($this->services['router'] ?? $this->getRouterService()), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }

    /*
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    protected function getDoctrine_FixturesLoadCommandService()
    {
        $a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($this);
        $a->addFixtures([0 => ['fixture' => new \App\DataFixtures\AppFixtures(), 'groups' => []], 1 => ['fixture' => new \App\DataFixtures\ORM\DefaultSiteGenerator\DefaultSiteFixtures(), 'groups' => []], 2 => ['fixture' => new \Kunstmaan\MediaBundle\DataFixtures\ORM\FolderFixtures(), 'groups' => []], 3 => ['fixture' => new \Kunstmaan\TranslatorBundle\DataFixtures\ORM\TranslationFixtures(), 'groups' => []], 4 => ['fixture' => new \Kunstmaan\GeneratorBundle\DataFixtures\ORM\UserFixtures(), 'groups' => []], 5 => ['fixture' => new \Kunstmaan\GeneratorBundle\DataFixtures\ORM\RoleFixtures(), 'groups' => []], 6 => ['fixture' => new \Kunstmaan\GeneratorBundle\DataFixtures\ORM\GroupFixtures(), 'groups' => []]]);

        $this->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($this->services['doctrine'] ?? $this->getDoctrineService()), ['default' => new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        $this->privates['doctrine.generate_entities_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:generate:entities');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /*
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'esi_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SurrogateListener
     */
    protected function getEsiListenerService()
    {
        return $this->privates['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\SurrogateListener(($this->privates['esi'] ?? ($this->privates['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi())));
    }

    /*
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), false);
    }

    /*
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())));
    }

    /*
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\PageParts\\AudioPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\AudioPagePartAdminType', 'getAudioPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\ButtonPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\ButtonPagePartAdminType', 'getButtonPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\DownloadPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\DownloadPagePartAdminType', 'getDownloadPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\HeaderPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\HeaderPagePartAdminType', 'getHeaderPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\ImagePagePartAdminType' => ['privates', 'App\\Form\\PageParts\\ImagePagePartAdminType', 'getImagePagePartAdminTypeService', false],
            'App\\Form\\PageParts\\IntroTextPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\IntroTextPagePartAdminType', 'getIntroTextPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\LinePagePartAdminType' => ['privates', 'App\\Form\\PageParts\\LinePagePartAdminType', 'getLinePagePartAdminTypeService', false],
            'App\\Form\\PageParts\\LinkPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\LinkPagePartAdminType', 'getLinkPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\RawHtmlPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\RawHtmlPagePartAdminType', 'getRawHtmlPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\TextPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\TextPagePartAdminType', 'getTextPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\ToTopPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\ToTopPagePartAdminType', 'getToTopPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\TocPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\TocPagePartAdminType', 'getTocPagePartAdminTypeService', false],
            'App\\Form\\PageParts\\VideoPagePartAdminType' => ['privates', 'App\\Form\\PageParts\\VideoPagePartAdminType', 'getVideoPagePartAdminTypeService', false],
            'App\\Form\\Pages\\BehatTestPageAdminType' => ['privates', 'App\\Form\\Pages\\BehatTestPageAdminType', 'getBehatTestPageAdminTypeService', false],
            'App\\Form\\Pages\\ContentPageAdminType' => ['privates', 'App\\Form\\Pages\\ContentPageAdminType', 'getContentPageAdminTypeService', false],
            'App\\Form\\Pages\\HomePageAdminType' => ['privates', 'App\\Form\\Pages\\HomePageAdminType', 'getHomePageAdminTypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => ['privates', 'fos_user.change_password.form.type', 'getFosUser_ChangePassword_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\GroupFormType' => ['privates', 'fos_user.group.form.type', 'getFosUser_Group_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => ['privates', 'fos_user.profile.form.type', 'getFosUser_Profile_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => ['privates', 'fos_user.registration.form.type', 'getFosUser_Registration_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => ['privates', 'fos_user.resetting.form.type', 'getFosUser_Resetting_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => ['privates', 'fos_user.username_form_type', 'getFosUser_UsernameFormTypeService', false],
            'Kunstmaan\\AdminBundle\\Form\\ColorType' => ['privates', 'kunstmaan_admin.form.type.color', 'getKunstmaanAdmin_Form_Type_ColorService', false],
            'Kunstmaan\\AdminBundle\\Form\\RangeType' => ['privates', 'kunstmaan_admin.form.type.range', 'getKunstmaanAdmin_Form_Type_RangeService', false],
            'Kunstmaan\\AdminBundle\\Form\\WysiwygType' => ['privates', 'kunstmaan_form.type.wysiwyg', 'getKunstmaanForm_Type_WysiwygService', false],
            'Kunstmaan\\MediaBundle\\Form\\Type\\IconFontType' => ['privates', 'form.type.iconfont', 'getForm_Type_IconfontService', false],
            'Kunstmaan\\MediaBundle\\Form\\Type\\MediaType' => ['privates', 'form.type.media', 'getForm_Type_MediaService', false],
            'Kunstmaan\\NodeBundle\\Form\\NodeChoiceType' => ['privates', 'kunstmaan_node.form.type.nodechoice', 'getKunstmaanNode_Form_Type_NodechoiceService', false],
            'Kunstmaan\\NodeBundle\\Form\\Type\\SlugType' => ['privates', 'kunstmaan_node.form.type.slug', 'getKunstmaanNode_Form_Type_SlugService', false],
            'Kunstmaan\\NodeBundle\\Form\\Type\\URLChooserType' => ['privates', 'kunstmaan_node.form.type.urlchooser', 'getKunstmaanNode_Form_Type_UrlchooserService', false],
            'Kunstmaan\\RedirectBundle\\Form\\RedirectAdminType' => ['privates', 'kunstmaan_redirect.form.type', 'getKunstmaanRedirect_Form_TypeService', false],
            'Liip\\ImagineBundle\\Form\\Type\\ImageType' => ['privates', 'liip_imagine.form.type.image', 'getLiipImagine_Form_Type_ImageService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType' => ['privates', 'cmf_routing.route_type_form_type', 'getCmfRouting_RouteTypeFormTypeService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
        ], [
            'App\\Form\\PageParts\\AudioPagePartAdminType' => '?',
            'App\\Form\\PageParts\\ButtonPagePartAdminType' => '?',
            'App\\Form\\PageParts\\DownloadPagePartAdminType' => '?',
            'App\\Form\\PageParts\\HeaderPagePartAdminType' => '?',
            'App\\Form\\PageParts\\ImagePagePartAdminType' => '?',
            'App\\Form\\PageParts\\IntroTextPagePartAdminType' => '?',
            'App\\Form\\PageParts\\LinePagePartAdminType' => '?',
            'App\\Form\\PageParts\\LinkPagePartAdminType' => '?',
            'App\\Form\\PageParts\\RawHtmlPagePartAdminType' => '?',
            'App\\Form\\PageParts\\TextPagePartAdminType' => '?',
            'App\\Form\\PageParts\\ToTopPagePartAdminType' => '?',
            'App\\Form\\PageParts\\TocPagePartAdminType' => '?',
            'App\\Form\\PageParts\\VideoPagePartAdminType' => '?',
            'App\\Form\\Pages\\BehatTestPageAdminType' => '?',
            'App\\Form\\Pages\\ContentPageAdminType' => '?',
            'App\\Form\\Pages\\HomePageAdminType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\GroupFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => '?',
            'Kunstmaan\\AdminBundle\\Form\\ColorType' => '?',
            'Kunstmaan\\AdminBundle\\Form\\RangeType' => '?',
            'Kunstmaan\\AdminBundle\\Form\\WysiwygType' => '?',
            'Kunstmaan\\MediaBundle\\Form\\Type\\IconFontType' => '?',
            'Kunstmaan\\MediaBundle\\Form\\Type\\MediaType' => '?',
            'Kunstmaan\\NodeBundle\\Form\\NodeChoiceType' => '?',
            'Kunstmaan\\NodeBundle\\Form\\Type\\SlugType' => '?',
            'Kunstmaan\\NodeBundle\\Form\\Type\\URLChooserType' => '?',
            'Kunstmaan\\RedirectBundle\\Form\\RedirectAdminType' => '?',
            'Liip\\ImagineBundle\\Form\\Type\\ImageType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
            yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->getForm_TypeExtension_Form_DataCollectorService());
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService())));
    }

    /*
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the private 'form.type.iconfont' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Form\Type\IconFontType
     */
    protected function getForm_Type_IconfontService()
    {
        $a = new \Kunstmaan\MediaBundle\Helper\IconFont\IconFontManager();

        $b = new \Kunstmaan\MediaBundle\Helper\IconFont\DefaultIconFontLoader(($this->services['kernel'] ?? $this->get('kernel', 1)));

        $a->setDefaultLoader($b);
        $a->addLoader($b, 'kunstmaan_media.icon_font.default_loader');

        return $this->privates['form.type.iconfont'] = new \Kunstmaan\MediaBundle\Form\Type\IconFontType($a);
    }

    /*
     * Gets the private 'form.type.media' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Form\Type\MediaType
     */
    protected function getForm_Type_MediaService()
    {
        return $this->privates['form.type.media'] = new \Kunstmaan\MediaBundle\Form\Type\MediaType(($this->services['kunstmaan_media.media_manager'] ?? $this->getKunstmaanMedia_MediaManagerService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /*
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->privates['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /*
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /*
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /*
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'fos_user.change_password.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->privates['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /*
     * Gets the private 'fos_user.command.activate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\ActivateUserCommand
     */
    protected function getFosUser_Command_ActivateUserService()
    {
        $this->privates['fos_user.command.activate_user'] = $instance = new \FOS\UserBundle\Command\ActivateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:activate');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.change_password' shared service.
     *
     * @return \FOS\UserBundle\Command\ChangePasswordCommand
     */
    protected function getFosUser_Command_ChangePasswordService()
    {
        $this->privates['fos_user.command.change_password'] = $instance = new \FOS\UserBundle\Command\ChangePasswordCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:change-password');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.create_user' shared service.
     *
     * @return \FOS\UserBundle\Command\CreateUserCommand
     */
    protected function getFosUser_Command_CreateUserService()
    {
        $this->privates['fos_user.command.create_user'] = $instance = new \FOS\UserBundle\Command\CreateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:create');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.deactivate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DeactivateUserCommand
     */
    protected function getFosUser_Command_DeactivateUserService()
    {
        $this->privates['fos_user.command.deactivate_user'] = $instance = new \FOS\UserBundle\Command\DeactivateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:deactivate');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.demote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DemoteUserCommand
     */
    protected function getFosUser_Command_DemoteUserService()
    {
        $this->privates['fos_user.command.demote_user'] = $instance = new \FOS\UserBundle\Command\DemoteUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:demote');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.promote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\PromoteUserCommand
     */
    protected function getFosUser_Command_PromoteUserService()
    {
        $this->privates['fos_user.command.promote_user'] = $instance = new \FOS\UserBundle\Command\PromoteUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:promote');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.group.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\GroupFormType
     */
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->privates['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('Kunstmaan\\AdminBundle\\Entity\\Group');
    }

    /*
     * Gets the private 'fos_user.listener.authentication' shared service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->privates['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener(new \FOS\UserBundle\Security\LoginManager(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService())), 'main');
    }

    /*
     * Gets the private 'fos_user.listener.flash' shared service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->privates['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener(($this->services['session'] ?? $this->getSessionService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'fos_user.listener.resetting' shared service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->privates['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener(($this->services['router'] ?? $this->getRouterService()), 86400);
    }

    /*
     * Gets the private 'fos_user.object_manager' shared service.
     *
     * @return \Doctrine\Common\Persistence\ObjectManager
     */
    protected function getFosUser_ObjectManagerService()
    {
        return $this->privates['fos_user.object_manager'] = ($this->services['doctrine'] ?? $this->getDoctrineService())->getManager(NULL);
    }

    /*
     * Gets the private 'fos_user.profile.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->privates['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /*
     * Gets the private 'fos_user.registration.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->privates['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /*
     * Gets the private 'fos_user.resetting.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->privates['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /*
     * Gets the private 'fos_user.security.interactive_login_listener' shared service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->privates['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /*
     * Gets the private 'fos_user.user_listener' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\UserListener
     */
    protected function getFosUser_UserListenerService()
    {
        return $this->privates['fos_user.user_listener'] = new \FOS\UserBundle\Doctrine\UserListener(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()));
    }

    /*
     * Gets the private 'fos_user.user_provider.username' shared service.
     *
     * @return \FOS\UserBundle\Security\UserProvider
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->privates['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /*
     * Gets the private 'fos_user.username_form_type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->privates['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService())));
    }

    /*
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = new \FOS\UserBundle\Util\Canonicalizer();

        return $this->privates['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /*
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->privates['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the private 'fos_user.util.user_manipulator' shared service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->privates['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'fragment.renderer.esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->privates['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(($this->privates['esi'] ?? ($this->privates['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi())), ($this->privates['fragment.renderer.inline'] ?? $this->getFragment_Renderer_InlineService()), new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET')));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'knp_gaufrette.command.filesystem_keys' shared service.
     *
     * @return \Knp\Bundle\GaufretteBundle\Command\FilesystemKeysCommand
     */
    protected function getKnpGaufrette_Command_FilesystemKeysService()
    {
        $this->privates['knp_gaufrette.command.filesystem_keys'] = $instance = new \Knp\Bundle\GaufretteBundle\Command\FilesystemKeysCommand(($this->services['knp_gaufrette.filesystem_map'] ?? ($this->services['knp_gaufrette.filesystem_map'] = new \Knp\Bundle\GaufretteBundle\FilesystemMap([]))));

        $instance->setName('gaufrette:filesystem:keys');

        return $instance;
    }

    /*
     * Gets the private 'knp_menu.menu_provider.builder_alias' shared service.
     *
     * @return \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider
     */
    protected function getKnpMenu_MenuProvider_BuilderAliasService()
    {
        return $this->privates['knp_menu.menu_provider.builder_alias'] = new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider(($this->services['kernel'] ?? $this->get('kernel', 1)), $this, ($this->services['knp_menu.factory'] ?? $this->getKnpMenu_FactoryService()));
    }

    /*
     * Gets the private 'knp_menu.menu_provider.lazy' shared service.
     *
     * @return \Knp\Menu\Provider\LazyProvider
     */
    protected function getKnpMenu_MenuProvider_LazyService()
    {
        return $this->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['sub_actions' => function () {
            return ($this->privates['kunstmaan_node.menu.sub_actions'] ?? $this->getKunstmaanNode_Menu_SubActionsService());
        }, 'actions' => function () {
            return ($this->privates['kunstmaan_node.menu.actions'] ?? $this->getKunstmaanNode_Menu_ActionsService());
        }, 'top_actions' => function () {
            return ($this->privates['kunstmaan_node.menu.top_actions'] ?? $this->getKunstmaanNode_Menu_TopActionsService());
        }]);
    }

    /*
     * Gets the private 'knp_menu.renderer.list' shared service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->privates['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService()), [], 'UTF-8');
    }

    /*
     * Gets the private 'knp_menu.renderer.twig' shared service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->privates['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer(($this->services['twig'] ?? $this->getTwigService()), '@KnpMenu/menu.html.twig', ($this->services['knp_menu.matcher'] ?? $this->getKnpMenu_MatcherService()), []);
    }

    /*
     * Gets the private 'knp_menu.voter.router' shared service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->privates['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'kunstmaan_admin.admin_locale.listener' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\AdminLocaleListener
     */
    protected function getKunstmaanAdmin_AdminLocale_ListenerService()
    {
        return $this->privates['kunstmaan_admin.admin_locale.listener'] = new \Kunstmaan\AdminBundle\EventListener\AdminLocaleListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['kunstmaan_admin.adminroute.helper'] ?? $this->getKunstmaanAdmin_Adminroute_HelperService()), 'en', 'main');
    }

    /*
     * Gets the private 'kunstmaan_admin.consolelogger.listener' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\ConsoleExceptionListener
     */
    protected function getKunstmaanAdmin_Consolelogger_ListenerService()
    {
        return $this->privates['kunstmaan_admin.consolelogger.listener'] = new \Kunstmaan\AdminBundle\EventListener\ConsoleExceptionListener(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'kunstmaan_admin.consolelogger.subscriber' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\ConsoleExceptionSubscriber
     */
    protected function getKunstmaanAdmin_Consolelogger_SubscriberService()
    {
        return $this->privates['kunstmaan_admin.consolelogger.subscriber'] = new \Kunstmaan\AdminBundle\EventListener\ConsoleExceptionSubscriber(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'kunstmaan_admin.doctrine_mapping.listener' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\MappingListener
     */
    protected function getKunstmaanAdmin_DoctrineMapping_ListenerService()
    {
        return $this->privates['kunstmaan_admin.doctrine_mapping.listener'] = new \Kunstmaan\AdminBundle\EventListener\MappingListener('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /*
     * Gets the private 'kunstmaan_admin.exception.listener' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\ExceptionSubscriber
     */
    protected function getKunstmaanAdmin_Exception_ListenerService()
    {
        return $this->privates['kunstmaan_admin.exception.listener'] = new \Kunstmaan\AdminBundle\EventListener\ExceptionSubscriber(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), []);
    }

    /*
     * Gets the private 'kunstmaan_admin.form.type.color' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Form\ColorType
     */
    protected function getKunstmaanAdmin_Form_Type_ColorService()
    {
        return $this->privates['kunstmaan_admin.form.type.color'] = new \Kunstmaan\AdminBundle\Form\ColorType();
    }

    /*
     * Gets the private 'kunstmaan_admin.form.type.range' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Form\RangeType
     */
    protected function getKunstmaanAdmin_Form_Type_RangeService()
    {
        return $this->privates['kunstmaan_admin.form.type.range'] = new \Kunstmaan\AdminBundle\Form\RangeType();
    }

    /*
     * Gets the private 'kunstmaan_admin.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getKunstmaanAdmin_LoggerService()
    {
        $this->privates['kunstmaan_admin.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('kunstmaan');

        $instance->pushHandler(new \Monolog\Handler\RotatingFileHandler((\dirname(__DIR__, 3).'/log/kunstmaan_dev.log'), 10));
        $instance->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);

        return $instance;
    }

    /*
     * Gets the private 'kunstmaan_admin.logger.processor.user' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\UserProcessor
     */
    protected function getKunstmaanAdmin_Logger_Processor_UserService()
    {
        return $this->privates['kunstmaan_admin.logger.processor.user'] = new \Kunstmaan\AdminBundle\Helper\UserProcessor(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /*
     * Gets the private 'kunstmaan_admin.login.listener' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\LoginListener
     */
    protected function getKunstmaanAdmin_Login_ListenerService()
    {
        return $this->privates['kunstmaan_admin.login.listener'] = new \Kunstmaan\AdminBundle\EventListener\LoginListener(($this->privates['kunstmaan_admin.logger'] ?? $this->getKunstmaanAdmin_LoggerService()), ($this->services['kunstmaan_admin.versionchecker'] ?? $this->getKunstmaanAdmin_VersioncheckerService()), ($this->services['kunstmaan_admin.adminroute.helper'] ?? $this->getKunstmaanAdmin_Adminroute_HelperService()));
    }

    /*
     * Gets the private 'kunstmaan_admin.password_check.listener' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\PasswordCheckListener
     */
    protected function getKunstmaanAdmin_PasswordCheck_ListenerService()
    {
        return $this->privates['kunstmaan_admin.password_check.listener'] = new \Kunstmaan\AdminBundle\EventListener\PasswordCheckListener(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['router.default'] ?? $this->getRouter_DefaultService()), ($this->services['session'] ?? $this->getSessionService()), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['kunstmaan_admin.adminroute.helper'] ?? $this->getKunstmaanAdmin_Adminroute_HelperService()));
    }

    /*
     * Gets the private 'kunstmaan_admin.password_resetting.listener' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\PasswordResettingListener
     */
    protected function getKunstmaanAdmin_PasswordResetting_ListenerService()
    {
        return $this->privates['kunstmaan_admin.password_resetting.listener'] = new \Kunstmaan\AdminBundle\EventListener\PasswordResettingListener(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /*
     * Gets the private 'kunstmaan_admin.permissionadmin' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionAdmin
     */
    protected function getKunstmaanAdmin_PermissionadminService()
    {
        return $this->privates['kunstmaan_admin.permissionadmin'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionAdmin(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? ($this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['kunstmaan_utilities.shell'] ?? ($this->privates['kunstmaan_utilities.shell'] = new \Kunstmaan\UtilitiesBundle\Helper\Shell\Shell())), ($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /*
     * Gets the private 'kunstmaan_admin.security.acl.voter' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Security\Acl\Voter\AclVoter
     */
    protected function getKunstmaanAdmin_Security_Acl_VoterService()
    {
        return $this->privates['kunstmaan_admin.security.acl.voter'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\Voter\AclVoter(($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? ($this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy())), ($this->privates['security.acl.security_identity_retrieval_strategy'] ?? $this->getSecurity_Acl_SecurityIdentityRetrievalStrategyService()), ($this->privates['kunstmaan_admin.security.acl.permission.map'] ?? ($this->privates['kunstmaan_admin.security.acl.permission.map'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionMap())), NULL, true, false);
    }

    /*
     * Gets the private 'kunstmaan_admin.session_security' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\SessionSecurityListener
     */
    protected function getKunstmaanAdmin_SessionSecurityService()
    {
        return $this->privates['kunstmaan_admin.session_security'] = new \Kunstmaan\AdminBundle\EventListener\SessionSecurityListener(false, false, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'kunstmaan_admin.toolbar.listener' shared service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\ToolbarListener
     */
    protected function getKunstmaanAdmin_Toolbar_ListenerService()
    {
        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['kunstmaan_admin.toolbar.listener'] = new \Kunstmaan\AdminBundle\EventListener\ToolbarListener(($this->services['twig'] ?? $this->getTwigService()), $a, new \Kunstmaan\AdminBundle\Helper\Toolbar\DataCollector($a), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), false, $this, ($this->services['kunstmaan_admin.adminroute.helper'] ?? $this->getKunstmaanAdmin_Adminroute_HelperService()), $this->parameters['kunstmaan_admin.toolbar_firewall_names'], 'main');
    }

    /*
     * Gets the private 'kunstmaan_admin.validator.password_restrictions' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Validator\Constraints\PasswordRestrictionsValidator
     */
    protected function getKunstmaanAdmin_Validator_PasswordRestrictionsService()
    {
        return $this->privates['kunstmaan_admin.validator.password_restrictions'] = new \Kunstmaan\AdminBundle\Validator\Constraints\PasswordRestrictionsValidator(NULL, NULL, NULL, NULL, NULL);
    }

    /*
     * Gets the private 'kunstmaan_adminlist.subscriber.adminlist' shared service.
     *
     * @return \Kunstmaan\AdminListBundle\EventSubscriber\AdminListSubscriber
     */
    protected function getKunstmaanAdminlist_Subscriber_AdminlistService()
    {
        return $this->privates['kunstmaan_adminlist.subscriber.adminlist'] = new \Kunstmaan\AdminListBundle\EventSubscriber\AdminListSubscriber(($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'kunstmaan_form.configure_sub_actions_menu_listener' shared service.
     *
     * @return \Kunstmaan\FormBundle\EventListener\ConfigureActionsMenuListener
     */
    protected function getKunstmaanForm_ConfigureSubActionsMenuListenerService()
    {
        return $this->privates['kunstmaan_form.configure_sub_actions_menu_listener'] = new \Kunstmaan\FormBundle\EventListener\ConfigureActionsMenuListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'kunstmaan_form.send_email_listener' shared service.
     *
     * @return \Kunstmaan\FormBundle\EventListener\SendEmailListener
     */
    protected function getKunstmaanForm_SendEmailListenerService()
    {
        return $this->privates['kunstmaan_form.send_email_listener'] = new \Kunstmaan\FormBundle\EventListener\SendEmailListener(($this->services['kunstmaan_form.form_mailer'] ?? $this->getKunstmaanForm_FormMailerService()));
    }

    /*
     * Gets the private 'kunstmaan_form.type.wysiwyg' shared service.
     *
     * @return \Kunstmaan\AdminBundle\Form\WysiwygType
     */
    protected function getKunstmaanForm_Type_WysiwygService()
    {
        return $this->privates['kunstmaan_form.type.wysiwyg'] = new \Kunstmaan\AdminBundle\Form\WysiwygType(new \Kunstmaan\AdminBundle\Form\MediaTokenTransformer());
    }

    /*
     * Gets the private 'kunstmaan_media.filesystem' shared service.
     *
     * @return \Gaufrette\Filesystem
     */
    protected function getKunstmaanMedia_FilesystemService()
    {
        return $this->privates['kunstmaan_media.filesystem'] = new \Gaufrette\Filesystem(new \Gaufrette\Adapter\Local((\dirname(__DIR__, 4).'/public/uploads/media/'), true));
    }

    /*
     * Gets the private 'kunstmaan_media.listener.doctrine' shared service.
     *
     * @return \Kunstmaan\MediaBundle\EventListener\DoctrineMediaListener
     */
    protected function getKunstmaanMedia_Listener_DoctrineService()
    {
        return $this->privates['kunstmaan_media.listener.doctrine'] = new \Kunstmaan\MediaBundle\EventListener\DoctrineMediaListener(($this->services['kunstmaan_media.media_manager'] ?? $this->getKunstmaanMedia_MediaManagerService()));
    }

    /*
     * Gets the private 'kunstmaan_media.repository.folder' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Repository\FolderRepository
     */
    protected function getKunstmaanMedia_Repository_FolderService()
    {
        return $this->privates['kunstmaan_media.repository.folder'] = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('KunstmaanMediaBundle:Folder');
    }

    /*
     * Gets the private 'kunstmaan_media.validator.has_guessable_extension' shared service.
     *
     * @return \Kunstmaan\MediaBundle\Validator\Constraints\HasGuessableExtensionValidator
     */
    protected function getKunstmaanMedia_Validator_HasGuessableExtensionService()
    {
        return $this->privates['kunstmaan_media.validator.has_guessable_extension'] = new \Kunstmaan\MediaBundle\Validator\Constraints\HasGuessableExtensionValidator(($this->services['mime_types'] ?? ($this->services['mime_types'] = new \Symfony\Component\Mime\MimeTypes())));
    }

    /*
     * Gets the private 'kunstmaan_node.doctrine_mapping.listener' shared service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\MappingListener
     */
    protected function getKunstmaanNode_DoctrineMapping_ListenerService()
    {
        return $this->privates['kunstmaan_node.doctrine_mapping.listener'] = new \Kunstmaan\NodeBundle\EventListener\MappingListener('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /*
     * Gets the private 'kunstmaan_node.edit_node.listener' shared service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\NodeListener
     */
    protected function getKunstmaanNode_EditNode_ListenerService()
    {
        return $this->privates['kunstmaan_node.edit_node.listener'] = new \Kunstmaan\NodeBundle\EventListener\NodeListener(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['kunstmaan_admin.permissionadmin'] ?? $this->getKunstmaanAdmin_PermissionadminService()), ($this->privates['kunstmaan_admin.security.acl.permission.map'] ?? ($this->privates['kunstmaan_admin.security.acl.permission.map'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionMap())), false);
    }

    /*
     * Gets the private 'kunstmaan_node.entity_tabs.listener' shared service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\EntityTabListener
     */
    protected function getKunstmaanNode_EntityTabs_ListenerService()
    {
        return $this->privates['kunstmaan_node.entity_tabs.listener'] = new \Kunstmaan\NodeBundle\EventListener\EntityTabListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['form.factory'] ?? $this->getForm_FactoryService()));
    }

    /*
     * Gets the private 'kunstmaan_node.form.type.nodechoice' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Form\NodeChoiceType
     */
    protected function getKunstmaanNode_Form_Type_NodechoiceService()
    {
        return $this->privates['kunstmaan_node.form.type.nodechoice'] = new \Kunstmaan\NodeBundle\Form\NodeChoiceType(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'kunstmaan_node.form.type.slug' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Form\Type\SlugType
     */
    protected function getKunstmaanNode_Form_Type_SlugService()
    {
        return $this->privates['kunstmaan_node.form.type.slug'] = new \Kunstmaan\NodeBundle\Form\Type\SlugType(($this->services['kunstmaan_utilities.slugifier'] ?? ($this->services['kunstmaan_utilities.slugifier'] = new \Kunstmaan\UtilitiesBundle\Helper\Slugifier())));
    }

    /*
     * Gets the private 'kunstmaan_node.form.type.urlchooser' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Form\Type\URLChooserType
     */
    protected function getKunstmaanNode_Form_Type_UrlchooserService()
    {
        return $this->privates['kunstmaan_node.form.type.urlchooser'] = new \Kunstmaan\NodeBundle\Form\Type\URLChooserType();
    }

    /*
     * Gets the private 'kunstmaan_node.helper.url' shared service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\URLHelper
     */
    protected function getKunstmaanNode_Helper_UrlService()
    {
        return $this->privates['kunstmaan_node.helper.url'] = new \Kunstmaan\NodeBundle\Helper\URLHelper(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->services['kunstmaan_admin.domain_configuration'] ?? $this->getKunstmaanAdmin_DomainConfigurationService()));
    }

    /*
     * Gets the private 'kunstmaan_node.log_page_events.subscriber' shared service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\LogPageEventsSubscriber
     */
    protected function getKunstmaanNode_LogPageEvents_SubscriberService()
    {
        return $this->privates['kunstmaan_node.log_page_events.subscriber'] = new \Kunstmaan\NodeBundle\EventListener\LogPageEventsSubscriber(($this->privates['kunstmaan_admin.logger'] ?? $this->getKunstmaanAdmin_LoggerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the private 'kunstmaan_node.menu.actions' shared service.
     *
     * @return \Knp\Menu\MenuItem
     */
    protected function getKunstmaanNode_Menu_ActionsService()
    {
        return $this->privates['kunstmaan_node.menu.actions'] = ($this->services['kunstmaan_node.actions_menu_builder'] ?? $this->getKunstmaanNode_ActionsMenuBuilderService())->createActionsMenu();
    }

    /*
     * Gets the private 'kunstmaan_node.menu.sub_actions' shared service.
     *
     * @return \Knp\Menu\MenuItem
     */
    protected function getKunstmaanNode_Menu_SubActionsService()
    {
        return $this->privates['kunstmaan_node.menu.sub_actions'] = ($this->services['kunstmaan_node.actions_menu_builder'] ?? $this->getKunstmaanNode_ActionsMenuBuilderService())->createSubActionsMenu();
    }

    /*
     * Gets the private 'kunstmaan_node.menu.top_actions' shared service.
     *
     * @return \Knp\Menu\MenuItem
     */
    protected function getKunstmaanNode_Menu_TopActionsService()
    {
        return $this->privates['kunstmaan_node.menu.top_actions'] = ($this->services['kunstmaan_node.actions_menu_builder'] ?? $this->getKunstmaanNode_ActionsMenuBuilderService())->createTopActionsMenu();
    }

    /*
     * Gets the private 'kunstmaan_node.nodetranslation.listener' shared service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\NodeTranslationListener
     */
    protected function getKunstmaanNode_Nodetranslation_ListenerService()
    {
        return $this->privates['kunstmaan_node.nodetranslation.listener'] = new \Kunstmaan\NodeBundle\EventListener\NodeTranslationListener(($this->services['session'] ?? $this->getSessionService()), ($this->privates['kunstmaan_admin.logger'] ?? $this->getKunstmaanAdmin_LoggerService()), ($this->services['kunstmaan_utilities.slugifier'] ?? ($this->services['kunstmaan_utilities.slugifier'] = new \Kunstmaan\UtilitiesBundle\Helper\Slugifier())), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['kunstmaan_admin.domain_configuration'] ?? $this->getKunstmaanAdmin_DomainConfigurationService()), ($this->services['kunstmaan_node.pages_configuration'] ?? ($this->services['kunstmaan_node.pages_configuration'] = new \Kunstmaan\NodeBundle\Helper\PagesConfiguration([]))));
    }

    /*
     * Gets the private 'kunstmaan_node.render.context.listener' shared service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\RenderContextListener
     */
    protected function getKunstmaanNode_Render_Context_ListenerService()
    {
        return $this->privates['kunstmaan_node.render.context.listener'] = new \Kunstmaan\NodeBundle\EventListener\RenderContextListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'kunstmaan_node.slug.listener' shared service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\SlugListener
     */
    protected function getKunstmaanNode_Slug_ListenerService()
    {
        return $this->privates['kunstmaan_node.slug.listener'] = new \Kunstmaan\NodeBundle\EventListener\SlugListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['controller_resolver'] ?? $this->getControllerResolverService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private 'kunstmaan_node.slug.security.listener' shared service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\SlugSecurityListener
     */
    protected function getKunstmaanNode_Slug_Security_ListenerService()
    {
        return $this->privates['kunstmaan_node.slug.security.listener'] = new \Kunstmaan\NodeBundle\EventListener\SlugSecurityListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['kunstmaan_node.node_menu'] ?? $this->getKunstmaanNode_NodeMenuService()), false);
    }

    /*
     * Gets the private 'kunstmaan_node_search.node_index_update.listener' shared service.
     *
     * @return \Kunstmaan\NodeSearchBundle\EventListener\NodeIndexUpdateEventListener
     */
    protected function getKunstmaanNodeSearch_NodeIndexUpdate_ListenerService()
    {
        return $this->privates['kunstmaan_node_search.node_index_update.listener'] = new \Kunstmaan\NodeSearchBundle\EventListener\NodeIndexUpdateEventListener(($this->privates['kunstmaan_node_search.search_configuration.node'] ?? $this->getKunstmaanNodeSearch_SearchConfiguration_NodeService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'kunstmaan_node_search.search_configuration.node' shared service.
     *
     * @return \Kunstmaan\NodeSearchBundle\Configuration\NodePagesConfiguration
     */
    protected function getKunstmaanNodeSearch_SearchConfiguration_NodeService()
    {
        $this->privates['kunstmaan_node_search.search_configuration.node'] = $instance = new \Kunstmaan\NodeSearchBundle\Configuration\NodePagesConfiguration($this, ($this->privates['kunstmaan_search.search'] ?? $this->getKunstmaanSearch_SearchService()), 'nodeindex', 'page', 1, 0);

        $instance->setAclProvider(($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()));
        $instance->setIndexablePagePartsService(($this->privates['kunstmaan_node_search.service.indexable_pageparts'] ?? $this->getKunstmaanNodeSearch_Service_IndexablePagepartsService()));
        $instance->setDefaultProperties(['root_id' => ['type' => 'integer'], 'node_id' => ['type' => 'integer'], 'nodetranslation_id' => ['type' => 'integer'], 'nodeversion_id' => ['type' => 'integer'], 'title' => ['type' => 'text'], 'slug' => ['type' => 'text'], 'type' => ['type' => 'keyword'], 'page_class' => ['type' => 'keyword'], 'content' => ['type' => 'text'], 'view_roles' => ['type' => 'keyword']]);

        return $instance;
    }

    /*
     * Gets the private 'kunstmaan_node_search.service.indexable_pageparts' shared service.
     *
     * @return \Kunstmaan\NodeSearchBundle\Helper\IndexablePagePartsService
     */
    protected function getKunstmaanNodeSearch_Service_IndexablePagepartsService()
    {
        return $this->privates['kunstmaan_node_search.service.indexable_pageparts'] = new \Kunstmaan\NodeSearchBundle\Helper\IndexablePagePartsService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), []);
    }

    /*
     * Gets the private 'kunstmaan_page_part.page_template.page_template_configuration_service' shared service.
     *
     * @return \Kunstmaan\PagePartBundle\PageTemplate\PageTemplateConfigurationService
     */
    protected function getKunstmaanPagePart_PageTemplate_PageTemplateConfigurationServiceService()
    {
        return $this->privates['kunstmaan_page_part.page_template.page_template_configuration_service'] = new \Kunstmaan\PagePartBundle\PageTemplate\PageTemplateConfigurationService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('KunstmaanPagePartBundle:PageTemplateConfiguration'), ($this->privates['kunstmaan_page_part.page_template_configuration_reader'] ?? $this->getKunstmaanPagePart_PageTemplateConfigurationReaderService()));
    }

    /*
     * Gets the private 'kunstmaan_page_part.page_template_configuration_reader' shared service.
     *
     * @return \Kunstmaan\PagePartBundle\PageTemplate\PageTemplateConfigurationReader
     */
    protected function getKunstmaanPagePart_PageTemplateConfigurationReaderService()
    {
        return $this->privates['kunstmaan_page_part.page_template_configuration_reader'] = new \Kunstmaan\PagePartBundle\PageTemplate\PageTemplateConfigurationReader(new \Kunstmaan\PagePartBundle\PageTemplate\PageTemplateConfigurationParser(($this->services['kernel'] ?? $this->get('kernel', 1)), $this->parameters['kunstmaan_page_part.page_templates_presets']));
    }

    /*
     * Gets the private 'kunstmaan_pageparts.clone.listener' shared service.
     *
     * @return \Kunstmaan\PagePartBundle\EventListener\CloneListener
     */
    protected function getKunstmaanPageparts_Clone_ListenerService()
    {
        return $this->privates['kunstmaan_pageparts.clone.listener'] = new \Kunstmaan\PagePartBundle\EventListener\CloneListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['kunstmaan_page_part.page_part_configuration_reader'] ?? $this->getKunstmaanPagePart_PagePartConfigurationReaderService()), ($this->privates['kunstmaan_page_part.page_template.page_template_configuration_service'] ?? $this->getKunstmaanPagePart_PageTemplate_PageTemplateConfigurationServiceService()));
    }

    /*
     * Gets the private 'kunstmaan_pageparts.edit_node.listener' shared service.
     *
     * @return \Kunstmaan\PagePartBundle\EventListener\NodeListener
     */
    protected function getKunstmaanPageparts_EditNode_ListenerService()
    {
        return $this->privates['kunstmaan_pageparts.edit_node.listener'] = new \Kunstmaan\PagePartBundle\EventListener\NodeListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), new \Kunstmaan\PagePartBundle\PagePartAdmin\PagePartAdminFactory($this), ($this->privates['kunstmaan_page_part.page_template_configuration_reader'] ?? $this->getKunstmaanPagePart_PageTemplateConfigurationReaderService()), ($this->services['kunstmaan_page_part.page_part_configuration_reader'] ?? $this->getKunstmaanPagePart_PagePartConfigurationReaderService()), ($this->privates['kunstmaan_page_part.page_template.page_template_configuration_service'] ?? $this->getKunstmaanPagePart_PageTemplate_PageTemplateConfigurationServiceService()));
    }

    /*
     * Gets the private 'kunstmaan_redirect.form.type' shared service.
     *
     * @return \Kunstmaan\RedirectBundle\Form\RedirectAdminType
     */
    protected function getKunstmaanRedirect_Form_TypeService()
    {
        return $this->privates['kunstmaan_redirect.form.type'] = new \Kunstmaan\RedirectBundle\Form\RedirectAdminType(($this->services['kunstmaan_admin.domain_configuration'] ?? $this->getKunstmaanAdmin_DomainConfigurationService()));
    }

    /*
     * Gets the private 'kunstmaan_search.search' shared service.
     *
     * @return \Kunstmaan\SearchBundle\Search\Search
     */
    protected function getKunstmaanSearch_SearchService()
    {
        $a = new \Kunstmaan\SearchBundle\Provider\SearchProviderChain();

        $b = new \Kunstmaan\SearchBundle\Provider\ElasticaProvider();
        $b->addNode('localhost', 9200, NULL, NULL);

        $a->addProvider($b, 'Elastica');

        return $this->privates['kunstmaan_search.search'] = new \Kunstmaan\SearchBundle\Search\Search($a, 'myproject', 'Elastica');
    }

    /*
     * Gets the private 'kunstmaan_search.search_configuration_chain' shared service.
     *
     * @return \Kunstmaan\SearchBundle\Configuration\SearchConfigurationChain
     */
    protected function getKunstmaanSearch_SearchConfigurationChainService()
    {
        $this->privates['kunstmaan_search.search_configuration_chain'] = $instance = new \Kunstmaan\SearchBundle\Configuration\SearchConfigurationChain();

        $instance->addConfiguration(($this->privates['kunstmaan_node_search.search_configuration.node'] ?? $this->getKunstmaanNodeSearch_SearchConfiguration_NodeService()), 'Node');

        return $instance;
    }

    /*
     * Gets the private 'kunstmaan_seo.clone.listener' shared service.
     *
     * @return \Kunstmaan\SeoBundle\EventListener\CloneListener
     */
    protected function getKunstmaanSeo_Clone_ListenerService()
    {
        return $this->privates['kunstmaan_seo.clone.listener'] = new \Kunstmaan\SeoBundle\EventListener\CloneListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['kunstmaan_admin.clone.helper'] ?? $this->getKunstmaanAdmin_Clone_HelperService()));
    }

    /*
     * Gets the private 'kunstmaan_seo.node.listener' shared service.
     *
     * @return \Kunstmaan\SeoBundle\EventListener\NodeListener
     */
    protected function getKunstmaanSeo_Node_ListenerService()
    {
        return $this->privates['kunstmaan_seo.node.listener'] = new \Kunstmaan\SeoBundle\EventListener\NodeListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'liip_imagine.binary.mime_type_guesser' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser
     */
    protected function getLiipImagine_Binary_MimeTypeGuesserService()
    {
        return $this->privates['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser(\Symfony\Component\Mime\MimeTypes::getDefault());
    }

    /*
     * Gets the private 'liip_imagine.command.cache_remove' shared service.
     *
     * @return \Liip\ImagineBundle\Command\RemoveCacheCommand
     */
    protected function getLiipImagine_Command_CacheRemoveService()
    {
        $this->privates['liip_imagine.command.cache_remove'] = $instance = new \Liip\ImagineBundle\Command\RemoveCacheCommand(($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->services['liip_imagine.filter.manager'] ?? $this->getLiipImagine_Filter_ManagerService()));

        $instance->setName('liip:imagine:cache:remove');

        return $instance;
    }

    /*
     * Gets the private 'liip_imagine.command.cache_resolve' shared service.
     *
     * @return \Liip\ImagineBundle\Command\ResolveCacheCommand
     */
    protected function getLiipImagine_Command_CacheResolveService()
    {
        $this->privates['liip_imagine.command.cache_resolve'] = $instance = new \Liip\ImagineBundle\Command\ResolveCacheCommand(($this->services['liip_imagine.data.manager'] ?? $this->getLiipImagine_Data_ManagerService()), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->services['liip_imagine.filter.manager'] ?? $this->getLiipImagine_Filter_ManagerService()));

        $instance->setName('liip:imagine:cache:resolve');

        return $instance;
    }

    /*
     * Gets the private 'liip_imagine.filter.configuration' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->privates['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration($this->parameters['liip_imagine.filter_sets']);
    }

    /*
     * Gets the private 'liip_imagine.form.type.image' shared service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->privates['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /*
     * Gets the private 'liip_imagine.imagick' shared service.
     *
     * @return \Imagine\Imagick\Imagine
     */
    protected function getLiipImagine_ImagickService()
    {
        $this->privates['liip_imagine.imagick'] = $instance = new \Imagine\Imagick\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'maker.auto_command.make_auth' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeAuthService()
    {
        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_auth'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator($a, ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), $b, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, $b);

        $instance->setDescription('Creates a Guard authenticator of different flavors');
        $instance->setName('make:auth');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_command' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCommandService()
    {
        $this->privates['maker.auto_command.make_command'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCommand(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new console command class');
        $instance->setName('make:command');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_controller' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeControllerService()
    {
        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_controller'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeController($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new controller class');
        $instance->setName('make:controller');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_crud' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCrudService()
    {
        $this->privates['maker.auto_command.make_crud'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCrud(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates CRUD for Doctrine entity class');
        $instance->setName('make:crud');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_docker_database' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeDockerDatabaseService()
    {
        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_docker_database'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeDockerDatabase($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Adds a database container to your docker-compose.yaml file');
        $instance->setName('make:docker:database');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_entity' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeEntityService()
    {
        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_entity'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeEntity($a, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), \dirname(__DIR__, 4), $b, ($this->privates['maker.entity_class_generator'] ?? $this->getMaker_EntityClassGeneratorService())), $a, $b);

        $instance->setDescription('Creates or updates a Doctrine entity class, and optionally an API Platform resource');
        $instance->setName('make:entity');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_fixtures' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFixturesService()
    {
        $this->privates['maker.auto_command.make_fixtures'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFixtures(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new class to load Doctrine fixtures');
        $instance->setName('make:fixtures');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFormService()
    {
        $this->privates['maker.auto_command.make_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeForm(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new form class');
        $instance->setName('make:form');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_message' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMessageService()
    {
        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_message'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMessage($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new message and handler');
        $instance->setName('make:message');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_messenger_middleware' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMessengerMiddlewareService()
    {
        $this->privates['maker.auto_command.make_messenger_middleware'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMessengerMiddleware(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new messenger middleware');
        $instance->setName('make:messenger-middleware');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_migration' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMigrationService()
    {
        $this->privates['maker.auto_command.make_migration'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMigration(\dirname(__DIR__, 4)), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new migration based on database changes');
        $instance->setName('make:migration');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_registration_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeRegistrationFormService()
    {
        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_registration_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm($a, ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new registration form system');
        $instance->setName('make:registration-form');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_reset_password' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeResetPasswordService()
    {
        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_reset_password'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeResetPassword($a, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.entity_class_generator'] ?? $this->getMaker_EntityClassGeneratorService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Create controller, entity, and repositories for use with symfonycasts/reset-password-bundle');
        $instance->setName('make:reset-password');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_serializer_encoder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerEncoderService()
    {
        $this->privates['maker.auto_command.make_serializer_encoder'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new serializer encoder class');
        $instance->setName('make:serializer:encoder');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_serializer_normalizer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerNormalizerService()
    {
        $this->privates['maker.auto_command.make_serializer_normalizer'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerNormalizer(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new serializer normalizer class');
        $instance->setName('make:serializer:normalizer');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_subscriber' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSubscriberService()
    {
        $this->privates['maker.auto_command.make_subscriber'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber(new \Symfony\Bundle\MakerBundle\EventRegistry(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()))), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new event subscriber class');
        $instance->setName('make:subscriber');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTestService()
    {
        $this->privates['maker.auto_command.make_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new test class');
        $instance->setName('make:test');
        $instance->setAliases([0 => 'make:unit-test', 1 => 'make:functional-test']);

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_twig_extension' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTwigExtensionService()
    {
        $this->privates['maker.auto_command.make_twig_extension'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTwigExtension(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new Twig extension class');
        $instance->setName('make:twig-extension');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUserService()
    {
        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), ($this->privates['maker.entity_class_generator'] ?? $this->getMaker_EntityClassGeneratorService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new security user class');
        $instance->setName('make:user');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_validator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeValidatorService()
    {
        $this->privates['maker.auto_command.make_validator'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeValidator(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new validator and constraint class');
        $instance->setName('make:validator');

        return $instance;
    }

    /*
     * Gets the private 'maker.auto_command.make_voter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeVoterService()
    {
        $this->privates['maker.auto_command.make_voter'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeVoter(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setDescription('Creates a new security voter class');
        $instance->setName('make:voter');

        return $instance;
    }

    /*
     * Gets the private 'maker.doctrine_helper' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper
     */
    protected function getMaker_DoctrineHelperService()
    {
        return $this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', ($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'maker.entity_class_generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator
     */
    protected function getMaker_EntityClassGeneratorService()
    {
        $this->privates['maker.entity_class_generator'] = $instance = new \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()), ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()));

        $instance->setMangerRegistryClassName('Doctrine\\Persistence\\ManagerRegistry');

        return $instance;
    }

    /*
     * Gets the private 'maker.file_manager' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\FileManager
     */
    protected function getMaker_FileManagerService()
    {
        return $this->privates['maker.file_manager'] = new \Symfony\Bundle\MakerBundle\FileManager(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App')), new \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter(($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), \dirname(__DIR__, 4), (\dirname(__DIR__, 4).'/templates'));
    }

    /*
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    protected function getMaker_GeneratorService()
    {
        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        return $this->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator($a, 'App', new \Symfony\Bundle\MakerBundle\Util\PhpCompatUtil($a));
    }

    /*
     * Gets the private 'maker.renderer.form_type_renderer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer
     */
    protected function getMaker_Renderer_FormTypeRendererService()
    {
        return $this->privates['maker.renderer.form_type_renderer'] = new \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));
    }

    /*
     * Gets the private 'monolog.command.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Command\ServerLogCommand
     */
    protected function getMonolog_Command_ServerLogService()
    {
        $this->privates['monolog.command.server_log'] = $instance = new \Symfony\Bridge\Monolog\Command\ServerLogCommand();

        $instance->setName('server:log');

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /*
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), true);
    }

    /*
     * Gets the private 'property_info.cache' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor
     */
    protected function getPropertyInfo_CacheService()
    {
        return $this->privates['property_info.cache'] = new \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor(new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1)), ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
    }

    /*
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService()));
    }

    /*
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /*
     * Gets the private 'router.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouter_DefaultService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->privates['router.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'en');

        $instance->setConfigCacheFactory(new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory());

        return $instance;
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))));
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.acl.voter.basic_permissions'] ?? $this->getSecurity_Acl_Voter_BasicPermissionsService());
            yield 1 => ($this->privates['kunstmaan_admin.security.acl.voter'] ?? $this->getKunstmaanAdmin_Security_Acl_VoterService());
            yield 2 => ($this->privates['security.access.authenticated_voter'] ?? $this->getSecurity_Access_AuthenticatedVoterService());
            yield 3 => ($this->privates['security.access.role_hierarchy_voter'] ?? $this->getSecurity_Access_RoleHierarchyVoterService());
            yield 4 => ($this->privates['security.access.expression_voter'] ?? $this->getSecurity_Access_ExpressionVoterService());
        }, 5), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->privates['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()));
    }

    /*
     * Gets the private 'security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter
     */
    protected function getSecurity_Access_RoleHierarchyVoterService()
    {
        return $this->privates['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()));
    }

    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/([^/]*)/admin/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/([^/]*)/admin/resetting'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/([^/]*)/admin'), [0 => 'ROLE_ADMIN'], NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.acl.dbal.schema_listener' shared service.
     *
     * @return \Symfony\Bundle\AclBundle\EventListener\AclSchemaListener
     */
    protected function getSecurity_Acl_Dbal_SchemaListenerService()
    {
        return $this->privates['security.acl.dbal.schema_listener'] = new \Symfony\Bundle\AclBundle\EventListener\AclSchemaListener(($this->services['security.acl.dbal.schema'] ?? $this->getSecurity_Acl_Dbal_SchemaService()));
    }

    /*
     * Gets the private 'security.acl.security_identity_retrieval_strategy' shared service.
     *
     * @return \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy
     */
    protected function getSecurity_Acl_SecurityIdentityRetrievalStrategyService()
    {
        return $this->privates['security.acl.security_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy(($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))));
    }

    /*
     * Gets the private 'security.acl.voter.basic_permissions' shared service.
     *
     * @return \Symfony\Component\Security\Acl\Voter\AclVoter
     */
    protected function getSecurity_Acl_Voter_BasicPermissionsService()
    {
        return $this->privates['security.acl.voter.basic_permissions'] = new \Symfony\Component\Security\Acl\Voter\AclVoter(($this->services['security.acl.provider'] ?? $this->getSecurity_Acl_ProviderService()), ($this->privates['security.acl.object_identity_retrieval_strategy'] ?? ($this->privates['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy())), ($this->privates['security.acl.security_identity_retrieval_strategy'] ?? $this->getSecurity_Acl_SecurityIdentityRetrievalStrategyService()), new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap(), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), true);
    }

    /*
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.authentication.listener.form.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Form_MainService()
    {
        $a = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['login_path' => 'fos_user_security_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $b->setProviderKey('main');
        $c = ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService());

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, [], $c);
        $d->setOptions(['login_path' => 'fos_user_security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        $this->privates['security.authentication.listener.form.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'main', $b, $d, ['check_path' => 'fos_user_security_check', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL);

        $instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.listener.rememberme.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\RememberMeListener
     */
    protected function getSecurity_Authentication_Listener_Rememberme_MainService()
    {
        return $this->privates['security.authentication.listener.rememberme.main'] = new \Symfony\Component\Security\Http\Firewall\RememberMeListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), true, ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->getSecurity_Authentication_Provider_Dao_MainService());
            yield 1 => ($this->privates['security.authentication.provider.rememberme.main'] ?? $this->getSecurity_Authentication_Provider_Rememberme_MainService());
            yield 2 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 3), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), true);
    }

    /*
     * Gets the private 'security.authentication.provider.rememberme.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Rememberme_MainService()
    {
        return $this->privates['security.authentication.provider.rememberme.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider(($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), $this->getEnv('APP_SECRET'), 'main');
    }

    /*
     * Gets the private 'security.authentication.rememberme.services.simplehash.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices
     */
    protected function getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()
    {
        return $this->privates['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices([0 => ($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService())], $this->getEnv('APP_SECRET'), 'main', ['lifetime' => 604800, 'path' => '/', 'domain' => NULL, 'name' => 'REMEMBERME', 'secure' => NULL, 'httponly' => true, 'samesite' => 'lax', 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'], ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /*
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /*
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'FOS\\UserBundle\\Model\\UserInterface']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /*
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        $this->privates['security.context_listener.0'] = $instance = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService());
        }, 1), 'main', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);

        $instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /*
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['FOS\\UserBundle\\Model\\UserInterface' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => '2y']]]);
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.OKzIMc6'] ?? ($this->privates['.security.request_matcher.OKzIMc6'] = new \Symfony\Component\HttpFoundation\RequestMatcher('.*')));
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
        }, 2));
    }

    /*
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL));
    }

    /*
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, 'KunstmaanAdminBundle_homepage'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'fos_user_security_logout']);
        $c->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService())));
        $c->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $c->addHandler(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()));

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.form.main'] ?? $this->getSecurity_Authentication_Listener_Form_MainService());
            yield 3 => ($this->privates['security.authentication.listener.rememberme.main'] ?? $this->getSecurity_Authentication_Listener_Rememberme_MainService());
            yield 4 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 5 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $b, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, 'fos_user_security_login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', '.security.request_matcher.OKzIMc6', true, false, 'fos_user.user_provider.username', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, [0 => 'form_login', 1 => 'remember_me', 2 => 'anonymous'], NULL));
    }

    /*
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', 'fos_user_security_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /*
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->privates['security.user_value_resolver'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /*
     * Gets the private 'serializer.mapping.cache_class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory
     */
    protected function getSerializer_Mapping_CacheClassMetadataFactoryService()
    {
        return $this->privates['serializer.mapping.cache_class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))])), \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/serialization.php'), ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService())));
    }

    /*
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /*
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'stof_doctrine_extensions.event_listener.locale' shared service.
     *
     * @return \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener
     */
    protected function getStofDoctrineExtensions_EventListener_LocaleService()
    {
        return $this->privates['stof_doctrine_extensions.event_listener.locale'] = new \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener(($this->privates['stof_doctrine_extensions.listener.translatable'] ?? $this->getStofDoctrineExtensions_Listener_TranslatableService()));
    }

    /*
     * Gets the private 'stof_doctrine_extensions.listener.translatable' shared service.
     *
     * @return \Gedmo\Translatable\TranslatableListener
     */
    protected function getStofDoctrineExtensions_Listener_TranslatableService()
    {
        $this->privates['stof_doctrine_extensions.listener.translatable'] = $instance = new \Gedmo\Translatable\TranslatableListener();

        $instance->setAnnotationReader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->setDefaultLocale('en_US');
        $instance->setTranslatableLocale('en_US');
        $instance->setTranslationFallback(true);
        $instance->setPersistDefaultLocaleTranslation(false);
        $instance->setSkipOnLoad(false);

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.command.debug' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand
     */
    protected function getSwiftmailer_Command_DebugService()
    {
        $this->privates['swiftmailer.command.debug'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand();

        $instance->setName('debug:swiftmailer');

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.command.new_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand
     */
    protected function getSwiftmailer_Command_NewEmailService()
    {
        $this->privates['swiftmailer.command.new_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand();

        $instance->setName('swiftmailer:email:send');

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.command.send_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand
     */
    protected function getSwiftmailer_Command_SendEmailService()
    {
        $this->privates['swiftmailer.command.send_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand();

        $instance->setName('swiftmailer:spool:send');

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->privates['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /*
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /*
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), (\dirname(__DIR__, 4).'/src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.loader.native_filesystem' shared service.
     *
     * @return \Twig\Loader\FilesystemLoader
     */
    protected function getTwig_Loader_NativeFilesystemService()
    {
        $this->privates['twig.loader.native_filesystem'] = $instance = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));

        $instance->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/views'), 'FOSUser');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $instance->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/views'), 'KunstmaanAdmin');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/views'), '!KunstmaanAdmin');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/views'), 'KunstmaanAdminList');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle/Resources/views'), '!KunstmaanAdminList');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/views'), 'KunstmaanNode');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle/Resources/views'), '!KunstmaanNode');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), 'KnpMenu');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), '!KnpMenu');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/views'), '!FOSUser');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/config-bundle/Resources/views'), 'KunstmaanConfig');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/config-bundle/Resources/views'), '!KunstmaanConfig');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/views'), 'KunstmaanDashboard');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle/Resources/views'), '!KunstmaanDashboard');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/views'), 'KunstmaanPagePart');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle/Resources/views'), '!KunstmaanPagePart');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/views'), 'KunstmaanNodeSearch');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle/Resources/views'), '!KunstmaanNodeSearch');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Resources/views'), 'LiipImagine');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Resources/views'), '!LiipImagine');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/views'), 'KunstmaanMedia');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle/Resources/views'), '!KunstmaanMedia');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/views'), 'KunstmaanSeo');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle/Resources/views'), '!KunstmaanSeo');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/sitemap-bundle/Resources/views'), 'KunstmaanSitemap');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/sitemap-bundle/Resources/views'), '!KunstmaanSitemap');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/views'), 'KunstmaanTranslator');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle/Resources/views'), '!KunstmaanTranslator');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/views'), 'KunstmaanUserManagement');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle/Resources/views'), '!KunstmaanUserManagement');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/views'), 'KunstmaanMenu');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle/Resources/views'), '!KunstmaanMenu');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/views'), 'KunstmaanMediaPagePart');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle/Resources/views'), '!KunstmaanMediaPagePart');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/views'), 'KunstmaanForm');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle/Resources/views'), '!KunstmaanForm');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/views'), 'KunstmaanArticle');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle/Resources/views'), '!KunstmaanArticle');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/debug-bundle/Resources/views'), 'Debug');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/debug-bundle/Resources/views'), '!Debug');
        $instance->addPath((\dirname(__DIR__, 4).'/templates'));
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'esi' => ['privates', 'fragment.renderer.esi', 'getFragment_Renderer_EsiService', false],
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'esi' => '?',
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), false));
    }

    /*
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src'), [(\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views') => NULL, (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle/Resources/views') => 'FOSUser', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /*
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info.cache'] ?? $this->getPropertyInfo_CacheService());

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Kunstmaan\\AdminBundle\\Validator\\Constraints\\PasswordRestrictionsValidator' => ['privates', 'kunstmaan_admin.validator.password_restrictions', 'getKunstmaanAdmin_Validator_PasswordRestrictionsService', false],
            'Kunstmaan\\MediaBundle\\Validator\\Constraints\\HasGuessableExtensionValidator' => ['privates', 'kunstmaan_media.validator.has_guessable_extension', 'getKunstmaanMedia_Validator_HasGuessableExtensionService', false],
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Cmf\\Bundle\\RoutingBundle\\Validator\\Constraints\\RouteDefaultsTwigValidator' => ['privates', 'cmf_routing.validator.route_defaults', 'getCmfRouting_Validator_RouteDefaultsService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'cmf_routing.validator.route_defaults' => ['privates', 'cmf_routing.validator.route_defaults', 'getCmfRouting_Validator_RouteDefaultsService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'has_guessable_extension' => ['privates', 'kunstmaan_media.validator.has_guessable_extension', 'getKunstmaanMedia_Validator_HasGuessableExtensionService', false],
            'password_restrictions' => ['privates', 'kunstmaan_admin.validator.password_restrictions', 'getKunstmaanAdmin_Validator_PasswordRestrictionsService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Kunstmaan\\AdminBundle\\Validator\\Constraints\\PasswordRestrictionsValidator' => '?',
            'Kunstmaan\\MediaBundle\\Validator\\Constraints\\HasGuessableExtensionValidator' => '?',
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Cmf\\Bundle\\RoutingBundle\\Validator\\Constraints\\RouteDefaultsTwigValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'cmf_routing.validator.route_defaults' => '?',
            'doctrine.orm.validator.unique' => '?',
            'has_guessable_extension' => '?',
            'password_restrictions' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/config/validation.xml'), 1 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMappingCache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/validation.php'), ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService())));
        $instance->addObjectInitializers([0 => new \FOS\UserBundle\Validator\Initializer(($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService())), 1 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));
        $instance->addXmlMapping((\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /*
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /*
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /*
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), 'UTF-8', true, NULL);
    }

    /*
     * Gets the private 'var_dumper.command.server_dump' shared service.
     *
     * @return \Symfony\Component\VarDumper\Command\ServerDumpCommand
     */
    protected function getVarDumper_Command_ServerDumpService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('debug');
        $a->pushProcessor([0 => ($this->privates['kunstmaan_admin.logger.processor.user'] ?? $this->getKunstmaanAdmin_Logger_Processor_UserService()), 1 => 'processRecord']);
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Component\VarDumper\Command\ServerDumpCommand(new \Symfony\Component\VarDumper\Server\DumpServer('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), $a), ['cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService())), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()))]);

        $instance->setName('server:dump');

        return $instance;
    }

    /*
     * Gets the private 'var_dumper.contextualized_cli_dumper.inner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_ContextualizedCliDumper_InnerService()
    {
        $this->privates['var_dumper.contextualized_cli_dumper.inner'] = $instance = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /*
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /*
     * Gets the private 'var_dumper.server_connection' shared service.
     *
     * @return \Symfony\Component\VarDumper\Server\Connection
     */
    protected function getVarDumper_ServerConnectionService()
    {
        return $this->privates['var_dumper.server_connection'] = new \Symfony\Component\VarDumper\Server\Connection('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), 'request' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), 'cli' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider()]);
    }

    /*
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /*
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    /**
     * @return array|bool|float|int|string|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'serializer.mapping.cache.file' => false,
        'kunstmaan_utilities.cipher.secret' => false,
        'doctrine.orm.proxy_dir' => false,
        'kunstmaan_dashboard.google_analytics.api.app_name' => false,
        'kunstmaan_dashboard.google_analytics.api.client_id' => false,
        'kunstmaan_dashboard.google_analytics.api.client_secret' => false,
        'kunstmaan_dashboard.google_analytics.api.dev_key' => false,
        'kuma_translator.cache_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'kunstmaan_utilities.cipher.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'kunstmaan_dashboard.google_analytics.api.app_name': $value = $this->getEnv('GOOGLE_API_APP_NAME'); break;
            case 'kunstmaan_dashboard.google_analytics.api.client_id': $value = $this->getEnv('GOOGLE_API_CLIENT_ID'); break;
            case 'kunstmaan_dashboard.google_analytics.api.client_secret': $value = $this->getEnv('GOOGLE_API_CLIENT_SECRET'); break;
            case 'kunstmaan_dashboard.google_analytics.api.dev_key': $value = $this->getEnv('GOOGLE_API_DEV_KEY'); break;
            case 'kuma_translator.cache_dir': $value = ($this->targetDir.''.'/translations'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => false,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'AclBundle' => 'Symfony\\Bundle\\AclBundle\\AclBundle',
                'KunstmaanUtilitiesBundle' => 'Kunstmaan\\UtilitiesBundle\\KunstmaanUtilitiesBundle',
                'CmfRoutingBundle' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\CmfRoutingBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'KunstmaanAdminBundle' => 'Kunstmaan\\AdminBundle\\KunstmaanAdminBundle',
                'KunstmaanAdminListBundle' => 'Kunstmaan\\AdminListBundle\\KunstmaanAdminListBundle',
                'KunstmaanNodeBundle' => 'Kunstmaan\\NodeBundle\\KunstmaanNodeBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'KunstmaanConfigBundle' => 'Kunstmaan\\ConfigBundle\\KunstmaanConfigBundle',
                'KunstmaanDashboardBundle' => 'Kunstmaan\\DashboardBundle\\KunstmaanDashboardBundle',
                'KunstmaanSearchBundle' => 'Kunstmaan\\SearchBundle\\KunstmaanSearchBundle',
                'KunstmaanPagePartBundle' => 'Kunstmaan\\PagePartBundle\\KunstmaanPagePartBundle',
                'KunstmaanNodeSearchBundle' => 'Kunstmaan\\NodeSearchBundle\\KunstmaanNodeSearchBundle',
                'KunstmaanRedirectBundle' => 'Kunstmaan\\RedirectBundle\\KunstmaanRedirectBundle',
                'KnpGaufretteBundle' => 'Knp\\Bundle\\GaufretteBundle\\KnpGaufretteBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'KunstmaanMediaBundle' => 'Kunstmaan\\MediaBundle\\KunstmaanMediaBundle',
                'KunstmaanSeoBundle' => 'Kunstmaan\\SeoBundle\\KunstmaanSeoBundle',
                'KunstmaanSitemapBundle' => 'Kunstmaan\\SitemapBundle\\KunstmaanSitemapBundle',
                'KunstmaanTranslatorBundle' => 'Kunstmaan\\TranslatorBundle\\KunstmaanTranslatorBundle',
                'KunstmaanUserManagementBundle' => 'Kunstmaan\\UserManagementBundle\\KunstmaanUserManagementBundle',
                'KunstmaanMenuBundle' => 'Kunstmaan\\MenuBundle\\KunstmaanMenuBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'KunstmaanFixturesBundle' => 'Kunstmaan\\FixturesBundle\\KunstmaanFixturesBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'KunstmaanMediaPagePartBundle' => 'Kunstmaan\\MediaPagePartBundle\\KunstmaanMediaPagePartBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'KunstmaanFormBundle' => 'Kunstmaan\\FormBundle\\KunstmaanFormBundle',
                'KunstmaanArticleBundle' => 'Kunstmaan\\ArticleBundle\\KunstmaanArticleBundle',
                'KunstmaanGeneratorBundle' => 'Kunstmaan\\GeneratorBundle\\KunstmaanGeneratorBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'FOSHttpCacheBundle' => 'FOS\\HttpCacheBundle\\FOSHttpCacheBundle',
                'SentryBundle' => 'Sentry\\SentryBundle\\SentryBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'WhiteOctoberPagerfantaBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle'),
                    'namespace' => 'WhiteOctober\\PagerfantaBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'AclBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/acl-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\AclBundle',
                ],
                'KunstmaanUtilitiesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/utilities-bundle'),
                    'namespace' => 'Kunstmaan\\UtilitiesBundle',
                ],
                'CmfRoutingBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony-cmf/routing-bundle/src'),
                    'namespace' => 'Symfony\\Cmf\\Bundle\\RoutingBundle',
                ],
                'StofDoctrineExtensionsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/stof/doctrine-extensions-bundle/src'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ],
                'KunstmaanAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/admin-bundle'),
                    'namespace' => 'Kunstmaan\\AdminBundle',
                ],
                'KunstmaanAdminListBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/adminlist-bundle'),
                    'namespace' => 'Kunstmaan\\AdminListBundle',
                ],
                'KunstmaanNodeBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-bundle'),
                    'namespace' => 'Kunstmaan\\NodeBundle',
                ],
                'KnpMenuBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'FOSUserBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'KunstmaanConfigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/config-bundle'),
                    'namespace' => 'Kunstmaan\\ConfigBundle',
                ],
                'KunstmaanDashboardBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/dashboard-bundle'),
                    'namespace' => 'Kunstmaan\\DashboardBundle',
                ],
                'KunstmaanSearchBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/search-bundle'),
                    'namespace' => 'Kunstmaan\\SearchBundle',
                ],
                'KunstmaanPagePartBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/pagepart-bundle'),
                    'namespace' => 'Kunstmaan\\PagePartBundle',
                ],
                'KunstmaanNodeSearchBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/node-search-bundle'),
                    'namespace' => 'Kunstmaan\\NodeSearchBundle',
                ],
                'KunstmaanRedirectBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/redirect-bundle'),
                    'namespace' => 'Kunstmaan\\RedirectBundle',
                ],
                'KnpGaufretteBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-gaufrette-bundle'),
                    'namespace' => 'Knp\\Bundle\\GaufretteBundle',
                ],
                'LiipImagineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ],
                'KunstmaanMediaBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-bundle'),
                    'namespace' => 'Kunstmaan\\MediaBundle',
                ],
                'KunstmaanSeoBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/seo-bundle'),
                    'namespace' => 'Kunstmaan\\SeoBundle',
                ],
                'KunstmaanSitemapBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/sitemap-bundle'),
                    'namespace' => 'Kunstmaan\\SitemapBundle',
                ],
                'KunstmaanTranslatorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/translator-bundle'),
                    'namespace' => 'Kunstmaan\\TranslatorBundle',
                ],
                'KunstmaanUserManagementBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/user-management-bundle'),
                    'namespace' => 'Kunstmaan\\UserManagementBundle',
                ],
                'KunstmaanMenuBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/menu-bundle'),
                    'namespace' => 'Kunstmaan\\MenuBundle',
                ],
                'DoctrineFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ],
                'KunstmaanFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/fixtures-bundle'),
                    'namespace' => 'Kunstmaan\\FixturesBundle',
                ],
                'SensioGeneratorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/sensio-generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ],
                'KunstmaanMediaPagePartBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/media-pagepart-bundle'),
                    'namespace' => 'Kunstmaan\\MediaPagePartBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'KunstmaanFormBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/form-bundle'),
                    'namespace' => 'Kunstmaan\\FormBundle',
                ],
                'KunstmaanArticleBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/article-bundle'),
                    'namespace' => 'Kunstmaan\\ArticleBundle',
                ],
                'KunstmaanGeneratorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/kunstmaan/generator-bundle'),
                    'namespace' => 'Kunstmaan\\GeneratorBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DebugBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'FOSHttpCacheBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache-bundle/src'),
                    'namespace' => 'FOS\\HttpCacheBundle',
                ],
                'SentryBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sentry/sentry-symfony/src'),
                    'namespace' => 'Sentry\\SentryBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevContainer',
            'container.dumper.inline_class_loader' => false,
            'container.dumper.inline_factories' => true,
            'kunstmaan_search.elasticsearch_version' => '7',
            'kunstmaan_media.upload_dir' => '/uploads/media/',
            'form_submission_rootdir' => (\dirname(__DIR__, 4).'/public/uploads/formsubmissions'),
            'form_submission_webdir' => '/uploads/formsubmissions/',
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => '@KunstmaanNode/Form/formWidgets.html.twig',
                2 => '@LiipImagine/Form/form_div_layout.html.twig',
                3 => '@KunstmaanMedia/Form/formWidgets.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [
                'ROLE_ADMIN' => [
                    0 => 'ROLE_USER',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
                'ROLE_NEWS' => [
                    0 => 'ROLE_USER',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'kunstmaan_utilities.slugifier.class' => 'Kunstmaan\\UtilitiesBundle\\Helper\\Slugifier',
            'kunstmaan_utilities.shell.class' => 'Kunstmaan\\UtilitiesBundle\\Helper\\Shell\\Shell',
            'kunstmaan_utilities.cipher.class' => 'Kunstmaan\\UtilitiesBundle\\Helper\\Cipher\\UrlSafeCipher',
            'cmf_routing.replace_symfony_router' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.default_locale' => 'en_US',
            'stof_doctrine_extensions.translation_fallback' => true,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'version_checker.url' => 'https://cms.kunstmaan.be/version-check',
            'version_checker.timeframe' => 86400,
            'version_checker.enabled' => true,
            'kunstmaan_admin.dashboard_route' => 'kunstmaan_dashboard',
            'kunstmaan_admin.admin_locales' => [
                0 => 'en',
            ],
            'kunstmaan_admin.default_admin_locale' => 'en',
            'kunstmaan_admin.session_security.ip_check' => false,
            'kunstmaan_admin.session_security.user_agent_check' => false,
            'kunstmaan_admin.admin_prefix' => 'admin',
            'kunstmaan_admin.admin_exception_excludes' => [

            ],
            'kunstmaan_admin.google_signin.enabled' => false,
            'kunstmaan_admin.google_signin.client_id' => NULL,
            'kunstmaan_admin.google_signin.client_secret' => NULL,
            'kunstmaan_admin.google_signin.hosted_domains' => [

            ],
            'kunstmaan_admin.password_restrictions.min_digits' => NULL,
            'kunstmaan_admin.password_restrictions.min_uppercase' => NULL,
            'kunstmaan_admin.password_restrictions.min_special_characters' => NULL,
            'kunstmaan_admin.password_restrictions.min_length' => NULL,
            'kunstmaan_admin.password_restrictions.max_length' => NULL,
            'kunstmaan_admin.enable_toolbar_helper' => false,
            'kunstmaan_admin.toolbar_firewall_names' => [
                0 => 'main',
            ],
            'kunstmaan_admin.admin_firewall_name' => 'main',
            'kunstmaan_admin.menubuilder.class' => 'Kunstmaan\\AdminBundle\\Helper\\Menu\\MenuBuilder',
            'kunstmaan_admin.admin_panel.class' => 'Kunstmaan\\AdminBundle\\Helper\\AdminPanel\\AdminPanel',
            'kunstmaan_admin.login.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\LoginListener',
            'kunstmaan_admin.admin_locale.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\AdminLocaleListener',
            'kunstmaan_admin.acl.helper.class' => 'Kunstmaan\\AdminBundle\\Helper\\Security\\Acl\\AclHelper',
            'kunstmaan_admin.acl.native.helper.class' => 'Kunstmaan\\AdminBundle\\Helper\\Security\\Acl\\AclNativeHelper',
            'kunstmaan_admin.security.acl.permission.map.class' => 'Kunstmaan\\AdminBundle\\Helper\\Security\\Acl\\Permission\\PermissionMap',
            'kunstmaan_admin.clone.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\CloneListener',
            'kunstmaan_admin.session_security.class' => 'Kunstmaan\\AdminBundle\\EventListener\\SessionSecurityListener',
            'kunstmaan_admin.password_resetting.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\PasswordResettingListener',
            'kunstmaan_admin.password_check.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\PasswordCheckListener',
            'kunstmaan_admin.firewall.provider_key' => 'main',
            'kunstmaan_admin.domain_configuration.class' => 'Kunstmaan\\AdminBundle\\Helper\\DomainConfiguration',
            'kunstmaan_admin.validator.password_restrictions.class' => 'Kunstmaan\\AdminBundle\\Validator\\Constraints\\PasswordRestrictionsValidator',
            'kunstmaan_admin.adminroute.helper.class' => 'Kunstmaan\\AdminBundle\\Helper\\AdminRouteHelper',
            'kunstmaan_admin.adminroute.twig.class' => 'Kunstmaan\\AdminBundle\\Twig\\AdminRouteHelperTwigExtension',
            'kunstmaan_admin.exception.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\ExceptionSubscriber',
            'kunstmaan_admin.toolbar.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\ToolbarListener',
            'kunstmaan_admin.toolbar.collector.bundle.class' => 'Kunstmaan\\AdminBundle\\Toolbar\\BundleVersionDataCollector',
            'kunstmaan_admin.toolbar.collector.exception.class' => 'Kunstmaan\\AdminBundle\\Toolbar\\ExceptionDataCollector',
            'kunstmaan_admin.consoleexception.class' => 'Kunstmaan\\AdminBundle\\EventListener\\ConsoleExceptionListener',
            'kunstmaan_admin.website_title' => 'MyProject',
            'kunstmaan_admin.multi_language' => true,
            'kunstmaan_admin.required_locales' => 'nl|fr|en',
            'requiredlocales' => 'nl|fr|en',
            'kunstmaan_admin.default_locale' => 'en',
            'kunstmaan_entity.lock_check_interval' => 15,
            'kunstmaan_entity.lock_threshold' => 35,
            'kunstmaan_entity.lock_enabled' => false,
            'kunstmaan_adminlist.service.export.class' => 'Kunstmaan\\AdminListBundle\\Service\\ExportService',
            'kunstmaan_node.permissions.enabled' => false,
            'kunstmaan_node.show_add_homepage' => true,
            'kunstmaan_node.show_duplicate_with_children' => false,
            'kunstmaan_node.enable_export_page_template' => false,
            'kunstmaan_node.lock_check_interval' => 15,
            'kunstmaan_node.lock_threshold' => 35,
            'kunstmaan_node.lock_enabled' => true,
            'kunstmaan_node.version_timeout' => 3600,
            'kunstmaan_node.slugrouter.class' => 'Kunstmaan\\NodeBundle\\Router\\SlugRouter',
            'kunstmaan_node.sluglistener.class' => 'Kunstmaan\\NodeBundle\\EventListener\\SlugListener',
            'kunstmaan_node.helper.url.class' => 'Kunstmaan\\NodeBundle\\Helper\\URLHelper',
            'kunstmaan_node.url_replace.twig.class' => 'Kunstmaan\\NodeBundle\\Twig\\UrlReplaceTwigExtension',
            'kunstmaan_node.url_chooser.lazy_increment' => 2,
            'kunstmaan_multi_domain.url_replace.controller.class' => 'Kunstmaan\\NodeBundle\\Controller\\UrlReplaceController',
            'kunstmaan_node.toolbar.collector.node.class' => 'Kunstmaan\\NodeBundle\\Toolbar\\NodeDataCollector',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Kunstmaan\\AdminBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
            ],
            'fos_user.registration.confirmation.from_email' => [
                'kunstmaancms@myproject.dev' => 'KunstmaanCMS',
            ],
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => [
                0 => 'ChangePassword',
                1 => 'Default',
            ],
            'fos_user.resetting.email.from_email' => [
                'kunstmaancms@myproject.dev' => 'KunstmaanCMS',
            ],
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
            ],
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Kunstmaan\\AdminBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'FOS\\UserBundle\\Form\\Type\\GroupFormType',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'kunstmaan_config' => [
                'entities' => [

                ],
            ],
            'kunstmaan_config.menu.adaptor.class' => 'Kunstmaan\\ConfigBundle\\Helper\\Menu\\ConfigMenuAdaptor',
            'kunstmaan_config.twig.extension.class' => 'Kunstmaan\\ConfigBundle\\Twig\\ConfigTwigExtension',
            'kunstmaan_config.controller.config.class' => 'Kunstmaan\\ConfigBundle\\Controller\\ConfigController',
            'kunstmaan_dashboard.widget.googleanalytics.command' => 'Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataCollectCommand',
            'kunstmaan_dashboard.widget.googleanalytics.controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsController',
            'kunstmaan_dashboard.googleclient.class' => 'Google_Client',
            'kunstmaan_dashboard.googleclienthelper.class' => 'Kunstmaan\\DashboardBundle\\Helper\\Google\\ClientHelper',
            'analyzer_languages' => [
                'ar' => [
                    'analyzer' => 'arabic',
                ],
                'hy' => [
                    'analyzer' => 'armenian',
                ],
                'eu' => [
                    'analyzer' => 'basque',
                ],
                'bg' => [
                    'analyzer' => 'bulgarian',
                ],
                'ca' => [
                    'analyzer' => 'catalan',
                ],
                'zh' => [
                    'analyzer' => 'chinese',
                ],
                'cs' => [
                    'analyzer' => 'czech',
                ],
                'da' => [
                    'analyzer' => 'danish',
                ],
                'nl' => [
                    'analyzer' => 'dutch',
                ],
                'en' => [
                    'analyzer' => 'english',
                ],
                'fi' => [
                    'analyzer' => 'finnish',
                ],
                'fr' => [
                    'analyzer' => 'french',
                ],
                'gl' => [
                    'analyzer' => 'galician',
                ],
                'de' => [
                    'analyzer' => 'german',
                ],
                'el' => [
                    'analyzer' => 'greek',
                ],
                'hi' => [
                    'analyzer' => 'hindi',
                ],
                'hu' => [
                    'analyzer' => 'hungarian',
                ],
                'id' => [
                    'analyzer' => 'indonesian',
                ],
                'it' => [
                    'analyzer' => 'italian',
                ],
                'no' => [
                    'analyzer' => 'norwegian',
                ],
                'fa' => [
                    'analyzer' => 'persian',
                ],
                'pt' => [
                    'analyzer' => 'portuguese',
                ],
                'ro' => [
                    'analyzer' => 'romanian',
                ],
                'ru' => [
                    'analyzer' => 'russian',
                ],
                'es' => [
                    'analyzer' => 'spanish',
                ],
                'sv' => [
                    'analyzer' => 'swedish',
                ],
                'se' => [
                    'analyzer' => 'swedish',
                ],
                'ee' => [
                    'analyzer' => 'estonian',
                ],
                'tr' => [
                    'analyzer' => 'turkish',
                ],
                'th' => [
                    'analyzer' => 'thai',
                ],
            ],
            'kunstmaan_search.search_provider' => 'Elastica',
            'kunstmaan_search.search_configuration_chain.class' => 'Kunstmaan\\SearchBundle\\Configuration\\SearchConfigurationChain',
            'kunstmaan_search.search_provider_chain.class' => 'Kunstmaan\\SearchBundle\\Provider\\SearchProviderChain',
            'kunstmaan_search.search.class' => 'Kunstmaan\\SearchBundle\\Search\\Search',
            'kunstmaan_search.search_provider.elastica.class' => 'Kunstmaan\\SearchBundle\\Provider\\ElasticaProvider',
            'kunstmaan_search.search.factory.analysis.class' => 'Kunstmaan\\SearchBundle\\Search\\LanguageAnalysisFactory',
            'kunstmaan_search.hostname' => 'localhost',
            'kunstmaan_search.port' => 9200,
            'kunstmaan_search.username' => NULL,
            'kunstmaan_search.password' => NULL,
            'kunstmaan_search.index_prefix' => 'myproject',
            'kunstmaan_pagepart.page_part_configuration_reader.class' => 'Kunstmaan\\PagePartBundle\\PagePartConfigurationReader\\PagePartConfigurationReader',
            'kunstmaan_pagepart.page_part_configuration_parser.class' => 'Kunstmaan\\PagePartBundle\\PagePartConfigurationReader\\PagePartConfigurationParser',
            'kunstmaan_pagepart.page_template_configuration_reader.class' => 'Kunstmaan\\PagePartBundle\\PageTemplate\\PageTemplateConfigurationReader',
            'kunstmaan_pagepart.page_template_configuration_parser.class' => 'Kunstmaan\\PagePartBundle\\PageTemplate\\PageTemplateConfigurationParser',
            'kunstmaan_page_part.page_template.page_template_configuration_service.class' => 'Kunstmaan\\PagePartBundle\\PageTemplate\\PageTemplateConfigurationService',
            'kunstmaan_page_part.extended' => true,
            'kunstmaan_page_part.page_parts_presets' => [
                'main' => [
                    'name' => 'Main',
                    'context' => 'main',
                    'types' => [
                        0 => [
                            'name' => 'Audio',
                            'class' => 'App\\Entity\\PageParts\\AudioPagePart',
                        ],
                        1 => [
                            'name' => 'Button',
                            'class' => 'App\\Entity\\PageParts\\ButtonPagePart',
                        ],
                        2 => [
                            'name' => 'Download',
                            'class' => 'App\\Entity\\PageParts\\DownloadPagePart',
                        ],
                        3 => [
                            'name' => 'Header',
                            'class' => 'App\\Entity\\PageParts\\HeaderPagePart',
                        ],
                        4 => [
                            'name' => 'Image',
                            'class' => 'App\\Entity\\PageParts\\ImagePagePart',
                        ],
                        5 => [
                            'name' => 'IntroText',
                            'class' => 'App\\Entity\\PageParts\\IntroTextPagePart',
                        ],
                        6 => [
                            'name' => 'Line',
                            'class' => 'App\\Entity\\PageParts\\LinePagePart',
                        ],
                        7 => [
                            'name' => 'Link',
                            'class' => 'App\\Entity\\PageParts\\LinkPagePart',
                        ],
                        8 => [
                            'name' => 'RawHtml',
                            'class' => 'App\\Entity\\PageParts\\RawHtmlPagePart',
                        ],
                        9 => [
                            'name' => 'Text',
                            'class' => 'App\\Entity\\PageParts\\TextPagePart',
                        ],
                        10 => [
                            'name' => 'Toc',
                            'class' => 'App\\Entity\\PageParts\\TocPagePart',
                        ],
                        11 => [
                            'name' => 'ToTop',
                            'class' => 'App\\Entity\\PageParts\\ToTopPagePart',
                        ],
                        12 => [
                            'name' => 'Video',
                            'class' => 'App\\Entity\\PageParts\\VideoPagePart',
                        ],
                    ],
                ],
            ],
            'kunstmaan_page_part.page_templates_presets' => [
                'behat_test_page' => [
                    'name' => 'Behat test page',
                    'rows' => [

                    ],
                    'template' => '',
                ],
                'contentpage' => [
                    'name' => 'Content page',
                    'rows' => [
                        0 => [
                            'regions' => [
                                0 => [
                                    'name' => 'main',
                                    'span' => 12,
                                ],
                            ],
                        ],
                    ],
                    'template' => 'Pages\\ContentPage\\pagetemplate.html.twig',
                ],
                'homepage' => [
                    'name' => 'Home page',
                    'rows' => [
                        0 => [
                            'regions' => [
                                0 => [
                                    'name' => 'main',
                                    'span' => 12,
                                ],
                            ],
                        ],
                    ],
                    'template' => 'Pages\\HomePage\\pagetemplate.html.twig',
                ],
            ],
            'kunstmaan_node_search.search_configuration.node.class' => 'Kunstmaan\\NodeSearchBundle\\Configuration\\NodePagesConfiguration',
            'kunstmaan_node_search.search_configuration.number_of_shards' => 1,
            'kunstmaan_node_search.search_configuration.number_of_replicas' => 0,
            'kunstmaan_node_search.indexname' => 'nodeindex',
            'kunstmaan_node_search.indextype' => 'page',
            'kunstmaan_node_search.search.node.class' => 'Kunstmaan\\NodeSearchBundle\\Search\\NodeSearcher',
            'kunstmaan_node_search.search_service.class' => 'Kunstmaan\\NodeSearchBundle\\Services\\SearchService',
            'kunstmaan_node_search.node_index_update.listener.class' => 'Kunstmaan\\NodeSearchBundle\\EventListener\\NodeIndexUpdateEventListener',
            'kunstmaan_node_search.contexts' => [

            ],
            'kunstmaan_redirect.menu.adaptor.class' => 'Kunstmaan\\RedirectBundle\\Helper\\Menu\\RedirectMenuAdaptor',
            'kunstmaan_redirect.redirect_repository.class' => 'Kunstmaan\\RedirectBundle\\Repository\\RedirectRepository',
            'kunstmaan_redirect.redirect.class' => 'Kunstmaan\\RedirectBundle\\Entity\\Redirect',
            'knp_gaufrette.filesystem_map.class' => 'Knp\\Bundle\\GaufretteBundle\\FilesystemMap',
            'liip_imagine.resolvers' => [
                'default' => [
                    'web_path' => [
                        'cache_prefix' => 'uploads/cache',
                        'web_root' => (\dirname(__DIR__, 4).'/public'),
                    ],
                ],
            ],
            'liip_imagine.loaders' => [
                'default' => [
                    'filesystem' => [
                        'data_root' => [
                            0 => (\dirname(__DIR__, 4).'/public'),
                        ],
                        'locator' => 'filesystem',
                        'allow_unresolvable_data_roots' => false,
                        'bundle_resources' => [
                            'enabled' => false,
                            'access_control_type' => 'blacklist',
                            'access_control_list' => [

                            ],
                        ],
                    ],
                ],
            ],
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripAll' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempDir' => NULL,
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripAll' => true,
            'liip_imagine.optipng.tempDir' => NULL,
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.driver_service' => 'liip_imagine.imagick',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => [
                'fb_og_image' => [
                    'quality' => 85,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'relative_resize' => [
                            'widen' => 1200,
                        ],
                        'strip' => [

                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'tw_card_image' => [
                    'quality' => 85,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'relative_resize' => [
                            'widen' => 435,
                        ],
                        'strip' => [

                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'media_list_thumbnail' => [
                    'quality' => 75,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'auto_rotate' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 210,
                                1 => 150,
                            ],
                            'mode' => 'outbound',
                        ],
                        'relative_resize' => [
                            'widen' => 210,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'media_list_thumbnail_retina' => [
                    'quality' => 85,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'auto_rotate' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 420,
                                1 => 300,
                            ],
                            'mode' => 'outbound',
                        ],
                        'relative_resize' => [
                            'widen' => 420,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'media_detail_thumbnail' => [
                    'quality' => 75,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'auto_rotate' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 700,
                                1 => 500,
                            ],
                            'mode' => 'inset',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'optim' => [
                    'quality' => 85,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'jpg',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'optimjpg' => [
                    'quality' => 85,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'jpg',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'optimpng' => [
                    'quality' => 85,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'png',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'image_huge_jpg' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'jpg',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 2400,
                                1 => NULL,
                            ],
                            'mode' => 'outbound',
                            'allow_upscale' => false,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'image_big_jpg' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'jpg',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 1200,
                                1 => NULL,
                            ],
                            'mode' => 'outbound',
                            'allow_upscale' => false,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'image_medium_jpg' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'jpg',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 600,
                                1 => NULL,
                            ],
                            'mode' => 'outbound',
                            'allow_upscale' => false,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'image_small_jpg' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'jpg',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 400,
                                1 => NULL,
                            ],
                            'mode' => 'outbound',
                            'allow_upscale' => false,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'image_huge_png' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'png',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 2400,
                                1 => NULL,
                            ],
                            'mode' => 'outbound',
                            'allow_upscale' => false,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'image_big_png' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'png',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 1200,
                                1 => NULL,
                            ],
                            'mode' => 'outbound',
                            'allow_upscale' => false,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'image_medium_png' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'png',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 600,
                                1 => NULL,
                            ],
                            'mode' => 'outbound',
                            'allow_upscale' => false,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'image_small_png' => [
                    'quality' => 95,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => 'png',
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'strip' => [

                        ],
                        'thumbnail' => [
                            'size' => [
                                0 => 400,
                                1 => NULL,
                            ],
                            'mode' => 'outbound',
                            'allow_upscale' => false,
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
            ],
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction',
            'liip_imagine.webp.generate' => false,
            'liip_imagine.webp.options' => [
                'quality' => 100,
                'cache' => NULL,
                'data_loader' => NULL,
                'post_processors' => [

                ],
            ],
            'kunstmaan_media.soundcloud_api_key' => 'YOUR_CLIENT_ID',
            'kunstmaan_media.remote_video' => [
                'vimeo' => true,
                'youtube' => true,
                'dailymotion' => true,
            ],
            'kunstmaan_media.enable_pdf_preview' => false,
            'kunstmaan_media.blacklisted_extensions' => [
                0 => 'php',
                1 => 'htaccess',
            ],
            'kunstmaan_media.web_root' => (\dirname(__DIR__, 4).'/public'),
            'kunstmaan_media.full_media_path' => (\dirname(__DIR__, 4).'/public/uploads/media/'),
            'kunstmaan_media.media_manager.class' => 'Kunstmaan\\MediaBundle\\Helper\\MediaManager',
            'kunstmaan_media.folder_manager.class' => 'Kunstmaan\\MediaBundle\\Helper\\FolderManager',
            'kunstmaan_media.menu.adaptor.class' => 'Kunstmaan\\MediaBundle\\Helper\\Menu\\MediaMenuAdaptor',
            'kunstmaan_media.listener.doctrine.class' => 'Kunstmaan\\MediaBundle\\EventListener\\DoctrineMediaListener',
            'kunstmaan_media.form.type.media.class' => 'Kunstmaan\\MediaBundle\\Form\\Type\\MediaType',
            'kunstmaan_media.form.type.iconfont.class' => 'Kunstmaan\\MediaBundle\\Form\\Type\\IconFontType',
            'kunstmaan_media.icon_font_manager.class' => 'Kunstmaan\\MediaBundle\\Helper\\IconFont\\IconFontManager',
            'kunstmaan_media.icon_font.default_loader.class' => 'Kunstmaan\\MediaBundle\\Helper\\IconFont\\DefaultIconFontLoader',
            'kunstmaan_media.media_creator_service.class' => 'Kunstmaan\\MediaBundle\\Helper\\Services\\MediaCreatorService',
            'kunstmaan_media.mimetype_guesser.factory.class' => 'Kunstmaan\\MediaBundle\\Helper\\MimeTypeGuesserFactory',
            'kunstmaan_media.extension_guesser.factory.class' => 'Kunstmaan\\MediaBundle\\Helper\\ExtensionGuesserFactory',
            'kunstmaan_media.validator.has_guessable_extension.class' => 'Kunstmaan\\MediaBundle\\Validator\\Constraints\\HasGuessableExtensionValidator',
            'kunstmaan_media.media_handler.remote_slide.class' => 'Kunstmaan\\MediaBundle\\Helper\\RemoteSlide\\RemoteSlideHandler',
            'kunstmaan_media.media_handler.remote_video.class' => 'Kunstmaan\\MediaBundle\\Helper\\RemoteVideo\\RemoteVideoHandler',
            'kunstmaan_media.media_handler.remote_audio.class' => 'Kunstmaan\\MediaBundle\\Helper\\RemoteAudio\\RemoteAudioHandler',
            'kunstmaan_media.media_handler.image.class' => 'Kunstmaan\\MediaBundle\\Helper\\Image\\ImageHandler',
            'kunstmaan_media.media_handler.file.class' => 'Kunstmaan\\MediaBundle\\Helper\\File\\FileHandler',
            'kunstmaan_media.media_path' => '/uploads/media/',
            'liip_imagine.filter.loader.background.class' => 'Kunstmaan\\MediaBundle\\Helper\\Imagine\\BackgroundFilterLoader',
            'kunstmaan_media.aviary_api_key' => NULL,
            'google.analytics.account_id' => '',
            'robots_default' => 'User-agent: *',
            'kuma_translator.enabled' => true,
            'kuma_translator.default_bundle' => 'own',
            'kuma_translator.bundles' => [

            ],
            'kuma_translator.managed_locales' => [
                0 => 'nl',
                1 => 'en',
                2 => 'de',
                3 => 'fr',
            ],
            'kuma_translator.file_formats' => [
                0 => 'yml',
                1 => 'yaml',
                2 => 'xliff',
            ],
            'kuma_translator.storage_engine.type' => 'orm',
            'kuma_translator.profiler' => false,
            'kuma_translator.debug' => false,
            'kunstmaan_translator.menu.adaptor.class' => 'Kunstmaan\\TranslatorBundle\\Service\\Menu\\TranslatorMenuAdaptor',
            'kunstmaan_translator.service.exporter.csv.class' => 'Kunstmaan\\TranslatorBundle\\Service\\Command\\Exporter\\CSVFileExporter',
            'kunstmaan_translator.toolbar.collector.translator.class' => 'Kunstmaan\\TranslatorBundle\\Toolbar\\TranslatorDataCollector',
            'kunstmaan_user_management.user_admin_list_configurator.class' => 'Kunstmaan\\UserManagementBundle\\AdminList\\UserAdminListConfigurator',
            'kunstmaan_user_management.menu.adaptor.class' => 'Kunstmaan\\UserManagementBundle\\Helper\\Menu\\UserManagementMenuAdaptor',
            'kunstmaan_menu.menus' => [

            ],
            'kunstmaan_menu.entity.menu.class' => 'Kunstmaan\\MenuBundle\\Entity\\Menu',
            'kunstmaan_menu.entity.menuitem.class' => 'Kunstmaan\\MenuBundle\\Entity\\MenuItem',
            'kunstmaan_menu.adminlist.menu_configurator.class' => 'Kunstmaan\\MenuBundle\\AdminList\\MenuAdminListConfigurator',
            'kunstmaan_menu.adminlist.menuitem_configurator.class' => 'Kunstmaan\\MenuBundle\\AdminList\\MenuItemAdminListConfigurator',
            'kunstmaan_menu.form.menu_admintype.class' => 'Kunstmaan\\MenuBundle\\Form\\MenuAdminType',
            'kunstmaan_menu.form.menuitem_admintype.class' => 'Kunstmaan\\MenuBundle\\Form\\MenuItemAdminType',
            'kunstmaan_menu.menu.adaptor.class' => 'Kunstmaan\\MenuBundle\\Service\\MenuAdaptor',
            'kunstmaan_menu.menu.service.class' => 'Kunstmaan\\MenuBundle\\Service\\MenuService',
            'kunstmaan_menu.menu.twig.extension.class' => 'Kunstmaan\\MenuBundle\\Twig\\MenuTwigExtension',
            'kunstmaan_menu.menu.repository.class' => 'Kunstmaan\\MenuBundle\\Repository\\MenuItemRepository',
            'kunstmaan_menu.menu.render_service.class' => 'Kunstmaan\\MenuBundle\\Service\\RenderService',
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'kunstmaan_form.deletable_formsubmissions' => false,
            'kunstmaan_form.form_mailer.class' => 'Kunstmaan\\FormBundle\\Helper\\FormMailer',
            'kunstmaan_form.form_handler.class' => 'Kunstmaan\\FormBundle\\Helper\\FormHandler',
            'kunstmaan_form.sendemail_listener.class' => 'Kunstmaan\\FormBundle\\EventListener\\SendEmailListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'fos_http_cache.cacheable.response.additional_status' => [

            ],
            'fos_http_cache.compiler_pass.tag_annotations' => false,
            'sentry.listener_priorities.request' => 1,
            'sentry.listener_priorities.sub_request' => 1,
            'sentry.listener_priorities.console' => 1,
            'sentry.listener_priorities.request_error' => 128,
            'sentry.listener_priorities.console_error' => 128,
            'sentry.listener_priorities.worker_error' => 99,
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.http_client' => [
                    0 => 'http_client',
                    1 => '@WebProfiler/Collector/http_client.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
                'kunstmaan_admin.datacollector.bundleversion' => [
                    0 => 'kuma_bundle_versions',
                    1 => '@KunstmaanAdmin/Toolbar/bundles_version.html.twig',
                ],
                'kunstmaan_admin.datacollector.exception' => [
                    0 => 'kuma_exception',
                    1 => '@KunstmaanAdmin/Toolbar/exception.html.twig',
                ],
                'kunstmaan_node.datacollector.node' => [
                    0 => 'kuma_node',
                    1 => '@KunstmaanNode/Toolbar/node.html.twig',
                ],
                'kunstmaan_translator.datacollector.translations' => [
                    0 => 'kuma_translation',
                    1 => '@KunstmaanTranslator/Toolbar/translations.html.twig',
                ],
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.Kunstmaan\\UtilitiesBundle\\Command\\CipherCommand',
                1 => 'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\CreateUserCommand',
                2 => 'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\CreateGroupCommand',
                3 => 'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\CreateRoleCommand',
                4 => 'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\ExceptionCommand',
                5 => 'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\UpdateAclCommand',
                6 => 'console.command.public_alias.Kunstmaan\\AdminBundle\\Command\\ApplyAclCommand',
                7 => 'console.command.public_alias.Kunstmaan\\NodeBundle\\Command\\InitAclCommand',
                8 => 'console.command.public_alias.Kunstmaan\\NodeBundle\\Command\\CronUpdateNodeCommand',
                9 => 'console.command.public_alias.doctrine_cache.contains_command',
                10 => 'console.command.public_alias.doctrine_cache.delete_command',
                11 => 'console.command.public_alias.doctrine_cache.flush_command',
                12 => 'console.command.public_alias.doctrine_cache.stats_command',
                13 => 'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\DashboardCommand',
                14 => 'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsConfigFlushCommand',
                15 => 'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsConfigsListCommand',
                16 => 'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataCollectCommand',
                17 => 'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataFlushCommand',
                18 => 'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsOverviewsGenerateCommand',
                19 => 'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsOverviewsListCommand',
                20 => 'console.command.public_alias.Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsSegmentsListCommand',
                21 => 'console.command.public_alias.kunstmaan_search.command.setup',
                22 => 'console.command.public_alias.kunstmaan_search.command.delete',
                23 => 'console.command.public_alias.kunstmaan_search.command.populate',
                24 => 'console.command.public_alias.kunstmaan_media.command.rebuildfoldertree',
                25 => 'console.command.public_alias.kunstmaan_media.command.cleandeletedmedia',
                26 => 'console.command.public_alias.kunstmaan_media.command.renamesoftdeleted',
                27 => 'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\ImportTranslationsCommand',
                28 => 'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\ExportTranslationsCommand',
                29 => 'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\TranslationCacheCommand',
                30 => 'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\TranslationFlagCommand',
                31 => 'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\MigrationsDiffCommand',
                32 => 'console.command.public_alias.Kunstmaan\\TranslatorBundle\\Command\\ImportTranslationsFromFileCommand',
                33 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateEntityCommand',
                34 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateLayoutCommand',
                35 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateDefaultSiteCommand',
                36 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateDefaultPagePartsCommand',
                37 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateArticleCommand',
                38 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GeneratePagePartCommand',
                39 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GeneratePageCommand',
                40 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateFormPageCommand',
                41 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateFormPagePartsCommand',
                42 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateSearchPageCommand',
                43 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateAdminListCommand',
                44 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateAdminTestsCommand',
                45 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\InstallCommand',
                46 => 'console.command.public_alias.Kunstmaan\\GeneratorBundle\\Command\\GenerateConfigCommand',
                47 => 'console.command.public_alias.doctrine_migrations.diff_command',
                48 => 'console.command.public_alias.doctrine_migrations.execute_command',
                49 => 'console.command.public_alias.doctrine_migrations.generate_command',
                50 => 'console.command.public_alias.doctrine_migrations.latest_command',
                51 => 'console.command.public_alias.doctrine_migrations.migrate_command',
                52 => 'console.command.public_alias.doctrine_migrations.status_command',
                53 => 'console.command.public_alias.doctrine_migrations.version_command',
            ],
        ];
    }
}

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9e1fb = null;
    private $initializerdc05f = null;
    private static $publicPropertiesadbb0 = [
        
    ];
    public function getConnection()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getConnection', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getMetadataFactory', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getExpressionBuilder', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'beginTransaction', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getCache', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getCache();
    }
    public function transactional($func)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'transactional', array('func' => $func), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->transactional($func);
    }
    public function commit()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'commit', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->commit();
    }
    public function rollback()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'rollback', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getClassMetadata', array('className' => $className), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'createQuery', array('dql' => $dql), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'createNamedQuery', array('name' => $name), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'createQueryBuilder', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'flush', array('entity' => $entity), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'clear', array('entityName' => $entityName), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->clear($entityName);
    }
    public function close()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'close', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->close();
    }
    public function persist($entity)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'persist', array('entity' => $entity), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'remove', array('entity' => $entity), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'refresh', array('entity' => $entity), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'detach', array('entity' => $entity), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'merge', array('entity' => $entity), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'contains', array('entity' => $entity), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getEventManager', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getConfiguration', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'isOpen', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getUnitOfWork', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getProxyFactory', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'initializeObject', array('obj' => $obj), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'getFilters', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'isFiltersStateClean', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'hasFilters', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return $this->valueHolder9e1fb->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerdc05f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9e1fb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9e1fb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9e1fb->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, '__get', ['name' => $name], $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        if (isset(self::$publicPropertiesadbb0[$name])) {
            return $this->valueHolder9e1fb->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e1fb;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder9e1fb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e1fb;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder9e1fb;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, '__isset', array('name' => $name), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e1fb;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9e1fb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, '__unset', array('name' => $name), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e1fb;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9e1fb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, '__clone', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        $this->valueHolder9e1fb = clone $this->valueHolder9e1fb;
    }
    public function __sleep()
    {
        $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, '__sleep', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
        return array('valueHolder9e1fb');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdc05f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdc05f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerdc05f && ($this->initializerdc05f->__invoke($valueHolder9e1fb, $this, 'initializeProxy', array(), $this->initializerdc05f) || 1) && $this->valueHolder9e1fb = $valueHolder9e1fb;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9e1fb;
    }
    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder9e1fb;
    }
}