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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_8916764c0ff8f4232198fbb38e262bd1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'delete_form' => [$this, 'block_delete_form'],
            'detail_field' => [$this, 'block_detail_field'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "templatePath", ["layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/detail.html.twig"));

        // line 8
        $context["ea_field_assets"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 8, $this->source); })()), "crud", [], "any", false, false, false, 8), "fieldAssets", [twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 8);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)) . "-") . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "primaryKeyValue", [], "any", false, false, false, 5)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 11
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 12, $this->source); })()), "headContents", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 13
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 18
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 19, $this->source); })()), "bodyContents", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 20
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 25
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 26
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 26, $this->source); })()), "cssAssets", [], "any", false, false, false, 26)], false);
        echo "
    ";
        // line 27
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 27, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 27)], false);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 31
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 32
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 32, $this->source); })()), "jsAssets", [], "any", false, false, false, 32)], false);
        echo "
    ";
        // line 33
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 33, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 33)], false);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 37
        ob_start();
        // line 38
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 38, $this->source); })()), "crud", [], "any", false, false, false, 38), "customPageTitle", [(isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 38, $this->source); })()), (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 38, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 38, $this->source); })()), "instance", [], "any", false, false, false, 38)) : (null)), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 38, $this->source); })()), "i18n", [], "any", false, false, false, 38), "translationParameters", [], "any", false, false, false, 38)], "method", false, false, false, 38);
        // line 39
        echo "        ";
        echo (((null === (isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 39, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "crud", [], "any", false, false, false, 40), "defaultPageTitle", [null, null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 41
(isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 41, $this->source); })()))));
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo twig_spaceless($___internal_parse_2_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 46, $this->source); })()), "actions", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 47
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 47), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 52
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_fields"));

        // line 53
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })()), "fields", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 54
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isFormLayoutField", [], "any", false, false, false, 54)) {
                // line 55
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_render_layout_field", [$context["field"]], 55, $context, $this->getSourceContext());
                echo "
            ";
            } else {
                // line 57
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_render_field_contents", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 57, $this->source); })()), $context["field"]], 57, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 59
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 63
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "primaryKeyValue", [], "any", false, false, false, 63)], false);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 321
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_field"));

        // line 322
        echo "            ";
        if ( !(isset($context["is_form_fieldset"]) || array_key_exists("is_form_fieldset", $context) ? $context["is_form_fieldset"] : (function () { throw new RuntimeError('Variable "is_form_fieldset" does not exist.', 322, $this->source); })())) {
            // line 323
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 323, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 323, $this->source); })())], 323, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 325
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function macro_render_field_contents($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field_contents"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field_contents"));

            // line 68
            echo "    <div class=\"field-group ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 68, $this->source); })()), "cssClass", [], "any", false, false, false, 68), "html", null, true);
            echo "\">
        ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 69, $this->source); })()), "label", [], "any", false, false, false, 69) === false)) {
                // line 70
                echo "            ";
                // line 72
                echo "        ";
            } else {
                // line 73
                echo "            <div class=\"field-label\">";
                // line 74
                ob_start();
                // line 75
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "help", [], "any", false, false, false, 75))) {
                    // line 76
                    echo "data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-animation=\"false\"
                        data-bs-html=\"true\" data-bs-custom-class=\"ea-detail-label-tooltip\"
                        data-bs-title=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 78, $this->source); })()), "help", [], "any", false, false, false, 78)), "html_attr");
                    echo "\"";
                }
                $context["label_html_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 82
                echo "<div ";
                echo twig_escape_filter($this->env, (isset($context["label_html_attributes"]) || array_key_exists("label_html_attributes", $context) ? $context["label_html_attributes"] : (function () { throw new RuntimeError('Variable "label_html_attributes" does not exist.', 82, $this->source); })()), "html", null, true);
                echo ">
                    ";
                // line 83
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 83, $this->source); })()), "label", [], "any", false, false, false, 83));
                echo "
                </div>
            </div>
        ";
            }
            // line 87
            echo "
        <div class=\"field-value\">
            ";
            // line 89
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 89, $this->source); })()), "templatePath", [], "any", false, false, false, 89), ["field" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 89, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 89, $this->source); })())], false);
            echo "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 94
    public function macro_render_layout_field($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_layout_field"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_layout_field"));

            // line 95
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 95, $this->source); })()), "formType", [], "any", false, false, false, 95) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabListType")) {
                // line 96
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_list", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 96, $this->source); })())], 96, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 97
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 97, $this->source); })()), "formType", [], "any", false, false, false, 97) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupOpenType")) {
                // line 98
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_group_open", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 98, $this->source); })())], 98, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 99
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 99, $this->source); })()), "formType", [], "any", false, false, false, 99) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneGroupCloseType")) {
                // line 100
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_group_close", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })())], 100, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 101
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 101, $this->source); })()), "formType", [], "any", false, false, false, 101) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneOpenType")) {
                // line 102
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_open", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })())], 102, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 103
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "formType", [], "any", false, false, false, 103) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormTabPaneCloseType")) {
                // line 104
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_tab_close", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 104, $this->source); })())], 104, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 105
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 105, $this->source); })()), "formType", [], "any", false, false, false, 105) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupOpenType")) {
                // line 106
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_column_group_open", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 106, $this->source); })())], 106, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 107
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 107, $this->source); })()), "formType", [], "any", false, false, false, 107) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnGroupCloseType")) {
                // line 108
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_column_group_close", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 108, $this->source); })())], 108, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 109
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 109, $this->source); })()), "formType", [], "any", false, false, false, 109) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnOpenType")) {
                // line 110
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_column_open", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 110, $this->source); })())], 110, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 111
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 111, $this->source); })()), "formType", [], "any", false, false, false, 111) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormColumnCloseType")) {
                // line 112
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_column_close", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 112, $this->source); })())], 112, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 113
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 113, $this->source); })()), "formType", [], "any", false, false, false, 113) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetOpenType")) {
                // line 114
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_fieldset_open", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 114, $this->source); })())], 114, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 115
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 115, $this->source); })()), "formType", [], "any", false, false, false, 115) == "EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Layout\\EaFormFieldsetCloseType")) {
                // line 116
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_render_fieldset_close", [(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 116, $this->source); })())], 116, $context, $this->getSourceContext());
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 120
    public function macro_render_tab_list($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_list"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_list"));

            // line 121
            echo "    ";
            $context["tab_id_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 122
            echo "    ";
            $context["tab_is_active_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 123
            echo "    ";
            $context["tab_error_count_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ERROR_COUNT");
            // line 124
            echo "
    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 127, $this->source); })()), "getCustomOption", ["tabs"], "method", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 128
                echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
                // line 129
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_is_active_option_name"]) || array_key_exists("tab_is_active_option_name", $context) ? $context["tab_is_active_option_name"] : (function () { throw new RuntimeError('Variable "tab_is_active_option_name" does not exist.', 129, $this->source); })())], "method", false, false, false, 129)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_id_option_name"]) || array_key_exists("tab_id_option_name", $context) ? $context["tab_id_option_name"] : (function () { throw new RuntimeError('Variable "tab_id_option_name" does not exist.', 129, $this->source); })())], "method", false, false, false, 129), "html", null, true);
                echo "\" id=\"tablist-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_id_option_name"]) || array_key_exists("tab_id_option_name", $context) ? $context["tab_id_option_name"] : (function () { throw new RuntimeError('Variable "tab_id_option_name" does not exist.', 129, $this->source); })())], "method", false, false, false, 129), "html", null, true);
                echo "\" data-bs-toggle=\"tab\">";
                // line 130
                if (((twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", true, true, false, 130)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 130), false)) : (false))) {
                    // line 131
                    echo "<i class=\"tab-nav-item-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", ["icon"], "method", false, false, false, 131), "html", null, true);
                    echo "\"></i>";
                }
                // line 133
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 133), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 133, $this->source); })()), "i18n", [], "any", false, false, false, 133), "translationDomain", [], "any", false, false, false, 133));
                echo "

                        ";
                // line 135
                $context["tab_error_count"] = twig_get_attribute($this->env, $this->source, $context["tab"], "getCustomOption", [(isset($context["tab_error_count_option_name"]) || array_key_exists("tab_error_count_option_name", $context) ? $context["tab_error_count_option_name"] : (function () { throw new RuntimeError('Variable "tab_error_count_option_name" does not exist.', 135, $this->source); })())], "method", false, false, false, 135);
                // line 136
                if (((isset($context["tab_error_count"]) || array_key_exists("tab_error_count", $context) ? $context["tab_error_count"] : (function () { throw new RuntimeError('Variable "tab_error_count" does not exist.', 136, $this->source); })()) > 0)) {
                    // line 137
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => (isset($context["tab_error_count"]) || array_key_exists("tab_error_count", $context) ? $context["tab_error_count"] : (function () { throw new RuntimeError('Variable "tab_error_count" does not exist.', 137, $this->source); })())], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 138
                    echo twig_escape_filter($this->env, (isset($context["tab_error_count"]) || array_key_exists("tab_error_count", $context) ? $context["tab_error_count"] : (function () { throw new RuntimeError('Variable "tab_error_count" does not exist.', 138, $this->source); })()), "html", null, true);
                    // line 139
                    echo "</span>";
                }
                // line 141
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "        </ul>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 148
    public function macro_render_tab_group_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_open"));

            // line 149
            echo "    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 153
    public function macro_render_tab_group_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_group_close"));

            // line 154
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 158
    public function macro_render_tab_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_open"));

            // line 159
            echo "    ";
            $context["tab_id_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_ID");
            // line 160
            echo "    ";
            $context["tab_is_active_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_TAB_IS_ACTIVE");
            // line 161
            echo "
    <div id=\"";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "getCustomOption", [(isset($context["tab_id_option_name"]) || array_key_exists("tab_id_option_name", $context) ? $context["tab_id_option_name"] : (function () { throw new RuntimeError('Variable "tab_id_option_name" does not exist.', 162, $this->source); })())], "method", false, false, false, 162), "html", null, true);
            echo "\" class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "getCustomOption", [(isset($context["tab_is_active_option_name"]) || array_key_exists("tab_is_active_option_name", $context) ? $context["tab_is_active_option_name"] : (function () { throw new RuntimeError('Variable "tab_is_active_option_name" does not exist.', 162, $this->source); })())], "method", false, false, false, 162)) {
                echo "active";
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "cssClass", [], "any", false, false, false, 162), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "getFormTypeOption", ["attr"], "method", false, false, false, 162));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 163, $this->source); })()), "help", [], "any", false, false, false, 163)) {
                // line 164
                echo "            <div class=\"content-header-help tab-help\">
                ";
                // line 165
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 165, $this->source); })()), "help", [], "any", false, false, false, 165), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 165, $this->source); })()), "i18n", [], "any", false, false, false, 165), "translationDomain", [], "any", false, false, false, 165));
                echo "
            </div>
        ";
            }
            // line 168
            echo "
        <div class=\"row\">
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 172
    public function macro_render_tab_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_tab_close"));

            // line 173
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 177
    public function macro_render_column_group_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_open"));

            // line 178
            echo "    ";
            // line 179
            echo "    ";
            if ( !((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 179)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 179), false)) : (false))) {
                // line 180
                echo "        <div class=\"row\">
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 184
    public function macro_render_column_group_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_group_close"));

            // line 185
            echo "    ";
            // line 186
            echo "    ";
            if ( !((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", true, true, false, 186)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "getFormTypeOption", ["ea_is_inside_tab"], "method", false, false, false, 186), false)) : (false))) {
                // line 187
                echo "        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 191
    public function macro_render_column_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_open"));

            // line 192
            echo "    ";
            $context["field_icon"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 192, $this->source); })()), "getCustomOption", ["icon"], "method", false, false, false, 192);
            // line 193
            echo "    ";
            $context["column_has_title"] = ((((((isset($context["field_icon"]) || array_key_exists("field_icon", $context) ? $context["field_icon"] : (function () { throw new RuntimeError('Variable "field_icon" does not exist.', 193, $this->source); })()) != null) || (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 193, $this->source); })()), "label", [], "any", false, false, false, 193) != false)) || (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 193, $this->source); })()), "label", [], "any", false, false, false, 193) != null)) || (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 193, $this->source); })()), "label", [], "any", false, false, false, 193) != "")) || (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 193, $this->source); })()), "help", [], "any", false, false, false, 193) != null));
            // line 194
            echo "
    <div class=\"form-column ";
            // line 195
            echo (( !(isset($context["column_has_title"]) || array_key_exists("column_has_title", $context) ? $context["column_has_title"] : (function () { throw new RuntimeError('Variable "column_has_title" does not exist.', 195, $this->source); })())) ? ("form-column-no-header") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 195, $this->source); })()), "cssClass", [], "any", false, false, false, 195), "html", null, true);
            echo "\">
        ";
            // line 196
            if ((isset($context["column_has_title"]) || array_key_exists("column_has_title", $context) ? $context["column_has_title"] : (function () { throw new RuntimeError('Variable "column_has_title" does not exist.', 196, $this->source); })())) {
                // line 197
                echo "            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    ";
                // line 199
                if ((isset($context["field_icon"]) || array_key_exists("field_icon", $context) ? $context["field_icon"] : (function () { throw new RuntimeError('Variable "field_icon" does not exist.', 199, $this->source); })())) {
                    echo "<i class=\"form-column-icon fa fa-fw fa-";
                    echo twig_escape_filter($this->env, (isset($context["field_icon"]) || array_key_exists("field_icon", $context) ? $context["field_icon"] : (function () { throw new RuntimeError('Variable "field_icon" does not exist.', 199, $this->source); })()), "html", null, true);
                    echo "\"></i>";
                }
                // line 200
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 200, $this->source); })()), "label", [], "any", false, false, false, 200)) {
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 200, $this->source); })()), "label", [], "any", false, false, false, 200), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 200, $this->source); })()), "i18n", [], "any", false, false, false, 200), "translationDomain", [], "any", false, false, false, 200));
                }
                // line 201
                echo "                </div>

                ";
                // line 203
                if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 203, $this->source); })()), "help", [], "any", false, false, false, 203)) {
                    // line 204
                    echo "                    <div class=\"form-column-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 204, $this->source); })()), "help", [], "any", false, false, false, 204), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 204, $this->source); })()), "i18n", [], "any", false, false, false, 204), "translationDomain", [], "any", false, false, false, 204));
                    echo "</div>
                ";
                }
                // line 206
                echo "            </div>
        ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 210
    public function macro_render_column_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_column_close"));

            // line 211
            echo "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 214
    public function macro_render_fieldset_open($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_open"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_open"));

            // line 215
            echo "    ";
            $context["fieldset_has_header"] = ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 215, $this->source); })()), "label", [], "any", false, false, false, 215) || twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 215, $this->source); })()), "getCustomOption", ["icon"], "method", false, false, false, 215)) || twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 215, $this->source); })()), "help", [], "any", false, false, false, 215));
            // line 216
            echo "    ";
            $context["is_collapsible_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSIBLE");
            // line 217
            echo "    ";
            $context["is_collapsed_option_name"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField::OPTION_COLLAPSED");
            // line 218
            echo "    ";
            $context["is_collapsible"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 218, $this->source); })()), "getCustomOption", [(isset($context["is_collapsible_option_name"]) || array_key_exists("is_collapsible_option_name", $context) ? $context["is_collapsible_option_name"] : (function () { throw new RuntimeError('Variable "is_collapsible_option_name" does not exist.', 218, $this->source); })())], "method", false, false, false, 218);
            // line 219
            echo "    ";
            $context["is_collapsed"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 219, $this->source); })()), "getCustomOption", [(isset($context["is_collapsed_option_name"]) || array_key_exists("is_collapsed_option_name", $context) ? $context["is_collapsed_option_name"] : (function () { throw new RuntimeError('Variable "is_collapsed_option_name" does not exist.', 219, $this->source); })())], "method", false, false, false, 219);
            // line 220
            echo "
    <div class=\"form-fieldset ";
            // line 221
            echo (( !(isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 221, $this->source); })())) ? ("form-fieldset-no-header") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 221, $this->source); })()), "cssClass", [], "any", false, false, false, 221), "html", null, true);
            echo "\">
        <fieldset>
            ";
            // line 223
            if ((isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 223, $this->source); })())) {
                // line 224
                echo "                <div class=\"form-fieldset-header ";
                echo (((isset($context["is_collapsible"]) || array_key_exists("is_collapsible", $context) ? $context["is_collapsible"] : (function () { throw new RuntimeError('Variable "is_collapsible" does not exist.', 224, $this->source); })())) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 224, $this->source); })()), "help", [], "any", false, false, false, 224))) ? ("with-help") : (""));
                echo "\">
                    <div class=\"form-fieldset-title\">
                        ";
                // line 226
                ob_start();
                // line 227
                echo "                            ";
                if ((isset($context["is_collapsible"]) || array_key_exists("is_collapsible", $context) ? $context["is_collapsible"] : (function () { throw new RuntimeError('Variable "is_collapsible" does not exist.', 227, $this->source); })())) {
                    // line 228
                    echo "                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            ";
                }
                // line 230
                echo "
                            ";
                // line 231
                if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 231, $this->source); })()), "getCustomOption", ["icon"], "method", false, false, false, 231)) {
                    // line 232
                    echo "                                <i class=\"form-fieldset-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 232, $this->source); })()), "getCustomOption", ["icon"], "method", false, false, false, 232), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 234
                echo "
                            ";
                // line 235
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 235, $this->source); })()), "label", [], "any", false, false, false, 235));
                echo "
                        ";
                $context["fieldset_title_contents"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 237
                echo "
                        ";
                // line 238
                if ((isset($context["is_collapsible"]) || array_key_exists("is_collapsible", $context) ? $context["is_collapsible"] : (function () { throw new RuntimeError('Variable "is_collapsible" does not exist.', 238, $this->source); })())) {
                    // line 239
                    echo "                            <a href=\"#content-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 239, $this->source); })()), "property", [], "any", false, false, false, 239), "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse ";
                    // line 240
                    echo (((isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 240, $this->source); })())) ? ("collapsed") : (""));
                    echo "\"
                               aria-expanded=\"";
                    // line 241
                    echo (((isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 241, $this->source); })())) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 241, $this->source); })()), "property", [], "any", false, false, false, 241), "html", null, true);
                    echo "\">
                                ";
                    // line 242
                    echo (isset($context["fieldset_title_contents"]) || array_key_exists("fieldset_title_contents", $context) ? $context["fieldset_title_contents"] : (function () { throw new RuntimeError('Variable "fieldset_title_contents" does not exist.', 242, $this->source); })());
                    echo "
                            </a>
                        ";
                } else {
                    // line 245
                    echo "                            <span class=\"not-collapsible form-fieldset-title-content\">
                                ";
                    // line 246
                    echo (isset($context["fieldset_title_contents"]) || array_key_exists("fieldset_title_contents", $context) ? $context["fieldset_title_contents"] : (function () { throw new RuntimeError('Variable "fieldset_title_contents" does not exist.', 246, $this->source); })());
                    echo "
                            </span>
                        ";
                }
                // line 249
                echo "
                        ";
                // line 250
                if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 250, $this->source); })()), "help", [], "any", false, false, false, 250)) {
                    // line 251
                    echo "                            <div class=\"form-fieldset-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 251, $this->source); })()), "help", [], "any", false, false, false, 251));
                    echo "</div>
                        ";
                }
                // line 253
                echo "                    </div>
                </div>
            ";
            }
            // line 256
            echo "
            <div id=\"content-";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 257, $this->source); })()), "property", [], "any", false, false, false, 257), "html", null, true);
            echo "\" class=\"form-fieldset-body ";
            echo (( !(isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 257, $this->source); })())) ? ("without-header") : (""));
            echo " ";
            echo (((isset($context["is_collapsible"]) || array_key_exists("is_collapsible", $context) ? $context["is_collapsible"] : (function () { throw new RuntimeError('Variable "is_collapsible" does not exist.', 257, $this->source); })())) ? ("collapse") : (""));
            echo " ";
            echo (( !(isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 257, $this->source); })())) ? ("show") : (""));
            echo "\">
                <div class=\"row\">
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 261
    public function macro_render_fieldset_close($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_close"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_fieldset_close"));

            // line 262
            echo "                </div>
            </div>
        </fieldset>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 269
    public function macro_render_detail_fields_with_tabs($__entity__ = null, $__field_layout__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field_layout" => $__field_layout__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields_with_tabs"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields_with_tabs"));

            // line 270
            echo "    ";
            @trigger_error("The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 270).", E_USER_DEPRECATED);
            // line 271
            echo "
    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field_layout"]) || array_key_exists("field_layout", $context) ? $context["field_layout"] : (function () { throw new RuntimeError('Variable "field_layout" does not exist.', 275, $this->source); })()), "tabs", [], "any", false, false, false, 275));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 276
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
                // line 277
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 277)) {
                    echo "active";
                }
                echo "\" href=\"#tab-pane-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 277), "html", null, true);
                echo "\" id=\"tab-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 277), "html", null, true);
                echo "\" data-bs-toggle=\"tab\">";
                // line 278
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 278)) {
                    // line 279
                    echo "<i class=\"fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "customOption", ["icon"], "method", false, false, false, 279), "html", null, true);
                    echo "\"></i>";
                }
                // line 281
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, false, 281), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 281, $this->source); })()), "i18n", [], "any", false, false, false, 281), "translationDomain", [], "any", false, false, false, 281));
                echo "
                        </a>
                    </li>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "            </ul>
            <div class=\"tab-content\">
                ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field_layout"]) || array_key_exists("field_layout", $context) ? $context["field_layout"] : (function () { throw new RuntimeError('Variable "field_layout" does not exist.', 287, $this->source); })()), "tabs", [], "any", false, false, false, 287));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 288
                echo "                    <div id=\"tab-pane-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 288), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 288)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", true, true, false, 288)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "cssClass", [], "any", false, false, false, 288), "")) : ("")), "html", null, true);
                echo "\">
                        ";
                // line 289
                if (((twig_get_attribute($this->env, $this->source, $context["tab"], "help", [], "any", true, true, false, 289)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 289), false)) : (false))) {
                    // line 290
                    echo "                            <div class=\"content-header-help tab-help\">
                                ";
                    // line 291
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "help", [], "any", false, false, false, 291), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 291, $this->source); })()), "i18n", [], "any", false, false, false, 291), "translationDomain", [], "any", false, false, false, 291));
                    echo "
                            </div>
                        ";
                }
                // line 294
                echo "                        <div class=\"row\">
                            ";
                // line 295
                echo twig_call_macro($macros["_self"], "macro_render_detail_fields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 295, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field_layout"]) || array_key_exists("field_layout", $context) ? $context["field_layout"] : (function () { throw new RuntimeError('Variable "field_layout" does not exist.', 295, $this->source); })()), "fieldsInTab", [twig_get_attribute($this->env, $this->source, $context["tab"], "uniqueId", [], "any", false, false, false, 295)], "method", false, false, false, 295)], 295, $context, $this->getSourceContext());
                echo "
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 304
    public function macro_render_detail_fields($__entity__ = null, $__fields__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "fields" => $__fields__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_detail_fields"));

            // line 305
            echo "    ";
            @trigger_error("The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 305).", E_USER_DEPRECATED);
            // line 306
            echo "
    ";
            // line 307
            $context["form_fieldset_is_already_open"] = false;
            // line 308
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 308, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 309
                echo "        ";
                $context["is_form_fieldset"] = twig_in_filter("field-form_fieldset", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 309));
                // line 310
                echo "
        ";
                // line 311
                if (((isset($context["is_form_fieldset"]) || array_key_exists("is_form_fieldset", $context) ? $context["is_form_fieldset"] : (function () { throw new RuntimeError('Variable "is_form_fieldset" does not exist.', 311, $this->source); })()) || (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 311) &&  !(isset($context["is_form_fieldset"]) || array_key_exists("is_form_fieldset", $context) ? $context["is_form_fieldset"] : (function () { throw new RuntimeError('Variable "is_form_fieldset" does not exist.', 311, $this->source); })())))) {
                    // line 312
                    echo "            ";
                    if ((isset($context["form_fieldset_is_already_open"]) || array_key_exists("form_fieldset_is_already_open", $context) ? $context["form_fieldset_is_already_open"] : (function () { throw new RuntimeError('Variable "form_fieldset_is_already_open" does not exist.', 312, $this->source); })())) {
                        // line 313
                        echo "                ";
                        echo twig_call_macro($macros["_self"], "macro_close_form_fieldset", [], 313, $context, $this->getSourceContext());
                        echo "
                ";
                        // line 314
                        $context["form_fieldset_is_already_open"] = false;
                        // line 315
                        echo "            ";
                    }
                    // line 316
                    echo "
            ";
                    // line 317
                    echo twig_call_macro($macros["_self"], "macro_open_form_fieldset", [(((isset($context["is_form_fieldset"]) || array_key_exists("is_form_fieldset", $context) ? $context["is_form_fieldset"] : (function () { throw new RuntimeError('Variable "is_form_fieldset" does not exist.', 317, $this->source); })())) ? ($context["field"]) : (null))], 317, $context, $this->getSourceContext());
                    echo "
            ";
                    // line 318
                    $context["form_fieldset_is_already_open"] = true;
                    // line 319
                    echo "        ";
                }
                // line 320
                echo "
        ";
                // line 321
                $this->displayBlock('detail_field', $context, $blocks);
                // line 326
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "
    ";
            // line 328
            if ((isset($context["form_fieldset_is_already_open"]) || array_key_exists("form_fieldset_is_already_open", $context) ? $context["form_fieldset_is_already_open"] : (function () { throw new RuntimeError('Variable "form_fieldset_is_already_open" does not exist.', 328, $this->source); })())) {
                // line 329
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_close_form_fieldset", [], 329, $context, $this->getSourceContext());
                echo "
        ";
                // line 330
                $context["form_fieldset_is_already_open"] = false;
                // line 331
                echo "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 334
    public function macro_open_form_fieldset($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "open_form_fieldset"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "open_form_fieldset"));

            // line 335
            echo "    ";
            @trigger_error("The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 335).", E_USER_DEPRECATED);
            // line 336
            echo "
    ";
            // line 337
            $context["fieldset_name"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 337, $this->source); })()))) ? (null) : (("content-" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 337, $this->source); })()), "uniqueId", [], "any", false, false, false, 337))));
            // line 338
            echo "    ";
            $context["collapsible"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 338, $this->source); })()))) ? (false) : (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 338, $this->source); })()), "customOption", ["collapsible"], "method", false, false, false, 338)));
            // line 339
            echo "    ";
            $context["collapsed"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 339, $this->source); })()))) ? (false) : (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 339, $this->source); })()), "customOption", ["collapsed"], "method", false, false, false, 339)));
            // line 340
            echo "    ";
            $context["fieldset_icon"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 340, $this->source); })()))) ? (null) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 340), "get", ["icon"], "method", true, true, false, 340)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 340), "get", ["icon"], "method", false, false, false, 340), false)) : (false))));
            // line 341
            echo "    ";
            $context["fieldset_label"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 341, $this->source); })()))) ? (null) : (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 341, $this->source); })()), "label", [], "any", false, false, false, 341)));
            // line 342
            echo "    ";
            $context["fieldset_help"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 342, $this->source); })()))) ? (null) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 342)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 342), false)) : (false))));
            // line 343
            echo "    ";
            $context["fieldset_has_header"] = ((((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 343, $this->source); })()) || (isset($context["fieldset_icon"]) || array_key_exists("fieldset_icon", $context) ? $context["fieldset_icon"] : (function () { throw new RuntimeError('Variable "fieldset_icon" does not exist.', 343, $this->source); })())) || (isset($context["fieldset_label"]) || array_key_exists("fieldset_label", $context) ? $context["fieldset_label"] : (function () { throw new RuntimeError('Variable "fieldset_label" does not exist.', 343, $this->source); })())) || (isset($context["fieldset_help"]) || array_key_exists("fieldset_help", $context) ? $context["fieldset_help"] : (function () { throw new RuntimeError('Variable "fieldset_help" does not exist.', 343, $this->source); })()));
            // line 344
            echo "
    <div class=\"";
            // line 345
            (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 345) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 345)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 345), "html", null, true))) : (print ("")));
            echo "\">
        <div class=\"form-fieldset\">
            ";
            // line 347
            if ((isset($context["fieldset_has_header"]) || array_key_exists("fieldset_has_header", $context) ? $context["fieldset_has_header"] : (function () { throw new RuntimeError('Variable "fieldset_has_header" does not exist.', 347, $this->source); })())) {
                // line 348
                echo "                <div class=\"form-fieldset-header ";
                echo (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 348, $this->source); })())) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty((isset($context["fieldset_help"]) || array_key_exists("fieldset_help", $context) ? $context["fieldset_help"] : (function () { throw new RuntimeError('Variable "fieldset_help" does not exist.', 348, $this->source); })()))) ? ("with-help") : (""));
                echo "\">
                    <div class=\"form-fieldset-title\">
                        <a ";
                // line 350
                if ( !(isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 350, $this->source); })())) {
                    // line 351
                    echo "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 353
                    echo "                            href=\"#";
                    echo twig_escape_filter($this->env, (isset($context["fieldset_name"]) || array_key_exists("fieldset_name", $context) ? $context["fieldset_name"] : (function () { throw new RuntimeError('Variable "fieldset_name" does not exist.', 353, $this->source); })()), "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse ";
                    // line 354
                    echo (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 354, $this->source); })())) ? ("collapsed") : (""));
                    echo "\"
                            aria-expanded=\"";
                    // line 355
                    echo (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 355, $this->source); })())) ? ("false") : ("true"));
                    echo "\" aria-controls=\"";
                    echo twig_escape_filter($this->env, (isset($context["fieldset_name"]) || array_key_exists("fieldset_name", $context) ? $context["fieldset_name"] : (function () { throw new RuntimeError('Variable "fieldset_name" does not exist.', 355, $this->source); })()), "html", null, true);
                    echo "\"
                        ";
                }
                // line 357
                echo "                        >
                            ";
                // line 358
                if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 358, $this->source); })())) {
                    // line 359
                    echo "                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            ";
                }
                // line 361
                echo "
                            ";
                // line 362
                if ((isset($context["fieldset_icon"]) || array_key_exists("fieldset_icon", $context) ? $context["fieldset_icon"] : (function () { throw new RuntimeError('Variable "fieldset_icon" does not exist.', 362, $this->source); })())) {
                    // line 363
                    echo "                                <i class=\"form-fieldset-icon ";
                    echo twig_escape_filter($this->env, (isset($context["fieldset_icon"]) || array_key_exists("fieldset_icon", $context) ? $context["fieldset_icon"] : (function () { throw new RuntimeError('Variable "fieldset_icon" does not exist.', 363, $this->source); })()), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 365
                echo "                            ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["fieldset_label"]) || array_key_exists("fieldset_label", $context) ? $context["fieldset_label"] : (function () { throw new RuntimeError('Variable "fieldset_label" does not exist.', 365, $this->source); })()));
                echo "
                        </a>

                        ";
                // line 368
                if ((isset($context["fieldset_help"]) || array_key_exists("fieldset_help", $context) ? $context["fieldset_help"] : (function () { throw new RuntimeError('Variable "fieldset_help" does not exist.', 368, $this->source); })())) {
                    // line 369
                    echo "                            <div class=\"form-fieldset-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["fieldset_help"]) || array_key_exists("fieldset_help", $context) ? $context["fieldset_help"] : (function () { throw new RuntimeError('Variable "fieldset_help" does not exist.', 369, $this->source); })()));
                    echo "</div>
                        ";
                }
                // line 371
                echo "                    </div>
                </div>
            ";
            }
            // line 374
            echo "
            <div ";
            // line 375
            if ((isset($context["fieldset_name"]) || array_key_exists("fieldset_name", $context) ? $context["fieldset_name"] : (function () { throw new RuntimeError('Variable "fieldset_name" does not exist.', 375, $this->source); })())) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["fieldset_name"]) || array_key_exists("fieldset_name", $context) ? $context["fieldset_name"] : (function () { throw new RuntimeError('Variable "fieldset_name" does not exist.', 375, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-fieldset-body ";
            echo (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 375, $this->source); })())) ? ("collapse") : (""));
            echo " ";
            echo (( !(isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 375, $this->source); })())) ? ("show") : (""));
            echo "\">
                <dl class=\"datalist\">
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 379
    public function macro_close_form_fieldset(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "close_form_fieldset"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "close_form_fieldset"));

            // line 380
            echo "    ";
            @trigger_error("The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 380).", E_USER_DEPRECATED);
            // line 381
            echo "
            </dl>
        </div>
    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 388
    public function macro_render_field($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field"));

            // line 389
            echo "    ";
            @trigger_error("The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin's `detail.html.page` for more details."." (\"@EasyAdmin/crud/detail.html.twig\" at line 389).", E_USER_DEPRECATED);
            // line 390
            echo "
    <div class=\"data-row ";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 391, $this->source); })()), "cssClass", [], "any", false, false, false, 391), "html", null, true);
            echo "\">
        <dt>
            ";
            // line 393
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 393, $this->source); })()), "label", [], "any", false, false, false, 393));
            echo "

            ";
            // line 395
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 395, $this->source); })()), "help", [], "any", false, false, false, 395))) {
                // line 396
                echo "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 396, $this->source); })()), "help", [], "any", false, false, false, 396)), "html_attr");
                echo "\">
                    <i class=\"far fa-question-circle\"></i>
                </a>
            ";
            }
            // line 400
            echo "        </dt>
        <dd>
            ";
            // line 402
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 402, $this->source); })()), "templatePath", [], "any", false, false, false, 402), ["field" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 402, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 402, $this->source); })())], false);
            echo "
        </dd>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1839 => 402,  1835 => 400,  1827 => 396,  1825 => 395,  1820 => 393,  1815 => 391,  1812 => 390,  1809 => 389,  1789 => 388,  1769 => 381,  1766 => 380,  1748 => 379,  1722 => 375,  1719 => 374,  1714 => 371,  1708 => 369,  1706 => 368,  1699 => 365,  1693 => 363,  1691 => 362,  1688 => 361,  1684 => 359,  1682 => 358,  1679 => 357,  1672 => 355,  1668 => 354,  1663 => 353,  1659 => 351,  1657 => 350,  1649 => 348,  1647 => 347,  1642 => 345,  1639 => 344,  1636 => 343,  1633 => 342,  1630 => 341,  1627 => 340,  1624 => 339,  1621 => 338,  1619 => 337,  1616 => 336,  1613 => 335,  1594 => 334,  1578 => 331,  1576 => 330,  1571 => 329,  1569 => 328,  1566 => 327,  1552 => 326,  1550 => 321,  1547 => 320,  1544 => 319,  1542 => 318,  1538 => 317,  1535 => 316,  1532 => 315,  1530 => 314,  1525 => 313,  1522 => 312,  1520 => 311,  1517 => 310,  1514 => 309,  1496 => 308,  1494 => 307,  1491 => 306,  1488 => 305,  1468 => 304,  1450 => 299,  1432 => 295,  1429 => 294,  1423 => 291,  1420 => 290,  1418 => 289,  1407 => 288,  1390 => 287,  1386 => 285,  1368 => 281,  1363 => 279,  1361 => 278,  1352 => 277,  1349 => 276,  1332 => 275,  1326 => 271,  1323 => 270,  1303 => 269,  1284 => 262,  1265 => 261,  1241 => 257,  1238 => 256,  1233 => 253,  1227 => 251,  1225 => 250,  1222 => 249,  1216 => 246,  1213 => 245,  1207 => 242,  1201 => 241,  1197 => 240,  1192 => 239,  1190 => 238,  1187 => 237,  1182 => 235,  1179 => 234,  1173 => 232,  1171 => 231,  1168 => 230,  1164 => 228,  1161 => 227,  1159 => 226,  1151 => 224,  1149 => 223,  1142 => 221,  1139 => 220,  1136 => 219,  1133 => 218,  1130 => 217,  1127 => 216,  1124 => 215,  1105 => 214,  1089 => 211,  1070 => 210,  1053 => 206,  1047 => 204,  1045 => 203,  1041 => 201,  1036 => 200,  1030 => 199,  1026 => 197,  1024 => 196,  1018 => 195,  1015 => 194,  1012 => 193,  1009 => 192,  990 => 191,  973 => 187,  970 => 186,  968 => 185,  949 => 184,  932 => 180,  929 => 179,  927 => 178,  908 => 177,  891 => 173,  872 => 172,  855 => 168,  849 => 165,  846 => 164,  844 => 163,  822 => 162,  819 => 161,  816 => 160,  813 => 159,  794 => 158,  777 => 154,  758 => 153,  741 => 149,  722 => 148,  705 => 144,  697 => 141,  694 => 139,  692 => 138,  688 => 137,  686 => 136,  684 => 135,  679 => 133,  674 => 131,  672 => 130,  663 => 129,  660 => 128,  656 => 127,  651 => 124,  648 => 123,  645 => 122,  642 => 121,  623 => 120,  604 => 116,  602 => 115,  597 => 114,  595 => 113,  590 => 112,  588 => 111,  583 => 110,  581 => 109,  576 => 108,  574 => 107,  569 => 106,  567 => 105,  562 => 104,  560 => 103,  555 => 102,  553 => 101,  548 => 100,  546 => 99,  541 => 98,  539 => 97,  534 => 96,  531 => 95,  512 => 94,  493 => 89,  489 => 87,  482 => 83,  477 => 82,  472 => 78,  468 => 76,  466 => 75,  464 => 74,  462 => 73,  459 => 72,  457 => 70,  455 => 69,  450 => 68,  430 => 67,  420 => 325,  414 => 323,  411 => 322,  401 => 321,  388 => 63,  378 => 62,  368 => 60,  362 => 59,  356 => 57,  350 => 55,  347 => 54,  342 => 53,  332 => 52,  322 => 62,  319 => 61,  316 => 52,  306 => 51,  289 => 47,  284 => 46,  274 => 45,  264 => 37,  261 => 41,  260 => 40,  258 => 39,  256 => 38,  254 => 37,  244 => 36,  232 => 33,  228 => 32,  223 => 31,  213 => 30,  201 => 27,  197 => 26,  192 => 25,  182 => 24,  165 => 20,  161 => 19,  156 => 18,  146 => 17,  129 => 13,  125 => 12,  120 => 11,  110 => 10,  91 => 6,  72 => 5,  62 => 3,  60 => 8,  47 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% extends ea.templatePath('layout') %}

