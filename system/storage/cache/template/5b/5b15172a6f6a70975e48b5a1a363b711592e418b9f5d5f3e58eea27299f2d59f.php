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

/* journal3/template/common/footer.twig */
class __TwigTemplate_d057d6f634db53c26f735cb4a5aff8002765556f5ad3d4beda53f12d5c953464 extends \Twig\Template
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
        if ( !array_key_exists("j3", $context)) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
";
        }
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom"], "method", false, false, false, 11);
        echo "

";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 13), "isPopup", [], "method", false, false, false, 13)) {
            // line 14
            echo "
<footer>
  ";
            // line 18
            echo "\t\t\t\t #}
  <!-- tqt code -->
  ";
            // line 20
            $this->loadTemplate("journal3/template/common/tqt_footer.twig", "journal3/template/common/footer.twig", 20)->display($context);
            // line 21
            echo "
\t\t\t\t\t";
            // line 22
            $this->loadTemplate("journal3/template/common/tqt_footer.twig", "journal3/template/common/footer.twig", 22)->display($context);
            // line 23
            echo "\t\t\t\t
</footer>

";
        }
        // line 27
        echo "</div><!-- .site-wrapper -->

";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 29);
        echo "

";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 31);
        echo "

";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 33);
        echo "

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 35), "getScripts", [0 => "footer"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 36
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 36), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 36);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 36), "get", [0 => "performanceJSDefer"], "method", false, false, false, 36)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => "customJS"], "method", false, false, false, 39)) {
            // line 40
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 40), "get", [0 => "customJS"], "method", false, false, false, 40);
            echo "</script>
";
        }
        // line 42
        echo "
";
        // line 43
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 43), "isPopup", [], "method", false, false, false, 43) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 43), "get", [0 => "customCodeFooter"], "method", false, false, false, 43))) {
            // line 44
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "customCodeFooter"], "method", false, false, false, 44);
            echo "
";
        }
        // line 46
        echo "
";
        // line 47
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 47), "isPopup", [], "method", false, false, false, 47) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 47), "get", [0 => "scrollTop"], "method", false, false, false, 47))) {
            // line 48
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
";
        }
        // line 52
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  140 => 48,  138 => 47,  135 => 46,  130 => 44,  128 => 43,  125 => 42,  119 => 40,  117 => 39,  114 => 38,  101 => 36,  97 => 35,  92 => 33,  87 => 31,  82 => 29,  78 => 27,  72 => 23,  70 => 22,  67 => 21,  65 => 20,  61 => 18,  57 => 14,  55 => 13,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
