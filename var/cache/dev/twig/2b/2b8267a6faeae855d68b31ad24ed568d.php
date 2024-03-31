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
class __TwigTemplate_4f03991c18ee2c6c00b20c604820fd6d extends Template
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
        echo "\tshow reclamation!
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
        echo "\t<style>
\t\t.inner {
\t\t\t/* Existing styles... */
\t\t\tmargin: 10px; /* Adjust spacing as needed */
\t\t}
\t</style>
\t<div class=\"rn-about-banner-area rn-section-gapTop\">
\t\t<div class=\"container mb--30\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 class=\"title about-title-m\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">Direct
\t\t\t\t\t\t\t\t\t\t\t\t                            Teams.
\t\t\t\t\t\t<br>
\t\t\t\t\t\tHere's you last Reclamationnn</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid about-fluidimg \">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"img-wrapper\">
\t\t\t\t\t<div class=\"bg_image--22 bg_image\"></div>
\t\t\t\t\t<img  src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/portfolio/1.jpeg"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"h--100\">
\t\t\t\t\t\t<div class=\"rn-about-card mt_dec--50 widge-wrapper rbt-sticky-top-adjust\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<h2 class=\"title\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\t\tWhy We Do This
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p class=\"about-disc\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\t\tNFTs are virtual tokens that represent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        ownership of something inherently
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        distinct and scarce, whether it be a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        physical or digital item, such as
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        artwork, a soundtrack, a collectible, an
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        in-game item or real estate. Unlike
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        regular cryptocurrencies like
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        bitcoin or fiat money like the U.S.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"blog.html\" class=\"btn btn-primary-alta btn-large sal-animate mt--20\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">See Our Blog</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"rn-about-card transparent-bg\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<h3 class=\"title\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\tHelping You
\t\t\t\t\t\t\t\t<br>Grow In Every Stage.
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"about-disc mb--0\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\tNFTs are virtual tokens that represent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    ownership of something inherently distinct
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    and scarce, whether it be a physical or
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    digital item, such as artwork, a soundtrack,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    a collectible, an in-game item or real
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    estate. Unlike regular cryptocurrencies like
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    bitcoin or fiat money like the U.S.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- About banner area End -->

\t<div class=\"rn-about-Quote-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5 d-flex align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"rn-about-title-wrapper\">
\t\t\t\t\t\t<h3 class=\"title\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">Create, Sell well & Collect
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                your Wonderful NFTs at Nuron Very Fast</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"rn-about-wrapper\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t<p>The NFTs is a one-trick pony that climbed the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                ladders of success in recent years. The growth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                of NFTs is tremendous, and according to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                Pymnts.com, the total sales volume of NFTs has
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                nearly crossed \$2.5 billion in the last six
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                months
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                of . Surprisingly, the total sales volume of
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                NFTs was \$13.7 million in 2020. On comparing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                both the values,</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- rn stastic area -->
\t<div class=\"rn-statistick-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row mb--30\">
\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<h3>Nuron Statistics</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"offset-lg-2 col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"single-counter-up text-center\">
\t\t\t\t\t\t<h3 class=\"counter\">
\t\t\t\t\t\t\t<span class=\"odometer\" data-count=\"309\">00</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"botton-title\">Nuron All NFT's</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"single-counter-up text-center\">
\t\t\t\t\t\t<h3 class=\"counter\">
\t\t\t\t\t\t\t<span class=\"odometer\" data-count=\"508\">00</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"botton-title\">All Creators</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"offset-lg-2 col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"single-counter-up text-center\">
\t\t\t\t\t\t<h3 class=\"counter\">
\t\t\t\t\t\t\t<span class=\"odometer\" data-count=\"1032\">00</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"botton-title\">Nuron Earning</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"single-counter-up text-center\">
\t\t\t\t\t\t<h3 class=\"counter\">
\t\t\t\t\t\t\t<span class=\"odometer\" data-count=\"650\">00</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"botton-title\">Level One Seller</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- rn stastic area -->

