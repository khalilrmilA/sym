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

/* reclamation/index.html.twig */
class __TwigTemplate_3286e751a297ad4995bfd400d3def03f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
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

        echo "add ReclamationController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<!-- start page title area -->
\t<div class=\"rn-breadcrumb-inner ptb--30\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-12\">
\t\t\t\t\t<h5 class=\"title text-center text-md-start\">Add Reclamation
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-12\">
\t\t\t\t\t<ul class=\"breadcrumb-list\">
\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t<i class=\"feather-chevron-right\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"item current\">Reclamation</li>
\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end page title area -->

\t<!-- create new product area -->
\t<div class=\"create-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
\t\t\t\t\t<form id=\"form\" name=\"reclamation\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<div class=\"upload-area\">
\t\t\t\t\t\t\t<div class=\"upload-formate mb--30\">
\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\tUpload file
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<p class=\"formate\">
\t\t\t\t\t\t\t\t\tDrag or choose your file to upload
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"brows-file-wrapper\">
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"reclamation[imageFile][file]\" id=\"reclamation_imageFile_file\" required=\"required\" accept=\"image/*\" class=\"inputfile\"/>
\t\t\t\t\t\t\t\t<img id=\"createfileImage\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/portfolio/1.jpeg"), "html", null, true);
        echo "\" alt data-black-overlay=\"6\">
\t\t\t\t\t\t\t\t<label for=\"reclamation_imageFile_file\" title=\"No File Choosen\">
\t\t\t\t\t\t\t\t\t<i class=\"feather-upload\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"text-center\">Choose a File</span>
\t\t\t\t\t\t\t\t\t<p class=\"text-center mt--9\">PNG, GIF, WEBP, MP4 or MP3.
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tMax 1Gb.</p>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tconst input = document.getElementById('reclamation_imageFile_file');
const img = document.getElementById('createfileImage');

input.addEventListener('change', function () {
if (input.files && input.files[0]) {
const reader = new FileReader();

reader.onload = function (e) {
img.setAttribute('src', e.target.result);
}

reader.readAsDataURL(input.files[0]);
}
});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t<div class=\"mt--100 mt_sm--30 mt_md--30 d-none d-lg-block\">
\t\t\t\t\t\t\t<h5>Note:
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<span>enjoy our Service
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<span>You will receive our reponse soon
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"form-wrapper-one\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<label for=\"reclamation_privateKey\" class=\"required\">Private Key</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"reclamation_privateKey\" name=\"reclamation[privateKey]\" required pattern=\"^[0-9]+\$\"/>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<label for=\"reclamation_subject\" class=\"required\">Subject</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"reclamation_subject\" name=\"reclamation[subject]\" required pattern=\"^[a-zA-Z]+\$\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<label for=\"reclamation_description\" class=\"required\">Description</label>
\t\t\t\t\t\t\t\t\t\t<textarea id=\"reclamation_description\" name=\"reclamation[description]\" required></textarea>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"submit-button\">Submit</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" id=\"reclamation__token\" name=\"reclamation[_token]\" value=\"edfefdd8a408443a012c.c_gIArByPEgON4s4Sv8_WXHe6FRKy7Ah9XqrA6GoLmk.PcxBY9cWTX9gBthxC8tSCQHp0SAsifMRmBvTNtDwTCA3sHt7xB9lJUF23g\"/>
\t</form>


\t<!-- create new product area -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
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
        return array (  151 => 54,  124 => 29,  115 => 26,  112 => 25,  108 => 24,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}add ReclamationController!
{% endblock %}

{% block body %}
\t<!-- start page title area -->
\t<div class=\"rn-breadcrumb-inner ptb--30\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-12\">
\t\t\t\t\t<h5 class=\"title text-center text-md-start\">Add Reclamation
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-12\">
\t\t\t\t\t<ul class=\"breadcrumb-list\">
\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t<i class=\"feather-chevron-right\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"item current\">Reclamation</li>
\t\t\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t{{message}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end page title area -->

\t<!-- create new product area -->
\t<div class=\"create-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
\t\t\t\t\t<form id=\"form\" name=\"reclamation\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<div class=\"upload-area\">
\t\t\t\t\t\t\t<div class=\"upload-formate mb--30\">
\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\tUpload file
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<p class=\"formate\">
\t\t\t\t\t\t\t\t\tDrag or choose your file to upload
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"brows-file-wrapper\">
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"reclamation[imageFile][file]\" id=\"reclamation_imageFile_file\" required=\"required\" accept=\"image/*\" class=\"inputfile\"/>
\t\t\t\t\t\t\t\t<img id=\"createfileImage\" src=\"{{ asset('/assets/images/portfolio/1.jpeg') }}\" alt data-black-overlay=\"6\">
\t\t\t\t\t\t\t\t<label for=\"reclamation_imageFile_file\" title=\"No File Choosen\">
\t\t\t\t\t\t\t\t\t<i class=\"feather-upload\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"text-center\">Choose a File</span>
\t\t\t\t\t\t\t\t\t<p class=\"text-center mt--9\">PNG, GIF, WEBP, MP4 or MP3.
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tMax 1Gb.</p>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tconst input = document.getElementById('reclamation_imageFile_file');
const img = document.getElementById('createfileImage');

input.addEventListener('change', function () {
if (input.files && input.files[0]) {
const reader = new FileReader();

reader.onload = function (e) {
img.setAttribute('src', e.target.result);
}

reader.readAsDataURL(input.files[0]);
}
});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t<div class=\"mt--100 mt_sm--30 mt_md--30 d-none d-lg-block\">
\t\t\t\t\t\t\t<h5>Note:
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<span>enjoy our Service
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<span>You will receive our reponse soon
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"form-wrapper-one\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<label for=\"reclamation_privateKey\" class=\"required\">Private Key</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"reclamation_privateKey\" name=\"reclamation[privateKey]\" required pattern=\"^[0-9]+\$\"/>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<label for=\"reclamation_subject\" class=\"required\">Subject</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"reclamation_subject\" name=\"reclamation[subject]\" required pattern=\"^[a-zA-Z]+\$\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<label for=\"reclamation_description\" class=\"required\">Description</label>
\t\t\t\t\t\t\t\t\t\t<textarea id=\"reclamation_description\" name=\"reclamation[description]\" required></textarea>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"submit-button\">Submit</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" id=\"reclamation__token\" name=\"reclamation[_token]\" value=\"edfefdd8a408443a012c.c_gIArByPEgON4s4Sv8_WXHe6FRKy7Ah9XqrA6GoLmk.PcxBY9cWTX9gBthxC8tSCQHp0SAsifMRmBvTNtDwTCA3sHt7xB9lJUF23g\"/>
\t</form>


\t<!-- create new product area -->

{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\reclamation\\index.html.twig");
    }
}
