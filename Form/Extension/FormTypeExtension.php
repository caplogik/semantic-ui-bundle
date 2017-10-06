<?php

namespace Caplogik\SemanticUIBundle\Form\Extension;

use Caplogik\SemanticUIBundle\Form\Extension\AbstractTypeExtension;

class FormTypeExtension extends AbstractTypeExtension
{
    public function getExtendedType()
    {
        return 'Symfony\Component\Form\Extension\Core\Type\FormType';
    }
}
