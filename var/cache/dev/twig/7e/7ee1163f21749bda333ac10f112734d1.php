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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_d4e170313e85e450881e527660e4588d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/menu.html.twig"));

        // line 2
        echo "<nav id=\"main-menu\">
    ";
        // line 3
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 4
        echo "
    <ul class=\"menu\">
        ";
        // line 6
        $this->displayBlock('main_menu', $context, $blocks);
        // line 33
        echo "    </ul>

    ";
        // line 35
        $this->displayBlock('main_menu_after', $context, $blocks);
        // line 36
        echo "</nav>

";
        // line 43
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu"));

        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 7, $this->source); })()), "mainMenu", [], "any", false, false, false, 7), "items", [], "any", false, false, false, 7));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 8
            echo "                ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 31
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_item"));

        // line 9
        echo "                    ";
        $context["is_submenu_item_with_no_items"] = ((twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9) == twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto::TYPE_SUBMENU")) &&  !twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 9, $this->source); })()), "hasSubItems", [], "any", false, false, false, 9));
        // line 10
        echo "                    ";
        if ((isset($context["is_submenu_item_with_no_items"]) || array_key_exists("is_submenu_item_with_no_items", $context) ? $context["is_submenu_item_with_no_items"] : (function () { throw new RuntimeError('Variable "is_submenu_item_with_no_items" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                        ";
            // line 13
            echo "                    ";
        } else {
            // line 14
            echo "                        <li class=\"";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 14, $this->source); })()), "isMenuSection", [], "any", false, false, false, 14)) ? ("menu-header") : ("menu-item"));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 14, $this->source); })()), "hasSubItems", [], "any", false, false, false, 14)) ? ("has-submenu") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 14, $this->source); })()), "isSelected", [], "any", false, false, false, 14)) ? ("active") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 14, $this->source); })()), "isExpanded", [], "any", false, false, false, 14)) ? ("expanded") : (""));
            echo "\">
                            ";
            // line 15
            echo twig_call_macro($macros["_self"], "macro_render_menu_item", [(isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 15, $this->source); })())], 15, $context, $this->getSourceContext());
            echo "

                            ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 17, $this->source); })()), "hasSubItems", [], "any", false, false, false, 17)) {
                // line 18
                echo "                                <ul class=\"submenu\">
                                    ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 19, $this->source); })()), "subItems", [], "any", false, false, false, 19));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                    // line 20
                    echo "                                        ";
                    $this->displayBlock('menu_subitem', $context, $blocks);
                    // line 25
                    echo "                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                                </ul>
                            ";
            }
            // line 28
            echo "                        </li>
                    ";
        }
        // line 30
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 21
        echo "                                            <li class=\"";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuSubItem"]) || array_key_exists("menuSubItem", $context) ? $context["menuSubItem"] : (function () { throw new RuntimeError('Variable "menuSubItem" does not exist.', 21, $this->source); })()), "isMenuSection", [], "any", false, false, false, 21)) ? ("menu-header") : ("menu-item"));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["menuSubItem"]) || array_key_exists("menuSubItem", $context) ? $context["menuSubItem"] : (function () { throw new RuntimeError('Variable "menuSubItem" does not exist.', 21, $this->source); })()), "isSelected", [], "any", false, false, false, 21)) ? ("active") : (""));
        echo "\">
                                                ";
        // line 22
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [(isset($context["menuSubItem"]) || array_key_exists("menuSubItem", $context) ? $context["menuSubItem"] : (function () { throw new RuntimeError('Variable "menuSubItem" does not exist.', 22, $this->source); })())], 22, $context, $this->getSourceContext());
        echo "
                                            </li>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function macro_render_html_attributes($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_html_attributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_html_attributes"));

            // line 39
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                // line 40
                echo "        ";
                echo twig_escape_filter($this->env, $context["attribute_name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attribute_value"], "html_attr");
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute_name'], $context['attribute_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 45
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "isMenuSection", [], "any", false, false, false, 45)) {
                // line 46
                echo "        <span class=\"menu-header-contents\" ";
                echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })())], 46, $context, $this->getSourceContext());
                echo ">
            ";
                // line 47
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "icon", [], "any", false, false, false, 47))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "icon", [], "any", false, false, false, 47), "html", null, true);
                    echo "\"></i>";
                }
                // line 48
                echo "            <span class=\"menu-item-label position-relative ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "cssClass", [], "any", false, false, false, 48), "html", null, true);
                echo "\">
                ";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "label", [], "any", false, false, false, 49));
                echo "
            </span>
            ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "badge", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                <span class=\"menu-item-badge rounded-pill badge ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "badge", [], "any", false, false, false, 52), "cssClass", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" ";
                    echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "badge", [], "any", false, false, false, 52)], 52, $context, $this->getSourceContext());
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "badge", [], "any", false, false, false, 52), "htmlStyle", [], "any", false, false, false, 52), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "badge", [], "any", false, false, false, 52), "content", [], "any", false, false, false, 52), "html", null, true);
                    echo "</span>
            ";
                }
                // line 54
                echo "        </span>
    ";
            } else {
                // line 56
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "linkUrl", [], "any", false, false, false, 56), "html", null, true);
                echo "\" class=\"menu-item-contents ";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "hasSubItems", [], "any", false, false, false, 56)) ? ("submenu-toggle") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "cssClass", [], "any", false, false, false, 56), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "linkTarget", [], "any", false, false, false, 56), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "linkRel", [], "any", false, false, false, 56), "html", null, true);
                echo "\" referrerpolicy=\"origin-when-cross-origin\" ";
                echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })())], 56, $context, $this->getSourceContext());
                echo ">
            ";
                // line 57
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "icon", [], "any", false, false, false, 57))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "icon", [], "any", false, false, false, 57), "html", null, true);
                    echo "\"></i>";
                }
                // line 58
                echo "            <span class=\"menu-item-label position-relative\">
                ";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "label", [], "any", false, false, false, 59));
                echo "
            </span>
            ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })()), "hasSubItems", [], "any", false, false, false, 61)) {
                    echo "<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>";
                }
                // line 62
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "badge", [], "any", false, false, false, 62)) {
                    // line 63
                    echo "                <span class=\"menu-item-badge rounded-pill badge ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "badge", [], "any", false, false, false, 63), "cssClass", [], "any", false, false, false, 63), "html", null, true);
                    echo "\" ";
                    echo twig_call_macro($macros["_self"], "macro_render_html_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "badge", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "badge", [], "any", false, false, false, 63), "htmlStyle", [], "any", false, false, false, 63), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "badge", [], "any", false, false, false, 63), "content", [], "any", false, false, false, 63), "html", null, true);
                    echo "</span>
            ";
                }
                // line 65
                echo "        </a>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/menu.html.twig";
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
        return array (  453 => 65,  441 => 63,  438 => 62,  434 => 61,  429 => 59,  426 => 58,  420 => 57,  405 => 56,  401 => 54,  389 => 52,  387 => 51,  382 => 49,  377 => 48,  371 => 47,  366 => 46,  363 => 45,  344 => 44,  320 => 40,  315 => 39,  296 => 38,  278 => 35,  265 => 22,  258 => 21,  248 => 20,  238 => 30,  234 => 28,  230 => 26,  216 => 25,  213 => 20,  196 => 19,  193 => 18,  191 => 17,  186 => 15,  175 => 14,  172 => 13,  170 => 11,  167 => 10,  164 => 9,  154 => 8,  144 => 32,  130 => 31,  127 => 8,  109 => 7,  99 => 6,  81 => 3,  70 => 43,  66 => 36,  64 => 35,  60 => 33,  58 => 6,  54 => 4,  52 => 3,  49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
<nav id=\"main-menu\">
    {% block main_menu_before %}{% endblock %}

    <ul class=\"menu\">
        {% block main_menu %}
            {% for menuItem in ea.mainMenu.items %}
                {% block menu_item %}
                    {% set is_submenu_item_with_no_items = menuItem.type == constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Dto\\\\MenuItemDto::TYPE_SUBMENU') and not menuItem.hasSubItems %}
                    {% if is_submenu_item_with_no_items %}
                        {# this can happen when submenu items define permissions and the current user can't see any
                           of the subitems; instead of only displaying the label of the empty submenu, don't display anything #}
                    {% else %}
                        <li class=\"{{ menuItem.isMenuSection ? 'menu-header' : 'menu-item' }} {{ menuItem.hasSubItems ? 'has-submenu' }} {{ menuItem.isSelected ? 'active' }} {{ menuItem.isExpanded ? 'expanded' }}\">
                            {{ _self.render_menu_item(menuItem) }}

                            {% if menuItem.hasSubItems %}
                                <ul class=\"submenu\">
                                    {% for menuSubItem in menuItem.subItems %}
                                        {% block menu_subitem %}
                                            <li class=\"{{ menuSubItem.isMenuSection ? 'menu-header' : 'menu-item' }} {{ menuSubItem.isSelected ? 'active' }}\">
                                                {{ _self.render_menu_item(menuSubItem) }}
                                            </li>
                                        {% endblock menu_subitem %}
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </li>
                    {% endif %}
                {% endblock menu_item %}
            {% endfor %}
        {% endblock main_menu %}
    </ul>

    {% block main_menu_after %}{% endblock %}
</nav>

{% macro render_html_attributes(item) %}
    {% for attribute_name, attribute_value in item.htmlAttributes %}
        {{ attribute_name }}=\"{{ attribute_value|e('html_attr') }}\"
    {% endfor %}
{% endmacro %}

{% macro render_menu_item(item) %}
    {% if item.isMenuSection %}
        <span class=\"menu-header-contents\" {{ _self.render_html_attributes(item) }}>
            {% if item.icon is not empty %}<i class=\"menu-icon fa-fw {{ item.icon }}\"></i>{% endif %}
            <span class=\"menu-item-label position-relative {{ item.cssClass }}\">
                {{ item.label|trans|raw }}
            </span>
            {% if item.badge %}
                <span class=\"menu-item-badge rounded-pill badge {{ item.badge.cssClass }}\" {{ _self.render_html_attributes(item.badge) }} style=\"{{ item.badge.htmlStyle }}\">{{ item.badge.content }}</span>
            {% endif %}
        </span>
    {% else %}
        <a href=\"{{ item.linkUrl }}\" class=\"menu-item-contents {{ item.hasSubItems ? 'submenu-toggle' }} {{ item.cssClass }}\" target=\"{{ item.linkTarget }}\" rel=\"{{ item.linkRel }}\" referrerpolicy=\"origin-when-cross-origin\" {{ _self.render_html_attributes(item) }}>
            {% if item.icon is not empty %}<i class=\"menu-icon fa-fw {{ item.icon }}\"></i>{% endif %}
            <span class=\"menu-item-label position-relative\">
                {{ item.label|trans|raw }}
            </span>
            {% if item.hasSubItems %}<i class=\"fa fa-fw fa-angle-right submenu-toggle-icon\"></i>{% endif %}
            {% if item.badge %}
                <span class=\"menu-item-badge rounded-pill badge {{ item.badge.cssClass }}\" {{ _self.render_html_attributes(item.badge) }} style=\"{{ item.badge.htmlStyle }}\">{{ item.badge.content }}</span>
            {% endif %}
        </a>
    {% endif %}
{% endmacro %}
", "@EasyAdmin/menu.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\menu.html.twig");
    }
}
