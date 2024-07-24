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

/* journal3/template/journal3/headers/desktop/tqt_header.twig */
class __TwigTemplate_7785be4681687cb8417f51f9a6817f0cba351a34f034d242ca56f51a199facb1 extends \Twig\Template
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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 1), "isPopup", [], "method", false, false, false, 1)) {
            // line 3
            echo "<div class=\"greenboard\">
  <div id=\"tqt-header\">
    <div>
      <a href=\"https://www.thankyouteacher.my/\">
        <img src=\"/thankyouteachergift/image/catalog/tqt/tqt_logo_m_shadow.png\" class=\"navbar-logo mobile\"/>
      </a>
    </div>
    <div class=\"navbar-group\">
      <div class=\"navbar-item-group\">
        <div class=\"navbar-item\">
            <a href=\"https://www.thankyouteacher.my/about-us\">感恩金</a>
        </div>

        <div class=\"navbar-item\">
            <a href=\"https://www.thankyouteacher.my/gratitude\">谢师宴</a>
        </div>

        <div class=\"navbar-item\">
            <a href=\"https://www.thankyouteacher.my/thankful-memorial-gallery\">师恩馆</a>
        </div>

        <div class=\"navbar-item\">
            <a href=\"https://tap.thankyouteacher.my/teachers\">老师您好</a>
        </div>

        <div class=\"navbar-item\">
            <a href=\"https://tap.thankyouteacher.my/donation\">我要回馈</a>
        </div>

        <div class=\"navbar-item\">
            <a href=\"https://tap.thankyouteacher.my/\">登入/注册</a>
        </div>
      </div>

      <div class=\"navbar-menu-group\">
        <div class=\"navbar-menu\">
          <a href=\"#\" aria-label=\"Toggle navigation\" id=\"primary-menu-toggle\" class=\"text-white\">
            <svg viewBox=\"0 0 20 20\" class=\"inline-block w-6 h-6\" version=\"1.1\"
              xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
              <g stroke=\"none\" stroke-width=\"1\" fill=\"currentColor\" fill-rule=\"evenodd\">
                <g id=\"icon-shape\">
                  <path d=\"M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z\"
                    id=\"Combined-Shape\"></path>
                </g>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"drawer-container\" id=\"primary-menu\" style=\"display: none;\">
  <div class=\"drawer-mask\"></div>
  <div class=\"drawer\">
    <div class=\"drawer-close\">
      <a href=\"#\" aria-label=\"Toggle navigation\" id=\"primary-menu-close\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 50 50\">
          <path fill=\"white\" d=\"M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z\"></path>
        </svg>
      </a>
    </div>

    <div class=\"drawer-menu-group-desktop\">
      <div class=\"drawer-menu-group-logo\">
        <a href=\"https://thankyouteacher.my\">
          <img src=\"/thankyouteachergift/image/catalog/tqt/tqt_logo_shadow.png\" class=\"navbar-logo\"/>
        </a>
      </div>

      <div class=\"menu-group-desktop\">
        <div class=\"drawer-menu\"><a href=\"https:/tap.thankyouteacher.my/\">注册 / 登录</a></div>

      </div>

      <div class=\"menu-group-desktop\">
        <div class=\"drawer-menu\"><a href=\"https://www.thankyouteacher.my/about-us\">感恩金</a></div>

        <div class=\"drawer-menu\"><a href=\"https://www.thankyouteacher.my/gratitude\">谢师宴</a></div>

        <div class=\"drawer-menu\"><a href=\"https://tap.thankyouteacher.my/teachers\">老师您好</a></div>

        <div class=\"drawer-menu\"><a href=\"https://www.thankyouteacher.my/interviews\">念师恩</a></div>

        <div class=\"drawer-menu\"><a href=\"https://www.thankyouteacher.my/thankful-memorial-gallery\">师恩馆</a></div>

        <div class=\"drawer-menu\"><a href=\"https://www.thankyouteacher.my/essay\">文章分享</a></div>
      </div>

      <div class=\"menu-group-desktop\">
        <div class=\"drawer-menu\"><a href=\"https://www.thankyouteacher.my/latest-news\">最新动态</a></div>

        <div class=\"drawer-menu\">
          <button onclick=\"toggleChildMenu(this)\">
            <span>关于我们</span>
            <span>
              <i class=\"fa fa-angle-down\"></i>
            </span>
          </button>

          <div class=\"options\" style=\"display: none;\">
              <div><a href=\"https://www.thankyouteacher.my/origin\">计划缘起</a></div>

              <div><a href=\"https://www.thankyouteacher.my/plan\">计划与宗旨</a></div>

              <div><a href=\"https://www.thankyouteacher.my/support\">支持单位</a></div>
          </div>
        </div>

        <div class=\"drawer-menu\"><a href=\"https://www.thankyouteacher.my/faq\">常见问题 FAQ</a></div>

        <div class=\"drawer-menu\"><a href=\"https://www.thankyouteacher.my/contact-us\">联系我们</a></div>
      </div>
    </div>

    <div class=\"drawer-menu-group-mobile\">
      <div class=\"drawer-menu-group-logo\">
        <img src=\"/thankyouteachergift/image/catalog/tqt/tqt_logo_shadow.png\" class=\"navbar-logo\">
      </div>

      <div style=\"display: flex; justify-content: center;\">
        <div class=\"menu-group-mobile\">
          <div class=\"drawer-menu\">
            <a href=\"https://tap.thankyouteacher.my\">注册 / 登录</a>
          </div>

          <div class=\"drawer-menu\">
            <a href=\"https://www.thankyouteacher.my/about-us\">感恩金</a>
          </div>

          <div class=\"drawer-menu\">
            <a href=\"https://www.thankyouteacher.my/gratitude\">谢师宴</a>
          </div>

          <div class=\"drawer-menu\">
            <a href=\"https://tap.thankyouteacher.my/teachers\">老师您好</a>
          </div>

          <div class=\"drawer-menu\">
            <a href=\"https://www.thankyouteacher.my/interviews\">念师恩</a>
          </div>

          <div class=\"drawer-menu\">
            <a href=\"https://www.thankyouteacher.my/thankful-memorial-gallery\">师恩馆</a>
          </div>

          <div class=\"drawer-menu\">
            <a href=\"https://www.thankyouteacher.my/essay\">文章分享</a>
          </div>

          <div class=\"drawer-menu\">
            <a href=\"https://www.thankyouteacher.my/latest-news\">最新动态</a>
          </div>

          <div class=\"drawer-menu\">
            <button onclick=\"toggleChildMenu(this)\">
              <span>关于我们</span>
              <span><i class=\"fa fa-angle-down\"></i></span>  
            </button>

            <div class=\"options\" style=\"display: none;\">
              <div><a href=\"https://www.thankyouteacher.my/origin\">计划缘起</a></div>

              <div><a href=\"https://www.thankyouteacher.my/plan\">计划与宗旨</a></div>

              <div><a href=\"https://www.thankyouteacher.my/support\">支持单位</a></div>
          </div>
          </div>

          <div class=\"drawer-menu\">
            <a href=\"https://www.thankyouteacher.my/faq\">常见问题 FAQ</a>
          </div>

          <div class=\"drawer-menu\">
            <a href=\"https://www.thankyouteacher.my/contact-us\">联系我们</a>
          </div>
        </div>
      </div>

    </div>

    <div class=\"drawer-footer\">
      <p>thankyouteacher.my is wholly owned and managed by Malaysian Social Entrepenuers Foundation</p>
    </div>
  </div>
</div>

<div class=\"bg-paper-color\">
  <div id=\"tqt-sub-header\">
    <div class=\"sub-header-right\">
      <div class=\"top-menu secondary-menu\">";
            // line 194
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 194), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 194);
            echo "</div>
      <div class=\"order-history-icon\">
        <a href=\"index.php?route=account/order\"></a>
      </div>
      <div>
        ";
            // line 199
            echo ($context["cart"] ?? null);
            echo "
      </div>
    </div>
  </div>
