<?php

namespace Pyz\Zed\Planet\Communication\Form;

use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Pyz\Shared\Planet\Transfer\PlanetTransfer;


class PlanetForm extends AbstractType
{
    /**
     * @return string
     */

    public function getBlockPrefix(): string
    {
        return 'planet';
    }

    /**
     * @param OptionsResolver $resolver
     */

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            'data_class' => PlanetTransfer::class
        ]);
    }


    private const FIELD_NAME = 'name';

    private const FIELD_INTERESTING_FACT = 'interesting_fact';

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->addNameField($builder)->addInterestingFactField($builder);
    }

    /**
     * @param FormBuilderInterface $builder
     *
     * @return $this
     */

    private function addNameField(FormBuilderInterface $builder): PlanetForm
    {
        $builder->add(static::FIELD_NAME, TextType::class);
        return $this;
    }

    /**
     * @param FormBuilderInterface $builder
     *
     * @return $this
     */

    private function addInterestingFactField(FormBuilderInterface $builder): PlanetForm
    {
        $builder->add(static::FIELD_INTERESTING_FACT, TextType::class);
        return $this;
    }


}
