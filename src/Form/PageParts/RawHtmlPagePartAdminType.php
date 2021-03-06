<?php

namespace App\Form\PageParts;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * RawHtmlPagePartAdminType
 */
class RawHtmlPagePartAdminType extends AbstractType
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting form the
     * top most type. Type extensions can further modify the form.
     * @param FormBuilderInterface $builder The form builder
     * @param array $options The options
     *
     * @see FormTypeExtensionInterface::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('content', TextareaType::class, array(
            'label' => 'pagepart.html.content',
            'required' => true,
            'attr' => array(
                'rows' => 5,
                'no-max-width' => true,
            )
        ));
    }


    public function getBlockPrefix()
    {
        return 'rawhtmlpageparttype';
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '\App\Entity\PageParts\RawHtmlPagePart'
        ));
    }
}
