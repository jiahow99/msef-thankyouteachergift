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
class __TwigTemplate_ff41ceea6dd36d43a6b5eb2e029dcd5bb32a5cb21ea1fe8d81a6c6b31989b720 extends \Twig\Template
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
asdhkasdbfansdf
";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 3);
        echo "
";
        // line 4
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 5
            echo "<div id=\"common-home\" class=\"container\">
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
        return array (  98 => 21,  94 => 20,  87 => 17,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  55 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
