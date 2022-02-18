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

/* themes/contrib/modekoningin_maxima/templates/page.html.twig */
class __TwigTemplate_241eaf7689b8caa9266e8671312914f76c04f2a72da6b7c0a86b9dcf2e636d62 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 115
        echo "    </header>
    ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 116)) {
            // line 117
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 118, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\"
           ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 123
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 123)) {
            // line 124
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 131
            echo "    ";
        }
        // line 132
        echo "    <div class= \"d-flex row justify-content-around text-center\">
      ";
        // line 133
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "spot_on_left", [], "any", false, false, true, 133)) {
            // line 134
            echo "            <div class=\"col-9 col-md-5\">
             ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "spot_on_left", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
            </div>
      ";
        }
        // line 138
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "spot_on_middle", [], "any", false, false, true, 138)) {
            // line 139
            echo "            <div class=\"col-3 col-md-3\">
             ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "spot_on_middle", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "
            </div>
      ";
        }
        // line 143
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "spot_on_right", [], "any", false, false, true, 143)) {
            // line 144
            echo "           <div class=\"col-12 order-2 col-lg-3\">
            ";
            // line 145
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "spot_on_right", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
            echo "
           </div>
      ";
        }
        // line 148
        echo "    </div>
    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 150
        $this->displayBlock('content', $context, $blocks);
        // line 177
        echo "    </div>
    ";
        // line 178
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 178) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 178)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 178))) {
            // line 179
            echo "      <div class=\"featured-bottom bg-primary\">
        <aside class=\"";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 180, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            echo "
          ";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo "
          ";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 187
        echo "    <footer class=\"site-footer\">
      ";
        // line 188
        $this->displayBlock('footer', $context, $blocks);
        // line 205
        echo "    </footer>
  </div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 74)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 74))) {
            // line 75
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 75, $this->source), "html", null, true);
            echo ">
          ";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "          <div class=\"container\">
          ";
            }
            // line 79
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
              ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
              ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81)) {
                // line 82
                echo "                <div class=\"form-inline navbar-form mx-auto\">
                  ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 86
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 87
                echo "          </div>
          ";
            }
            // line 89
            echo "          </nav>
        ";
        }
        // line 91
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 91, $this->source), "html", null, true);
        echo ">
          ";
        // line 92
        if (($context["container_navbar"] ?? null)) {
            // line 93
            echo "          <div class=\"container\">
          ";
        }
        // line 95
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
            ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 96))) {
            // line 97
            echo "              <button class=\"navbar-toggler navbar-toggler-right collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse justify-content-center\" id=\"CollapsingNavbar\">
                ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
                ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 100)) {
                // line 101
                echo "                  <div class=\"form-inline navbar-form justify-content-center\">
                    ";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 105
            echo "\t          </div>
            ";
        }
        // line 107
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 108
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 110
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 111
            echo "          </div>
          ";
        }
        // line 113
        echo "        </nav>
      ";
    }

    // line 124
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "        <div class=\"featured-top jumbotron\">
          <aside class=\"featured-top__inner section ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 126, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 150
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 151, $this->source), "html", null, true);
        echo "\">
          ";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 154, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 160)) {
            // line 161
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 161, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 167
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 167)) {
            // line 168
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 168, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 174
        echo "          </div>
        </div>
      ";
    }

    // line 188
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 189, $this->source), "html", null, true);
        echo "\">
          ";
        // line 190
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 190) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 190)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 190)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 190))) {
            // line 191
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "
              ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
              ";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
              ";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 198
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 198)) {
            // line 199
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 203
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/modekoningin_maxima/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 203,  393 => 200,  390 => 199,  387 => 198,  381 => 195,  377 => 194,  373 => 193,  369 => 192,  366 => 191,  364 => 190,  359 => 189,  355 => 188,  349 => 174,  342 => 170,  336 => 168,  333 => 167,  326 => 163,  320 => 161,  318 => 160,  312 => 157,  306 => 154,  301 => 152,  296 => 151,  292 => 150,  284 => 127,  280 => 126,  277 => 125,  273 => 124,  268 => 113,  264 => 111,  261 => 110,  257 => 108,  254 => 107,  250 => 105,  244 => 102,  241 => 101,  239 => 100,  235 => 99,  231 => 97,  229 => 96,  224 => 95,  220 => 93,  218 => 92,  213 => 91,  209 => 89,  205 => 87,  202 => 86,  196 => 83,  193 => 82,  191 => 81,  187 => 80,  182 => 79,  178 => 77,  176 => 76,  171 => 75,  168 => 74,  164 => 73,  157 => 205,  155 => 188,  152 => 187,  145 => 183,  141 => 182,  137 => 181,  133 => 180,  130 => 179,  128 => 178,  125 => 177,  123 => 150,  119 => 148,  113 => 145,  110 => 144,  107 => 143,  101 => 140,  98 => 139,  95 => 138,  89 => 135,  86 => 134,  84 => 133,  81 => 132,  78 => 131,  75 => 124,  72 => 123,  65 => 119,  61 => 118,  58 => 117,  56 => 116,  53 => 115,  51 => 73,  47 => 72,  43 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/modekoningin_maxima/templates/page.html.twig", "/var/www/html/web/themes/contrib/modekoningin_maxima/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 73, "if" => 116);
        static $filters = array("t" => 72, "escape" => 118);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
