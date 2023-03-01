<?php

namespace App\Form;

use App\Entity\Abonnement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type',ChoiceType::class, [
                'choices' => [
                    'abonnement' => 'Alimentaire',
                    'Beaute' => 'Beaute',
                    'CoutureMode' => 'CoutureMode',
                    'Soin' => 'Soin',
                ],
                'preferred_choices' => ['choisir'],
            ])
            ->add('montant', MoneyType::class,[
                "attr"=> ["class"=>""],
                "required"=> True,
                "label"=>"Montant",
                
              ])
/*             ->add('debut', BirthdayType::class, [
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
                ],
            
              ]) */

            ->add('debut', DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ])
            ->add('modePaiement',TextType::class,[
                "attr"=> ["class"=>""],
                "required"=> True,
                "label"=>"ModePaiement"
              ])
            ->add('particuliers', HiddenType::class,[
                "mapped"=> False
              ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
}
