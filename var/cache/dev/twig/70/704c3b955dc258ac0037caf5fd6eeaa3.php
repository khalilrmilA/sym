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

/* reclamationsh/create-collection.html.twig */
class __TwigTemplate_8e91f87e3c477f4348bc56b149bbf63f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamationsh/create-collection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamationsh/create-collection.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamationsh/create-collection.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Create Collection";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"creat-collection-area pt--80\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5 \">
\t\t\t\t<div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
\t\t\t\t\t<div class=\"collection-single-wized banner\">
\t\t\t\t\t\t<label class=\"title required\">Logo image</label>

\t\t\t\t\t\t<div class=\"create-collection-input logo-image\">
\t\t\t\t\t\t\t<div class=\"logo-c-image logo\">
\t\t\t\t\t\t\t\t<img id=\"rbtinput1\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/reclamation/" . twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 15, $this->source); })()), "getImagePath", [], "method", false, false, false, 15))), "html", null, true);
        echo "\" alt=\"Profile-NFT\">
\t\t\t\t\t\t\t\t<label for=\"fatima\" title=\"No File Choosen\">
\t\t\t\t\t\t\t\t\t<span class=\"text-center color-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"feather-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"button-area\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"brows-file-wrapper\">
\t\t\t\t\t\t\t\t\t<!-- actual upload which is hidden -->
\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\tname=\"fatiaaama\" id=\"fataaaima\" type=\"file\">
\t\t\t\t\t\t\t\t<!-- our custom upload button -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"create-collection-form-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"collection-single-wized\">
\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"title required\">Private key</label>
\t\t\t\t\t\t\t\t\t<div class=\"create-collection-input\">
\t\t\t\t\t\t\t\t\t\t<input id=\"name\" class=\"name\" type=\"text\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 42, $this->source); })()), "privateKey", [], "any", false, false, false, 42), "html", null, true);
        echo "\" required readonly>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"collection-single-wized\">
\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"title required\">subject</label>
\t\t\t\t\t\t\t\t\t<div class=\"create-collection-input\">
\t\t\t\t\t\t\t\t\t\t<input id=\"name\" class=\"name\" type=\"text\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 50, $this->source); })()), "subject", [], "any", false, false, false, 50), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"collection-single-wized\">
\t\t\t\t\t\t\t\t\t<label for=\"description\" class=\"title\">Description</label>
\t\t\t\t\t\t\t\t\t<div class=\"create-collection-input\">
\t\t\t\t\t\t\t\t\t\t<textarea id=\"description\" class=\"text-area\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"button-wrapper\">
\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationsh.modifer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "_token", [], "any", false, false, false, 66), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"PUT\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary-alta btn-large\">Update</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamationsh/create-collection.html.twig";
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
        return array (  165 => 66,  161 => 65,  151 => 58,  140 => 50,  129 => 42,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Collection{% endblock %}

{% block body %}
<div class=\"creat-collection-area pt--80\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5 \">
\t\t\t\t<div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
\t\t\t\t\t<div class=\"collection-single-wized banner\">
\t\t\t\t\t\t<label class=\"title required\">Logo image</label>

\t\t\t\t\t\t<div class=\"create-collection-input logo-image\">
\t\t\t\t\t\t\t<div class=\"logo-c-image logo\">
\t\t\t\t\t\t\t\t<img id=\"rbtinput1\" src=\"{{ asset('images/reclamation/' ~ reclamation.getImagePath()) }}\" alt=\"Profile-NFT\">
\t\t\t\t\t\t\t\t<label for=\"fatima\" title=\"No File Choosen\">
\t\t\t\t\t\t\t\t\t<span class=\"text-center color-white\">
\t\t\t\t\t\t\t\t\t\t<i class=\"feather-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"button-area\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"brows-file-wrapper\">
\t\t\t\t\t\t\t\t\t<!-- actual upload which is hidden -->
\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\tname=\"fatiaaama\" id=\"fataaaima\" type=\"file\">
\t\t\t\t\t\t\t\t<!-- our custom upload button -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"create-collection-form-wrapper\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"collection-single-wized\">
\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"title required\">Private key</label>
\t\t\t\t\t\t\t\t\t<div class=\"create-collection-input\">
\t\t\t\t\t\t\t\t\t\t<input id=\"name\" class=\"name\" type=\"text\" value=\"{{ reclamation.privateKey }}\" required readonly>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"collection-single-wized\">
\t\t\t\t\t\t\t\t\t<label for=\"name\" class=\"title required\">subject</label>
\t\t\t\t\t\t\t\t\t<div class=\"create-collection-input\">
\t\t\t\t\t\t\t\t\t\t<input id=\"name\" class=\"name\" type=\"text\" value=\"{{ reclamation.subject }}\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"collection-single-wized\">
\t\t\t\t\t\t\t\t\t<label for=\"description\" class=\"title\">Description</label>
\t\t\t\t\t\t\t\t\t<div class=\"create-collection-input\">
\t\t\t\t\t\t\t\t\t\t<textarea id=\"description\" class=\"text-area\">{{ reclamation.description }}</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"button-wrapper\">
\t\t\t\t\t\t\t\t\t<form action=\"{{ path('reclamationsh.modifer', {'id': reclamation.id}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t{{ form_widget(form._token) }}
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"PUT\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary-alta btn-large\">Update</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "reclamationsh/create-collection.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\reclamationsh\\create-collection.html.twig");
    }
}
