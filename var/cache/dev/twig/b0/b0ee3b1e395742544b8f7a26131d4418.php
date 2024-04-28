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
class __TwigTemplate_1c2cca524dab87612755b917eca2b188 extends Template
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
        // line 31
        echo "
\t\t";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "</head>";
        $this->loadTemplate("parts/header.html.twig", "base.html.twig", 120)->display($context);
        echo "<body>
";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script></body>";
        $this->loadTemplate("parts/footer.html.twig", "base.html.twig", 122)->display($context);
        echo "</head></html>
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
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/vendor/odometer.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/vendor/chat.css"), "html", null, true);
        echo "\">

\t\t\t<link
\t\t\thref=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t\t<!-- Style css -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t\t<!-- End Footer Area -->
\t\t\t<div class=\"mouse-cursor cursor-outer\"></div>
\t\t\t<div class=\"mouse-cursor cursor-inner\"></div>
\t\t\t<!-- Start Top To Bottom Area  -->
\t\t\t<div class=\"title\">
\t\t\t\t<div>
\t\t\t\t\t<div id=\"chatbot\" class=\"main-card collapsed\">
\t\t\t\t\t\t<button id=\"chatbot_toggle\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t<path d=\"M0 0h24v24H0V0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t<path d=\"M15 4v7H5.17l-.59.59-.58.58V4h11m1-2H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm5 4h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"currentColor\" style=\"display:none\">
\t\t\t\t\t\t\t\t<path d=\"M0 0h24v24H0V0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t<path d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"main-title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<svg viewbox=\"0 0 640 512\" title=\"robot\">
\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M32,224H64V416H32A31.96166,31.96166,0,0,1,0,384V256A31.96166,31.96166,0,0,1,32,224Zm512-48V448a64.06328,64.06328,0,0,1-64,64H160a64.06328,64.06328,0,0,1-64-64V176a79.974,79.974,0,0,1,80-80H288V32a32,32,0,0,1,64,0V96H464A79.974,79.974,0,0,1,544,176ZM264,256a40,40,0,1,0-40,40A39.997,39.997,0,0,0,264,256Zm-8,128H192v32h64Zm96,0H288v32h64ZM456,256a40,40,0,1,0-40,40A39.997,39.997,0,0,0,456,256Zm-8,128H384v32h64ZM640,256V384a31.96166,31.96166,0,0,1-32,32H576V224h32A31.96166,31.96166,0,0,1,640,256Z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Chatbot</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"chat-area\" id=\"message-box\"></div>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t<div class=\"input-div\">
\t\t\t\t\t\t\t<input class=\"input-message\" name=\"messagebot\" type=\"text\" id=\"messagebot\" placeholder=\"Type your message ...\"/>
\t\t\t\t\t\t\t<button class=\"input-send\" onclick=\"send()\">
\t\t\t\t\t\t\t\t<svg style=\"width:24px;height:24px\">
\t\t\t\t\t\t\t\t\t<path d=\"M2,21L23,12L2,3V10L17,12L2,14V21Z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button id=\"startRecording1\" style=\"margin-left: 5px;\">🎤</button> <!-- Button to start voice recording -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</head>
\t</html>


\t<!-- End Top To Bottom Area  -->


\t<!-- JS ============================================ -->
\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/chat.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/modernizer.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/feather.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/sal.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/particles.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.style.swicher.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/js.cookie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/count-down.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/isotop.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/imageloaded.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/backtoTop.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/odometer.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery-appear.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/scrolltrigger.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.custom-file-input.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/savePopup.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/vanilla.tilt.js"), "html", null, true);
        echo "\"></script>

\t<!-- main JS -->
\t<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
\t<!-- Meta Mask  -->
\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/web3.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/maralis.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/nft.js"), "html", null, true);
        echo "\"></script>


\t<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsOfOutsiderElements/libs/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsOfOutsiderElements/js/pages/extended-swiper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/loader.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/error_success.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/error_success.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/sweetalert2@11"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
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
        return array (  386 => 121,  374 => 119,  370 => 118,  366 => 117,  362 => 116,  358 => 115,  354 => 114,  348 => 111,  344 => 110,  340 => 109,  335 => 107,  329 => 104,  325 => 103,  321 => 102,  317 => 101,  313 => 100,  309 => 99,  305 => 98,  301 => 97,  297 => 96,  293 => 95,  289 => 94,  285 => 93,  281 => 92,  277 => 91,  273 => 90,  269 => 89,  265 => 88,  261 => 87,  257 => 86,  253 => 85,  249 => 84,  245 => 83,  191 => 33,  181 => 32,  169 => 29,  160 => 23,  156 => 22,  152 => 21,  148 => 20,  144 => 19,  140 => 18,  136 => 17,  132 => 16,  128 => 15,  124 => 14,  119 => 13,  109 => 12,  89 => 6,  76 => 122,  74 => 121,  69 => 120,  67 => 32,  64 => 31,  61 => 12,  56 => 8,  54 => 6,  47 => 1,);
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
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/vendor/odometer.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/vendor/chat.css')}}\">

