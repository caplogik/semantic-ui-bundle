<?php

namespace Caplogik\SemanticUIBundle\Menu\Renderer;

use Knp\Menu\ItemInterface;
use Knp\Menu\Matcher\MatcherInterface;
use Knp\Menu\Renderer\RendererInterface;
use Twig_Environment;

/**
 */
class TwigRenderer implements RendererInterface
{
    /**
     * @var Twig_Environment
     */
    private $environment;

    /**
     * @var MatcherInterface
     */
    private $matcher;

    /**
     * @var array
     */
    private $defaultOptions;

    /**
     * @param Twig_Environment $environment
     * @param string            $template
     * @param MatcherInterface  $matcher
     * @param array             $defaultOptions
     */
    public function __construct(Twig_Environment $environment, $template, MatcherInterface $matcher, array $defaultOptions = [])
    {
        $this->environment = $environment;
        $this->matcher = $matcher;
        $this->defaultOptions = array_merge([
            'depth' => null,
            'matchingDepth' => null,
            'currentAsLink' => true,
            'template' => $template,
            'compressed' => false,
            'allow_safe_labels' => false,
            'clear_matcher' => true,
            'includeRoot' => false
        ], $defaultOptions);
    }

    public function render(ItemInterface $item, array $options = [])
    {
        $options = array_merge($this->defaultOptions, $options);
        
        $html = $this->environment->render($options['template'], [
            'item' => $item,
            'options' => $options,
            'matcher' => $this->matcher
        ]);

        if ($options['clear_matcher']) {
            $this->matcher->clear();
        }

        return $html;
    }
}
