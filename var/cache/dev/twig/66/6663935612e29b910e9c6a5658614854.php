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

/* create.html.twig */
class __TwigTemplate_7b52d9f33d6b6929e1f54b7f9f24d7b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>citiezenHub</title>
    <meta name=\"robots\" content=\"noindex, follow\" />
    <meta name=\"description\" content>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <meta name=\"theme-style-mode\" content=\"1\">
    <!-- 0 == light, 1 == dark -->

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/images/logo/logo.png\">
    <!-- CSS  -->
    ";
        // line 18
        $this->displayBlock('css', $context, $blocks);
        // line 29
        echo "</head>

<body class=\"template-color-1 nft-body-connect\">
    <!-- Start Header -->
    <header class=\"rn-header haeder-default header--sticky\">
        <div class=\"container\">
            <div class=\"header-inner\">
                <div class=\"header-left\">
                    <div class=\"logo-thumbnail logo-custom-css\">
                        <a class=\"logo-light\" href=\"index.html\"><img src=\"/assets/images/logo/logo.png\" alt=\"nft-logo\"></a>
                        <a class=\"logo-dark\" href=\"index.html\"><img src=\"/assets/images/logo/logo.png\" alt=\"nft-logo\"></a>
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
                                                            <a href=\"create.html\">Create
                                                                NFT<i data-feather=\"file-plus\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-lg-3 single-mega-item\">
                                                    <ul class=\"mega-menu-item\">
                                                        <li>
                                                            <a href=\"about.html\">About
                                                                Us<i data-feather=\"award\"></i>
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
                                <a href=\"javascript: void(0);\" data-theme=\"light\" class=\"setColor light\"><img class=\"sun-image\" src=\"/assets/images/icons/sun-01.svg\" alt=\"Sun images\"></a>
                            </li>
                            <li>
                                <a href=\"javascript: void(0);\" data-theme=\"dark\" class=\"setColor dark\"><img class=\"Victor Image\" src=\"/assets/images/icons/vector.svg\" alt=\"Vector Images\"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- start page title area -->
    <div class=\"rn-breadcrumb-inner ptb--30\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-12\">
                    <h5 class=\"title text-center text-md-start\">Add Reclamation
                    </h5>
                </div>
                <div class=\"col-lg-6 col-md-6 col-12\">
                    <ul class=\"breadcrumb-list\">
                        <li class=\"item\">
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li class=\"separator\">
                            <i class=\"feather-chevron-right\"></i>
                        </li>
                        <li class=\"item current\">Reclamation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <!-- create new product area -->
    <div class=\"create-area rn-section-gapTop\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
                    <!-- file upload area -->
                    <div class=\"upload-area\">

                        <div class=\"upload-formate mb--30\">
                            <h6 class=\"title\">
                                Upload file
                            </h6>
                            <p class=\"formate\">
                                Drag or choose your file to upload
                            </p>
                        </div>

                        <div class=\"brows-file-wrapper\">
                            <!-- actual upload which is hidden -->
                            <input name=\"createinputfile\" id=\"createinputfile\" type=\"file\" class=\"inputfile\" />
                            <img id=\"createfileImage\" src=\"/assets/images/portfolio/1.jpeg\" alt data-black-overlay=\"6\">
                            <!-- our custom upload button -->
                            <label for=\"createinputfile\" title=\"No File Choosen\">
                                <i class=\"feather-upload\"></i>
                                <span class=\"text-center\">Choose a
                                    File</span>
                                <p class=\"text-center mt--9\">PNG, GIF,
                                    WEBP, MP4 or MP3.
                                    <br>
                                    Max 1Gb.
                                </p>
                            </label>
                        </div>
                    </div>
                    <!-- end upoad file area -->

                    <div class=\"mt--100 mt_sm--30 mt_md--30 d-none d-lg-block\">
                        <h5>
                            Note:
                        </h5>
                        <span>
                            enjoy our Service
                        </span>
                        <br>
                        <span>
                            You will receive our reponse soon
                        </span>
                    </div>

                </div>

                <div class=\"col-lg-7\">
                    <div class=\"form-wrapper-one\">
                        <form class=\"row\" action=\"#\">

                            <div class=\"col-md-12\">
                                <div class=\"input-box pb--20\">
                                    <label for=\"name\" class=\"form-label\">
                                        Private Key
                                    </label>
                                    <input id=\"name\" placeholder=\"automatically generated\">
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div class=\"input-box pb--20\">
                                    <label for=\"name\" class=\"form-label\">
                                        Private Key
                                    </label>
                                    <input id=\"name\" placeholder=\"automatically generated\">
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div class=\"input-box pb--20\">
                                    <label for=\"Discription\" class=\"form-label\">Discription</label>
                                    <textarea id=\"Discription\" rows=\"3\" placeholder=\"describe more feel free ..............\"></textarea>
                                </div>
                            </div>
                            <span>
                            </span>
                            <span></span>
                            <div class=\"col-md-12 col-xl-8 mt_lg--15 mt_md--15 mt_sm--15\">
                                <div class=\"input-box\">
                                    <button class=\"btn btn-primary btn-large w-100\">Submit
                                        Item</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- create new product area -->

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
                                <a href=\"privacy-policy.html\">Privacy
                                    Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"copyright-right\">
                        <ul class=\"social-copyright\">
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"facebook\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"instagram\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"linkedin\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"mail\"></i>
                                </a>
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
    <!-- Start Top To Bottom Area  -->
    <div class=\"rn-progress-parent\">
        <svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
        </svg>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS ============================================ -->
    ";
        // line 356
        $this->displayBlock('js', $context, $blocks);
        // line 386
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 19
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/vendor/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/vendor/slick.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/vendor/slick-theme.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/vendor/nice-select.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugins/feature.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugins/jquery-ui.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/vendor/odometer.css\">
    <!-- Style css -->
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\"> 
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 356
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 357
        echo "    <script src=\"/assets/js/vendor/jquery.js\"></script>
    <script src=\"/assets/js/vendor/jquery.nice-select.min.js\"></script>
    <script src=\"/assets/js/vendor/jquery-ui.js\"></script>
    <script src=\"/assets/js/vendor/modernizer.min.js\"></script>
    <script src=\"/assets/js/vendor/feather.min.js\"></script>
    <script src=\"/assets/js/vendor/slick.min.js\"></script>
    <script src=\"/assets/js/vendor/bootstrap.min.js\"></script>
    <script src=\"/assets/js/vendor/sal.min.js\"></script>
    <script src=\"/assets/js/vendor/particles.js\"></script>
    <script src=\"/assets/js/vendor/jquery.style.swicher.js\"></script>
    <script src=\"/assets/js/vendor/js.cookie.js\"></script>
    <script src=\"/assets/js/vendor/count-down.js\"></script>
    <script src=\"/assets/js/vendor/isotop.js\"></script>
    <script src=\"/assets/js/vendor/imageloaded.js\"></script>
    <script src=\"/assets/js/vendor/backtoTop.js\"></script>
    <script src=\"/assets/js/vendor/odometer.js\"></script>
    <script src=\"/assets/js/vendor/jquery-appear.js\"></script>
    <script src=\"/assets/js/vendor/scrolltrigger.js\"></script>
    <script src=\"/assets/js/vendor/jquery.custom-file-input.js\"></script>
    <script src=\"/assets/js/vendor/savePopup.js\"></script>
    <script src=\"/assets/js/vendor/vanilla.tilt.js\"></script>

    <!-- main JS -->
    <script src=\"/assets/js/main.js\"></script>
    <!-- Meta Mask  -->
    <script src=\"/assets/js/vendor/web3.min.js\"></script>
    <script src=\"/assets/js/vendor/maralis.js\"></script>
    <script src=\"/assets/js/vendor/nft.js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "create.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  448 => 357,  438 => 356,  419 => 19,  409 => 18,  397 => 386,  395 => 356,  66 => 29,  64 => 18,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>citiezenHub</title>
    <meta name=\"robots\" content=\"noindex, follow\" />
    <meta name=\"description\" content>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <meta name=\"theme-style-mode\" content=\"1\">
    <!-- 0 == light, 1 == dark -->

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/images/logo/logo.png\">
    <!-- CSS  -->
    {%block css%}
    <link rel=\"stylesheet\" href=\"/assets/css/vendor/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/vendor/slick.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/vendor/slick-theme.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/vendor/nice-select.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugins/feature.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/plugins/jquery-ui.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/vendor/odometer.css\">
    <!-- Style css -->
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\"> 
    {%endblock%}
