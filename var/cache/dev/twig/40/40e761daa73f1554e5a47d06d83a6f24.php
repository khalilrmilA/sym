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

        echo "Add Reclamation";
        
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
        echo "    <!-- Start page title area -->
    <div class=\"rn-breadcrumb-inner ptb--30\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-12\">
                    <h5 class=\"title text-center text-md-start\">Add Reclamation</h5>
                </div>
                <div class=\"col-lg-6 col-md-6 col-12\">
                    <ul class=\"breadcrumb-list\">
                        <li class=\"item\"><a href=\"index.html\">Home</a></li>
                        <li class=\"separator\"><i class=\"feather-chevron-right\"></i></li>
                        <li class=\"item current\">Add Reclamation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End page title area -->

    <!-- Create new reclamation area -->
    <div class=\"create-area rn-section-gapTop\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <!-- Display errors, if any -->
                ";
        // line 30
        if (array_key_exists("errors", $context)) {
            // line 31
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        <ul>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["errorMessages"]) {
                // line 34
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["errorMessages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["errorMessage"]) {
                    // line 35
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["errorMessage"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </ul>
    </div>
";
        }
        // line 41
        echo "                <div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
                    <form id=\"formm\" name=\"reclamation\" method=\"post\" enctype=\"multipart/form-data\" action=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation");
        echo "\">
                    
                        <!-- Upload area -->
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
                            <input type=\"file\" name=\"reclamation[imageFile][file]\" id=\"reclamation_imageFile_file\" required=\"required\" accept=\"image/*\" class=\"inputfile\"/>
                            <img id=\"createfileImage\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/portfolio/1.jpeg"), "html", null, true);
        echo "\" alt data-black-overlay=\"6\">
                            <label for=\"reclamation_imageFile_file\" title=\"No File Choosen\">
                                <i class=\"feather-upload\"></i>
                                <span class=\"text-center\">Choose a File</span>
                                <p class=\"text-center mt--9\">PNG, GIF, WEBP, MP4 or MP3.
                                    <br>
                                    Max 1Gb.</p>
                            </label>
                        </div>
                    </div>
                        <div class=\"mt--100 mt_sm--30 mt_md--30 d-none d-lg-block\">
                            <h5>Note:
                            </h5>
                            <span>enjoy our Service
                            </span>
                            <br>
                            <span>You will receive our reponse soon
                            </span>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <!-- Form content -->
                        <div class=\"form-wrapper-one\">
                            <!-- Private Key Input -->
                            <div class=\"input-box pb--20\">
                                <label for=\"privateKey\" class=\"required\">Private Key</label>
                                <input type=\"text\" id=\"privateKey\" name=\"privateKey\" pattern=\"^[0-9]+\$\">
                                <small id=\"privateKeyHelp\" class=\"form-text text-muted\">Enter a numeric private key.</small>
                            </div>
                            
                            <!-- Subject Input -->
                            <div class=\"input-box pb--20\">
                                <label for=\"subject\" class=\"required\">Subject</label>
                                <input type=\"text\" id=\"subject\" name=\"subject\">
                            </div>

                            <!-- Description Input -->
                            <div class=\"input-box pb--20\">
                                <label for=\"description\" class=\"required\">Description</label>
                                <textarea id=\"description\" name=\"description\" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class=\"input-box\">
                                <button type=\"submit\" class=\"btn btn-primary\" id=\"submit-button\">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script for image preview -->
    <script>
        const input = document.getElementById('reclamation_imageFile_file');
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
    </script>
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
        return array (  169 => 56,  152 => 42,  149 => 41,  144 => 38,  138 => 37,  129 => 35,  124 => 34,  120 => 33,  116 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add Reclamation{% endblock %}

{% block body %}
    <!-- Start page title area -->
    <div class=\"rn-breadcrumb-inner ptb--30\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-6 col-12\">
                    <h5 class=\"title text-center text-md-start\">Add Reclamation</h5>
                </div>
                <div class=\"col-lg-6 col-md-6 col-12\">
                    <ul class=\"breadcrumb-list\">
                        <li class=\"item\"><a href=\"index.html\">Home</a></li>
                        <li class=\"separator\"><i class=\"feather-chevron-right\"></i></li>
                        <li class=\"item current\">Add Reclamation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End page title area -->

    <!-- Create new reclamation area -->
    <div class=\"create-area rn-section-gapTop\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <!-- Display errors, if any -->
                {% if errors is defined %}
    <div class=\"alert alert-danger\" role=\"alert\">
        <ul>
            {% for errorMessages in errors %}
                {% for errorMessage in errorMessages %}
                    <li>{{ errorMessage }}</li>
                {% endfor %}
            {% endfor %}
        </ul>
    </div>
{% endif %}
                <div class=\"col-lg-3 offset-1 ml_md--0 ml_sm--0\">
                    <form id=\"formm\" name=\"reclamation\" method=\"post\" enctype=\"multipart/form-data\" action=\"{{ path('app_reclamation') }}\">
                    
                        <!-- Upload area -->
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
                            <input type=\"file\" name=\"reclamation[imageFile][file]\" id=\"reclamation_imageFile_file\" required=\"required\" accept=\"image/*\" class=\"inputfile\"/>
                            <img id=\"createfileImage\" src=\"{{ asset('/assets/images/portfolio/1.jpeg') }}\" alt data-black-overlay=\"6\">
                            <label for=\"reclamation_imageFile_file\" title=\"No File Choosen\">
                                <i class=\"feather-upload\"></i>
                                <span class=\"text-center\">Choose a File</span>
                                <p class=\"text-center mt--9\">PNG, GIF, WEBP, MP4 or MP3.
                                    <br>
                                    Max 1Gb.</p>
                            </label>
                        </div>
                    </div>
                        <div class=\"mt--100 mt_sm--30 mt_md--30 d-none d-lg-block\">
                            <h5>Note:
                            </h5>
                            <span>enjoy our Service
                            </span>
                            <br>
                            <span>You will receive our reponse soon
                            </span>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <!-- Form content -->
                        <div class=\"form-wrapper-one\">
                            <!-- Private Key Input -->
                            <div class=\"input-box pb--20\">
                                <label for=\"privateKey\" class=\"required\">Private Key</label>
                                <input type=\"text\" id=\"privateKey\" name=\"privateKey\" pattern=\"^[0-9]+\$\">
                                <small id=\"privateKeyHelp\" class=\"form-text text-muted\">Enter a numeric private key.</small>
                            </div>
                            
                            <!-- Subject Input -->
                            <div class=\"input-box pb--20\">
                                <label for=\"subject\" class=\"required\">Subject</label>
                                <input type=\"text\" id=\"subject\" name=\"subject\">
                            </div>

                            <!-- Description Input -->
                            <div class=\"input-box pb--20\">
                                <label for=\"description\" class=\"required\">Description</label>
                                <textarea id=\"description\" name=\"description\" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class=\"input-box\">
                                <button type=\"submit\" class=\"btn btn-primary\" id=\"submit-button\">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script for image preview -->
    <script>
        const input = document.getElementById('reclamation_imageFile_file');
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
    </script>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\reclamation\\index.html.twig");
    }
}
