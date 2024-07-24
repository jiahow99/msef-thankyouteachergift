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

/* journal3/template/journal3/headers/desktop/compact.twig */
class __TwigTemplate_f87bcce1f86010fd43055ac50f729d5b35f412c47c8a57dfb11a7bac1ac19765 extends \Twig\Template
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
        // line 62
        $this->loadTemplate("journal3/template/journal3/headers/desktop/tqt_header.twig", "journal3/template/journal3/headers/desktop/compact.twig", 62)->display($context);
        // line 63
        echo "\t\t\t\t

";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/compact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 63,  37 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/desktop/compact.twig", "C:\\xampp\\htdocs\\thankyouteachergift\\system\\storage\\modification\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\desktop\\compact.twig");
    }
}
