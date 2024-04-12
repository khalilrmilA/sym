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
class __TwigTemplate_644a1d4909bbb6848a9904b3bd887d63 extends Template
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
        <h1>Here you can find all your reclamation hope you find it good </h1>  
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
            echo "\" alt=\"Personal Portfolio Images\" /></a>
            </div>
            <div class=\"content\">
              <div class=\"category-info\">
                <div class=\"category-list\">
                  <a href=\"blog-details.html\">";
            // line 26
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
                <a href=\"blog-details.html\">
                  ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "description", [], "any", false, false, false, 37), "html", null, true);
            echo "
                  <i class=\"feather-arrow-up-right\"></i>
                </a>
              </h4>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </div>
    </div>
  </div>

  <!-- End BLog Area -->

  <!-- Start Footer Area -->
  <div class=\"rn-footer-one rn-section-gap bg-color--1 mt--100 mt_md--80 mt_sm--80\">
    <div class=\"container\">
      <div class=\"row gx-5\">
        <div class=\"col-lg-3 col-md-6 col-sm-6 col-12\">
          <div class=\"widget-content-wrapper\">
            <div class=\"footer-left\">
              <div class=\"logo-thumbnail logo-custom-css\">
                <a class=\"logo-light\" href=\"index.html\"><img src=\"assets/images/logo/logo-white.png\" alt=\"nft-logo\" /></a>
                <a class=\"logo-dark\" href=\"index.html\"><img src=\"assets/images/logo/logo-dark.png\" alt=\"nft-logo\" /></a>
              </div>
              <p class=\"rn-footer-describe\">Created with the collaboration of over 60 of the world's best Nuron Artists.</p>
            </div>
            <div class=\"widget-bottom mt--40 pt--40\">
              <h6 class=\"title\">Get The Latest Nuron Updates</h6>
              <div class=\"input-group\">
                <input type=\"text\" class=\"form-control bg-color--2\" placeholder=\"Your username\" aria-label=\"Recipient's username\" />
                <div class=\"input-group-append\">
                  <button class=\"btn btn-primary-alta btn-outline-secondary\" type=\"button\">Subscribe</button>
                </div>
              </div>
              <div class=\"newsletter-dsc\">
                <p>Email is safe. We don't spam.</p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
          <div class=\"footer-widget widget-information\">
            <h6 class=\"widget-title\">Information</h6>
            <ul class=\"footer-list-one\">
              <li class=\"single-list\">
                <a href=\"#\">Market Explore</a>
              </li>
              <li class=\"single-list\">
                <a href=\"#\">Ready Token</a>
              </li>
              <li class=\"single-list\">
                <a href=\"#\">Main Option</a>
              </li>
              <li class=\"single-list\">
                <a href=\"#\">Product Checking</a>
              </li>
              <li class=\"single-list\">
                <a href=\"blog.html\">Blog Grid</a>
              </li>
              <li class=\"single-list\">
                <a href=\"about.html\">About Us</a>
              </li>
              <li class=\"single-list\">
                <a href=\"#\">Fix Bug</a>
              </li>
            </ul>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
          <div class=\"footer-widget\">
            <h6 class=\"widget-title\">Recent Sold Out</h6>
            <ul class=\"footer-recent-post\">
              <li class=\"recent-post\">
                <div class=\"thumbnail\">
                  <a href=\"product-details.html\"><img src=\"assets/images/portfolio/portfolio-01.jpg\" alt=\"Product Images\" /></a>
                </div>
                <div class=\"content\">
                  <h6 class=\"title\"><a href=\"product-details.html\">#21 The Wonder</a></h6>
                  <p>Highest bid 1/20</p>
                  <span class=\"price\">0.244wETH</span>
                </div>
              </li>
              <li class=\"recent-post\">
                <div class=\"thumbnail\">
                  <a href=\"product-details.html\"><img src=\"assets/images/portfolio/portfolio-02.jpg\" alt=\"Product Images\" /></a>
                </div>
                <div class=\"content\">
                  <h6 class=\"title\"><a href=\"product-details.html\">Diamond Dog</a></h6>
                  <p>Highest bid 1/20</p>
                  <span class=\"price\">0.022wETH</span>
                </div>
              </li>
              <li class=\"recent-post\">
                <div class=\"thumbnail\">
                  <a href=\"product-details.html\"><img src=\"assets/images/portfolio/portfolio-03.jpg\" alt=\"Product Images\" /></a>
                </div>
                <div class=\"content\">
                  <h6 class=\"title\"><a href=\"product-details.html\">Morgan11</a></h6>
                  <p>Highest bid 1/20</p>
                  <span class=\"price\">0.892wETH</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Area -->
  <!-- Start Footer Area -->
  <div class=\"copy-right-one ptb--20 bg-color--1\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-lg-6 col-md-12 col-sm-12\">
          <div class=\"copyright-left\">
            <span>©2022 Nuron, Inc. All rights reserved.</span>
            <ul class=\"privacy\">
              <li>
                <a href=\"terms-condition.html\">Terms</a>
              </li>
              <li>
                <a href=\"privacy-policy.html\">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-6 col-md-12 col-sm-12\">
          <div class=\"copyright-right\">
            <ul class=\"social-copyright\">
              <li>
                <a href=\"#\"><i data-feather=\"facebook\"></i></a>
              </li>
              <li>
                <a href=\"#\"><i data-feather=\"twitter\"></i></a>
              </li>
              <li>
                <a href=\"#\"><i data-feather=\"instagram\"></i></a>
              </li>
              <li>
                <a href=\"#\"><i data-feather=\"linkedin\"></i></a>
              </li>
              <li>
                <a href=\"#\"><i data-feather=\"mail\"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Area -->
  <div class=\"mouse-cursor cursor-outer\"></div>
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
        return array (  150 => 44,  137 => 37,  128 => 31,  120 => 26,  110 => 21,  106 => 19,  102 => 18,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
        <h1>Here you can find all your reclamation hope you find it good </h1>  
      </div>
      </div>
      <div class=\"row g-5 d-flex flex-wrap\">
        <!-- [:4] -->
        {% for recl in rec %}
          <div class=\"inner flex-grow-1\" style=\"max-width: 300px; overflow-wrap: break-word;\">
            <div class=\"thumbnail\">
              <a href=\"{{ path('reclamationsh.modifer', {'id': recl.id}) }}\"><img src=\"{{ asset('images/reclamation/' ~ recl.getImagePath()) }}\" alt=\"Personal Portfolio Images\" /></a>
            </div>
            <div class=\"content\">
              <div class=\"category-info\">
                <div class=\"category-list\">
                  <a href=\"blog-details.html\">{{ recl.subject }}</a>
                </div>
                <div class=\"meta\">
                  <span>
                    <i class=\"feather-clock\"></i>
                    {{ recl.createdAt|date('Y-m-d\\TH:i:sP')|time_ago }}
                  </span>
                </div>
              </div>
              <h4 class=\"title\">
                <a href=\"blog-details.html\">
                  {{ recl.description }}
                  <i class=\"feather-arrow-up-right\"></i>
                </a>
              </h4>
            </div>
          </div>
        {% endfor %}
      </div>
    </div>
  </div>

  <!-- End BLog Area -->

  <!-- Start Footer Area -->
  <div class=\"rn-footer-one rn-section-gap bg-color--1 mt--100 mt_md--80 mt_sm--80\">
    <div class=\"container\">
      <div class=\"row gx-5\">
        <div class=\"col-lg-3 col-md-6 col-sm-6 col-12\">
          <div class=\"widget-content-wrapper\">
            <div class=\"footer-left\">
              <div class=\"logo-thumbnail logo-custom-css\">
                <a class=\"logo-light\" href=\"index.html\"><img src=\"assets/images/logo/logo-white.png\" alt=\"nft-logo\" /></a>
                <a class=\"logo-dark\" href=\"index.html\"><img src=\"assets/images/logo/logo-dark.png\" alt=\"nft-logo\" /></a>
              </div>
              <p class=\"rn-footer-describe\">Created with the collaboration of over 60 of the world's best Nuron Artists.</p>
            </div>
            <div class=\"widget-bottom mt--40 pt--40\">
              <h6 class=\"title\">Get The Latest Nuron Updates</h6>
              <div class=\"input-group\">
                <input type=\"text\" class=\"form-control bg-color--2\" placeholder=\"Your username\" aria-label=\"Recipient's username\" />
                <div class=\"input-group-append\">
                  <button class=\"btn btn-primary-alta btn-outline-secondary\" type=\"button\">Subscribe</button>
                </div>
              </div>
              <div class=\"newsletter-dsc\">
                <p>Email is safe. We don't spam.</p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
          <div class=\"footer-widget widget-information\">
            <h6 class=\"widget-title\">Information</h6>
            <ul class=\"footer-list-one\">
              <li class=\"single-list\">
                <a href=\"#\">Market Explore</a>
              </li>
              <li class=\"single-list\">
                <a href=\"#\">Ready Token</a>
              </li>
              <li class=\"single-list\">
                <a href=\"#\">Main Option</a>
              </li>
              <li class=\"single-list\">
                <a href=\"#\">Product Checking</a>
              </li>
              <li class=\"single-list\">
                <a href=\"blog.html\">Blog Grid</a>
              </li>
              <li class=\"single-list\">
                <a href=\"about.html\">About Us</a>
              </li>
              <li class=\"single-list\">
                <a href=\"#\">Fix Bug</a>
              </li>
            </ul>
          </div>
        </div>

        <div class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
          <div class=\"footer-widget\">
            <h6 class=\"widget-title\">Recent Sold Out</h6>
            <ul class=\"footer-recent-post\">
              <li class=\"recent-post\">
                <div class=\"thumbnail\">
                  <a href=\"product-details.html\"><img src=\"assets/images/portfolio/portfolio-01.jpg\" alt=\"Product Images\" /></a>
                </div>
                <div class=\"content\">
                  <h6 class=\"title\"><a href=\"product-details.html\">#21 The Wonder</a></h6>
                  <p>Highest bid 1/20</p>
                  <span class=\"price\">0.244wETH</span>
                </div>
              </li>
              <li class=\"recent-post\">
                <div class=\"thumbnail\">
                  <a href=\"product-details.html\"><img src=\"assets/images/portfolio/portfolio-02.jpg\" alt=\"Product Images\" /></a>
                </div>
                <div class=\"content\">
                  <h6 class=\"title\"><a href=\"product-details.html\">Diamond Dog</a></h6>
                  <p>Highest bid 1/20</p>
                  <span class=\"price\">0.022wETH</span>
                </div>
              </li>
              <li class=\"recent-post\">
                <div class=\"thumbnail\">
                  <a href=\"product-details.html\"><img src=\"assets/images/portfolio/portfolio-03.jpg\" alt=\"Product Images\" /></a>
                </div>
                <div class=\"content\">
                  <h6 class=\"title\"><a href=\"product-details.html\">Morgan11</a></h6>
                  <p>Highest bid 1/20</p>
                  <span class=\"price\">0.892wETH</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Area -->
  <!-- Start Footer Area -->
  <div class=\"copy-right-one ptb--20 bg-color--1\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-lg-6 col-md-12 col-sm-12\">
          <div class=\"copyright-left\">
            <span>©2022 Nuron, Inc. All rights reserved.</span>
            <ul class=\"privacy\">
              <li>
                <a href=\"terms-condition.html\">Terms</a>
              </li>
              <li>
                <a href=\"privacy-policy.html\">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-6 col-md-12 col-sm-12\">
          <div class=\"copyright-right\">
            <ul class=\"social-copyright\">
              <li>
                <a href=\"#\"><i data-feather=\"facebook\"></i></a>
              </li>
              <li>
                <a href=\"#\"><i data-feather=\"twitter\"></i></a>
              </li>
              <li>
                <a href=\"#\"><i data-feather=\"instagram\"></i></a>
              </li>
              <li>
                <a href=\"#\"><i data-feather=\"linkedin\"></i></a>
              </li>
              <li>
                <a href=\"#\"><i data-feather=\"mail\"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Area -->
  <div class=\"mouse-cursor cursor-outer\"></div>
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
