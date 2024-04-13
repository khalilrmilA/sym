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

/* conference/backReclamation.html.twig */
class __TwigTemplate_44c5263f5fe4f1c4a4bf5decc7c9ff0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conference/backReclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conference/backReclamation.html.twig"));

        $this->parent = $this->loadTemplate("index_admin.html.twig", "conference/backReclamation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t\t\t\t\t\t<div class=\"mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1\">
\t\t\t\t\t\t\t<div class=\"table-responsive scrollbar mx-n1 px-1\">
\t\t\t\t\t\t\t\t<table class=\"table fs-9 mb-0\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"white-space-nowrap fs-9 align-middle ps-0\" style=\"max-width:20px; width:18px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" id=\"checkbox-bulk-products-select\" type=\"checkbox\" data-bulk-select='{\"body\":\"products-table-body\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort white-space-nowrap align-middle fs-10\" scope=\"col\" style=\"width:70px;\"></th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:350px;\" data-sort=\"product\">PRODUCT NAME</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle text-end ps-4\" scope=\"col\" data-sort=\"price\" style=\"width:150px;\">PRICE</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle ps-4\" scope=\"col\" data-sort=\"category\" style=\"width:150px;\">CATEGORY</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle ps-3\" scope=\"col\" data-sort=\"tags\" style=\"width:250px;\">TAGS</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle fs-8 text-center ps-4\" scope=\"col\" style=\"width:125px;\"></th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle ps-4\" scope=\"col\" data-sort=\"vendor\" style=\"width:200px;\">VENDOR</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle ps-4\" scope=\"col\" data-sort=\"time\" style=\"width:50px;\">PUBLISHED ON</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort text-end align-middle pe-0 ps-4\" scope=\"col\"></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody class=\"list\" id=\"products-table-body\">
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands...\",\"productImage\":\"/products/1.png\",\"price\":\"\$39\",\"category\":\"Plants\",\"tags\":[\"Health\",\"Exercise\",\"Discipline\",\"Lifestyle\",\"Fitness\"],\"star\":false,\"vendor\":\"Blue Olive Plant sellers. Inc\",\"publishedOn\":\"Nov 12, 10:45 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/1.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; ...</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$39</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Plants</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Health</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Exercise</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Discipline</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Lifestyle</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Fitness</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Blue Olive Plant sellers. Inc</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 12, 10:45 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"iPhone 13 pro max-Pacific Blue-128GB storage\",\"productImage\":\"/products/2.png\",\"price\":\"\$87\",\"category\":\"Furniture\",\"tags\":[\"Class\",\"Camera\",\"Discipline\",\"invincible\",\"Pro\",\"Swag\"],\"star\":true,\"vendor\":\"Beatrice Furnitures\",\"publishedOn\":\"Nov 11, 7:36 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/2.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">iPhone 13 pro max-Pacific Blue-128GB storage</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$87</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Furniture</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Class</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Camera</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Discipline</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">invincible</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Pro</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Swag</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Beatrice Furnitures</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 11, 7:36 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple MacBook Pro 13 inch-M1-8/256GB-space\",\"productImage\":\"/products/3.png\",\"price\":\"\$9\",\"category\":\"Plants\",\"tags\":[\"Efficiency\",\"Handy\",\"Apple\",\"Creativity\",\"Gray\"],\"star\":false,\"vendor\":\"PlantPlanet\",\"publishedOn\":\"Nov 11, 8:16 AM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/3.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple MacBook Pro 13 inch-M1-8/256GB-space</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Plants</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Efficiency</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Handy</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apple</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Creativity</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gray</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">PlantPlanet</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 11, 8:16 AM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple iMac 24\\\" 4K Retina Display M1 8 Core CPU...\",\"productImage\":\"/products/4.png\",\"price\":\"\$8 - \$58\",\"category\":\"Toys\",\"tags\":[\"Color\",\"Stunning\",\"Retina\",\"Green\",\"PC killer\"],\"star\":false,\"vendor\":\"Kizzstore\",\"publishedOn\":\"Nov 8, 6:39 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/4.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU...</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$8 - \$58</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Toys</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Color</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Stunning</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Retina</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Green</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">PC killer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Kizzstore</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 8, 6:39 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset\",\"productImage\":\"/products/5.png\",\"price\":\"\$120\",\"category\":\"Fashion\",\"tags\":[\"Music\",\"Audio\",\"Meeting\",\"Record\",\"Sound\"],\"star\":false,\"vendor\":\"Inertia Fashion\",\"publishedOn\":\"Nov 8, 5:32 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/5.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$120</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Music</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Audio</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Record</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Sound</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Inertia Fashion</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 8, 5:32 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"PlayStation 5 DualSense Wireless Controller\",\"productImage\":\"/products/6.png\",\"price\":\"\$239\",\"category\":\"Gadgets\",\"tags\":[\"Game\",\"Control\",\"Nav\",\"Playstation\",\"Wireless\"],\"star\":false,\"vendor\":\"FutureTech Inc\",\"publishedOn\":\"Nov 6, 11:34 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/6.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">PlayStation 5 DualSense Wireless Controller</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$239</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Gadgets</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Game</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Control</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Nav</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Playstation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Wireless</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">FutureTech Inc</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 6, 11:34 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray\",\"productImage\":\"/products/7.png\",\"price\":\"\$4\",\"category\":\"Food\",\"tags\":[\"Ipad\",\"Pro\",\"Creativity\",\"Thunderbolt\",\"Space\"],\"star\":false,\"vendor\":\"Maimuna’s Bakery\",\"publishedOn\":\"Nov 1, 7:45 AM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/7.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Food</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Ipad</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Pro</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Creativity</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Thunderbolt</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Space</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Maimuna’s Bakery</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 1, 7:45 AM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)\",\"productImage\":\"/products/8.png\",\"price\":\"\$98\",\"category\":\"Fashion\",\"tags\":[\"Keyboard\",\"Smooth\",\"Butter\",\"RGB\",\"Black\"],\"star\":false,\"vendor\":\"Green fashion\",\"publishedOn\":\"Nov 3, 12:27 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/8.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$98</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Keyboard</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Smooth</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Butter</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">RGB</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Black</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Green fashion</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 3, 12:27 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple Magic Mouse (Wireless, Rechargable) - Silver\",\"productImage\":\"/products/10.png\",\"price\":\"\$568\",\"category\":\"Fashion\",\"tags\":[\"Apple\",\"Wireless\",\"Battery\",\"Magic\",\"Performance\"],\"star\":false,\"vendor\":\"Eastacy\",\"publishedOn\":\"Nov 1, 9:39 AM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/10.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple Magic Mouse (Wireless, Rechargable) - Silver</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$568</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apple</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Wireless</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Battery</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Magic</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Eastacy</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 1, 9:39 AM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"HORI Racing Wheel Apex for PlayStation 4_3, and PC\",\"productImage\":\"/products/12.png\",\"price\":\"\$17\",\"category\":\"Drinks\",\"tags\":[\"Steering\",\"Gaming\",\"PS4/3\",\"Racing\",\"Apex\"],\"star\":false,\"vendor\":\"BrewerBro\",\"publishedOn\":\"Oct 30, 3:49 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/12.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">HORI Racing Wheel Apex for PlayStation 4_3, and PC</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Drinks</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Steering</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gaming</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">PS4/3</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Racing</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apex</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">BrewerBro</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Oct 30, 3:49 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple Pencil (2nd Generation)\",\"productImage\":\"/products/21.png\",\"price\":\"\$28\",\"category\":\"Fashion\",\"tags\":[\"Apple\",\"Creativity\",\"Color\",\"Stunning\",\"Apex\"],\"star\":false,\"vendor\":\"Eastacy\",\"publishedOn\":\"Nov 25, 5:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/21.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple Pencil (2nd Generation)</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$28</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apple</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Creativity</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Color</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Stunning</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apex</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Eastacy</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 25, 5:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple AirPods (2nd Generation)\",\"productImage\":\"/products/16.png\",\"price\":\"\$20\",\"category\":\"Fashion\",\"tags\":[\"Music\",\"Audio\",\"Meeting\",\"Record\",\"Sound\"],\"star\":true,\"vendor\":\"FutureTech Inc\",\"publishedOn\":\"Sep 20, 1:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/16.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple AirPods (2nd Generation)</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$20</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Music</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Audio</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Record</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Sound</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">FutureTech Inc</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Sep 20, 1:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Xbox Series S\",\"productImage\":\"/products/17.png\",\"price\":\"\$30\",\"category\":\"Gadget\",\"tags\":[\"Lifestyle\",\"Audio\",\"Magic\",\"Performance\",\"Apex\"],\"star\":false,\"vendor\":\"FutureTech Inc\",\"publishedOn\":\"Oct 18, 3:40 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/17.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Xbox Series S</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$30</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Gadget</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Lifestyle</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Audio</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Magic</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apex</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">FutureTech Inc</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Oct 18, 3:40 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Seagate Portable 2TB External Hard Drive Portable HDD\",\"productImage\":\"/products/18.png\",\"price\":\"\$50\",\"category\":\"Accessories\",\"tags\":[\"Portable\",\"Gaming\",\"Magic\",\"Performance\",\"Black\"],\"star\":false,\"vendor\":\"Kizzstore\",\"publishedOn\":\"Sep 20, 1:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/18.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Seagate Portable 2TB External Hard Drive Portable HDD</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$50</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Accessories</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Portable</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gaming</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Magic</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Black</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Kizzstore</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Sep 20, 1:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Intel Core i9-11900K Desktop Processor 8 Cores up to 5.3 GHz Unlocked\",\"productImage\":\"/products/19.png\",\"price\":\"\$80\",\"category\":\"Accessories\",\"tags\":[\"Intel\",\"Gaming\",\"Apex\",\"Performance\",\"Lifestyle\"],\"star\":true,\"vendor\":\"BrewerBro\",\"publishedOn\":\"Dec 01, 12:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/19.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Intel Core i9-11900K Desktop Processor 8 Cores up to 5.3 GHz Unlocked</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$80</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Accessories</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Intel</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gaming</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apex</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Lifestyle</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">BrewerBro</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Dec 01, 12:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"ASUS TUF Gaming F15 Gaming Laptop\",\"productImage\":\"/products/20.png\",\"price\":\"\$150\",\"category\":\"Computer\",\"tags\":[\"Gaming\",\"Battery\",\"Performance\",\"Wireless\"],\"star\":false,\"vendor\":\"Kizzstore\",\"publishedOn\":\"Dec 01, 12:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/20.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">ASUS TUF Gaming F15 Gaming Laptop</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$150</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Computer</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gaming</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Battery</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Wireless</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Kizzstore</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Dec 01, 12:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>

\t\t\t\t
\t\t<!-- ===============================================-->
\t\t<!--    End of Main Content-->
\t\t<!-- ===============================================-->
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "conference/backReclamation.html.twig";
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
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index_admin.html.twig' %}
 {% block body  %}
\t\t\t\t\t\t<div class=\"mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1\">
\t\t\t\t\t\t\t<div class=\"table-responsive scrollbar mx-n1 px-1\">
\t\t\t\t\t\t\t\t<table class=\"table fs-9 mb-0\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"white-space-nowrap fs-9 align-middle ps-0\" style=\"max-width:20px; width:18px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" id=\"checkbox-bulk-products-select\" type=\"checkbox\" data-bulk-select='{\"body\":\"products-table-body\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort white-space-nowrap align-middle fs-10\" scope=\"col\" style=\"width:70px;\"></th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:350px;\" data-sort=\"product\">PRODUCT NAME</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle text-end ps-4\" scope=\"col\" data-sort=\"price\" style=\"width:150px;\">PRICE</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle ps-4\" scope=\"col\" data-sort=\"category\" style=\"width:150px;\">CATEGORY</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle ps-3\" scope=\"col\" data-sort=\"tags\" style=\"width:250px;\">TAGS</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle fs-8 text-center ps-4\" scope=\"col\" style=\"width:125px;\"></th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle ps-4\" scope=\"col\" data-sort=\"vendor\" style=\"width:200px;\">VENDOR</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort align-middle ps-4\" scope=\"col\" data-sort=\"time\" style=\"width:50px;\">PUBLISHED ON</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sort text-end align-middle pe-0 ps-4\" scope=\"col\"></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody class=\"list\" id=\"products-table-body\">
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands...\",\"productImage\":\"/products/1.png\",\"price\":\"\$39\",\"category\":\"Plants\",\"tags\":[\"Health\",\"Exercise\",\"Discipline\",\"Lifestyle\",\"Fitness\"],\"star\":false,\"vendor\":\"Blue Olive Plant sellers. Inc\",\"publishedOn\":\"Nov 12, 10:45 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/1.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; ...</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$39</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Plants</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Health</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Exercise</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Discipline</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Lifestyle</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Fitness</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Blue Olive Plant sellers. Inc</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 12, 10:45 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"iPhone 13 pro max-Pacific Blue-128GB storage\",\"productImage\":\"/products/2.png\",\"price\":\"\$87\",\"category\":\"Furniture\",\"tags\":[\"Class\",\"Camera\",\"Discipline\",\"invincible\",\"Pro\",\"Swag\"],\"star\":true,\"vendor\":\"Beatrice Furnitures\",\"publishedOn\":\"Nov 11, 7:36 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/2.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">iPhone 13 pro max-Pacific Blue-128GB storage</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$87</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Furniture</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Class</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Camera</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Discipline</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">invincible</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Pro</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Swag</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Beatrice Furnitures</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 11, 7:36 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple MacBook Pro 13 inch-M1-8/256GB-space\",\"productImage\":\"/products/3.png\",\"price\":\"\$9\",\"category\":\"Plants\",\"tags\":[\"Efficiency\",\"Handy\",\"Apple\",\"Creativity\",\"Gray\"],\"star\":false,\"vendor\":\"PlantPlanet\",\"publishedOn\":\"Nov 11, 8:16 AM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/3.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple MacBook Pro 13 inch-M1-8/256GB-space</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Plants</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Efficiency</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Handy</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apple</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Creativity</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gray</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">PlantPlanet</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 11, 8:16 AM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple iMac 24\\\" 4K Retina Display M1 8 Core CPU...\",\"productImage\":\"/products/4.png\",\"price\":\"\$8 - \$58\",\"category\":\"Toys\",\"tags\":[\"Color\",\"Stunning\",\"Retina\",\"Green\",\"PC killer\"],\"star\":false,\"vendor\":\"Kizzstore\",\"publishedOn\":\"Nov 8, 6:39 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/4.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU...</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$8 - \$58</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Toys</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Color</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Stunning</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Retina</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Green</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">PC killer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Kizzstore</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 8, 6:39 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset\",\"productImage\":\"/products/5.png\",\"price\":\"\$120\",\"category\":\"Fashion\",\"tags\":[\"Music\",\"Audio\",\"Meeting\",\"Record\",\"Sound\"],\"star\":false,\"vendor\":\"Inertia Fashion\",\"publishedOn\":\"Nov 8, 5:32 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/5.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$120</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Music</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Audio</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Record</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Sound</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Inertia Fashion</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 8, 5:32 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"PlayStation 5 DualSense Wireless Controller\",\"productImage\":\"/products/6.png\",\"price\":\"\$239\",\"category\":\"Gadgets\",\"tags\":[\"Game\",\"Control\",\"Nav\",\"Playstation\",\"Wireless\"],\"star\":false,\"vendor\":\"FutureTech Inc\",\"publishedOn\":\"Nov 6, 11:34 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/6.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">PlayStation 5 DualSense Wireless Controller</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$239</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Gadgets</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Game</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Control</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Nav</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Playstation</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Wireless</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">FutureTech Inc</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 6, 11:34 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray\",\"productImage\":\"/products/7.png\",\"price\":\"\$4\",\"category\":\"Food\",\"tags\":[\"Ipad\",\"Pro\",\"Creativity\",\"Thunderbolt\",\"Space\"],\"star\":false,\"vendor\":\"Maimuna’s Bakery\",\"publishedOn\":\"Nov 1, 7:45 AM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/7.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Food</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Ipad</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Pro</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Creativity</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Thunderbolt</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Space</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Maimuna’s Bakery</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 1, 7:45 AM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)\",\"productImage\":\"/products/8.png\",\"price\":\"\$98\",\"category\":\"Fashion\",\"tags\":[\"Keyboard\",\"Smooth\",\"Butter\",\"RGB\",\"Black\"],\"star\":false,\"vendor\":\"Green fashion\",\"publishedOn\":\"Nov 3, 12:27 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/8.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$98</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Keyboard</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Smooth</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Butter</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">RGB</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Black</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Green fashion</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 3, 12:27 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple Magic Mouse (Wireless, Rechargable) - Silver\",\"productImage\":\"/products/10.png\",\"price\":\"\$568\",\"category\":\"Fashion\",\"tags\":[\"Apple\",\"Wireless\",\"Battery\",\"Magic\",\"Performance\"],\"star\":false,\"vendor\":\"Eastacy\",\"publishedOn\":\"Nov 1, 9:39 AM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/10.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple Magic Mouse (Wireless, Rechargable) - Silver</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$568</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apple</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Wireless</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Battery</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Magic</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Eastacy</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 1, 9:39 AM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"HORI Racing Wheel Apex for PlayStation 4_3, and PC\",\"productImage\":\"/products/12.png\",\"price\":\"\$17\",\"category\":\"Drinks\",\"tags\":[\"Steering\",\"Gaming\",\"PS4/3\",\"Racing\",\"Apex\"],\"star\":false,\"vendor\":\"BrewerBro\",\"publishedOn\":\"Oct 30, 3:49 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/12.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">HORI Racing Wheel Apex for PlayStation 4_3, and PC</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Drinks</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Steering</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gaming</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">PS4/3</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Racing</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apex</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">BrewerBro</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Oct 30, 3:49 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple Pencil (2nd Generation)\",\"productImage\":\"/products/21.png\",\"price\":\"\$28\",\"category\":\"Fashion\",\"tags\":[\"Apple\",\"Creativity\",\"Color\",\"Stunning\",\"Apex\"],\"star\":false,\"vendor\":\"Eastacy\",\"publishedOn\":\"Nov 25, 5:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/21.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple Pencil (2nd Generation)</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$28</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apple</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Creativity</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Color</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Stunning</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apex</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Eastacy</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Nov 25, 5:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Apple AirPods (2nd Generation)\",\"productImage\":\"/products/16.png\",\"price\":\"\$20\",\"category\":\"Fashion\",\"tags\":[\"Music\",\"Audio\",\"Meeting\",\"Record\",\"Sound\"],\"star\":true,\"vendor\":\"FutureTech Inc\",\"publishedOn\":\"Sep 20, 1:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/16.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Apple AirPods (2nd Generation)</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$20</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Fashion</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Music</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Audio</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Meeting</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Record</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Sound</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">FutureTech Inc</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Sep 20, 1:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Xbox Series S\",\"productImage\":\"/products/17.png\",\"price\":\"\$30\",\"category\":\"Gadget\",\"tags\":[\"Lifestyle\",\"Audio\",\"Magic\",\"Performance\",\"Apex\"],\"star\":false,\"vendor\":\"FutureTech Inc\",\"publishedOn\":\"Oct 18, 3:40 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/17.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Xbox Series S</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$30</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Gadget</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Lifestyle</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Audio</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Magic</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apex</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">FutureTech Inc</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Oct 18, 3:40 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Seagate Portable 2TB External Hard Drive Portable HDD\",\"productImage\":\"/products/18.png\",\"price\":\"\$50\",\"category\":\"Accessories\",\"tags\":[\"Portable\",\"Gaming\",\"Magic\",\"Performance\",\"Black\"],\"star\":false,\"vendor\":\"Kizzstore\",\"publishedOn\":\"Sep 20, 1:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/18.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Seagate Portable 2TB External Hard Drive Portable HDD</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$50</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Accessories</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Portable</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gaming</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Magic</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Black</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Kizzstore</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Sep 20, 1:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"Intel Core i9-11900K Desktop Processor 8 Cores up to 5.3 GHz Unlocked\",\"productImage\":\"/products/19.png\",\"price\":\"\$80\",\"category\":\"Accessories\",\"tags\":[\"Intel\",\"Gaming\",\"Apex\",\"Performance\",\"Lifestyle\"],\"star\":true,\"vendor\":\"BrewerBro\",\"publishedOn\":\"Dec 01, 12:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/19.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">Intel Core i9-11900K Desktop Processor 8 Cores up to 5.3 GHz Unlocked</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$80</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Accessories</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Intel</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gaming</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Apex</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Lifestyle</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">BrewerBro</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Dec 01, 12:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"fs-9 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 fs-8\"><input class=\"form-check-input\" type=\"checkbox\" data-bulk-select-row='{\"product\":\"ASUS TUF Gaming F15 Gaming Laptop\",\"productImage\":\"/products/20.png\",\"price\":\"\$150\",\"category\":\"Computer\",\"tags\":[\"Gaming\",\"Battery\",\"Performance\",\"Wireless\"],\"star\":false,\"vendor\":\"Kizzstore\",\"publishedOn\":\"Dec 01, 12:00 PM\"}'/></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"d-block border border-translucent rounded-2\" href=\"../landing/product-details.html\"><img src=\"../../../assetsAdmin/img/products/20.png\" alt=\"\" width=\"53\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"product align-middle ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"fw-semibold line-clamp-3 mb-0\" href=\"../landing/product-details.html\">ASUS TUF Gaming F15 Gaming Laptop</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4\">\$150</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold\">Computer</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"tags align-middle review pb-2 ps-3\" style=\"min-width:225px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Gaming</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Battery</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Performance</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-tag me-2 mb-2\">Wireless</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle review fs-8 text-center ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-toggle-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"far fa-star text-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"vendor align-middle text-start fw-semibold ps-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">Kizzstore</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4\">Dec 01, 12:00 PM</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" data-boundary=\"window\" aria-haspopup=\"true\" aria-expanded=\"false\" data-bs-reference=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Export</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"#!\">Remove</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>

\t\t\t\t
\t\t<!-- ===============================================-->
\t\t<!--    End of Main Content-->
\t\t<!-- ===============================================-->
\t{% endblock %}
\t\t
", "conference/backReclamation.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\conference\\backReclamation.html.twig");
    }
}
