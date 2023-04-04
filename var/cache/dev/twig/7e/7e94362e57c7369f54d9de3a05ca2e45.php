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

/* table/print.html.twig */
class __TwigTemplate_c000e66842e5b93cd8b317fb6654a6a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "table/print.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "table/print.html.twig"));

        // line 1
        echo "<h1>Table de ";
        echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</h1>
<table>
  <thead>
    <tr>
      <th>Multiplication</th>
      <th>Resultat</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "      <tr>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 12, $this->source); })()), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["valeursCalculees"]) || array_key_exists("valeursCalculees", $context) ? $context["valeursCalculees"] : (function () { throw new RuntimeError('Variable "valeursCalculees" does not exist.', 13, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 13), "html", null, true);
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "table/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  69 => 13,  63 => 12,  60 => 11,  56 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Table de {{ nombre }}</h1>
<table>
  <thead>
    <tr>
      <th>Multiplication</th>
      <th>Resultat</th>
    </tr>
  </thead>
  <tbody>
    {% for i in 1..10 %}
      <tr>
        <td>{{ nombre }} x {{ i }}</td>
        <td>{{ valeursCalculees[i-1] }}</td>
      </tr>
    {% endfor %}
  </tbody>
</table>", "table/print.html.twig", "/home/kali/testSymfony/templates/table/print.html.twig");
    }
}
