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

        echo " show reclamation!";
        
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
        echo "        <div class=\"rn-about-banner-area rn-section-gapTop\">
            <div class=\"container mb--30\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"title about-title-m\" data-sal=\"slide-up\"
                            data-sal-duration=\"800\" data-sal-delay=\"150\">Direct
                            Teams. <br> Here's you last Reclamation</h2>
                    </div>
                </div>
            </div>
            <div class=\"container-fluid about-fluidimg \">
                <div class=\"row\">
                    <div class=\"img-wrapper\">
                        <div class=\"bg_image--22 bg_image\">

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-6\">
                        <div class=\"h--100\">
                            <div
                                class=\"rn-about-card mt_dec--50 widge-wrapper rbt-sticky-top-adjust\">
                                <div class=\"inner\">
                                    <h2 class=\"title\" data-sal=\"slide-up\"
                                        data-sal-duration=\"800\"
                                        data-sal-delay=\"150\">
                                        Why We Do This
                                    </h2>
                                    <p class=\"about-disc\" data-sal=\"slide-up\"
                                        data-sal-duration=\"800\"
                                        data-sal-delay=\"150\">
                                        NFTs are virtual tokens that represent
                                        ownership of something inherently
                                        distinct and scarce, whether it be a
                                        physical or digital item, such as
                                        artwork, a soundtrack, a collectible, an
                                        in-game item or real estate. Unlike
                                        regular cryptocurrencies like
                                        bitcoin or fiat money like the U.S.
                                    </p>
                                    <a href=\"blog.html\"
                                        class=\"btn btn-primary-alta btn-large sal-animate mt--20\"
                                        data-sal=\"slide-up\"
                                        data-sal-duration=\"800\"
                                        data-sal-delay=\"150\">See Our Blog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"rn-about-card transparent-bg\">
                            <div class=\"inner\">
                                <h3 class=\"title\" data-sal=\"slide-up\"
                                    data-sal-duration=\"800\"
                                    data-sal-delay=\"150\">
                                    Helping You <br>Grow In Every Stage.
                                </h3>
                                <p class=\"about-disc mb--0\" data-sal=\"slide-up\"
                                    data-sal-duration=\"800\"
                                    data-sal-delay=\"150\">
                                    NFTs are virtual tokens that represent
                                    ownership of something inherently distinct
                                    and scarce, whether it be a physical or
                                    digital item, such as artwork, a soundtrack,
                                    a collectible, an in-game item or real
                                    estate. Unlike regular cryptocurrencies like
                                    bitcoin or fiat money like the U.S.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About banner area End -->

        <div class=\"rn-about-Quote-area rn-section-gapTop\">
            <div class=\"container\">
                <div class=\"row g-5 d-flex align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"rn-about-title-wrapper\">
                            <h3 class=\"title\" data-sal=\"slide-up\"
                                data-sal-duration=\"800\"
                                data-sal-delay=\"150\">Create, Sell well & Collect
                                your Wonderful NFTs at Nuron Very Fast</h3>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"rn-about-wrapper\" data-sal=\"slide-up\"
                            data-sal-duration=\"800\" data-sal-delay=\"150\">
                            <p>The NFTs is a one-trick pony that climbed the
                                ladders of success in recent years. The growth
                                of NFTs is tremendous, and according to
                                Pymnts.com, the total sales volume of NFTs has
                                nearly crossed \$2.5 billion in the last six
                                months
                                of . Surprisingly, the total sales volume of
                                NFTs was \$13.7 million in 2020. On comparing
                                both the values,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- rn stastic area -->
        <div class=\"rn-statistick-area rn-section-gapTop\">
            <div class=\"container\">
                <div class=\"row mb--30\">
                    <div class=\"col-12 text-center\">
                        <h3>Nuron Statistics</h3>
                    </div>
                </div>
                <div class=\"row g-5\">
                    <div class=\"offset-lg-2 col-lg-4 col-md-6\">
                        <div class=\"single-counter-up text-center\">
                            <h3 class=\"counter\"><span class=\"odometer\"
                                    data-count=\"309\">00</span>
                            </h3>
                            <div class=\"botton-title\">Nuron All NFT's</div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-counter-up text-center\">
                            <h3 class=\"counter\"><span class=\"odometer\"
                                    data-count=\"508\">00</span>
                            </h3>
                            <div class=\"botton-title\">All Creators</div>
                        </div>
                    </div>
                    <div class=\"offset-lg-2 col-lg-4 col-md-6\">
                        <div class=\"single-counter-up text-center\">
                            <h3 class=\"counter\"><span class=\"odometer\"
                                    data-count=\"1032\">00</span>
                            </h3>
                            <div class=\"botton-title\">Nuron Earning</div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-counter-up text-center\">
                            <h3 class=\"counter\"><span class=\"odometer\"
                                    data-count=\"650\">00</span>
                            </h3>
                            <div class=\"botton-title\">Level One Seller</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rn stastic area -->

        <!-- call to action area -->
        <div class=\"rn-callto-action rn-section-gapTop\">
            <div class=\"container-fluid about-fluidimg-cta\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bg_image--6 bg_image bg-image-border\"
                            data-black-overlay=\"7\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"call-to-action-wrapper\">
                                        <h3 data-sal=\"slide-up\"
                                            data-sal-duration=\"800\"
                                            data-sal-delay=\"150\">Discover rare
                                            digital art <br> and collect
                                            NFTs</h3>
                                        <p data-sal=\"slide-up\"
                                            data-sal-duration=\"800\"
                                            data-sal-delay=\"150\">The NFTs is a
                                            one-trick pony that climbed the
                                            recent years. The growth of NFTs is
                                            tremendous, and according to
                                            Pymnts.com, the total sales volume
                                        </p>
                                        <div class=\"callto-action-btn-wrapper\"
                                            data-sal=\"slide-up\"
                                            data-sal-duration=\"800\"
                                            data-sal-delay=\"150\">
                                            <a href=\"create.html\"
                                                class=\"btn btn-primary btn-large\">Create</a>
                                            <a href=\"contact.html\"
                                                class=\"btn btn-primary-alta btn-large\">Contact
                                                Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- call to action area End -->

        <!-- Start BLog Area  -->
         <div class=\"rn-blog-area rn-section-gapTop\">
                    <div class=\"container\">
                        <div class=\"row mb--50 align-items-center\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-12\">
                                <h3 class=\"title mb--0\" data-sal-delay=\"150\"
                                    data-sal=\"slide-up\" data-sal-duration=\"800\">Our
                                    Recent Blog</h3>
                            </div>
                        </div>
                        <div class=\"row g-5\">
                            <!-- start single blog -->
                            ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recl"]) {
            // line 216
            echo "                            
                            
                                    <h1>aaaa</h1>
                                    <div class=\"inner\">
                                        <div class=\"thumbnail\">
                                            <a href=\"blog-details.html\">
                                                <img
                                                     src=\"";
            // line 223
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/portfolio/1.jpeg"), "html", null, true);
            echo "\"
                                                    alt=\"Personal Portfolio Images\">
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <div class=\"category-info\">
                                                <div class=\"category-list\">
                                                    <a
                                                        href=\"blog-details.html\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "subject", [], "any", false, false, false, 231), "html", null, true);
            echo "</a>
                                                </div>
                                                <div class=\"meta\">
                                                    <span><i class=\"feather-clock\"></i>
                                                        2 hour read</span>
                                                </div>
                                            </div>
                                            <h4 class=\"title\"><a
                                                    href=\"blog-details.html\">";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recl"], "description", [], "any", false, false, false, 239), "html", null, true);
            echo "<i
                                                        class=\"feather-arrow-up-right\"></i></a></h4>
                                        </div>
                                    </div>
                               
                           
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "                            <!-- end single blog -->
                        </div>
                    </div>
                </div>
        
        <!-- End BLog Area  -->

        <!-- Start Footer Area -->
        <div
            class=\"rn-footer-one rn-section-gap bg-color--1 mt--100 mt_md--80 mt_sm--80\">
            <div class=\"container\">
                <div class=\"row gx-5\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-12\">
                        <div class=\"widget-content-wrapper\">
                            <div class=\"footer-left\">
                                <div class=\"logo-thumbnail logo-custom-css\">
                                    <a class=\"logo-light\" href=\"index.html\"><img
                                            src=\"assets/images/logo/logo-white.png\"
                                            alt=\"nft-logo\"></a>
                                    <a class=\"logo-dark\" href=\"index.html\"><img
                                            src=\"assets/images/logo/logo-dark.png\"
                                            alt=\"nft-logo\"></a>
                                </div>
                                <p class=\"rn-footer-describe\">
                                    Created with the collaboration of over 60 of
                                    the world's best Nuron Artists.
                                </p>
                            </div>
                            <div class=\"widget-bottom mt--40 pt--40\">
                                <h6 class=\"title\">Get The Latest Nuron Updates
                                </h6>
                                <div class=\"input-group\">
                                    <input type=\"text\"
                                        class=\"form-control bg-color--2\"
                                        placeholder=\"Your username\"
                                        aria-label=\"Recipient's username\">
                                    <div class=\"input-group-append\">
                                        <button
                                            class=\"btn btn-primary-alta btn-outline-secondary\"
                                            type=\"button\">Subscribe</button>
                                    </div>
                                </div>
                                <div class=\"newsletter-dsc\">
                                    <p>Email is safe. We don't spam.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
                        <div class=\"footer-widget widget-information\">
                            <h6 class=\"widget-title\">Information</h6>
                            <ul class=\"footer-list-one\">
                                <li class=\"single-list\"><a href=\"#\">Market
                                        Explore</a></li>
                                <li class=\"single-list\"><a href=\"#\">Ready
                                        Token</a></li>
                                <li class=\"single-list\"><a href=\"#\">Main
                                        Option</a></li>
                                <li class=\"single-list\"><a href=\"#\">Product
                                        Checking</a></li>
                                <li class=\"single-list\"><a href=\"blog.html\">Blog
                                        Grid</a></li>
                                <li class=\"single-list\"><a
                                        href=\"about.html\">About Us</a></li>
                                <li class=\"single-list\"><a href=\"#\">Fix Bug
                                    </a></li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
                        <div class=\"footer-widget\">
                            <h6 class=\"widget-title\">Recent Sold Out</h6>
                            <ul class=\"footer-recent-post\">
                                <li class=\"recent-post\">
                                    <div class=\"thumbnail\">
                                        <a href=\"product-details.html\">
                                            <img
                                                src=\"assets/images/portfolio/portfolio-01.jpg\"
                                                alt=\"Product Images\">
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"title\"><a
                                                href=\"product-details.html\">#21
                                                The Wonder</a></h6>
                                        <p>Highest bid 1/20</p>
                                        <span class=\"price\">0.244wETH</span>
                                    </div>
                                </li>
                                <li class=\"recent-post\">
                                    <div class=\"thumbnail\">
                                        <a href=\"product-details.html\">
                                            <img
                                                src=\"assets/images/portfolio/portfolio-02.jpg\"
                                                alt=\"Product Images\">
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"title\"><a
                                                href=\"product-details.html\">Diamond
                                                Dog</a></h6>
                                        <p>Highest bid 1/20</p>
                                        <span class=\"price\">0.022wETH</span>
                                    </div>
                                </li>
                                <li class=\"recent-post\">
                                    <div class=\"thumbnail\">
                                        <a href=\"product-details.html\">
                                            <img
                                                src=\"assets/images/portfolio/portfolio-03.jpg\"
                                                alt=\"Product Images\">
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"title\"><a
                                                href=\"product-details.html\">Morgan11</a></h6>
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
                                <li><a
                                        href=\"terms-condition.html\">Terms</a></li>
                                <li><a href=\"privacy-policy.html\">Privacy
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"copyright-right\">
                            <ul class=\"social-copyright\">
                                <li><a href=\"#\"><i
                                            data-feather=\"facebook\"></i></a></li>
                                <li><a href=\"#\"><i
                                            data-feather=\"twitter\"></i></a></li>
                                <li><a href=\"#\"><i
                                            data-feather=\"instagram\"></i></a></li>
                                <li><a href=\"#\"><i
                                            data-feather=\"linkedin\"></i></a></li>
                                <li><a href=\"#\"><i
                                            data-feather=\"mail\"></i></a></li>
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
            <svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\"
                viewBox=\"-1 -1 102 102\">
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
        return array (  347 => 246,  334 => 239,  323 => 231,  312 => 223,  303 => 216,  299 => 215,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} show reclamation!{% endblock %}

