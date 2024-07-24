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
class __TwigTemplate_aee56111c29967e5c11dd1521b81b9e76c44522974887ff4bb581f28ce1ba607 extends \Twig\Template
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
        // line 62
        echo "</div><!-- .site-wrapper -->

";
        // line 64
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 64);
        echo "

";
        // line 66
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 66);
        echo "

";
        // line 68
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 68);
        echo "

";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 70), "getScripts", [0 => "footer"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 71
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 71), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 71);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "performanceJSDefer"], "method", false, false, false, 71)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
";
        // line 74
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 74), "get", [0 => "customJS"], "method", false, false, false, 74)) {
            // line 75
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 75), "get", [0 => "customJS"], "method", false, false, false, 75);
            echo "</script>
";
        }
        // line 77
        echo "
";
        // line 78
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 78), "isPopup", [], "method", false, false, false, 78) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 78), "get", [0 => "customCodeFooter"], "method", false, false, false, 78))) {
            // line 79
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "get", [0 => "customCodeFooter"], "method", false, false, false, 79);
            echo "
";
        }
        // line 81
        echo "
";
        // line 82
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 82), "isPopup", [], "method", false, false, false, 82) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 82), "get", [0 => "scrollTop"], "method", false, false, false, 82))) {
            // line 83
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
";
        }
        // line 87
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

#footer .link-item {
  font-weight: 700;
  font-size: 1.0rem;
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
        return array (  176 => 87,  170 => 83,  168 => 82,  165 => 81,  160 => 79,  158 => 78,  155 => 77,  149 => 75,  147 => 74,  144 => 73,  131 => 71,  127 => 70,  122 => 68,  117 => 66,  112 => 64,  108 => 62,  61 => 17,  57 => 14,  55 => 13,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
