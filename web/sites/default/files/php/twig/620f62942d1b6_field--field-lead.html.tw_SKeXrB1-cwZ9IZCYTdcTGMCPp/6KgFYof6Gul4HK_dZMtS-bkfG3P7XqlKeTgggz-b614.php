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

/* themes/contrib/modekoningin_maxima/templates/field--field-lead.html.twig */
class __TwigTemplate_9da795bf920c8ede39deef15ee38d6871aec4a3082497e2b6e7b50ad3eeb67d9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        $context["classes"] = [0 => "lead"];
        // line 33
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "lead"], "method", false, false, true, 33);
        // line 1
        $this->parent = $this->loadTemplate("field.html.twig", "themes/contrib/modekoningin_maxima/templates/field--field-lead.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/contrib/modekoningin_maxima/templates/field--field-lead.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 1,  45 => 33,  43 => 29,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/modekoningin_maxima/templates/field--field-lead.html.twig", "/var/www/html/web/themes/contrib/modekoningin_maxima/templates/field--field-lead.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                [],
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