\t<!-- call to action area -->
\t<div class=\"rn-callto-action rn-section-gapTop\">
\t\t<div class=\"container-fluid about-fluidimg-cta\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"bg_image--6 bg_image bg-image-border\" data-black-overlay=\"7\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"call-to-action-wrapper\">
\t\t\t\t\t\t\t\t\t<h3 data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">Discover rare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            digital art
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tand collect
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            NFTs</h3>
\t\t\t\t\t\t\t\t\t<p data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">The NFTs is a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            one-trick pony that climbed the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            recent years. The growth of NFTs is
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            tremendous, and according to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            Pymnts.com, the total sales volume
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<div class=\"callto-action-btn-wrapper\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\t\t\t<a href=\"create.html\" class=\"btn btn-primary btn-large\">Create</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"contact.html\" class=\"btn btn-primary-alta btn-large\">Contact
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                Us</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- call to action area End -->
    
\t<!-- Start BLog Area  -->
\t<div class=\"rn-blog-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row mb--50 align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t\t<h3 class=\"title mb--0\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">Our Recent Blog</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row g-5 d-flex flex-wrap\">
\t\t\t\t";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 197, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["recl"]) {
            // line 198
            echo "\t\t\t\t\t<div class=\"inner flex-grow-1\" style=\"max-width: 300px; overflow-wrap: break-word;\">
\t\t\t\t\t\t<h1>aaaa</h1>
\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["recl"], "getImagePath", [], "method", false, false, false, 202)), "html", null, true);
            echo "\" alt=\"Personal Portfolio Images\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<div class=\"category-info\">
\t\t\t\t\t\t\t\t<div class=\"category-list\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "subject", [], "any", false, false, false, 208), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"feather-clock\"></i>
\t\t\t\t\t\t\t\t\t\t            ";
            // line 213
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "createdAt", [], "any", false, false, false, 213), "Y-m-dTH:i:sP"), "html", null, true);
            echo " </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "description", [], "any", false, false, false, 217), "html", null, true);
            echo "<i class=\"feather-arrow-up-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- End BLog Area  -->

