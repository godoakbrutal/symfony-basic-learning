<?php

namespace Toro\CoinBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceAutocompleteChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

abstract class AbstractTransactionType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('coin', IntegerType::class, [
                'required' => true,
                'label' => 'toro_coin.form.transaction_type.coin',
            ])
            ->add('note', TextType::class, [
                'required' => false,
                'label' => 'toro_coin.form.transaction_type.note',
            ])
            ->add('user', ResourceAutocompleteChoiceType::class, [
                'required' => true,
                'label' => 'toro_coin.form.transaction_type.user',
                'resource' => 'sylius.web_user',
                'choice_name' => 'username',
                'choice_value' => 'username',
            ])
        ;
    }
}
