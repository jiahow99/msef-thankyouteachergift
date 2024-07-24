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
class __TwigTemplate_d51af47d2cdf534b77561dcbc05fccf639623cbd8394e6f259ffe2a4c7995cf9 extends \Twig\Template
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
  ";
            // line 18
            $this->loadTemplate("journal3/template/common/tqt_footer.twig", "journal3/template/common/footer.twig", 18)->display($context);
            // line 19
            echo "  <div id=\"footer\">
    <div class=\"container mx-auto py-16 px-10 sm:py-22 space-y-8\">
      <div class=\"sm:grid sm:grid-cols-4\">
        <div class=\"col-span-2 grid grid-cols-2 sm:flex sm:space-x-4\">
          <div class=\"link-group\">
            <div class=\"link-title\">我们的活动</div>
            <div class=\"space-y-4\">
              <div class=\"link-item\">
                <a href=\"\">感恩金</a>
              </div>

              <div class=\"link-item\">
                <a href=\"\">谢师宴</a>
              </div>

              <div class=\"link-item\">
                <a href=\"\">老师您好</a>
              </div>

              <div class=\"link-item\">
                <a href=\"\">念师恩</a>
              </div>

              <div class=\"link-item\">
                <a href=\"\">师恩馆</a>
              </div>
            </div>
          </div>

          <div class=\"link-group\">
            <div class=\"link-title\">关于我们</div>
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
        // line 63
        echo "</div><!-- .site-wrapper -->

";
        // line 65
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 65);
        echo "

";
        // line 67
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 67);
        echo "

";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 69);
        echo "

";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 71), "getScripts", [0 => "footer"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 72
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 72), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 72);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 72), "get", [0 => "performanceJSDefer"], "method", false, false, false, 72)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
";
        // line 75
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 75), "get", [0 => "customJS"], "method", false, false, false, 75)) {
            // line 76
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "customJS"], "method", false, false, false, 76);
            echo "</script>
";
        }
        // line 78
        echo "
";
        // line 79
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 79), "isPopup", [], "method", false, false, false, 79) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "get", [0 => "customCodeFooter"], "method", false, false, false, 79))) {
            // line 80
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 80), "get", [0 => "customCodeFooter"], "method", false, false, false, 80);
            echo "
";
        }
        // line 82
        echo "
";
        // line 83
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 83), "isPopup", [], "method", false, false, false, 83) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 83), "get", [0 => "scrollTop"], "method", false, false, false, 83))) {
            // line 84
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
";
        }
        // line 88
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
  font-size: 2.1rem;
}

#footer .link-item {
  font-weight: 700;
  font-size: 1.6rem;
}

@media only screen and (min-width: 640px) {
  #footer .link-item {
    min-width: 10rem;
  }
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
        return array (  180 => 88,  174 => 84,  172 => 83,  169 => 82,  164 => 80,  162 => 79,  159 => 78,  153 => 76,  151 => 75,  148 => 74,  135 => 72,  131 => 71,  126 => 69,  121 => 67,  116 => 65,  112 => 63,  66 => 19,  64 => 18,  61 => 17,  57 => 14,  55 => 13,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
