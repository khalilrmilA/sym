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

/* base.html.twig */
class __TwigTemplate_437a96359c9991d42b2c6f8a1de26354 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 12
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
\t\t";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "\t</head>
\t";
        // line 78
        $this->loadTemplate("parts/header.html.twig", "base.html.twig", 78)->display($context);
        // line 79
        echo "\t<body>
\t\t";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "
<script>
\t\t\t(function () {
const form = document.getElementById('form');
const submitButton = document.getElementById('submit-button');
// Add a submit event listener to the form element
form.addEventListener('submit', function (event) {
event.preventDefault();
// Check if the form is valid
if (form.checkValidity()) {
const formData = new FormData(form);
fetch('/reclamation', {
method: 'POST',
body: formData
}).then(response => response.text()).then(data => {
Swal.fire({title: 'Success!', text: 'Your reclamation has been submitted.', icon: 'success', confirmButtonText: 'Cool'}).then(() => { // Clear all the form fields
const inputs = form.querySelectorAll('input, textarea');
inputs.forEach(input => {
input.value = '';
});

form.reset();
});
}).catch(error => {

console.error(error);
Swal.fire({title: 'Error!', text: error.message, icon: 'error', confirmButtonText: 'OK'});
});
}
});
submitButton.addEventListener('click', function (event) {

if (form.checkValidity()) {
form.reportValidity();
}
});
})();

\t\t</script>
\t</body>
\t";
        // line 121
        $this->loadTemplate("parts/footer.html.twig", "base.html.twig", 121)->display($context);
        // line 122
        echo "</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/logo/logo.png"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/vendor/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/vendor/slick.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/vendor/slick-theme.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/vendor/nice-select.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/plugins/feature.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/plugins/jquery-ui.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/vendor/odometer.css"), "html", null, true);
        echo "\">
\t\t\t<!-- Style css -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<!-- End Footer Area -->
\t\t\t<div class=\"mouse-cursor cursor-outer\"></div>
\t\t\t<div class=\"mouse-cursor cursor-inner\"></div>
\t\t\t<!-- Start Top To Bottom Area  -->
\t\t\t<div class=\"rn-progress-parent\">
\t\t\t\t<svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
\t\t\t\t\t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"/>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<!-- End Top To Bottom Area  -->

\t\t\t<!-- JS ============================================ -->
\t\t\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/modernizer.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/feather.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/sal.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/particles.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.style.swicher.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/js.cookie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/count-down.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/isotop.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/imageloaded.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/backtoTop.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/odometer.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery-appear.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/scrolltrigger.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.custom-file-input.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/savePopup.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/vanilla.tilt.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- main JS -->
\t\t\t<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Meta Mask  -->
\t\t\t<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/web3.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/maralis.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/nft.js"), "html", null, true);
        echo "\"></script>


\t\t\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsOfOutsiderElements/libs/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsOfOutsiderElements/js/pages/extended-swiper.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/loader.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/error_success.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  372 => 80,  358 => 73,  354 => 72,  350 => 71,  346 => 70,  340 => 67,  336 => 66,  332 => 65,  327 => 63,  321 => 60,  317 => 59,  313 => 58,  309 => 57,  305 => 56,  301 => 55,  297 => 54,  293 => 53,  289 => 52,  285 => 51,  281 => 50,  277 => 49,  273 => 48,  269 => 47,  265 => 46,  261 => 45,  257 => 44,  253 => 43,  249 => 42,  245 => 41,  241 => 40,  224 => 27,  214 => 26,  202 => 23,  197 => 21,  193 => 20,  189 => 19,  185 => 18,  181 => 17,  177 => 16,  173 => 15,  169 => 14,  164 => 13,  154 => 12,  134 => 6,  123 => 122,  121 => 121,  79 => 81,  77 => 80,  74 => 79,  72 => 78,  69 => 77,  67 => 26,  64 => 25,  61 => 12,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('/assets/images/logo/logo.png')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/vendor/bootstrap.min.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/vendor/slick.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/vendor/slick-theme.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/vendor/nice-select.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/plugins/feature.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/plugins/jquery-ui.min.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/vendor/odometer.css')}}\">
\t\t\t<!-- Style css -->
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/style.css')}}\">
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t<!-- End Footer Area -->
\t\t\t<div class=\"mouse-cursor cursor-outer\"></div>
\t\t\t<div class=\"mouse-cursor cursor-inner\"></div>
\t\t\t<!-- Start Top To Bottom Area  -->
\t\t\t<div class=\"rn-progress-parent\">
\t\t\t\t<svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
\t\t\t\t\t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"/>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<!-- End Top To Bottom Area  -->

\t\t\t<!-- JS ============================================ -->
\t\t\t<script src=\"{{ asset('assets/js/vendor/jquery.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/jquery.nice-select.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/jquery-ui.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/modernizer.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/feather.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/slick.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/bootstrap.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/sal.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/particles.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/jquery.style.swicher.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/js.cookie.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/count-down.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/isotop.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/imageloaded.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/backtoTop.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/odometer.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/jquery-appear.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/scrolltrigger.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/jquery.custom-file-input.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/savePopup.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/vanilla.tilt.js') }}\"></script>

\t\t\t<!-- main JS -->
\t\t\t<script src=\"{{ asset('assets/js/main.js') }}\"></script>
\t\t\t<!-- Meta Mask  -->
\t\t\t<script src=\"{{ asset('assets/js/vendor/web3.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/maralis.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/vendor/nft.js') }}\"></script>


\t\t\t<script src=\"{{ asset('assetsOfOutsiderElements/libs/swiper/swiper-bundle.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assetsOfOutsiderElements/js/pages/extended-swiper.js') }}\"></script>
\t\t\t<script src=\"{{ asset('js/loader.js') }}\"></script>
\t\t\t<script src=\"{{ asset('js/error_success.js') }}\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>

\t\t{% endblock %}
\t</head>
\t{% include 'parts/header.html.twig' %}
\t<body>
\t\t{% block body %}{% endblock %}

<script>
\t\t\t(function () {
const form = document.getElementById('form');
const submitButton = document.getElementById('submit-button');
// Add a submit event listener to the form element
form.addEventListener('submit', function (event) {
event.preventDefault();
// Check if the form is valid
if (form.checkValidity()) {
const formData = new FormData(form);
fetch('/reclamation', {
method: 'POST',
body: formData
}).then(response => response.text()).then(data => {
Swal.fire({title: 'Success!', text: 'Your reclamation has been submitted.', icon: 'success', confirmButtonText: 'Cool'}).then(() => { // Clear all the form fields
const inputs = form.querySelectorAll('input, textarea');
inputs.forEach(input => {
input.value = '';
});

form.reset();
});
}).catch(error => {

console.error(error);
Swal.fire({title: 'Error!', text: error.message, icon: 'error', confirmButtonText: 'OK'});
});
}
});
submitButton.addEventListener('click', function (event) {

if (form.checkValidity()) {
form.reportValidity();
}
});
})();

\t\t</script>
\t</body>
\t{% include 'parts/footer.html.twig' %}
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\projet\\templates\\base.html.twig");
    }
}