{% block body_id 'ea-detail-' ~ entity.name ~ '-' ~ entity.primaryKeyValue %}
{% block body_class 'ea-detail ea-detail-' ~ entity.name %}

{% set ea_field_assets = ea.crud.fieldAssets(constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Crud::PAGE_DETAIL')) %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea_field_assets.cssAssets }, with_context = false) }}
    {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea_field_assets.webpackEncoreAssets }, with_context = false) }}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea_field_assets.jsAssets }, with_context = false) }}
    {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea_field_assets.webpackEncoreAssets }, with_context = false) }}
{% endblock %}

{% block content_title %}
    {%- apply spaceless -%}
        {% set custom_page_title = ea.crud.customPageTitle(pageName, entity ? entity.instance : null, ea.i18n.translationParameters) %}
        {{ custom_page_title is null
            ? ea.crud.defaultPageTitle(null, null, ea.i18n.translationParameters)|trans|raw
            : custom_page_title|trans|raw }}
    {%- endapply -%}
{% endblock %}

{% block page_actions %}
    {% for action in entity.actions %}
        {{ include(action.templatePath, { action: action }, with_context = false) }}
    {% endfor %}
{% endblock %}

{% block main %}
    {% block detail_fields %}
        {% for field in entity.fields %}
            {% if field.isFormLayoutField %}
                {{ _self.render_layout_field(field) }}
            {% else %}
                {{ _self.render_field_contents(entity, field) }}
            {% endif %}
        {% endfor %}
    {% endblock detail_fields %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', { entity_id: entity.primaryKeyValue }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% macro render_field_contents(entity, field) %}
    <div class=\"field-group {{ field.cssClass }}\">
        {% if field.label is same as (false) %}
            {# a FALSE label value means that the field doesn't even display the <label> element;
               use an empty string to not display a label but keep the <label> element to not mess with the layout #}
        {% else %}
            <div class=\"field-label\">
                {%- set label_html_attributes -%}
                    {%- if field.help is not empty -%}
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"auto\" data-bs-animation=\"false\"
                        data-bs-html=\"true\" data-bs-custom-class=\"ea-detail-label-tooltip\"
                        data-bs-title=\"{{ field.help|trans|e('html_attr') }}\"
                    {%- endif -%}
                {%- endset -%}

                <div {{ label_html_attributes }}>
                    {{ field.label|trans|raw }}
                </div>
            </div>
        {% endif %}

        <div class=\"field-value\">
            {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
        </div>
    </div>
{% endmacro %}

{% macro render_layout_field(field) %}
    {% if field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabListType' %}
        {{ _self.render_tab_list(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabPaneGroupOpenType' %}
        {{ _self.render_tab_group_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabPaneGroupCloseType' %}
        {{ _self.render_tab_group_close(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabPaneOpenType' %}
        {{ _self.render_tab_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormTabPaneCloseType' %}
        {{ _self.render_tab_close(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormColumnGroupOpenType' %}
        {{ _self.render_column_group_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormColumnGroupCloseType' %}
        {{ _self.render_column_group_close(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormColumnOpenType' %}
        {{ _self.render_column_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormColumnCloseType' %}
        {{ _self.render_column_close(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormFieldsetOpenType' %}
        {{ _self.render_fieldset_open(field) }}
    {% elseif field.formType == 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Form\\\\Type\\\\Layout\\\\EaFormFieldsetCloseType' %}
        {{ _self.render_fieldset_close(field) }}
    {% endif %}
{% endmacro %}

{% macro render_tab_list(field) %}
    {% set tab_id_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_ID') %}
    {% set tab_is_active_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_IS_ACTIVE') %}
    {% set tab_error_count_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_ERROR_COUNT') %}

    <div class=\"nav-tabs-custom form-tabs-tablist\">
        <ul class=\"nav nav-tabs\">
            {% for tab in field.getCustomOption('tabs') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if tab.getCustomOption(tab_is_active_option_name) %}active{% endif %}\" href=\"#{{ tab.getCustomOption(tab_id_option_name) }}\" id=\"tablist-{{ tab.getCustomOption(tab_id_option_name) }}\" data-bs-toggle=\"tab\">
                        {%- if tab.getCustomOption('icon')|default(false) -%}
                            <i class=\"tab-nav-item-icon fa-fw {{ tab.getCustomOption('icon') }}\"></i>
                        {%- endif -%}
                        {{ tab.label|trans(domain = ea.i18n.translationDomain)|raw }}

                        {% set tab_error_count = tab.getCustomOption(tab_error_count_option_name)  %}
                        {%- if tab_error_count > 0 -%}
                            <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|trans({'%count%': tab_error_count}, 'EasyAdminBundle') }}\">
                                {{- tab_error_count -}}
                            </span>
                        {%- endif -%}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endmacro %}

{% macro render_tab_group_open(field) %}
    <div class=\"nav-tabs-custom form-tabs-content\">
        <div class=\"tab-content\">
{% endmacro %}

{% macro render_tab_group_close(field) %}
        </div>
    </div>
{% endmacro %}

{% macro render_tab_open(field) %}
    {% set tab_id_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_ID') %}
    {% set tab_is_active_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_TAB_IS_ACTIVE') %}

    <div id=\"{{ field.getCustomOption(tab_id_option_name) }}\" class=\"tab-pane {% if field.getCustomOption(tab_is_active_option_name) %}active{% endif %} {{ field.cssClass }}\" {% for key, value in field.getFormTypeOption('attr') %}{{ key }}=\"{{ value|e('html_attr') }}\"{% endfor %}>
        {% if field.help %}
            <div class=\"content-header-help tab-help\">
                {{ field.help|trans(domain = ea.i18n.translationDomain)|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
{% endmacro %}

{% macro render_tab_close(field) %}
        </div>
    </div>
{% endmacro %}

{% macro render_column_group_open(field) %}
    {# if columns are inside tabs, don't add a '.row' element because the tab pane already opens it #}
    {% if not field.getFormTypeOption('ea_is_inside_tab')|default(false) %}
        <div class=\"row\">
    {% endif %}
{% endmacro %}

{% macro render_column_group_close(field) %}
    {# if columns are inside tabs, don't add a '.row' element because the tab pane already opens it #}
    {% if not field.getFormTypeOption('ea_is_inside_tab')|default(false) %}
        </div>
    {% endif %}
{% endmacro %}

{% macro render_column_open(field) %}
    {% set field_icon = field.getCustomOption('icon') %}
    {% set column_has_title = field_icon != null or field.label != false or field.label != null or field.label != '' or field.help != null %}

    <div class=\"form-column {{ not column_has_title ? 'form-column-no-header' }} {{ field.cssClass }}\">
        {% if column_has_title %}
            <div class=\"form-column-title\">
                <div class=\"form-column-title-content\">
                    {% if field_icon %}<i class=\"form-column-icon fa fa-fw fa-{{ field_icon }}\"></i>{% endif %}
                    {% if field.label %}{{ field.label|trans(domain = ea.i18n.translationDomain)|raw }}{% endif %}
                </div>

                {% if field.help %}
                    <div class=\"form-column-help\">{{ field.help|trans(domain = ea.i18n.translationDomain)|raw }}</div>
                {% endif %}
            </div>
        {% endif %}
{% endmacro %}

{% macro render_column_close(field) %}
    </div>
{% endmacro %}

{% macro render_fieldset_open(field) %}
    {% set fieldset_has_header = field.label or field.getCustomOption('icon') or field.help %}
    {% set is_collapsible_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_COLLAPSIBLE') %}
    {% set is_collapsed_option_name = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\FormField::OPTION_COLLAPSED') %}
    {% set is_collapsible = field.getCustomOption(is_collapsible_option_name) %}
    {% set is_collapsed = field.getCustomOption(is_collapsed_option_name) %}

    <div class=\"form-fieldset {{ not fieldset_has_header ? 'form-fieldset-no-header' }} {{ field.cssClass }}\">
        <fieldset>
            {% if fieldset_has_header %}
                <div class=\"form-fieldset-header {{ is_collapsible ? 'collapsible' }} {{ field.help is not empty ? 'with-help' }}\">
                    <div class=\"form-fieldset-title\">
                        {% set fieldset_title_contents %}
                            {% if is_collapsible %}
                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            {% endif %}

                            {% if field.getCustomOption('icon') %}
                                <i class=\"form-fieldset-icon {{ field.getCustomOption('icon') }}\"></i>
                            {% endif %}

                            {{ field.label|trans|raw }}
                        {% endset %}

                        {% if is_collapsible %}
                            <a href=\"#content-{{ field.property }}\" data-bs-toggle=\"collapse\"
                               class=\"form-fieldset-title-content form-fieldset-collapse {{ is_collapsed ? 'collapsed' }}\"
                               aria-expanded=\"{{ is_collapsed ? 'false' : 'true' }}\" aria-controls=\"content-{{ field.property }}\">
                                {{ fieldset_title_contents|raw }}
                            </a>
                        {% else %}
                            <span class=\"not-collapsible form-fieldset-title-content\">
                                {{ fieldset_title_contents|raw }}
                            </span>
                        {% endif %}

                        {% if field.help %}
                            <div class=\"form-fieldset-help\">{{ field.help|trans|raw }}</div>
                        {% endif %}
                    </div>
                </div>
            {% endif %}

            <div id=\"content-{{ field.property }}\" class=\"form-fieldset-body {{ not fieldset_has_header ? 'without-header' }} {{ is_collapsible ? 'collapse' }} {{ not is_collapsed ? 'show'}}\">
                <div class=\"row\">
{% endmacro %}

{% macro render_fieldset_close(field) %}
                </div>
            </div>
        </fieldset>
    </div>
{% endmacro %}


{% macro render_detail_fields_with_tabs(entity, field_layout) %}
    {% deprecated 'The \"render_detail_fields_with_tabs\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

    <div class=\"col-12\">
        <div class=\"nav-tabs-custom form-tabs\">
            <ul class=\"nav nav-tabs\">
                {% for tab in field_layout.tabs %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if loop.first %}active{% endif %}\" href=\"#tab-pane-{{ tab.uniqueId }}\" id=\"tab-{{ tab.uniqueId }}\" data-bs-toggle=\"tab\">
                            {%- if tab.customOption('icon') -%}
                                <i class=\"fa-fw {{ tab.customOption('icon') }}\"></i>
                            {%- endif -%}
                            {{ tab.label|trans(domain = ea.i18n.translationDomain)|raw }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
            <div class=\"tab-content\">
                {% for tab in field_layout.tabs %}
                    <div id=\"tab-pane-{{ tab.uniqueId }}\" class=\"tab-pane {% if loop.first %}active{% endif %} {{ tab.cssClass|default('') }}\">
                        {% if tab.help|default(false) %}
                            <div class=\"content-header-help tab-help\">
                                {{ tab.help|trans(domain = ea.i18n.translationDomain)|raw }}
                            </div>
                        {% endif %}
                        <div class=\"row\">
                            {{ _self.render_detail_fields(entity, field_layout.fieldsInTab(tab.uniqueId)) }}
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endmacro %}

{% macro render_detail_fields(entity, fields) %}
    {% deprecated 'The \"render_detail_fields\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

    {% set form_fieldset_is_already_open = false %}
    {% for field in fields %}
        {% set is_form_fieldset = 'field-form_fieldset' in field.cssClass %}

        {% if is_form_fieldset or (loop.first and not is_form_fieldset) %}
            {% if form_fieldset_is_already_open %}
                {{ _self.close_form_fieldset() }}
                {% set form_fieldset_is_already_open = false %}
            {% endif %}

            {{ _self.open_form_fieldset(is_form_fieldset ? field : null) }}
            {% set form_fieldset_is_already_open = true %}
        {% endif %}

        {% block detail_field %}
            {% if not is_form_fieldset %}
                {{ _self.render_field(entity, field) }}
            {% endif %}
        {% endblock %}
    {% endfor %}

    {% if form_fieldset_is_already_open %}
        {{ _self.close_form_fieldset() }}
        {% set form_fieldset_is_already_open = false %}
    {% endif %}
{% endmacro %}

{% macro open_form_fieldset(field = null) %}
    {% deprecated 'The \"open_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

    {% set fieldset_name = field is null ? null : 'content-' ~ field.uniqueId %}
    {% set collapsible = field is null ? false : field.customOption('collapsible') %}
    {% set collapsed = field is null ? false : field.customOption('collapsed') %}
    {% set fieldset_icon = field is null ? null : (field.customOptions.get('icon')|default(false)) %}
    {% set fieldset_label = field is null ? null : field.label %}
    {% set fieldset_help = field is null ? null : field.help|default(false)%}
    {% set fieldset_has_header = collapsible or fieldset_icon or fieldset_label or fieldset_help %}

    <div class=\"{{ field.cssClass ?? '' }}\">
        <div class=\"form-fieldset\">
            {% if fieldset_has_header %}
                <div class=\"form-fieldset-header {{ collapsible ? 'collapsible' }} {{ fieldset_help is not empty ? 'with-help' }}\">
                    <div class=\"form-fieldset-title\">
                        <a {% if not collapsible %}
                            href=\"#\" class=\"not-collapsible\"
                        {% else %}
                            href=\"#{{ fieldset_name }}\" data-bs-toggle=\"collapse\"
                            class=\"form-fieldset-collapse {{ collapsed ? 'collapsed' }}\"
                            aria-expanded=\"{{ collapsed ? 'false' : 'true' }}\" aria-controls=\"{{ fieldset_name }}\"
                        {% endif %}
                        >
                            {% if collapsible %}
                                <i class=\"fas fw fa-chevron-right form-fieldset-collapse-marker\"></i>
                            {% endif %}

                            {% if fieldset_icon %}
                                <i class=\"form-fieldset-icon {{ fieldset_icon }}\"></i>
                            {% endif %}
                            {{ fieldset_label|trans|raw }}
                        </a>

                        {% if fieldset_help %}
                            <div class=\"form-fieldset-help\">{{ fieldset_help|trans|raw }}</div>
                        {% endif %}
                    </div>
                </div>
            {% endif %}

            <div {% if fieldset_name %}id=\"{{ fieldset_name }}\"{% endif %} class=\"form-fieldset-body {{ collapsible ? 'collapse' }} {{ not collapsed ? 'show'}}\">
                <dl class=\"datalist\">
{% endmacro %}

{% macro close_form_fieldset() %}
    {% deprecated 'The \"close_form_fieldset\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

            </dl>
        </div>
    </div>
</div>
{% endmacro %}

{% macro render_field(entity, field) %}
    {% deprecated 'The \"render_field\" macro is deprecated because the layout building logic has been revamped for the \"detail\" page. Check EasyAdmin\\'s `detail.html.page` for more details.' %}

    <div class=\"data-row {{ field.cssClass }}\">
        <dt>
            {{ field.label|trans|raw }}

            {% if field.help is not empty %}
                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"{{ field.help|trans|e('html_attr') }}\">
                    <i class=\"far fa-question-circle\"></i>
                </a>
            {% endif %}
        </dt>
        <dd>
            {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
        </dd>
    </div>
{% endmacro %}
", "@EasyAdmin/crud/detail.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\detail.html.twig");
    }
}
