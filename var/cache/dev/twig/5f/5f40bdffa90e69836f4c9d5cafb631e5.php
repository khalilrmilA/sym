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

/* baseAdmin.html.twig */
class __TwigTemplate_eb7b9bdea21a24e557ac4f033ce53b9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "</head>
<body>


";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <!-- CSS
============================================ -->





        <!-- Style css -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">



        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
                    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/choices/choices.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/flatpickr/flatpickr.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
                    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin=\"\">
                    <link href=\"https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap\" rel=\"stylesheet\">
                    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/simplebar/simplebar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css"), "html", null, true);
        echo "\">
                    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/assets/css/theme-rtl.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" id=\"style-rtl\">
                    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/assets/css/theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" id=\"style-default\">
                    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/assets/css/user-rtl.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" id=\"user-style-rtl\">
                    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/assets/css/user.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" id=\"user-style-default\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "        <!-- JS ============================================ -->


        <script>  </script>

                    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/anchorjs/anchor.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/is/is.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/fontawesome/all.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/lodash/lodash.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll\"></script>
                    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/list.js/list.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/feather-icons/feather.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/dayjs/dayjs.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/choices/choices.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/vendors/sortablejs/Sortable.min.html"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/assetsAdmin/assets/js/phoenix.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
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
        return "baseAdmin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  256 => 62,  244 => 56,  240 => 55,  236 => 54,  232 => 53,  228 => 52,  224 => 51,  220 => 50,  216 => 49,  212 => 48,  208 => 47,  204 => 46,  200 => 45,  196 => 44,  189 => 39,  179 => 38,  166 => 34,  162 => 33,  158 => 32,  154 => 31,  150 => 30,  146 => 29,  139 => 25,  135 => 24,  125 => 17,  115 => 9,  105 => 8,  86 => 5,  74 => 63,  72 => 62,  66 => 58,  64 => 38,  61 => 37,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
    {% block stylesheets %}
        <!-- CSS
============================================ -->





        <!-- Style css -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">



        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
                    <link href=\"{{ asset('assets/assetsAdmin/vendors/choices/choices.min.css')}}\" rel=\"stylesheet\">
                    <link href=\"{{ asset('assets/assetsAdmin/vendors/flatpickr/flatpickr.min.css')}}\" rel=\"stylesheet\">
                    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
                    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin=\"\">
                    <link href=\"https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap\" rel=\"stylesheet\">
                    <link href=\"{{ asset('assets/assetsAdmin/vendors/simplebar/simplebar.min.css')}}\" rel=\"stylesheet\">
                    <link rel=\"stylesheet\" href=\"{{ asset('../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css')}}\">
                    <link href=\"{{ asset('assets/assetsAdmin/assets/css/theme-rtl.min.css')}}\" type=\"text/css\" rel=\"stylesheet\" id=\"style-rtl\">
                    <link href=\"{{ asset('assets/assetsAdmin/assets/css/theme.min.css')}}\" type=\"text/css\" rel=\"stylesheet\" id=\"style-default\">
                    <link href=\"{{ asset('assets/assetsAdmin/assets/css/user-rtl.min.css')}}\" type=\"text/css\" rel=\"stylesheet\" id=\"user-style-rtl\">
                    <link href=\"{{ asset('assets/assetsAdmin/assets/css/user.min.css')}}\" type=\"text/css\" rel=\"stylesheet\" id=\"user-style-default\">

    {% endblock %}

    {% block javascripts %}
        <!-- JS ============================================ -->


        <script>  </script>

                    <script src=\"{{ asset('assets/assetsAdmin/vendors/popper/popper.min.js')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/bootstrap/bootstrap.min.js')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/anchorjs/anchor.min.js')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/is/is.min.js')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/fontawesome/all.min.js')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/lodash/lodash.min.js')}}\"></script>
                    <script src=\"{{ asset('')}}../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/list.js/list.min.js')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/feather-icons/feather.min.js')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/dayjs/dayjs.min.js')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/choices/choices.min.js')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/vendors/sortablejs/Sortable.min.html')}}\"></script>
                    <script src=\"{{ asset('assets/assetsAdmin/assets/js/phoenix.js')}}\"></script>
    {% endblock %}
</head>
<body>


{% block body %}{% endblock %}
</body>
</html>
", "baseAdmin.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\baseAdmin.html.twig");
    }
}
