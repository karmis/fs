<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('caption')
            ->add('annotation')
            ->add('content', null, array(
                'required' => false
            ))
            ->add('paths', 'genemu_jqueryselect2_entity', array(
                'class' => 'AdminBundle\Entity\Path',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->where('e.deleted != :is')
                        ->andWhere('e.published = :is')
                        ->setParameter('is', 1)
                        ->orderBy('e.caption', 'ASC');
                },
                'property' => 'caption',
                'multiple' => true,
                'required' => false
            ))
            ->add('photo', 'iphp_file', array(
                'data_class' => null,
                'required' => false
            ))
            ->add('published', null, array(
                'required' => false
            ))
            ->add('recommended', null, array(
                'required' => false
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'adminbundle_article';
    }
}
