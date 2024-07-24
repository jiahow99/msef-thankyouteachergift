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
class __TwigTemplate_e19dcfd1e6d2a27ad3d5918174dac7d943cf768497aa38542167521a5935de12 extends \Twig\Template
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
            // line 17
            echo "
  <div id=\"footer\">
    <div class=\"container mx-auto py-16 px-10 sm:py-22 space-y-8\">
      <div class=\"sm:grid sm:grid-cols-4\">
        <div class=\"col-span-2 grid grid-cols-2 sm:flex sm:space-x-4\">
          <div class=\"link-group\">
            <div class=\"link-title\">我们的活动</div>
            <div class=\"space-y-4\">
              <div></div>
            </div>
          </div>
          <div></div>
        </div>
        <div class=\"flex items\"></div>
      </div>
    </div>
  </div>
</footer>

";
        }
        // line 37
        echo "</div><!-- .site-wrapper -->

";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 39);
        echo "

";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 41);
        echo "

";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 43);
        echo "

";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 45), "getScripts", [0 => "footer"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 46
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 46), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 46);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 46), "get", [0 => "performanceJSDefer"], "method", false, false, false, 46)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
";
        // line 49
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 49), "get", [0 => "customJS"], "method", false, false, false, 49)) {
            // line 50
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 50), "get", [0 => "customJS"], "method", false, false, false, 50);
            echo "</script>
";
        }
        // line 52
        echo "
";
        // line 53
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 53), "isPopup", [], "method", false, false, false, 53) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => "customCodeFooter"], "method", false, false, false, 53))) {
            // line 54
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 54), "get", [0 => "customCodeFooter"], "method", false, false, false, 54);
            echo "
";
        }
        // line 56
        echo "
";
        // line 57
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 57), "isPopup", [], "method", false, false, false, 57) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "scrollTop"], "method", false, false, false, 57))) {
            // line 58
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
";
        }
        // line 62
        echo "<!-- tqt code -->
<style>
#footer {
  background-image: url('/thankyouteachergift/image/catalog/tqt/footer_paper_m.webp');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  color: #1b4b33;
}

#footer .link-group {
  margin-bottom: 3rem;
  padding-left: 1rem;
}

#footer .link-title {
  color: black;
  font-weight: 700;
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
}

@media only screen and (min-width: 640px) {
  #footer .link-group {
    padding-left: 0rem;
    margin-bottom: 0rem;
  }
}

@media only screen and (min-width: 640px) {
    #footer {
        background-image: url('/thankyouteachergift/image/catalog/tqt/footer_paper.webp');
    }
}
</style>
</body>
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
        return array (  151 => 62,  145 => 58,  143 => 57,  140 => 56,  135 => 54,  133 => 53,  130 => 52,  124 => 50,  122 => 49,  119 => 48,  106 => 46,  102 => 45,  97 => 43,  92 => 41,  87 => 39,  83 => 37,  61 => 17,  57 => 14,  55 => 13,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
