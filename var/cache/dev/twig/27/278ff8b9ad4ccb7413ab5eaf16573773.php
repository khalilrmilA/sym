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
        // line 26
        echo "
\t\t";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "\t</head>
\t";
        // line 59
        $this->loadTemplate("parts/header.html.twig", "base.html.twig", 59)->display($context);
        // line 60
        echo "\t<body>
\t\t";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "\t\t
\t\t<script>
\t\t  (function() {
\t\t\tconst form = document.getElementById('form');
\t\t\tconst submitButton = document.getElementById('submit-button');

\t\t\tsubmitButton.addEventListener('click', (e) => {
\t\t\t  e.preventDefault();

\t\t\t  const formData = new FormData(form);

\t\t\t  fetch('/reclamation', {
\t\t\t\tmethod: 'POST',
\t\t\t\tbody: formData,
\t\t\t  })
\t\t\t  .then(response => response.text())
\t\t\t  .then(data => {
\t\t\t\t// Handle the response from the server
\t\t\t\tconsole.log(data);
\t\t\t  })
\t\t\t  .catch(error => {
\t\t\t\t// Handle any errors that occur
\t\t\t\tconsole.error(error);
\t\t\t  });
\t\t\t});
\t\t  })();
\t\t</script>
\t</body>
\t";
        // line 90
        $this->loadTemplate("parts/footer.html.twig", "base.html.twig", 90)->display($context);
        // line 91
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
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/vendor/odometer.css"), "html", null, true);
        echo "\">
\t\t\t<!-- Style css -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/modernizer.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/feather.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/sal.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/particles.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/jquery.style.swicher.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/js.cookie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/count-down.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/isotop.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/imageloaded.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/backtoTop.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/odometer.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/jquery-appear.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/scrolltrigger.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/jquery.custom-file-input.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/savePopup.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/vanilla.tilt.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- main JS -->
\t\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Meta Mask  -->
\t\t\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/web3.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/maralis.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/vendor/nft.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
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
        return array (  329 => 61,  317 => 56,  313 => 55,  309 => 54,  304 => 52,  298 => 49,  294 => 48,  290 => 47,  286 => 46,  282 => 45,  278 => 44,  274 => 43,  270 => 42,  266 => 41,  262 => 40,  258 => 39,  254 => 38,  250 => 37,  246 => 36,  242 => 35,  238 => 34,  234 => 33,  230 => 32,  226 => 31,  222 => 30,  218 => 29,  213 => 28,  203 => 27,  191 => 24,  186 => 22,  181 => 20,  177 => 19,  173 => 18,  169 => 17,  165 => 16,  161 => 15,  157 => 14,  152 => 13,  142 => 12,  122 => 6,  111 => 91,  109 => 90,  79 => 62,  77 => 61,  74 => 60,  72 => 59,  69 => 58,  67 => 27,  64 => 26,  61 => 12,  56 => 8,  54 => 6,  47 => 1,);
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
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"{{asset('/assets/css/vendor/odometer.css')}}\">
\t\t\t<!-- Style css -->
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/style.css')}}\">
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t<script src=\"{{asset('/assets/js/vendor/jquery.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/jquery.nice-select.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/jquery-ui.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/modernizer.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/feather.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/slick.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/bootstrap.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/sal.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/particles.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/jquery.style.swicher.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/js.cookie.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/count-down.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/isotop.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/imageloaded.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/backtoTop.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/odometer.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/jquery-appear.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/scrolltrigger.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/jquery.custom-file-input.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/savePopup.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/vanilla.tilt.js')}}\"></script>

\t\t\t<!-- main JS -->
\t\t\t<script src=\"{{asset('/assets/js/main.js')}}\"></script>
\t\t\t<!-- Meta Mask  -->
\t\t\t<script src=\"{{asset('/assets/js/vendor/web3.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/maralis.js')}}\"></script>
\t\t\t<script src=\"{{asset('/assets/js/vendor/nft.js')}}\"></script>
\t\t{% endblock %}
\t</head>
\t{% include 'parts/header.html.twig' %}
\t<body>
\t\t{% block body %}{% endblock %}
\t\t
\t\t<script>
\t\t  (function() {
\t\t\tconst form = document.getElementById('form');
\t\t\tconst submitButton = document.getElementById('submit-button');

\t\t\tsubmitButton.addEventListener('click', (e) => {
\t\t\t  e.preventDefault();

\t\t\t  const formData = new FormData(form);

\t\t\t  fetch('/reclamation', {
\t\t\t\tmethod: 'POST',
\t\t\t\tbody: formData,
\t\t\t  })
\t\t\t  .then(response => response.text())
\t\t\t  .then(data => {
\t\t\t\t// Handle the response from the server
\t\t\t\tconsole.log(data);
\t\t\t  })
\t\t\t  .catch(error => {
\t\t\t\t// Handle any errors that occur
\t\t\t\tconsole.error(error);
\t\t\t  });
\t\t\t});
\t\t  })();
\t\t</script>
\t</body>
\t{% include 'parts/footer.html.twig' %}
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\projet\\templates\\base.html.twig");
    }
}