{% block body %}
        <div class=\"rn-about-banner-area rn-section-gapTop\">
            <div class=\"container mb--30\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"title about-title-m\" data-sal=\"slide-up\"
                            data-sal-duration=\"800\" data-sal-delay=\"150\">Direct
                            Teams. <br> Here's you last Reclamation</h2>
                    </div>
                </div>
            </div>
            <div class=\"container-fluid about-fluidimg \">
                <div class=\"row\">
                    <div class=\"img-wrapper\">
                        <div class=\"bg_image--22 bg_image\">

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-6\">
                        <div class=\"h--100\">
                            <div
                                class=\"rn-about-card mt_dec--50 widge-wrapper rbt-sticky-top-adjust\">
                                <div class=\"inner\">
                                    <h2 class=\"title\" data-sal=\"slide-up\"
                                        data-sal-duration=\"800\"
                                        data-sal-delay=\"150\">
                                        Why We Do This
                                    </h2>
                                    <p class=\"about-disc\" data-sal=\"slide-up\"
                                        data-sal-duration=\"800\"
                                        data-sal-delay=\"150\">
                                        NFTs are virtual tokens that represent
                                        ownership of something inherently
                                        distinct and scarce, whether it be a
                                        physical or digital item, such as
                                        artwork, a soundtrack, a collectible, an
                                        in-game item or real estate. Unlike
                                        regular cryptocurrencies like
                                        bitcoin or fiat money like the U.S.
                                    </p>
                                    <a href=\"blog.html\"
                                        class=\"btn btn-primary-alta btn-large sal-animate mt--20\"
                                        data-sal=\"slide-up\"
                                        data-sal-duration=\"800\"
                                        data-sal-delay=\"150\">See Our Blog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"rn-about-card transparent-bg\">
                            <div class=\"inner\">
                                <h3 class=\"title\" data-sal=\"slide-up\"
                                    data-sal-duration=\"800\"
                                    data-sal-delay=\"150\">
                                    Helping You <br>Grow In Every Stage.
                                </h3>
                                <p class=\"about-disc mb--0\" data-sal=\"slide-up\"
                                    data-sal-duration=\"800\"
                                    data-sal-delay=\"150\">
                                    NFTs are virtual tokens that represent
                                    ownership of something inherently distinct
                                    and scarce, whether it be a physical or
                                    digital item, such as artwork, a soundtrack,
                                    a collectible, an in-game item or real
                                    estate. Unlike regular cryptocurrencies like
                                    bitcoin or fiat money like the U.S.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About banner area End -->

        <div class=\"rn-about-Quote-area rn-section-gapTop\">
            <div class=\"container\">
                <div class=\"row g-5 d-flex align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"rn-about-title-wrapper\">
                            <h3 class=\"title\" data-sal=\"slide-up\"
                                data-sal-duration=\"800\"
                                data-sal-delay=\"150\">Create, Sell well & Collect
                                your Wonderful NFTs at Nuron Very Fast</h3>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"rn-about-wrapper\" data-sal=\"slide-up\"
                            data-sal-duration=\"800\" data-sal-delay=\"150\">
                            <p>The NFTs is a one-trick pony that climbed the
                                ladders of success in recent years. The growth
                                of NFTs is tremendous, and according to
                                Pymnts.com, the total sales volume of NFTs has
                                nearly crossed \$2.5 billion in the last six
                                months
                                of . Surprisingly, the total sales volume of
                                NFTs was \$13.7 million in 2020. On comparing
                                both the values,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- rn stastic area -->
        <div class=\"rn-statistick-area rn-section-gapTop\">
            <div class=\"container\">
                <div class=\"row mb--30\">
                    <div class=\"col-12 text-center\">
                        <h3>Nuron Statistics</h3>
                    </div>
                </div>
                <div class=\"row g-5\">
                    <div class=\"offset-lg-2 col-lg-4 col-md-6\">
                        <div class=\"single-counter-up text-center\">
                            <h3 class=\"counter\"><span class=\"odometer\"
                                    data-count=\"309\">00</span>
                            </h3>
                            <div class=\"botton-title\">Nuron All NFT's</div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-counter-up text-center\">
                            <h3 class=\"counter\"><span class=\"odometer\"
                                    data-count=\"508\">00</span>
                            </h3>
                            <div class=\"botton-title\">All Creators</div>
                        </div>
                    </div>
                    <div class=\"offset-lg-2 col-lg-4 col-md-6\">
                        <div class=\"single-counter-up text-center\">
                            <h3 class=\"counter\"><span class=\"odometer\"
                                    data-count=\"1032\">00</span>
                            </h3>
                            <div class=\"botton-title\">Nuron Earning</div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-counter-up text-center\">
                            <h3 class=\"counter\"><span class=\"odometer\"
                                    data-count=\"650\">00</span>
                            </h3>
                            <div class=\"botton-title\">Level One Seller</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rn stastic area -->

        <!-- call to action area -->
        <div class=\"rn-callto-action rn-section-gapTop\">
            <div class=\"container-fluid about-fluidimg-cta\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bg_image--6 bg_image bg-image-border\"
                            data-black-overlay=\"7\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"call-to-action-wrapper\">
                                        <h3 data-sal=\"slide-up\"
                                            data-sal-duration=\"800\"
                                            data-sal-delay=\"150\">Discover rare
                                            digital art <br> and collect
                                            NFTs</h3>
                                        <p data-sal=\"slide-up\"
                                            data-sal-duration=\"800\"
                                            data-sal-delay=\"150\">The NFTs is a
                                            one-trick pony that climbed the
                                            recent years. The growth of NFTs is
                                            tremendous, and according to
                                            Pymnts.com, the total sales volume
                                        </p>
                                        <div class=\"callto-action-btn-wrapper\"
                                            data-sal=\"slide-up\"
                                            data-sal-duration=\"800\"
                                            data-sal-delay=\"150\">
                                            <a href=\"create.html\"
                                                class=\"btn btn-primary btn-large\">Create</a>
                                            <a href=\"contact.html\"
                                                class=\"btn btn-primary-alta btn-large\">Contact
                                                Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- call to action area End -->

        <!-- Start BLog Area  -->
         <div class=\"rn-blog-area rn-section-gapTop\">
                    <div class=\"container\">
                        <div class=\"row mb--50 align-items-center\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-12\">
                                <h3 class=\"title mb--0\" data-sal-delay=\"150\"
                                    data-sal=\"slide-up\" data-sal-duration=\"800\">Our
                                    Recent Blog</h3>
                            </div>
                        </div>
                        <div class=\"row g-5\">
                            <!-- start single blog -->
                            {% for recl in rec %}
                            
                            
                                    <h1>aaaa</h1>
                                    <div class=\"inner\">
                                        <div class=\"thumbnail\">
                                            <a href=\"blog-details.html\">
                                                <img
                                                     src=\"{{ asset('/assets/images/portfolio/1.jpeg') }}\"
                                                    alt=\"Personal Portfolio Images\">
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <div class=\"category-info\">
                                                <div class=\"category-list\">
                                                    <a
                                                        href=\"blog-details.html\">{{ recl.subject }}</a>
                                                </div>
                                                <div class=\"meta\">
                                                    <span><i class=\"feather-clock\"></i>
                                                        2 hour read</span>
                                                </div>
                                            </div>
                                            <h4 class=\"title\"><a
                                                    href=\"blog-details.html\">{{ recl.description }}<i
                                                        class=\"feather-arrow-up-right\"></i></a></h4>
                                        </div>
                                    </div>
                               
                           
                            {% endfor %}
                            <!-- end single blog -->
                        </div>
                    </div>
                </div>
        
        <!-- End BLog Area  -->

        <!-- Start Footer Area -->
        <div
            class=\"rn-footer-one rn-section-gap bg-color--1 mt--100 mt_md--80 mt_sm--80\">
            <div class=\"container\">
                <div class=\"row gx-5\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-12\">
                        <div class=\"widget-content-wrapper\">
                            <div class=\"footer-left\">
                                <div class=\"logo-thumbnail logo-custom-css\">
                                    <a class=\"logo-light\" href=\"index.html\"><img
                                            src=\"assets/images/logo/logo-white.png\"
                                            alt=\"nft-logo\"></a>
                                    <a class=\"logo-dark\" href=\"index.html\"><img
                                            src=\"assets/images/logo/logo-dark.png\"
                                            alt=\"nft-logo\"></a>
                                </div>
                                <p class=\"rn-footer-describe\">
                                    Created with the collaboration of over 60 of
                                    the world's best Nuron Artists.
                                </p>
                            </div>
                            <div class=\"widget-bottom mt--40 pt--40\">
                                <h6 class=\"title\">Get The Latest Nuron Updates
                                </h6>
                                <div class=\"input-group\">
                                    <input type=\"text\"
                                        class=\"form-control bg-color--2\"
                                        placeholder=\"Your username\"
                                        aria-label=\"Recipient's username\">
                                    <div class=\"input-group-append\">
                                        <button
                                            class=\"btn btn-primary-alta btn-outline-secondary\"
                                            type=\"button\">Subscribe</button>
                                    </div>
                                </div>
                                <div class=\"newsletter-dsc\">
                                    <p>Email is safe. We don't spam.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
                        <div class=\"footer-widget widget-information\">
                            <h6 class=\"widget-title\">Information</h6>
                            <ul class=\"footer-list-one\">
                                <li class=\"single-list\"><a href=\"#\">Market
                                        Explore</a></li>
                                <li class=\"single-list\"><a href=\"#\">Ready
                                        Token</a></li>
                                <li class=\"single-list\"><a href=\"#\">Main
                                        Option</a></li>
                                <li class=\"single-list\"><a href=\"#\">Product
                                        Checking</a></li>
                                <li class=\"single-list\"><a href=\"blog.html\">Blog
                                        Grid</a></li>
                                <li class=\"single-list\"><a
                                        href=\"about.html\">About Us</a></li>
                                <li class=\"single-list\"><a href=\"#\">Fix Bug
                                    </a></li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class=\"col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40\">
                        <div class=\"footer-widget\">
                            <h6 class=\"widget-title\">Recent Sold Out</h6>
                            <ul class=\"footer-recent-post\">
                                <li class=\"recent-post\">
                                    <div class=\"thumbnail\">
                                        <a href=\"product-details.html\">
                                            <img
                                                src=\"assets/images/portfolio/portfolio-01.jpg\"
                                                alt=\"Product Images\">
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"title\"><a
                                                href=\"product-details.html\">#21
                                                The Wonder</a></h6>
                                        <p>Highest bid 1/20</p>
                                        <span class=\"price\">0.244wETH</span>
                                    </div>
                                </li>
                                <li class=\"recent-post\">
                                    <div class=\"thumbnail\">
                                        <a href=\"product-details.html\">
                                            <img
                                                src=\"assets/images/portfolio/portfolio-02.jpg\"
                                                alt=\"Product Images\">
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"title\"><a
                                                href=\"product-details.html\">Diamond
                                                Dog</a></h6>
                                        <p>Highest bid 1/20</p>
                                        <span class=\"price\">0.022wETH</span>
                                    </div>
                                </li>
                                <li class=\"recent-post\">
                                    <div class=\"thumbnail\">
                                        <a href=\"product-details.html\">
                                            <img
                                                src=\"assets/images/portfolio/portfolio-03.jpg\"
                                                alt=\"Product Images\">
                                        </a>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"title\"><a
                                                href=\"product-details.html\">Morgan11</a></h6>
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
                                <li><a
                                        href=\"terms-condition.html\">Terms</a></li>
                                <li><a href=\"privacy-policy.html\">Privacy
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"copyright-right\">
                            <ul class=\"social-copyright\">
                                <li><a href=\"#\"><i
                                            data-feather=\"facebook\"></i></a></li>
                                <li><a href=\"#\"><i
                                            data-feather=\"twitter\"></i></a></li>
                                <li><a href=\"#\"><i
                                            data-feather=\"instagram\"></i></a></li>
                                <li><a href=\"#\"><i
                                            data-feather=\"linkedin\"></i></a></li>
                                <li><a href=\"#\"><i
                                            data-feather=\"mail\"></i></a></li>
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
            <svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\"
                viewBox=\"-1 -1 102 102\">
                <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
            </svg>
        </div>
{% endblock %}
", "reclamationsh/index.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\reclamationsh\\index.html.twig");
    }
}