</head>

<body class=\"template-color-1 nft-body-connect\">
    <!-- Start Header -->
    <header class=\"rn-header haeder-default header--sticky\">
        <div class=\"container\">
            <div class=\"header-inner\">
                <div class=\"header-left\">
                    <div class=\"logo-thumbnail logo-custom-css\">
                        <a class=\"logo-light\" href=\"index.html\"><img src=\"/assets/images/logo/logo.png\" alt=\"nft-logo\"></a>
                        <a class=\"logo-dark\" href=\"index.html\"><img src=\"/assets/images/logo/logo.png\" alt=\"nft-logo\"></a>
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
                                                            <a href=\"create.html\">Create
                                                                NFT<i data-feather=\"file-plus\"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-lg-3 single-mega-item\">
                                                    <ul class=\"mega-menu-item\">
                                                        <li>
                                                            <a href=\"about.html\">About
                                                                Us<i data-feather=\"award\"></i>
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
                                <a href=\"javascript: void(0);\" data-theme=\"light\" class=\"setColor light\"><img class=\"sun-image\" src=\"/assets/images/icons/sun-01.svg\" alt=\"Sun images\"></a>
                            </li>
                            <li>
                                <a href=\"javascript: void(0);\" data-theme=\"dark\" class=\"setColor dark\"><img class=\"Victor Image\" src=\"/assets/images/icons/vector.svg\" alt=\"Vector Images\"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- start page title area -->
    <div class=\"rn-breadcrumb-inner ptb--30\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-12\">
                    <h5 class=\"title text-center text-md-start\">Add Reclamation
                    </h5>
                </div>
                <div class=\"col-lg-6 col-md-6 col-12\">
                    <ul class=\"breadcrumb-list\">
                        <li class=\"item\">
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li class=\"separator\">
                            <i class=\"feather-chevron-right\"></i>
                        </li>
                        <li class=\"item current\">Reclamation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <!-- create new product area -->
    <div class=\"create-area rn-section-gapTop\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
                    <!-- file upload area -->
                    <div class=\"upload-area\">

                        <div class=\"upload-formate mb--30\">
                            <h6 class=\"title\">
                                Upload file
                            </h6>
                            <p class=\"formate\">
                                Drag or choose your file to upload
                            </p>
                        </div>

                        <div class=\"brows-file-wrapper\">
                            <!-- actual upload which is hidden -->
                            <input name=\"createinputfile\" id=\"createinputfile\" type=\"file\" class=\"inputfile\" />
                            <img id=\"createfileImage\" src=\"/assets/images/portfolio/1.jpeg\" alt data-black-overlay=\"6\">
                            <!-- our custom upload button -->
                            <label for=\"createinputfile\" title=\"No File Choosen\">
                                <i class=\"feather-upload\"></i>
                                <span class=\"text-center\">Choose a
                                    File</span>
                                <p class=\"text-center mt--9\">PNG, GIF,
                                    WEBP, MP4 or MP3.
                                    <br>
                                    Max 1Gb.
                                </p>
                            </label>
                        </div>
                    </div>
                    <!-- end upoad file area -->

                    <div class=\"mt--100 mt_sm--30 mt_md--30 d-none d-lg-block\">
                        <h5>
                            Note:
                        </h5>
                        <span>
                            enjoy our Service
                        </span>
                        <br>
                        <span>
                            You will receive our reponse soon
                        </span>
                    </div>

                </div>

                <div class=\"col-lg-7\">
                    <div class=\"form-wrapper-one\">
                        <form class=\"row\" action=\"#\">

                            <div class=\"col-md-12\">
                                <div class=\"input-box pb--20\">
                                    <label for=\"name\" class=\"form-label\">
                                        Private Key
                                    </label>
                                    <input id=\"name\" placeholder=\"automatically generated\">
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div class=\"input-box pb--20\">
                                    <label for=\"name\" class=\"form-label\">
                                        Private Key
                                    </label>
                                    <input id=\"name\" placeholder=\"automatically generated\">
                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div class=\"input-box pb--20\">
                                    <label for=\"Discription\" class=\"form-label\">Discription</label>
                                    <textarea id=\"Discription\" rows=\"3\" placeholder=\"describe more feel free ..............\"></textarea>
                                </div>
                            </div>
                            <span>
                            </span>
                            <span></span>
                            <div class=\"col-md-12 col-xl-8 mt_lg--15 mt_md--15 mt_sm--15\">
                                <div class=\"input-box\">
                                    <button class=\"btn btn-primary btn-large w-100\">Submit
                                        Item</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- create new product area -->

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
                                <a href=\"privacy-policy.html\">Privacy
                                    Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"copyright-right\">
                        <ul class=\"social-copyright\">
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"facebook\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"instagram\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"linkedin\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i data-feather=\"mail\"></i>
                                </a>
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
    <!-- Start Top To Bottom Area  -->
    <div class=\"rn-progress-parent\">
        <svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
            <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
        </svg>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS ============================================ -->
    {% block js %}
    <script src=\"/assets/js/vendor/jquery.js\"></script>
    <script src=\"/assets/js/vendor/jquery.nice-select.min.js\"></script>
    <script src=\"/assets/js/vendor/jquery-ui.js\"></script>
    <script src=\"/assets/js/vendor/modernizer.min.js\"></script>
    <script src=\"/assets/js/vendor/feather.min.js\"></script>
    <script src=\"/assets/js/vendor/slick.min.js\"></script>
    <script src=\"/assets/js/vendor/bootstrap.min.js\"></script>
    <script src=\"/assets/js/vendor/sal.min.js\"></script>
    <script src=\"/assets/js/vendor/particles.js\"></script>
    <script src=\"/assets/js/vendor/jquery.style.swicher.js\"></script>
    <script src=\"/assets/js/vendor/js.cookie.js\"></script>
    <script src=\"/assets/js/vendor/count-down.js\"></script>
    <script src=\"/assets/js/vendor/isotop.js\"></script>
    <script src=\"/assets/js/vendor/imageloaded.js\"></script>
    <script src=\"/assets/js/vendor/backtoTop.js\"></script>
    <script src=\"/assets/js/vendor/odometer.js\"></script>
    <script src=\"/assets/js/vendor/jquery-appear.js\"></script>
    <script src=\"/assets/js/vendor/scrolltrigger.js\"></script>
    <script src=\"/assets/js/vendor/jquery.custom-file-input.js\"></script>
    <script src=\"/assets/js/vendor/savePopup.js\"></script>
    <script src=\"/assets/js/vendor/vanilla.tilt.js\"></script>

    <!-- main JS -->
    <script src=\"/assets/js/main.js\"></script>
    <!-- Meta Mask  -->
    <script src=\"/assets/js/vendor/web3.min.js\"></script>
    <script src=\"/assets/js/vendor/maralis.js\"></script>
    <script src=\"/assets/js/vendor/nft.js\"></script>
    {% endblock %}
</body>

</html>", "create.html.twig", "C:\\xampp\\htdocs\\citiezenHub_webapp\\templates\\create.html.twig");
    }
}