\t<!-- Start Footer Area -->
\t<div class=\"rn-footer-one rn-section-gap bg-color--1 mt--100 mt_md--80 mt_sm--80\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row gx-5\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6 col-12\">
\t\t\t\t\t<div class=\"widget-content-wrapper\">
\t\t\t\t\t\t<div class=\"footer-left\">
\t\t\t\t\t\t\t<div class=\"logo-thumbnail logo-custom-css\">
\t\t\t\t\t\t\t\t<a class=\"logo-light\" href=\"index.html\"><img src=\"assets/images/logo/logo-white.png\" alt=\"nft-logo\"></a>
\t\t\t\t\t\t\t\t<a class=\"logo-dark\" href=\"index.html\"><img src=\"assets/images/logo/logo-dark.png\" alt=\"nft-logo\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"rn-footer-describe\">
\t\t\t\t\t\t\t\tCreated with the collaboration of over 60 of
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    the world's best Nuron Artists.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-bottom mt--40 pt--40\">
\t\t\t\t\t\t\t<h6 class=\"title\">Get The Latest Nuron Updates
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-color--2\" placeholder=\"Your username\" aria-label=\"Recipient's username\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary-alta btn-outline-secondary\" type=\"button\">Subscribe</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"newsletter-dsc\">
\t\t\t\t\t\t\t\t<p>Email is safe. We don't spam.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
\t\t\t\t\t<div class=\"footer-widget widget-information\">
\t\t\t\t\t\t<h6 class=\"widget-title\">Information</h6>
\t\t\t\t\t\t<ul class=\"footer-list-one\">
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Market
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Explore</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Ready
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Token</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Main
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Option</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Product
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Checking</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Grid</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"about.html\">About Us</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Fix Bug
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h6 class=\"widget-title\">Recent Sold Out</h6>
\t\t\t\t\t\t<ul class=\"footer-recent-post\">
\t\t\t\t\t\t\t<li class=\"recent-post\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/portfolio/portfolio-01.jpg\" alt=\"Product Images\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">#21
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                The Wonder</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p>Highest bid 1/20</p>
\t\t\t\t\t\t\t\t\t<span class=\"price\">0.244wETH</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"recent-post\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/portfolio/portfolio-02.jpg\" alt=\"Product Images\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">Diamond
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                Dog</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p>Highest bid 1/20</p>
\t\t\t\t\t\t\t\t\t<span class=\"price\">0.022wETH</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"recent-post\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/portfolio/portfolio-03.jpg\" alt=\"Product Images\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">Morgan11</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p>Highest bid 1/20</p>
\t\t\t\t\t\t\t\t\t<span class=\"price\">0.892wETH</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Footer Area -->
\t<!-- Start Footer Area -->
\t<div class=\"copy-right-one ptb--20 bg-color--1\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t<div class=\"copyright-left\">
\t\t\t\t\t\t<span>©2022 Nuron, Inc. All rights reserved.</span>
\t\t\t\t\t\t<ul class=\"privacy\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"terms-condition.html\">Terms</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"privacy-policy.html\">Privacy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Policy</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t<div class=\"copyright-right\">
\t\t\t\t\t\t<ul class=\"social-copyright\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"mail\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Footer Area -->
\t<div class=\"mouse-cursor cursor-outer\"></div>
\t<div class=\"mouse-cursor cursor-inner\"></div>
\t<!-- Start Top To Bottom Area  -->
\t<div class=\"rn-progress-parent\">
\t\t<svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
\t\t\t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"/>
\t\t</svg>
\t</div>
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
        return array (  331 => 224,  318 => 217,  311 => 213,  303 => 208,  294 => 202,  288 => 198,  284 => 197,  113 => 29,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tshow reclamation!
{% endblock %}

{% block body %}
\t<style>
\t\t.inner {
\t\t\t/* Existing styles... */
\t\t\tmargin: 10px; /* Adjust spacing as needed */
\t\t}
\t</style>
\t<div class=\"rn-about-banner-area rn-section-gapTop\">
\t\t<div class=\"container mb--30\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 class=\"title about-title-m\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">Direct
\t\t\t\t\t\t\t\t\t\t\t\t                            Teams.
\t\t\t\t\t\t<br>
\t\t\t\t\t\tHere's you last Reclamationnn</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid about-fluidimg \">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"img-wrapper\">
\t\t\t\t\t<div class=\"bg_image--22 bg_image\"></div>
\t\t\t\t\t<img  src=\"{{ asset('/assets/images/portfolio/1.jpeg') }}\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"h--100\">
\t\t\t\t\t\t<div class=\"rn-about-card mt_dec--50 widge-wrapper rbt-sticky-top-adjust\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<h2 class=\"title\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\t\tWhy We Do This
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<p class=\"about-disc\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\t\tNFTs are virtual tokens that represent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        ownership of something inherently
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        distinct and scarce, whether it be a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        physical or digital item, such as
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        artwork, a soundtrack, a collectible, an
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        in-game item or real estate. Unlike
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        regular cryptocurrencies like
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        bitcoin or fiat money like the U.S.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"blog.html\" class=\"btn btn-primary-alta btn-large sal-animate mt--20\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">See Our Blog</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"rn-about-card transparent-bg\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<h3 class=\"title\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\tHelping You
\t\t\t\t\t\t\t\t<br>Grow In Every Stage.
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"about-disc mb--0\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\tNFTs are virtual tokens that represent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    ownership of something inherently distinct
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    and scarce, whether it be a physical or
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    digital item, such as artwork, a soundtrack,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    a collectible, an in-game item or real
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    estate. Unlike regular cryptocurrencies like
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    bitcoin or fiat money like the U.S.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- About banner area End -->

\t<div class=\"rn-about-Quote-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-5 d-flex align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"rn-about-title-wrapper\">
\t\t\t\t\t\t<h3 class=\"title\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">Create, Sell well & Collect
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                your Wonderful NFTs at Nuron Very Fast</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"rn-about-wrapper\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t<p>The NFTs is a one-trick pony that climbed the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                ladders of success in recent years. The growth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                of NFTs is tremendous, and according to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                Pymnts.com, the total sales volume of NFTs has
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                nearly crossed \$2.5 billion in the last six
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                months
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                of . Surprisingly, the total sales volume of
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                NFTs was \$13.7 million in 2020. On comparing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                both the values,</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- rn stastic area -->
\t<div class=\"rn-statistick-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row mb--30\">
\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<h3>Nuron Statistics</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"offset-lg-2 col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"single-counter-up text-center\">
\t\t\t\t\t\t<h3 class=\"counter\">
\t\t\t\t\t\t\t<span class=\"odometer\" data-count=\"309\">00</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"botton-title\">Nuron All NFT's</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"single-counter-up text-center\">
\t\t\t\t\t\t<h3 class=\"counter\">
\t\t\t\t\t\t\t<span class=\"odometer\" data-count=\"508\">00</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"botton-title\">All Creators</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"offset-lg-2 col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"single-counter-up text-center\">
\t\t\t\t\t\t<h3 class=\"counter\">
\t\t\t\t\t\t\t<span class=\"odometer\" data-count=\"1032\">00</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"botton-title\">Nuron Earning</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"single-counter-up text-center\">
\t\t\t\t\t\t<h3 class=\"counter\">
\t\t\t\t\t\t\t<span class=\"odometer\" data-count=\"650\">00</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<div class=\"botton-title\">Level One Seller</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- rn stastic area -->

\t<!-- call to action area -->
\t<div class=\"rn-callto-action rn-section-gapTop\">
\t\t<div class=\"container-fluid about-fluidimg-cta\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"bg_image--6 bg_image bg-image-border\" data-black-overlay=\"7\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"call-to-action-wrapper\">
\t\t\t\t\t\t\t\t\t<h3 data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">Discover rare
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            digital art
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tand collect
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            NFTs</h3>
\t\t\t\t\t\t\t\t\t<p data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">The NFTs is a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            one-trick pony that climbed the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            recent years. The growth of NFTs is
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            tremendous, and according to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            Pymnts.com, the total sales volume
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<div class=\"callto-action-btn-wrapper\" data-sal=\"slide-up\" data-sal-duration=\"800\" data-sal-delay=\"150\">
\t\t\t\t\t\t\t\t\t\t<a href=\"create.html\" class=\"btn btn-primary btn-large\">Create</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"contact.html\" class=\"btn btn-primary-alta btn-large\">Contact
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                Us</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- call to action area End -->
    
\t<!-- Start BLog Area  -->
\t<div class=\"rn-blog-area rn-section-gapTop\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row mb--50 align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-12\">
\t\t\t\t\t<h3 class=\"title mb--0\" data-sal-delay=\"150\" data-sal=\"slide-up\" data-sal-duration=\"800\">Our Recent Blog</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row g-5 d-flex flex-wrap\">
\t\t\t\t{% for recl in rec[:4] %}
\t\t\t\t\t<div class=\"inner flex-grow-1\" style=\"max-width: 300px; overflow-wrap: break-word;\">
\t\t\t\t\t\t<h1>aaaa</h1>
\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t<a href=\"blog-details.html\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset(recl.getImagePath()) }}\" alt=\"Personal Portfolio Images\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<div class=\"category-info\">
\t\t\t\t\t\t\t\t<div class=\"category-list\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">{{ recl.subject }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t<i class=\"feather-clock\"></i>
\t\t\t\t\t\t\t\t\t\t            {{ recl.createdAt|date('Y-m-d\\TH:i:sP') }} </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">{{ recl.description }}<i class=\"feather-arrow-up-right\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- End BLog Area  -->

\t<!-- Start Footer Area -->
\t<div class=\"rn-footer-one rn-section-gap bg-color--1 mt--100 mt_md--80 mt_sm--80\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row gx-5\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6 col-12\">
\t\t\t\t\t<div class=\"widget-content-wrapper\">
\t\t\t\t\t\t<div class=\"footer-left\">
\t\t\t\t\t\t\t<div class=\"logo-thumbnail logo-custom-css\">
\t\t\t\t\t\t\t\t<a class=\"logo-light\" href=\"index.html\"><img src=\"assets/images/logo/logo-white.png\" alt=\"nft-logo\"></a>
\t\t\t\t\t\t\t\t<a class=\"logo-dark\" href=\"index.html\"><img src=\"assets/images/logo/logo-dark.png\" alt=\"nft-logo\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"rn-footer-describe\">
\t\t\t\t\t\t\t\tCreated with the collaboration of over 60 of
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    the world's best Nuron Artists.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-bottom mt--40 pt--40\">
\t\t\t\t\t\t\t<h6 class=\"title\">Get The Latest Nuron Updates
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-color--2\" placeholder=\"Your username\" aria-label=\"Recipient's username\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary-alta btn-outline-secondary\" type=\"button\">Subscribe</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"newsletter-dsc\">
\t\t\t\t\t\t\t\t<p>Email is safe. We don't spam.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
\t\t\t\t\t<div class=\"footer-widget widget-information\">
\t\t\t\t\t\t<h6 class=\"widget-title\">Information</h6>
\t\t\t\t\t\t<ul class=\"footer-list-one\">
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Market
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Explore</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Ready
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Token</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Main
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Option</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Product
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Checking</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Grid</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"about.html\">About Us</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"single-list\">
\t\t\t\t\t\t\t\t<a href=\"#\">Fix Bug
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h6 class=\"widget-title\">Recent Sold Out</h6>
\t\t\t\t\t\t<ul class=\"footer-recent-post\">
\t\t\t\t\t\t\t<li class=\"recent-post\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/portfolio/portfolio-01.jpg\" alt=\"Product Images\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">#21
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                The Wonder</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p>Highest bid 1/20</p>
\t\t\t\t\t\t\t\t\t<span class=\"price\">0.244wETH</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"recent-post\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/portfolio/portfolio-02.jpg\" alt=\"Product Images\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">Diamond
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                Dog</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p>Highest bid 1/20</p>
\t\t\t\t\t\t\t\t\t<span class=\"price\">0.022wETH</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"recent-post\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/portfolio/portfolio-03.jpg\" alt=\"Product Images\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\">Morgan11</a>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p>Highest bid 1/20</p>
\t\t\t\t\t\t\t\t\t<span class=\"price\">0.892wETH</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Footer Area -->
\t<!-- Start Footer Area -->
\t<div class=\"copy-right-one ptb--20 bg-color--1\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t<div class=\"copyright-left\">
\t\t\t\t\t\t<span>©2022 Nuron, Inc. All rights reserved.</span>
\t\t\t\t\t\t<ul class=\"privacy\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"terms-condition.html\">Terms</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"privacy-policy.html\">Privacy
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        Policy</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t<div class=\"copyright-right\">
\t\t\t\t\t\t<ul class=\"social-copyright\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i data-feather=\"mail\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Footer Area -->
\t<div class=\"mouse-cursor cursor-outer\"></div>
\t<div class=\"mouse-cursor cursor-inner\"></div>
\t<!-- Start Top To Bottom Area  -->
\t<div class=\"rn-progress-parent\">
\t\t<svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
\t\t\t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"/>
\t\t</svg>
\t</div>
{% endblock %}
", "reclamationsh/index.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\reclamationsh\\index.html.twig");
    }
}