</div>
";
        }
        // line 205
        echo "<script>
window.addEventListener('load', function () {
  let main_navigation = document.querySelector('#primary-menu');
  let drawer = document.querySelector('.drawer');
  let body = document.body

  document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
        e.preventDefault();
        body.style.overflow = 'hidden';
        main_navigation.style.display = 'block';
        drawer.style.width = '100%';
  });

  document.querySelector('#primary-menu-close').addEventListener('click', function (e) {
        e.preventDefault();
        body.style.overflow = 'visible';

        main_navigation.style.display = 'none';
        drawer.style.width = '100%';
  });
});

function toggleChildMenu(button) {
  let child = button.nextSibling.nextSibling
  let icon = button.querySelector('i');

  child.style.display = child.style.display === 'none' ? 'block' : 'none';
  icon.classList.toggle('fa-angle-down')
  icon.classList.toggle('fa-angle-up')
}
</script>
<style>
";
        // line 246
        echo "
.greenboard {
  background-image: url('/thankyouteachergift/image/catalog/tqt/greenboard.webp') !important;
}

#tqt-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-left: auto;
  margin-right: auto;
  padding: 1.2rem 1.2rem;
  min-height: 6rem;
  width: 100%;
}

@media (min-width: 640px) {
  #tqt-header {
      min-height: 11rem;
      max-width: 640px;
  }
}

