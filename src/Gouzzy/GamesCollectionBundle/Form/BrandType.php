<?php

namespace Gouzzy\GamesCollectionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BrandType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('name',          'text')
      ->add('wikiLink',      'text', array('required' => false))
      //->add('file',          'file', array('required'    => false))
      ->add('masterPicture',  new ImageType(), array('required' => false))
      //->add("pictures",     "collection",    array("type"=> $picture())
    ;
  }
  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Gouzzy\GamesCollectionBundle\Entity\Brand'
    ));
  }
  public function getName()
  {
    return 'gouzzy_gamescollectionbundle_brandtype';
  }
}