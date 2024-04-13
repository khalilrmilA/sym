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

/* reclamationsh/index.html.twig */
class __TwigTemplate_4aeac397ff4fdfd6a9014f2fbeb03595 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamationsh/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamationsh/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamationsh/index.html.twig", 1);
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

        // line 4
        echo "  show reclamation!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <!-- Start BLog Area -->
  <div class=\"rn-blog-area rn-section-gapTop\">
    <div class=\"container\">
      <div class=\"row mb--50 align-items-center\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-12\">
          <h1>Here you can find all your reclamation hope you find it good</h1>
        </div>
      </div>
      <div class=\"row g-5 d-flex flex-wrap\">
        <!-- [:4] -->
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recl"]) {
            // line 19
            echo "          <div class=\"inner flex-grow-1\" style=\"max-width: 300px; overflow-wrap: break-word;\">
            <div class=\"thumbnail\">
              <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationsh.modifer", ["id" => twig_get_attribute($this->env, $this->source, $context["recl"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/reclamation/" . twig_get_attribute($this->env, $this->source, $context["recl"], "getImagePath", [], "method", false, false, false, 21))), "html", null, true);
            echo "\" alt=\"Personal Portfolio Images\" /><span class=\"text-center color-white\"><i class=\"feather-edit\"></i></span></a>
            </div>
            <div class=\"content\">
              <div class=\"category-info\">
                <div class=\"category-list\">
                  <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationsh.modifer", ["id" => twig_get_attribute($this->env, $this->source, $context["recl"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "subject", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                </div>
                <div class=\"meta\">
                  <span>
                    <i class=\"feather-clock\"></i>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->timeAgoFilter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "createdAt", [], "any", false, false, false, 31), "Y-m-dTH:i:sP")), "html", null, true);
            echo "
                  </span>
                </div>
              </div>
              <h4 class=\"title\">
                            <form action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationsh.del", ["id" => twig_get_attribute($this->env, $this->source, $context["recl"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"return confirm('Are you sure?');\">
                              ";
            // line 37
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "description", [], "any", false, false, false, 37)) > 10)) {
                // line 38
                echo "                                ";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "description", [], "any", false, false, false, 38), 0, 10), "html", null, true);
                echo "...
                              ";
            } else {
                // line 40
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "description", [], "any", false, false, false, 40), "html", null, true);
                echo "
                              ";
            }
            // line 42
            echo "                              <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                            </form>
                          </h4>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </div>
    </div>
  </div>

  <!-- End BLog Area -->

  <div class=\"mouse-cursor cursor-inner\"></div>
  <!-- Start Top To Bottom Area -->
  <div class=\"rn-progress-parent\">
    <svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
      <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
    </svg>
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
        return "reclamationsh/index.html.twig";
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
        return array (  167 => 48,  156 => 42,  150 => 40,  144 => 38,  142 => 37,  138 => 36,  130 => 31,  120 => 26,  110 => 21,  106 => 19,  102 => 18,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  show reclamation!
{% endblock %}

{% block body %}
  <!-- Start BLog Area -->
  <div class=\"rn-blog-area rn-section-gapTop\">
    <div class=\"container\">
      <div class=\"row mb--50 align-items-center\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-12\">
          <h1>Here you can find all your reclamation hope you find it good</h1>
        </div>
      </div>
      <div class=\"row g-5 d-flex flex-wrap\">
        <!-- [:4] -->
        {% for recl in rec %}
          <div class=\"inner flex-grow-1\" style=\"max-width: 300px; overflow-wrap: break-word;\">
            <div class=\"thumbnail\">
              <a href=\"{{ path('reclamationsh.modifer', { id: recl.id }) }}\"><img src=\"{{ asset('images/reclamation/' ~ recl.getImagePath()) }}\" alt=\"Personal Portfolio Images\" /><span class=\"text-center color-white\"><i class=\"feather-edit\"></i></span></a>
            </div>
            <div class=\"content\">
              <div class=\"category-info\">
                <div class=\"category-list\">
                  <a href=\"{{ path('reclamationsh.modifer', { id: recl.id }) }}\">{{ recl.subject }}</a>
                </div>
                <div class=\"meta\">
                  <span>
                    <i class=\"feather-clock\"></i>
                    {{ recl.createdAt|date('Y-m-d\\TH:i:sP')|time_ago }}
                  </span>
                </div>
              </div>
              <h4 class=\"title\">
                            <form action=\"{{ path('reclamationsh.del', { id: recl.id }) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure?');\">
                              {% if (recl.description|length) > 10 %}
                                {{ recl.description|slice(0, 10) }}...
                              {% else %}
                                {{ recl.description }}
                              {% endif %}
                              <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                            </form>
                          </h4>
            </div>
          </div>
        {% endfor %}
      </div>
    </div>
  </div>

  <!-- End BLog Area -->

  <div class=\"mouse-cursor cursor-inner\"></div>
  <!-- Start Top To Bottom Area -->
  <div class=\"rn-progress-parent\">
    <svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
      <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
    </svg>
  </div>
{% endblock %}
", "reclamationsh/index.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\reclamationsh\\index.html.twig");
    }
}
