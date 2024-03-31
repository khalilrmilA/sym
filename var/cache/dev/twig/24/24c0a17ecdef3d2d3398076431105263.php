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

/* parts/footer.html.twig */
class __TwigTemplate_551461a67ab85b9c5986fa0a027bf70b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/footer.html.twig"));

        // line 1
        echo "    <div class=\"copy-right-one ptb--20 bg-color--1\">
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
    <!-- End Footer Area -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "parts/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"copy-right-one ptb--20 bg-color--1\">
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
    <!-- End Footer Area -->", "parts/footer.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\parts\\footer.html.twig");
    }
}
