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

/* home/index.html.twig */
class __TwigTemplate_5eca82ed9b916f52a0bb9de12786e1ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "    <!-- Cards -->

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <div class=\"card h-100\">
                    <img
                            src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/tartiflette.jpg"), "html", null, true);
        echo "\"
                            class=\"card-img-top\"
                            alt=\"La tartiflette\"
                            title=\"Notre Tartiflette\"
                    />

                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Tartiflette</h5>
                        <p class=\"card-text\">
                            Savourez ce classique de la cuisine savoyarde en version
                            gastronomique.
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"card h-100\">
                    <img
                            src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/fondue-savoyarde.jpg"), "html", null, true);
        echo "\"
                            class=\"card-img-top\"
                            alt=\"La fondue savoyarde\"
                            title=\"Notre Fondue Savoyarde\"
                    />

                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Fondue savoyarde</h5>
                        <p class=\"card-text\">
                            Dégustez notre fondue savoyarde à base de Beaufort, Abondance et
                            meule de Savoie.
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"card h-100\">
                    <img
                            src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/croziflette.jpg"), "html", null, true);
        echo "\"
                            class=\"card-img-top\"
                            alt=\" La croziflette\"
                            title=\"Notre Croziflette\"
                    >

                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Croziflette</h5>
                        <p class=\"card-text\">
                            Découvrez cette spécialité savoyarde à base de crozets, de
                            jambon cru et de Reblochon.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>

    <!-- Reservation button -->

    <div class=\"container-fluid\">
        <div class=\"d-grid gap-2 col-4 mx-auto\">
            <a class=\"btn btn-outline-dark reservation\" role=\"button\" href=\"/booking\">
                Réserver
            </a>
        </div>
    </div>
    <br/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 49,  118 => 31,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Le Quai Antique{% endblock %}

{% block body %}
    <!-- Cards -->

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <div class=\"card h-100\">
                    <img
                            src=\"{{ asset('/img/tartiflette.jpg') }}\"
                            class=\"card-img-top\"
                            alt=\"La tartiflette\"
                            title=\"Notre Tartiflette\"
                    />

                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Tartiflette</h5>
                        <p class=\"card-text\">
                            Savourez ce classique de la cuisine savoyarde en version
                            gastronomique.
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"card h-100\">
                    <img
                            src=\"{{ asset('/img/fondue-savoyarde.jpg') }}\"
                            class=\"card-img-top\"
                            alt=\"La fondue savoyarde\"
                            title=\"Notre Fondue Savoyarde\"
                    />

                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Fondue savoyarde</h5>
                        <p class=\"card-text\">
                            Dégustez notre fondue savoyarde à base de Beaufort, Abondance et
                            meule de Savoie.
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"card h-100\">
                    <img
                            src=\"{{ asset('/img/croziflette.jpg') }}\"
                            class=\"card-img-top\"
                            alt=\" La croziflette\"
                            title=\"Notre Croziflette\"
                    >

                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Croziflette</h5>
                        <p class=\"card-text\">
                            Découvrez cette spécialité savoyarde à base de crozets, de
                            jambon cru et de Reblochon.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>

    <!-- Reservation button -->

    <div class=\"container-fluid\">
        <div class=\"d-grid gap-2 col-4 mx-auto\">
            <a class=\"btn btn-outline-dark reservation\" role=\"button\" href=\"/booking\">
                Réserver
            </a>
        </div>
    </div>
    <br/>
{% endblock %}
", "home/index.html.twig", "C:\\xampp\\apps\\resto\\templates\\home\\index.html.twig");
    }
}
