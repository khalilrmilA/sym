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
class __TwigTemplate_9c1400ec50e4317307516c76c3e33ff3 extends Template
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

        echo "Add Reclamation
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
        echo "\t<!-- Start page title area -->
\t<div class=\"rn-breadcrumb-inner ptb--30\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-12\">
\t\t\t\t\t<h5 class=\"title text-center text-md-start\">Add Reclamation</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-12\">
\t\t\t\t\t<ul class=\"breadcrumb-list\">
\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t<i class=\"feather-chevron-right\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"item current\">Add Reclamation</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End page title area -->

\t<!-- Create new reclamation area -->
\t<div class=\"create-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div
\t\t\t\tclass=\"row g-5\">
\t\t\t\t<!-- Display errors, if any -->
\t\t\t\t";
        // line 36
        if (array_key_exists("errors", $context)) {
            // line 37
            echo "\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["errorMessages"]) {
                // line 40
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["errorMessages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["errorMessage"]) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, $context["errorMessage"], "html", null, true);
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t<div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
\t\t\t\t\t<form
\t\t\t\t\t\tid=\"formm\" name=\"reclamation\" method=\"post\" enctype=\"multipart/form-data\" action=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation");
        echo "\">

\t\t\t\t\t\t<!-- Upload area -->
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
        // line 63
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
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-lg-7\">
\t\t\t\t\t\t<!-- Form content -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"form-wrapper-one\">
\t\t\t\t\t\t\t<!-- Private Key Input -->
\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t<label for=\"privateKey\" class=\"required\">Private Key</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"privateKey\" name=\"privateKey\" pattern=\"^[0-9]+\$\" readonly>
\t\t\t\t\t\t\t\t<small id=\"privateKeyHelp\" class=\"form-text text-muted\">Enter a numeric private key.</small>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Subject Input -->
\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t<label for=\"subject\" class=\"required\">Subject</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"subject\" name=\"subject\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Description Input -->
\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
                            <button id=\"startRecording\" class=\"input-send\" title=\"You can speak by clicking\">
                            🎤
                          </button>
\t\t\t\t\t\t\t\t<label for=\"description\" class=\"required\">Description</label>
\t\t\t\t\t\t\t\t<textarea id=\"description\" name=\"description\" required></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Submit Button -->
\t\t\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"submit-button\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Script for image preview -->
\t<script>
\t\tconst input = document.getElementById('reclamation_imageFile_file');
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
// Generate and set Private Key
document.addEventListener('DOMContentLoaded', function () {
function generatePrivateKey() {
return Math.floor(100000 + Math.random() * 900000);
}

const privateKeyField = document.getElementById('privateKey');
privateKeyField.value = generatePrivateKey();
});
\t</script>
\t<script>
\t\t// Function to start recording
function startRecording() {
const recognition = new window.webkitSpeechRecognition(); // Initialize speech recognition
recognition.lang = 'en-US'; // Set recognition language

recognition.onresult = function (event) {
const transcript = event.results[0][0].transcript; // Get the transcription
document.getElementById('description').value = transcript; // Fill the description field with the transcription
}

recognition.start(); // Start recording
}

document.getElementById('startRecording').addEventListener('click', startRecording);
\t</script>

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
        return array (  176 => 63,  159 => 49,  155 => 47,  150 => 44,  144 => 43,  135 => 41,  130 => 40,  126 => 39,  122 => 37,  120 => 36,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add Reclamation
{% endblock %}

{% block body %}
\t<!-- Start page title area -->
\t<div class=\"rn-breadcrumb-inner ptb--30\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-12\">
\t\t\t\t\t<h5 class=\"title text-center text-md-start\">Add Reclamation</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-12\">
\t\t\t\t\t<ul class=\"breadcrumb-list\">
\t\t\t\t\t\t<li class=\"item\">
\t\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t<i class=\"feather-chevron-right\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"item current\">Add Reclamation</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End page title area -->

\t<!-- Create new reclamation area -->
\t<div class=\"create-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div
\t\t\t\tclass=\"row g-5\">
\t\t\t\t<!-- Display errors, if any -->
\t\t\t\t{% if errors is defined %}
\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for errorMessages in errors %}
\t\t\t\t\t\t\t\t{% for errorMessage in errorMessages %}
\t\t\t\t\t\t\t\t\t<li>{{ errorMessage }}</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
\t\t\t\t\t<form
\t\t\t\t\t\tid=\"formm\" name=\"reclamation\" method=\"post\" enctype=\"multipart/form-data\" action=\"{{ path('app_reclamation') }}\">

\t\t\t\t\t\t<!-- Upload area -->
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
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-lg-7\">
\t\t\t\t\t\t<!-- Form content -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"form-wrapper-one\">
\t\t\t\t\t\t\t<!-- Private Key Input -->
\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t<label for=\"privateKey\" class=\"required\">Private Key</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"privateKey\" name=\"privateKey\" pattern=\"^[0-9]+\$\" readonly>
\t\t\t\t\t\t\t\t<small id=\"privateKeyHelp\" class=\"form-text text-muted\">Enter a numeric private key.</small>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Subject Input -->
\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
\t\t\t\t\t\t\t\t<label for=\"subject\" class=\"required\">Subject</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"subject\" name=\"subject\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Description Input -->
\t\t\t\t\t\t\t<div class=\"input-box pb--20\">
                            <button id=\"startRecording\" class=\"input-send\" title=\"You can speak by clicking\">
                            🎤
                          </button>
\t\t\t\t\t\t\t\t<label for=\"description\" class=\"required\">Description</label>
\t\t\t\t\t\t\t\t<textarea id=\"description\" name=\"description\" required></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Submit Button -->
\t\t\t\t\t\t\t<div class=\"input-box\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"submit-button\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Script for image preview -->
\t<script>
\t\tconst input = document.getElementById('reclamation_imageFile_file');
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
// Generate and set Private Key
document.addEventListener('DOMContentLoaded', function () {
function generatePrivateKey() {
return Math.floor(100000 + Math.random() * 900000);
}

const privateKeyField = document.getElementById('privateKey');
privateKeyField.value = generatePrivateKey();
});
\t</script>
\t<script>
\t\t// Function to start recording
function startRecording() {
const recognition = new window.webkitSpeechRecognition(); // Initialize speech recognition
recognition.lang = 'en-US'; // Set recognition language

recognition.onresult = function (event) {
const transcript = event.results[0][0].transcript; // Get the transcription
document.getElementById('description').value = transcript; // Fill the description field with the transcription
}

recognition.start(); // Start recording
}

document.getElementById('startRecording').addEventListener('click', startRecording);
\t</script>

{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\reclamation\\index.html.twig");
    }
}
