<?php

namespace Caplogik\SemanticUIBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension as BaseAbstractTypeExtension;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractTypeExtension extends BaseAbstractTypeExtension
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('csui_form', '');
        $resolver->setAllowedTypes('csui_form', ['string']);

        $resolver->setDefault('csui_group', false);
        $resolver->setAllowedTypes('csui_group', ['boolean', 'string']);

        $resolver->setDefault('csui_field', '');
        $resolver->setAllowedTypes('csui_field', ['string']);

        $resolver->setDefault('csui_input', true);
        $resolver->setAllowedTypes('csui_input', ['boolean', 'string']);

        $resolver->setDefault('csui_input_left', '');
        $resolver->setAllowedTypes('csui_input_left', ['string']);

        $resolver->setDefault('csui_input_right', '');
        $resolver->setAllowedTypes('csui_input_right', ['string']);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['csui_form'] = $options['csui_form'];
        $view->vars['csui_group'] = $options['csui_group'];
        $view->vars['csui_field'] = $options['csui_field'];
        $view->vars['csui_input'] = $options['csui_input'];
        $view->vars['csui_input_left'] = $options['csui_input_left'];
        $view->vars['csui_input_right'] = $options['csui_input_right'];
    }
}
