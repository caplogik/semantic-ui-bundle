<?php

namespace Caplogik\SemanticUIBundle\Form\Extension;

use Caplogik\SemanticUIBundle\Form\Extension\AbstractTypeExtension;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HiddenTypeExtension extends AbstractTypeExtension
{
    public function getExtendedType()
    {
        return 'Symfony\Component\Form\Extension\Core\Type\HiddenType';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('csui_input', false);
    }
}
