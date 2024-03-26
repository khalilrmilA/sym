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
class __TwigTemplate_ffc352aa7909b942182df125be78e6cc extends Template
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

        echo "Hello ReclamationController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- start page title area -->
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ReclamationController!{% endblock %}

{% block body %}
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

{% endblock %}
", "reclamation/index.html.twig", "C:\\xampp\\htdocs\\projet\\templates\\reclamation\\index.html.twig");
    }
}
