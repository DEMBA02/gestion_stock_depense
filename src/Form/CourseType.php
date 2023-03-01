<?php

namespace App\Form;

use App\Entity\Courses;
use SebastianBergmann\Type\ObjectType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle',TextType::class,[
              "attr"=> ["class"=>""],
              "required"=> True,
              "label"=>"Libelle"
            ])
            ->add('pu', MoneyType::class,[
              "attr"=> ["class"=>""],
              "required"=> True,
              "label"=>"prix unitaire"
            ])
            ->add('qte', NumberType::class,[
              "attr"=> ["class"=>""],
              "required"=> True,
              "label"=>"quantite"
             ])
            ->add('date' , DateType::class, [
              'widget' => 'single_text',
              // this is actually the default format for single_text
              'format' => 'yyyy-MM-dd',
            ])
            ->add('particulier', HiddenType::class,[
              "mapped"=> False
            ])

            ->add('type',ChoiceType::class, [
              'choices' => [
                  'alimentaire' => 'Alimentaire',
                  'Beaute' => 'Beaute',
                  'CoutureMode' => 'CoutureMode',
                  'Soin' => 'Soin',
              ],
              'preferred_choices' => ['choisir'],
            ])
            
/*             ->add('submit', SubmitType::class,[
              "label"=>"Envoyer"
            ]) */
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Courses::class,
        ]);
    }

    
}