\t\t\t<link
\t\t\thref=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t\t<!-- Style css -->
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('/assets/css/style.css')}}\">
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t<!-- End Footer Area -->
\t\t\t<div class=\"mouse-cursor cursor-outer\"></div>
\t\t\t<div class=\"mouse-cursor cursor-inner\"></div>
\t\t\t<!-- Start Top To Bottom Area  -->
\t\t\t<div class=\"title\">
\t\t\t\t<div>
\t\t\t\t\t<div id=\"chatbot\" class=\"main-card collapsed\">
\t\t\t\t\t\t<button id=\"chatbot_toggle\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"currentColor\">
\t\t\t\t\t\t\t\t<path d=\"M0 0h24v24H0V0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t<path d=\"M15 4v7H5.17l-.59.59-.58.58V4h11m1-2H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm5 4h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"currentColor\" style=\"display:none\">
\t\t\t\t\t\t\t\t<path d=\"M0 0h24v24H0V0z\" fill=\"none\"/>
\t\t\t\t\t\t\t\t<path d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"main-title\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<svg viewbox=\"0 0 640 512\" title=\"robot\">
\t\t\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M32,224H64V416H32A31.96166,31.96166,0,0,1,0,384V256A31.96166,31.96166,0,0,1,32,224Zm512-48V448a64.06328,64.06328,0,0,1-64,64H160a64.06328,64.06328,0,0,1-64-64V176a79.974,79.974,0,0,1,80-80H288V32a32,32,0,0,1,64,0V96H464A79.974,79.974,0,0,1,544,176ZM264,256a40,40,0,1,0-40,40A39.997,39.997,0,0,0,264,256Zm-8,128H192v32h64Zm96,0H288v32h64ZM456,256a40,40,0,1,0-40,40A39.997,39.997,0,0,0,456,256Zm-8,128H384v32h64ZM640,256V384a31.96166,31.96166,0,0,1-32,32H576V224h32A31.96166,31.96166,0,0,1,640,256Z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>Chatbot</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"chat-area\" id=\"message-box\"></div>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t<div class=\"input-div\">
\t\t\t\t\t\t\t<input class=\"input-message\" name=\"messagebot\" type=\"text\" id=\"messagebot\" placeholder=\"Type your message ...\"/>
\t\t\t\t\t\t\t<button class=\"input-send\" onclick=\"send()\">
\t\t\t\t\t\t\t\t<svg style=\"width:24px;height:24px\">
\t\t\t\t\t\t\t\t\t<path d=\"M2,21L23,12L2,3V10L17,12L2,14V21Z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button id=\"startRecording1\" style=\"margin-left: 5px;\">🎤</button> <!-- Button to start voice recording -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</head>
\t</html>


\t<!-- End Top To Bottom Area  -->


\t<!-- JS ============================================ -->
\t<script src=\"{{ asset('assets/js/vendor/chat.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/jquery.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/jquery.nice-select.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/jquery-ui.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/modernizer.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/feather.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/slick.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/sal.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/particles.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/jquery.style.swicher.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/js.cookie.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/count-down.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/isotop.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/imageloaded.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/backtoTop.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/odometer.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/jquery-appear.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/scrolltrigger.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/jquery.custom-file-input.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/savePopup.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/vanilla.tilt.js') }}\"></script>

\t<!-- main JS -->
\t<script src=\"{{ asset('assets/js/main.js') }}\"></script>
\t<!-- Meta Mask  -->
\t<script src=\"{{ asset('assets/js/vendor/web3.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/maralis.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/vendor/nft.js') }}\"></script>


\t<script src=\"{{ asset('assetsOfOutsiderElements/libs/swiper/swiper-bundle.min.js') }}\"></script>
\t<script src=\"{{ asset('assetsOfOutsiderElements/js/pages/extended-swiper.js') }}\"></script>
\t<script src=\"{{ asset('js/loader.js') }}\"></script>
\t<script src=\"{{ asset('js/error_success.js') }}\"></script>
\t<script src=\"{{ asset('js/error_success.js') }}\"></script>
\t<script src=\"{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}\"></script>
{% endblock %}</head>{% include 'parts/header.html.twig' %}<body>
{% block body %}{% endblock %}
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script></body>{% include 'parts/footer.html.twig' %}</head></html>
", "base.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\base.html.twig");
    }
}