@media (min-width: 768px) {
  #tqt-header {
      max-width: 768px;
  }
}

@media (min-width: 1024px) {
  #tqt-header {
      max-width: 1024px;
  }
}

@media (min-width: 1280px) {
  #tqt-header {
      max-width: 1280px;
  }
}

@media (min-width: 1536px) {
  #tqt-header {
      max-width: 1536px;
  }
}

#tqt-header a {
  color: white;
}

#tqt-sub-header {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  display: flex;
  justify-content: flex-end;
  padding: 0rem 1.4rem;
  max-height: 5rem;
}

@media (min-width: 640px) {
  #tqt-sub-header {
      max-width: 640px;
  }
}

@media (min-width: 768px) {
  #tqt-sub-header {
      max-width: 768px;
  }
}

@media (min-width: 1024px) {
  #tqt-sub-header {
      max-width: 1024px;
  }
}

@media (min-width: 1280px) {
  #tqt-sub-header {
      max-width: 1280px;
  }
}

@media (min-width: 1536px) {
  #tqt-sub-header {
      max-width: 1536px;
  }
}

.navbar-logo.mobile {
  display: none;
}

@media (min-width: 640px) {
  .navbar-logo.mobile {
    display: block;
  }
}

.navbar-logo {
  width: 16rem;
}

.navbar-group {
  display: flex;
  align-items: center;
}

.navbar-item-group {
  display: none;
}

@media (min-width: 640px) {
  .navbar-item-group {
    display: flex;
  }
}

.navbar-item {
  color: white;
  padding: 0rem 1.8rem;
  border-right: 1px solid white;
}

.navbar-item a:hover {
  color: white;
}

.navbar-menu-group {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-left: 1.8rem;
  padding-right: 1.8rem;
}

.navbar-menu {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar-menu a {
  display: flex;
}

.navbar-menu svg {
  width: 2.4rem;
  height: 2.4rem;
  display: inline-block;
}

.navbar-menu svg:hover {
  color: white;
}

.noto-sans-sc-tqt {
  font-family: \"Noto Sans SC\", sans-serif !important;
  font-optical-sizing: auto !important;
  font-style: normal !important;
}

";
        // line 416
        echo "
.drawer-container {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1001;
}

.drawer-container a {
  color: white;
}

.drawer-mask {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: transparent;
}

.drawer {
  position: absolute;
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  overflow: auto;
  line-height: 1.5715;
  background-image: url('/thankyouteachergift/image/catalog/tqt/greenboard.webp');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  right: 0px;
  color: white;
}

.drawer-close {
  display: flex;
  justify-content: flex-end;
  padding: 2rem;
  color: white;
}

.drawer-close svg {
  width: 2.4rem;
  height: 2.4rem;
}

";
        // line 468
        echo ".drawer-menu-group-desktop {
  display: none;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 1.5rem;
  padding-left: 11rem;
  padding-right: 11rem;
  margin-top: 17rem;
}

