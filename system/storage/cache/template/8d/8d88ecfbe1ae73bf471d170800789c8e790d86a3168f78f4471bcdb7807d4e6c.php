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
class __TwigTemplate_2826fe12feb040594c561f36dda68492fed1dbcdef8cc817051c3fd46750f7ca extends \Twig\Template
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

          <div class=\"link-group\">
            <div class=\"link-title\">我们的活动</div>
            <div class=\"space-y-4\">
              <div></div>
            </div>
          </div>
        </div>

        <div class=\"flex items\"></div>
      </div>
    </div>
  </div>
</footer>

";
        }
        // line 44
        echo "</div><!-- .site-wrapper -->

";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 46);
        echo "

";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 48);
        echo "

";
        // line 50
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 50);
        echo "

";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 52), "getScripts", [0 => "footer"], "method", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 53
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 53), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 53);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 53), "get", [0 => "performanceJSDefer"], "method", false, false, false, 53)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "customJS"], "method", false, false, false, 56)) {
            // line 57
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "customJS"], "method", false, false, false, 57);
            echo "</script>
";
        }
        // line 59
        echo "
";
        // line 60
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 60), "isPopup", [], "method", false, false, false, 60) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 60), "get", [0 => "customCodeFooter"], "method", false, false, false, 60))) {
            // line 61
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 61), "get", [0 => "customCodeFooter"], "method", false, false, false, 61);
            echo "
";
        }
        // line 63
        echo "
";
        // line 64
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 64), "isPopup", [], "method", false, false, false, 64) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "scrollTop"], "method", false, false, false, 64))) {
            // line 65
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
";
        }
        // line 69
        echo "<!-- tqt code -->
<style>
#footer {
  background-image: url('/thankyouteachergift/image/catalog/tqt/footer_paper_m.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  color: #1b4b33;
}

#footer .link-group {
  margin-bottom: 3rem;
  padding-left: 1rem;
}

@media only screen and (min-width: 640px) {
  #footer .link-group {
    padding-left: 0rem;
    margin-bottom: 0rem;
  }
}

#footer .link-title {
  color: black;
  font-weight: 700;
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
}

@media only screen and (min-width: 640px) {
    #footer {
        background-image: url('/thankyouteachergift/image/catalog/tqt/footer_paper.png');
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
        return array (  158 => 69,  152 => 65,  150 => 64,  147 => 63,  142 => 61,  140 => 60,  137 => 59,  131 => 57,  129 => 56,  126 => 55,  113 => 53,  109 => 52,  104 => 50,  99 => 48,  94 => 46,  90 => 44,  61 => 17,  57 => 14,  55 => 13,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
