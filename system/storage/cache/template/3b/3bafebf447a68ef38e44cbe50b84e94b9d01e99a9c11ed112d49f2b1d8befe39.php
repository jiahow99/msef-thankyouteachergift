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

/* journal3/template/common/home.twig */
class __TwigTemplate_1084a5fc703e6ed62241b2d6584ed34483080961ec3a0d57839dd9317f418e6d extends \Twig\Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 2);
        echo "
";
        // line 3
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 4
            echo twig_get_attribute($this->env, $this->source, ($context["console"] ?? null), "log", [0 => "asd"], "method", false, false, false, 4);
            echo "
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
            // line 6
            echo ($context["column_left"] ?? null);
            echo "
    ";
            // line 7
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 8
                echo "    ";
                $context["class"] = "col-sm-6";
                // line 9
                echo "    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 10
                echo "    ";
                $context["class"] = "col-sm-9";
                // line 11
                echo "    ";
            } else {
                // line 12
                echo "    ";
                $context["class"] = "col-sm-12";
                // line 13
                echo "    ";
            }
            // line 14
            echo "    ";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 15
                echo "    <div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
    ";
            }
            // line 17
            echo "    ";
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 20);
        echo "
";
        // line 21
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  95 => 20,  88 => 17,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  56 => 7,  52 => 6,  47 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
