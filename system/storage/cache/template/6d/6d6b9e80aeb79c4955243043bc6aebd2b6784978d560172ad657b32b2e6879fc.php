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

/* journal3/template/account/return_form.twig */
class __TwigTemplate_4f2b3b72c62f5d317a180dc76f6cba0de7362c719ea0fee05bc3f66b78efef7e extends \Twig\Template
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
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div id=\"account-return\" class=\"container\">
  ";
        // line 12
        if (($context["error_warning"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 15
        echo "  <div class=\"row\"> ";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 16
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 18
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 24), "get", [0 => "pageTitlePosition"], "method", false, false, false, 24) == "default")) {
            // line 25
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 27
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <p>";
        // line 28
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 31
        echo ($context["text_order"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 33
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 35
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 36
        if (($context["error_firstname"] ?? null)) {
            // line 37
            echo "              <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 38
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 41
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 43
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 44
        if (($context["error_lastname"] ?? null)) {
            // line 45
            echo "              <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 46
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 49
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 51
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 52
        if (($context["error_email"] ?? null)) {
            // line 53
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 54
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 57
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 59
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 60
        if (($context["error_telephone"] ?? null)) {
            // line 61
            echo "              <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 62
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 65
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 67
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 68
        if (($context["error_order_id"] ?? null)) {
            // line 69
            echo "              <div class=\"text-danger\">";
            echo ($context["error_order_id"] ?? null);
            echo "</div>
              ";
        }
        // line 70
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 73
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 76
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 84
        echo ($context["text_product"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 86
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 88
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 89
        echo ($context["product_id"] ?? null);
        echo "\" />
              ";
        // line 90
        if (($context["error_product"] ?? null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
              ";
        }
        // line 92
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 95
        echo ($context["entry_model"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 97
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 98
        if (($context["error_model"] ?? null)) {
            // line 99
            echo "              <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
              ";
        }
        // line 100
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 103
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 105
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 109
        echo ($context["entry_reason"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 111
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 111) == ($context["return_reason_id"] ?? null))) {
                // line 112
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 114);
                echo "\" checked=\"checked\" />
                  ";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 115);
                echo "</label>
              </div>
              ";
            } else {
                // line 118
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 120);
                echo "\" />
                  ";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 121);
                echo "</label>
              </div>
              ";
            }
            // line 124
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "              ";
        if (($context["error_reason"] ?? null)) {
            // line 126
            echo "              <div class=\"text-danger\">";
            echo ($context["error_reason"] ?? null);
            echo "</div>
              ";
        }
        // line 127
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 130
        echo ($context["entry_opened"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 132
        if (($context["opened"] ?? null)) {
            // line 133
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 135
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 137
        echo "                ";
        echo ($context["text_yes"] ?? null);
        echo "</label>
              <label class=\"radio-inline\"> ";
        // line 138
        if ( !($context["opened"] ?? null)) {
            // line 139
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 141
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 143
        echo "                ";
        echo ($context["text_no"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 147
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 149
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 152
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        ";
        // line 154
        if (($context["text_agree"] ?? null)) {
            // line 155
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 156
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-danger\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">";
            // line 157
            echo ($context["text_agree"] ?? null);
            echo "
            ";
            // line 158
            if (($context["agree"] ?? null)) {
                // line 159
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 161
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 163
            echo "            <button type=\"submit\" class=\"btn btn-primary\" ><span>";
            echo ($context["button_submit"] ?? null);
            echo "</span></button>
          </div>
        </div>
        ";
        } else {
            // line 167
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 168
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\"><span>";
            // line 170
            echo ($context["button_continue"] ?? null);
            echo "</span></button>
          </div>
        </div>
        ";
        }
        // line 174
        echo "      </form>
      ";
        // line 175
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 176
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 180
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script> 
";
        // line 184
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 184,  527 => 180,  520 => 176,  516 => 175,  513 => 174,  506 => 170,  499 => 168,  496 => 167,  488 => 163,  484 => 161,  480 => 159,  478 => 158,  474 => 157,  468 => 156,  465 => 155,  463 => 154,  458 => 152,  450 => 149,  445 => 147,  437 => 143,  433 => 141,  429 => 139,  427 => 138,  422 => 137,  418 => 135,  414 => 133,  412 => 132,  407 => 130,  402 => 127,  396 => 126,  393 => 125,  387 => 124,  381 => 121,  377 => 120,  373 => 118,  367 => 115,  363 => 114,  359 => 112,  356 => 111,  352 => 110,  348 => 109,  339 => 105,  334 => 103,  329 => 100,  323 => 99,  321 => 98,  315 => 97,  310 => 95,  305 => 92,  299 => 91,  297 => 90,  293 => 89,  287 => 88,  282 => 86,  277 => 84,  264 => 76,  258 => 73,  253 => 70,  247 => 69,  245 => 68,  239 => 67,  234 => 65,  229 => 62,  223 => 61,  221 => 60,  215 => 59,  210 => 57,  205 => 54,  199 => 53,  197 => 52,  191 => 51,  186 => 49,  181 => 46,  175 => 45,  173 => 44,  167 => 43,  162 => 41,  157 => 38,  151 => 37,  149 => 36,  143 => 35,  138 => 33,  133 => 31,  128 => 29,  124 => 28,  119 => 27,  113 => 25,  111 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  86 => 16,  81 => 15,  75 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/return_form.twig", "");
    }
}
