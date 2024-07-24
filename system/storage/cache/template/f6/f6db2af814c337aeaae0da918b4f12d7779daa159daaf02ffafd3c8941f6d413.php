<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* journal3/template/journal3/manufacturer_grid.twig */
class __TwigTemplate_70fcf107ecc955b54ad350ce910f142eead0764d5a784143ae0251dc49aaea9f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/manufacturer_grid.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/manufacturer_grid.twig", "C:\\xampp\\htdocs\\thankyouteachergift\\system\\storage\\modification\\catalog\\view\\theme\\journal3\\template\\journal3\\manufacturer_grid.twig");
    }
}
