<?php

namespace App\AdminList;

use Doctrine\ORM\EntityManager;

use App\Form\UserAdminType;
use Kunstmaan\AdminListBundle\AdminList\Configurator\AbstractDoctrineORMAdminListConfigurator;
use Kunstmaan\AdminListBundle\AdminList\FilterType\ORM;
use Kunstmaan\AdminBundle\Helper\Security\Acl\AclHelper;
use Kunstmaan\AdminListBundle\AdminList\SortableInterface;

class UserAdminListConfigurator extends AbstractDoctrineORMAdminListConfigurator{
    public function __construct(EntityManager $em, AclHelper $aclHelper = null)
    {
        parent::__construct($em, $aclHelper);
        $this->setAdminType(UserAdminType::class);
    }

    public function buildFields()
    {
        $this->addField('userName', 'User name', true);
        $this->addField('email', 'Email', true);
        $this->addField('fullName', 'Full name', true);
        $this->addField('phone', 'Phone', true);
        $this->addField('password', 'Password', true);
    }

    public function buildFilters()
    {
        $this->addFilter('userName', new ORM\StringFilterType('userName'), 'User name');
        $this->addFilter('email', new ORM\StringFilterType('email'), 'Email');
        $this->addFilter('fullName', new ORM\StringFilterType('fullName'), 'Full name');
        $this->addFilter('phone', new ORM\StringFilterType('phone'), 'Phone');
        $this->addFilter('password', new ORM\StringFilterType('password'), 'Password');
    }

    public function getBundleName(): string
    {
        return 'App';
    }

    public function getEntityName(): string
    {
        return 'User';
    }
}
