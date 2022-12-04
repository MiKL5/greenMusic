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

/* _footer.html.twig */
class __TwigTemplate_0efa2e8bf06398374505b7954b48d7fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        echo "<nav class=\"text-white dark:bg-gray-900\">

\t<div class=\"flex\">
\t\t<div>
\t\t\t<h2 class=\"text-2xl text-white ml-20\">Green Music</h2>
\t\t</div>

\t\t<div>
\t\t\t<div>
\t\t\t\t<div>
\t\t\t\t\t<h3>CATÉGORIE</h3>
\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 13) == null)) {
                // line 14
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 21
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 21) != null)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 23
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 23)) == 0)) {
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                    }
                    echo "\" class=\"block px-4 py-2 hover:scale-110 hover:bg-indigo-800 hover:text-white\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t</div>


\t\t\t</div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  99 => 31,  92 => 26,  80 => 23,  77 => 22,  75 => 21,  68 => 17,  63 => 14,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"text-white dark:bg-gray-900\">

\t<div class=\"flex\">
\t\t<div>
\t\t\t<h2 class=\"text-2xl text-white ml-20\">Green Music</h2>
\t\t</div>

\t\t<div>
\t\t\t<div>
\t\t\t\t<div>
\t\t\t\t\t<h3>CATÉGORIE</h3>
\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t{% if category.parent == null %}
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t{{ category.name }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t{% if category.parent != null %}
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{% if (category.products)|length == 0 %}{{path ('app_category', {'id' : category.id })}}{% else %}{{path ('app_product', {'id' : category.id })}}{% endif %}\" class=\"block px-4 py-2 hover:scale-110 hover:bg-indigo-800 hover:text-white\">{{ category.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>


\t\t\t</div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
\t</div>
</nav>
", "_footer.html.twig", "C:\\Users\\miklg\\source\\repos\\greenMusic\\templates\\_footer.html.twig");
    }
}
