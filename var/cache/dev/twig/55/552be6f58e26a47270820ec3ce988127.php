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

/* parts/header.html.twig */
class __TwigTemplate_de2b1c19419d4e6e5929d872216c323f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/header.html.twig"));

        // line 1
        echo "    <header class=\"rn-header haeder-default header--sticky\">
        <div class=\"container\">
            <div class=\"header-inner\">
                <div class=\"header-left\">
                    <div class=\"logo-thumbnail logo-custom-css\">
                        <a class=\"logo-light\" href=\"index.html\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/logo/logo.png"), "html", null, true);
        echo "\" alt=\"nft-logo\"></a>
                        <a class=\"logo-dark\" href=\"index.html\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/logo/logo.png"), "html", null, true);
        echo "\" alt=\"nft-logo\"></a>
                    </div>
                    <div class=\"mainmenu-wrapper\">
                        <nav id=\"sideNav\" class=\"mainmenu-nav d-none d-xl-block\">
                            <!-- Start Mainmanu Nav -->
                            <ul class=\"mainmenu\">
                                <li class=\"has-droupdown has-menu-child-item\">
                                    <a href=\"index.html\">Home</a>
                                    <ul class=\"submenu\">
                                        <li>
                                            <a href=\"index.html\">Home page -
                                                01
                                                <i class=\"feather-home\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"about.html\">About</a>
                                </li>
                                <li class=\"has-droupdown has-menu-child-item\">
                                    <a href=\"#\">Explore</a>
                                    <ul class=\"submenu\">
                                        <li>
                                            <a href=\"explore-one.html\">Explore
                                                Filter<i class=\"feather-fast-forward\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"with-megamenu\">
                                    <a href=\"#\">Pages</a>
                                    <div class=\"rn-megamenu\">
                                        <div class=\"wrapper\">
                                            <div class=\"row row--0\">
                                                <div class=\"col-lg-3 single-mega-item\">
                                                    <ul class=\"mega-menu-item\">
                                                        <li>
                                                            <a href=\"/reclamation\">
                                                            Create Reclamation
                                                            <i data-feather=\"file-plus\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-lg-3 single-mega-item\">
                                                    <ul class=\"mega-menu-item\">
                                                        <li>
                                                            <a href=\"/\">
                                                            Check Reclamation
                                                            <i data-feather=\"award\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"has-droupdown has-menu-child-item\">
                                    <a class=\"down\" href=\"blog.html\">Blog</a>
                                    <ul class=\"submenu\">
                                        <li>
                                            <a href=\"blog-single-col.html\">Blog
                                                Single Column<i class=\"feather-fast-forward\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"contact.html\">Contact</a>
                                </li>
                            </ul>
                            <!-- End Mainmanu Nav -->
                        </nav>
                    </div>
                </div>
                <div class=\"header-right\">
                    <div class=\"setting-option d-none d-lg-block\">
                        <form class=\"search-form-wrapper\" action=\"#\">
                            <input type=\"search\" placeholder=\"Search Here\" aria-label=\"Search\">
                            <div class=\"search-icon\">
                                <button>
                                    <i class=\"feather-search\"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class=\"setting-option rn-icon-list d-block d-lg-none\">
                        <div class=\"icon-box search-mobile-icon\">
                            <button>
                                <i class=\"feather-search\"></i>
                            </button>
                        </div>
                        <form id=\"header-search-1\" action=\"#\" method=\"GET\" class=\"large-mobile-blog-search\">
                            <div class=\"rn-search-mobile form-group\">
                                <button type=\"submit\" class=\"search-button\">
                                    <i class=\"feather-search\"></i>
                                </button>
                                <input type=\"text\" placeholder=\"Search ...\">
                            </div>
                        </form>
                    </div>

                    <div class=\"setting-option header-btn rbt-site-header\" id=\"rbt-site-header\">
                        <div class=\"icon-box\">
                            <a id=\"connectbtn\" class=\"btn btn-primary-alta btn-small\" href=\"connect.html\">Wallet
                                connect</a>
                        </div>
                    </div>

                    <div class=\"setting-option rn-icon-list notification-badge\">
                        <div class=\"icon-box\">
                            <a href=\"activity.html\">
                                <i class=\"feather-bell\"></i>
                                <span class=\"badge\">6</span>
                            </a>
                        </div>
                    </div>
                    <div id=\"my_switcher\" class=\"my_switcher setting-option\">
                        <ul>
                            <li>
                                <a href=\"javascript: void(0);\" data-theme=\"light\" class=\"setColor light\"><img class=\"sun-image\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/icons/sun-01.svg"), "html", null, true);
        echo " \" alt=\"Sun images\"></a>
                            </li>
                            <li>
                                <a href=\"javascript: void(0);\" data-theme=\"dark\" class=\"setColor dark\"><img class=\"Victor Image\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/icons/vector.svg"), "html", null, true);
        echo "\" alt=\"Vector Images\"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "parts/header.html.twig";
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
        return array (  185 => 132,  179 => 129,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <header class=\"rn-header haeder-default header--sticky\">
        <div class=\"container\">
            <div class=\"header-inner\">
                <div class=\"header-left\">
                    <div class=\"logo-thumbnail logo-custom-css\">
                        <a class=\"logo-light\" href=\"index.html\"><img src=\"{{ asset('/assets/images/logo/logo.png') }}\" alt=\"nft-logo\"></a>
                        <a class=\"logo-dark\" href=\"index.html\"><img src=\"{{ asset('/assets/images/logo/logo.png') }}\" alt=\"nft-logo\"></a>
                    </div>
                    <div class=\"mainmenu-wrapper\">
                        <nav id=\"sideNav\" class=\"mainmenu-nav d-none d-xl-block\">
                            <!-- Start Mainmanu Nav -->
                            <ul class=\"mainmenu\">
                                <li class=\"has-droupdown has-menu-child-item\">
                                    <a href=\"index.html\">Home</a>
                                    <ul class=\"submenu\">
                                        <li>
                                            <a href=\"index.html\">Home page -
                                                01
                                                <i class=\"feather-home\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"about.html\">About</a>
                                </li>
                                <li class=\"has-droupdown has-menu-child-item\">
                                    <a href=\"#\">Explore</a>
                                    <ul class=\"submenu\">
                                        <li>
                                            <a href=\"explore-one.html\">Explore
                                                Filter<i class=\"feather-fast-forward\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"with-megamenu\">
                                    <a href=\"#\">Pages</a>
                                    <div class=\"rn-megamenu\">
                                        <div class=\"wrapper\">
                                            <div class=\"row row--0\">
                                                <div class=\"col-lg-3 single-mega-item\">
                                                    <ul class=\"mega-menu-item\">
                                                        <li>
                                                            <a href=\"/reclamation\">
                                                            Create Reclamation
                                                            <i data-feather=\"file-plus\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-lg-3 single-mega-item\">
                                                    <ul class=\"mega-menu-item\">
                                                        <li>
                                                            <a href=\"/\">
                                                            Check Reclamation
                                                            <i data-feather=\"award\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"has-droupdown has-menu-child-item\">
                                    <a class=\"down\" href=\"blog.html\">Blog</a>
                                    <ul class=\"submenu\">
                                        <li>
                                            <a href=\"blog-single-col.html\">Blog
                                                Single Column<i class=\"feather-fast-forward\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"contact.html\">Contact</a>
                                </li>
                            </ul>
                            <!-- End Mainmanu Nav -->
                        </nav>
                    </div>
                </div>
                <div class=\"header-right\">
                    <div class=\"setting-option d-none d-lg-block\">
                        <form class=\"search-form-wrapper\" action=\"#\">
                            <input type=\"search\" placeholder=\"Search Here\" aria-label=\"Search\">
                            <div class=\"search-icon\">
                                <button>
                                    <i class=\"feather-search\"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class=\"setting-option rn-icon-list d-block d-lg-none\">
                        <div class=\"icon-box search-mobile-icon\">
                            <button>
                                <i class=\"feather-search\"></i>
                            </button>
                        </div>
                        <form id=\"header-search-1\" action=\"#\" method=\"GET\" class=\"large-mobile-blog-search\">
                            <div class=\"rn-search-mobile form-group\">
                                <button type=\"submit\" class=\"search-button\">
                                    <i class=\"feather-search\"></i>
                                </button>
                                <input type=\"text\" placeholder=\"Search ...\">
                            </div>
                        </form>
                    </div>

                    <div class=\"setting-option header-btn rbt-site-header\" id=\"rbt-site-header\">
                        <div class=\"icon-box\">
                            <a id=\"connectbtn\" class=\"btn btn-primary-alta btn-small\" href=\"connect.html\">Wallet
                                connect</a>
                        </div>
                    </div>

                    <div class=\"setting-option rn-icon-list notification-badge\">
                        <div class=\"icon-box\">
                            <a href=\"activity.html\">
                                <i class=\"feather-bell\"></i>
                                <span class=\"badge\">6</span>
                            </a>
                        </div>
                    </div>
                    <div id=\"my_switcher\" class=\"my_switcher setting-option\">
                        <ul>
                            <li>
                                <a href=\"javascript: void(0);\" data-theme=\"light\" class=\"setColor light\"><img class=\"sun-image\" src=\"{{ asset('/assets/images/icons/sun-01.svg') }} \" alt=\"Sun images\"></a>
                            </li>
                            <li>
                                <a href=\"javascript: void(0);\" data-theme=\"dark\" class=\"setColor dark\"><img class=\"Victor Image\" src=\"{{ asset('/assets/images/icons/vector.svg') }}\" alt=\"Vector Images\"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->", "parts/header.html.twig", "C:\\xampp\\htdocs\\projet\\templates\\parts\\header.html.twig");
    }
}
