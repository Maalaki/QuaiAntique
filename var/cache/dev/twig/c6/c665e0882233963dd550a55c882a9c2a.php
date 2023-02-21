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

/* home/menu/index.html.twig */
class __TwigTemplate_2286f5d4a78a3fc82d4d7e9930e4d32e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/menu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/menu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/menu/index.html.twig", 1);
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

        echo "Le Quai Antique";
        
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
        echo "    <!-- carte du restaurant -->

    <div class=\"container\">
        <div class=\"menuPageTitle\"><h1>La Carte</h1></div>
        <br/>
        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-4\">
            <!-- Entrées -->

            <div class=\"col\">
                <div class=\"menuPageSub\">
                    <h3>Nos Entrées</h3>
                </div>
                <div class=\"starters food\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
            // line 20
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "category", [], "any", false, false, false, 20) == "Entrée")) {
                // line 21
                echo "                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td class=\"dish\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuitem"], "title", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                                    <td class=\"dishPrice\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuitem"], "price", [], "any", false, false, false, 25), "html", null, true);
                echo "€</td>
                                </tr>
                            </table>
                        ";
            }
            // line 29
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </div>
            </div>

            <!-- Plats -->

            <div class=\"col\">
                <div class=\"menuPageSub\">
                    <h3>Nos Plats</h3></div>
                <div class=\"mainCourse food\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
            // line 40
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "category", [], "any", false, false, false, 40) == "Plat")) {
                // line 41
                echo "                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td class=\"dish\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuitem"], "title", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                                    <td class=\"dishPrice\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuitem"], "price", [], "any", false, false, false, 45), "html", null, true);
                echo "€</td>
                                </tr>
                            </table>
                        ";
            }
            // line 49
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            </div>

            <!-- Desserts -->

            <div class=\"col\">
                <div class=\"menuPageSub\">
                    <h3>Nos Desserts</h3></div>
                <div class=\"desserts food\">
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
            // line 60
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "category", [], "any", false, false, false, 60) == "Dessert")) {
                // line 61
                echo "                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td class=\"dish\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuitem"], "title", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                                    <td class=\"dishPrice\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuitem"], "price", [], "any", false, false, false, 65), "html", null, true);
                echo "€</td>
                                </tr>
                            </table>
                        ";
            }
            // line 69
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </div>
            </div>

            <!-- Boissons -->

            <div class=\"col\">
                <div class=\"menuPageSub\">
                    <h3>Les Boissons</h3></div>
                <div class=\"beverages food\">
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
            // line 80
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["menuitem"], "category", [], "any", false, false, false, 80) == "Boisson")) {
                // line 81
                echo "                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td class=\"dish\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuitem"], "title", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
                                    <td class=\"dishPrice\">";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuitem"], "price", [], "any", false, false, false, 85), "html", null, true);
                echo "€</td>
                                </tr>
                            </table>
                        ";
            }
            // line 89
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                </div>
            </div>
        </div>
    </div>
    <br/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/menu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 90,  246 => 89,  239 => 85,  235 => 84,  230 => 81,  227 => 80,  223 => 79,  212 => 70,  206 => 69,  199 => 65,  195 => 64,  190 => 61,  187 => 60,  183 => 59,  172 => 50,  166 => 49,  159 => 45,  155 => 44,  150 => 41,  147 => 40,  143 => 39,  132 => 30,  126 => 29,  119 => 25,  115 => 24,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Le Quai Antique{% endblock %}

{% block body %}
    <!-- carte du restaurant -->

    <div class=\"container\">
        <div class=\"menuPageTitle\"><h1>La Carte</h1></div>
        <br/>
        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-4\">
            <!-- Entrées -->

            <div class=\"col\">
                <div class=\"menuPageSub\">
                    <h3>Nos Entrées</h3>
                </div>
                <div class=\"starters food\">
                    {% for menuitem in menu %}
                        {% if menuitem.category == 'Entrée' %}
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td class=\"dish\">{{ menuitem.title }}</td>
                                    <td class=\"dishPrice\">{{ menuitem.price }}€</td>
                                </tr>
                            </table>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>

            <!-- Plats -->

            <div class=\"col\">
                <div class=\"menuPageSub\">
                    <h3>Nos Plats</h3></div>
                <div class=\"mainCourse food\">
                    {% for menuitem in menu %}
                        {% if menuitem.category == 'Plat' %}
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td class=\"dish\">{{ menuitem.title }}</td>
                                    <td class=\"dishPrice\">{{ menuitem.price }}€</td>
                                </tr>
                            </table>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>

            <!-- Desserts -->

            <div class=\"col\">
                <div class=\"menuPageSub\">
                    <h3>Nos Desserts</h3></div>
                <div class=\"desserts food\">
                    {% for menuitem in menu %}
                        {% if menuitem.category == 'Dessert' %}
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td class=\"dish\">{{ menuitem.title }}</td>
                                    <td class=\"dishPrice\">{{ menuitem.price }}€</td>
                                </tr>
                            </table>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>

            <!-- Boissons -->

            <div class=\"col\">
                <div class=\"menuPageSub\">
                    <h3>Les Boissons</h3></div>
                <div class=\"beverages food\">
                    {% for menuitem in menu %}
                        {% if menuitem.category == 'Boisson' %}
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td class=\"dish\">{{ menuitem.title }}</td>
                                    <td class=\"dishPrice\">{{ menuitem.price }}€</td>
                                </tr>
                            </table>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
    <br/>
{% endblock %}", "home/menu/index.html.twig", "C:\\xampp\\apps\\resto\\templates\\home\\menu\\index.html.twig");
    }
}