@media (min-width: 640px) {
  .drawer-menu-group-desktop {
    display: grid;
  }
}

.menu-group-desktop > *:not(:first-child) {
  margin-top: 2.5rem;
}

.menu-group-desktop a:hover{
  color: white;
}
";
        // line 491
        echo "
";
        // line 493
        echo ".drawer-menu-group-mobile {
  margin-bottom: 10rem;
  display: block;
}

@media (min-width: 640px) {
  .drawer-menu-group-mobile {
    display: none;
  }
}

.drawer-menu-group-mobile > *:not(:first-child) {
  margin-top: 3.2rem;
}

.menu-group-mobile {
  min-width: 16rem;
}

.menu-group-mobile > *:not(:first-child) {
  margin-top: 3.2rem;
}
";
        // line 516
        echo "
.drawer-menu-group-logo {
  display: flex;
  justify-content: center;
}

@media (min-width: 640px) {
  .drawer-menu-group-logo {
      padding-top: 2rem;
  }
}

.drawer-menu {
  font-size: 2.1rem;
}

.drawer-menu button {
  width: 100%;
  display: flex;
  justify-content: space-between;
  background-color: transparent;
}

.drawer-menu button i {
  font-size: 3rem;
}

.drawer-menu .options{
  margin-top: 1.6rem;
  padding-left: 2.4rem;
}

.options > *:not(:first-child) {
  margin-top: 2.4rem;
}

.drawer-footer {
  display: none;
  justify-content: center;
  text-align: center;
  align-items: flex-end;
  flex-grow: 1;
  margin-bottom: 4rem;
}

@media (min-width: 640px) {
  .drawer-footer {
    display: grid;
  }
}

.sub-header-right {
  display: flex;
  align-items: center;
  justify-content: flex-end;
}

.bg-paper-color {
  background-color: #e9e5df;
}

";
        // line 579
        echo "body {
  font-family: \"Noto Sans SC\", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
}

body a:hover {
    color: black;
}

a {
  color: black;
}

";
        // line 594
        echo ".nav-tabs>li.active {
  border-color: #1b4b33 !important;
}

";
        // line 599
        echo "html:not(.popup) .page-title {
  font-family: \"Noto Sans SC\", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
  background-color: #1b4b33;
}

";
        // line 607
        echo ".desktop #cart:hover>a>i::before {
  color: black;
}

.count-badge  {
  background-color: #1b4b33 !important;
}

";
        // line 616
        echo ".desktop .secondary-menu .top-menu .j-menu > li:hover > a, 
.secondary-menu .top-menu .j-menu>li.active>a {
  color: black;
}

.j-menu>li>a {
  height: auto;
}

.j-menu>li {
  height: auto !important;
}

";
        // line 630
        echo ".order-history-icon > a:before {
  content: '\\ead5' !important;
  font-family: icomoon !important;
  font-size: 3.5rem;
}

.order-history-icon > a:focus {
  color: black;
}

";
        // line 641
        echo ".cart-remove:hover {
  color: rgba(208, 30, 36, 1) !important;
}


";
        // line 649
        echo "
.btn-cart,
.btn-checkout,
.btn-wishlist,
.btn-compare,
.btn-default,
.btn-success,
.ias-trigger-prev .btn {
  background: #1b4b33 !important;
  color: white !important;
}

";
        // line 662
        echo ".cart-buttons .btn-cart.btn:hover:hover,
.cart-buttons .btn-cart.btn:hover:active,
.cart-buttons .btn-cart.btn:hover:hover:active {
  background: rgba(52, 111, 80, 1) !important;
  color: white !important;
}

";
        // line 670
        echo "div.cart-content .btn-checkout.btn:hover,
div.cart-content .btn-checkout.btn:active,
div.cart-content .btn-checkout.btn:hover:active {
  background: rgba(52, 111, 80, 1) !important;
  color: white !important;
}

