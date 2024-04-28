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

/* conference/reponse.html.twig */
class __TwigTemplate_1a53db1389bfcb0e6f6e6bd7b72cc5e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conference/reponse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conference/reponse.html.twig"));

        $this->parent = $this->loadTemplate("index_admin.html.twig", "conference/reponse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>Reclamation Details</h2>
            <p><strong>Private Key:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 8, $this->source); })()), "privateKey", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
            <p><strong>Description:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
            <p><strong>Subject:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 10, $this->source); })()), "subject", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
            <p><strong>Created At:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 11, $this->source); })()), "createdAt", [], "any", false, false, false, 11), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 12, $this->source); })()), "imagePath", [], "any", false, false, false, 12)) {
            // line 13
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/reclamation/" . twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 13, $this->source); })()), "imagePath", [], "any", false, false, false, 13))), "html", null, true);
            echo "\" alt=\"Reclamation Image\">
            ";
        } else {
            // line 15
            echo "                <p>No image available for this reclamation.</p>
            ";
        }
        // line 17
        echo "        </div>
        <div class=\"col-md-6\">
            <h2>Response Details</h2>
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 20, $this->source); })()), "reponse", [], "any", false, false, false, 20)) {
            // line 21
            echo "                <p><strong>Response Text:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 21, $this->source); })()), "reponse", [], "any", false, false, false, 21), "repReclamation", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 23
            echo "                <p>No response available for this reclamation.</p>
            ";
        }
        // line 25
        echo "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "conference/reponse.html.twig";
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
        return array (  119 => 25,  115 => 23,  109 => 21,  107 => 20,  102 => 17,  98 => 15,  92 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index_admin.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>Reclamation Details</h2>
            <p><strong>Private Key:</strong> {{ reclamation.privateKey }}</p>
            <p><strong>Description:</strong> {{ reclamation.description }}</p>
            <p><strong>Subject:</strong> {{ reclamation.subject }}</p>
            <p><strong>Created At:</strong> {{ reclamation.createdAt | date('Y-m-d H:i:s') }}</p>
            {% if reclamation.imagePath %}
                <img src=\"{{ asset('images/reclamation/' ~ reclamation.imagePath) }}\" alt=\"Reclamation Image\">
            {% else %}
                <p>No image available for this reclamation.</p>
            {% endif %}
        </div>
        <div class=\"col-md-6\">
            <h2>Response Details</h2>
            {% if reclamation.reponse %}
                <p><strong>Response Text:</strong> {{ reclamation.reponse.repReclamation }}</p>
            {% else %}
                <p>No response available for this reclamation.</p>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "conference/reponse.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\conference\\reponse.html.twig");
    }
}
