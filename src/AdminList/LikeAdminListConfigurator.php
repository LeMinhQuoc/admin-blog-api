<?php

namespace App\AdminList;

use Doctrine\ORM\EntityManager;

use App\Form\LikeAdminType;
use Kunstmaan\AdminListBundle\AdminList\Configurator\AbstractDoctrineORMAdminListConfigurator;
use Kunstmaan\AdminListBundle\AdminList\FilterType\ORM;
use Kunstmaan\AdminBundle\Helper\Security\Acl\AclHelper;
use Kunstmaan\AdminListBundle\AdminList\SortableInterface;

class LikeAdminListConfigurator extends AbstractDoctrineORMAdminListConfigurator{
    public function __construct(EntityManager $em, AclHelper $aclHelper = null)
    {
        parent::__construct($em, $aclHelper);
        $this->setAdminType(LikeAdminType::class);
    }

    public function buildFields()
    {
    }

    public function buildFilters()
    {
    }

    public function getBundleName(): string
    {
        return 'App';
    }

    public function getEntityName(): string
    {
        return 'Like';
    }
}
