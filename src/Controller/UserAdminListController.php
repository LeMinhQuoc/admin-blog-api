<?php

namespace App\Controller;

use App\AdminList\UserAdminListConfigurator;
use Kunstmaan\AdminListBundle\AdminList\Configurator\AdminListConfiguratorInterface;
use Kunstmaan\AdminListBundle\Controller\AdminListController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/{_locale}/%kunstmaan_admin.admin_prefix%/user", requirements={"_locale"="%requiredlocales%"})
 */
class UserAdminListController extends AdminListController
{
    /**
     * @var AdminListConfiguratorInterface
     */
    private $configurator;

    public function getAdminListConfigurator(): AdminListConfiguratorInterface
    {
        if (!isset($this->configurator)) {
            $this->configurator = new UserAdminListConfigurator($this->getEntityManager());
        }

        return $this->configurator;
    }

    /**
     * @Route("/", name="app_admin_user")
     */
    public function indexAction(Request $request): Response
    {
        return parent::doIndexAction($this->getAdminListConfigurator(), $request);
    }

    /**
     * @Route("/add", name="app_admin_user_add", methods={"GET", "POST"})
     */
    public function addAction(Request $request): Response
    {
        return parent::doAddAction($this->getAdminListConfigurator(), null, $request);
    }

    /**
     * @Route("/{id}", requirements={"id" = "\d+"}, name="app_admin_user_edit", methods={"GET", "POST"})
     */
    public function editAction(Request $request, int $id): Response
    {
        return parent::doEditAction($this->getAdminListConfigurator(), $id, $request);
    }

    /**
     * @Route("/{id}/view", requirements={"id" = "\d+"}, name="app_admin_user_view", methods={"GET"})
     */
    public function viewAction(Request $request, int $id): Response
    {
        return parent::doViewAction($this->getAdminListConfigurator(), $id, $request);
    }

    /**
     * @Route("/{id}/delete", requirements={"id" = "\d+"}, name="app_admin_user_delete", methods={"GET", "POST"})
     */
    public function deleteAction(Request $request, int $id): Response
    {
        return parent::doDeleteAction($this->getAdminListConfigurator(), $id, $request);
    }

    /**
     * @Route("/export.{_format}", requirements={"_format" = "csv|ods|xlsx"}, name="app_admin_user_export", methods={"GET", "POST"})
     */
    public function exportAction(Request $request, string $_format): Response
    {
        return parent::doExportAction($this->getAdminListConfigurator(), $_format, $request);
    }
}
