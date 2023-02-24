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
        echo "
 <!-- Footer with opening hours -->

    <div class=\"container-fluid bg-dark text-light\">
        <footer>

            <div class=\"opening-hours mx-auto\">
                <h3 class=\"ohTitle text-center\">Nos horaires d'ouverture</h3>
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 10
            echo "                    <table class=\"ohTableStructure\">
                        <tr class=\"ohTable\">
                            <td><span>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "day", [], "any", false, false, false, 12), "html", null, true);
            echo "</span></td>
                            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "time", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
                            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hour"], "afternoon", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
                        </tr>
                    </table>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
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
        return array (  79 => 18,  69 => 14,  65 => 13,  61 => 12,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
 <!-- Footer with opening hours -->

    <div class=\"container-fluid bg-dark text-light\">
        <footer>

            <div class=\"opening-hours mx-auto\">
                <h3 class=\"ohTitle text-center\">Nos horaires d'ouverture</h3>
                {% for hour in hours %}
                    <table class=\"ohTableStructure\">
                        <tr class=\"ohTable\">
                            <td><span>{{ hour.day }}</span></td>
                            <td>{{ hour.time }}</td>
                            <td>{{ hour.afternoon }}</td>
                        </tr>
                    </table>
                {% endfor %}
            </div>
        </footer>
    </div>
", "home/hours/index.html.twig", "C:\\xampp\\apps\\resto\\templates\\home\\hours\\index.html.twig");
    }
}