";
        // line 678
        echo ".product-layout .button-group {
  background: #1b4b33 !important;
}

";
        // line 683
        echo ".main-products.product-grid .product-thumb .btn-cart.btn:hover,
.main-products.product-grid .product-thumb .btn-cart.btn:active,
.main-products.product-grid .product-thumb .btn-cart.btn:hover:active {
  background: rgba(52, 111, 80, 1) !important;
}

";
        // line 690
        echo ".main-products.product-grid .product-thumb .btn-wishlist.btn:hover,
.main-products.product-grid .product-thumb .btn-wishlist.btn:active,
.main-products.product-grid .product-thumb .btn-wishlist.btn:hover:active {
  background: rgba(52, 111, 80, 1) !important;
}

";
        // line 697
        echo ".main-products.product-grid .product-thumb .btn-compare.btn:hover,
.main-products.product-grid .product-thumb .btn-compare.btn:active,
.main-products.product-grid .product-thumb .btn-compare.btn:hover:active {
  background: rgba(52, 111, 80, 1) !important;
}

";
        // line 704
        echo ".breadcrumb li:first-of-type a:hover i::before {
  color: rgba(52, 111, 80, 1);
}

";
        // line 709
        echo "#account-order .row,
#account-wishlist .row {
  justify-content: center;
}

";
        // line 715
        echo ".route-checkout-cart .buttons .pull-left .btn:hover,
.route-checkout-cart .buttons .pull-left .btn:hover:active {
  background: rgba(52, 111, 80, 1) !important;
}

";
        // line 721
        echo ".input-group .input-group-btn .btn:hover,
.input-group .input-group-btn .btn:active,
.input-group .input-group-btn .btn:active:focus,
.input-group .input-group-btn .btn:hover:active {
  background: rgba(52, 111, 80, 1) !important;
}

";
        // line 729
        echo ".main-products.product-grid .product-thumb .name a {
  font-family: \"Noto Sans SC\", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
}

";
        // line 736
        echo ".product-options .input-group .input-group-btn .btn:hover,
.product-options .input-group .input-group-btn .btn:active,
.product-options .input-group .input-group-btn .btn:hover:active {
  background: rgba(52, 111, 80, 1) !important;
}

";
        // line 743
        echo ".product-info .button-group-page .btn-cart.btn:hover,
.product-info .button-group-page .btn-cart.btn:active,
.product-info .button-group-page .btn-cart.btn:hover:active {
  background: rgba(52, 111, 80, 1) !important;
}

";
        // line 750
        echo ".title::after {
  background: #1b4b33 !important;
}

.ias-trigger-prev .btn:hover,
.ias-trigger-prev .btn:active,
.ias-trigger-prev .btn:hover:active,
.btn-cart:hover,
.btn-cart:active,
.btn-cart:focus,
.btn-cart:active:focus,
.btn-cart:hover:active,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:focus,
.btn-default:hover:active,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:focus,
.btn-primary:hover:active,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:focus,
.btn-info:hover:active,
.notification-cart .notification-checkout.btn-success:hover,
.notification-cart .notification-checkout.btn-success:active,
.notification-cart .notification-checkout.btn-success:focus,
.notification-cart .notification-checkout.btn-success:active:focus,
.notification-cart .notification-checkout.btn-success:hover:active {
  background: rgba(52, 111, 80, 1) !important;
}
</style>";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/tqt_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 750,  798 => 743,  790 => 736,  782 => 729,  773 => 721,  766 => 715,  759 => 709,  753 => 704,  745 => 697,  737 => 690,  729 => 683,  723 => 678,  714 => 670,  705 => 662,  691 => 649,  684 => 641,  672 => 630,  657 => 616,  647 => 607,  638 => 599,  632 => 594,  616 => 579,  553 => 516,  529 => 493,  526 => 491,  502 => 468,  449 => 416,  283 => 246,  249 => 205,  240 => 199,  232 => 194,  39 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/desktop/tqt_header.twig", "C:\\xampp\\htdocs\\thankyouteachergift\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\desktop\\tqt_header.twig");
    }
}
