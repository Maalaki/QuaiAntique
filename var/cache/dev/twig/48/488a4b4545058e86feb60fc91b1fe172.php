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

/* home/hours/index.html.twig */
class __TwigTemplate_0202dbbc2fbc9d89d2091d4372f37c8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hours/index.html.twig"));

        // line 1
        echo "<!-- Footer with opening hours -->

<div class=\"container-fluid bg-dark text-light\">
    <footer>
        <div class=\"opening-hours mx-auto\">
            <h3 class=\"ohTitle text-center\">Nos horaires d'ouverture</h3>
            <table class=\"ohTableStructure\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 9
            echo "                    <tr class=\"ohTable\">
                        <td class=\"w-25\"><span>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "day", [], "any", false, false, false, 10), "html", null, true);
            echo "</span></td>
                        <td class=\"w-25\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "time", [], "any", false, false, false, 11), "html", null, true);
            echo "</td>
                        <td class=\"w-25\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "afternoon", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </table>
            <br>
        </div>
    </footer>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/hours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  67 => 12,  63 => 11,  59 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer with opening hours -->

<div class=\"container-fluid bg-dark text-light\">
    <footer>
        <div class=\"opening-hours mx-auto\">
            <h3 class=\"ohTitle text-center\">Nos horaires d'ouverture</h3>
            <table class=\"ohTableStructure\">
                {% for hour in hours %}
                    <tr class=\"ohTable\">
                        <td class=\"w-25\"><span>{{ hour.day }}</span></td>
                        <td class=\"w-25\">{{ hour.time }}</td>
                        <td class=\"w-25\">{{ hour.afternoon }}</td>
                    </tr>
                {% endfor %}
            </table>
            <br>
        </div>
    </footer>
</div>
", "home/hours/index.html.twig", "C:\\xampp\\apps\\resto\\templates\\home\\hours\\index.html.twig");
    }
}
