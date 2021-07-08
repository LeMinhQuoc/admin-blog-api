<?php

namespace App\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\NodeSearchBundle\Helper\SearchTypeInterface;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;
use App\Form\Pages\ContentPageAdminType;

/**
 * ContentPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="app_content_pages")
 */
class ContentPage extends AbstractPage implements HasPageTemplateInterface, SearchTypeInterface
{
    /**
     * Returns the default backend form type for this page
     *
     * @return string
     */
    public function getDefaultAdminType()
    {
        return ContentPageAdminType::class;
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array (
            array(
                'name'  => 'ContentPage',
                'class' => 'App\Entity\Pages\ContentPage'
            ),
        );
    }


    /**
     * {@inheritdoc}
     */
    public function getSearchType()
    {
        return 'Page';
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array('main');
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array('contentpage');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'Pages/ContentPage/view.html.twig';
    }
}
