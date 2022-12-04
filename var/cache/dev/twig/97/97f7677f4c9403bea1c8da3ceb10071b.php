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

/* _header.html.twig */
class __TwigTemplate_166443922b78f4b1654e9dc6eb7d27e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        echo "<nav class=\"px-2 bg-white border-gray-200 dark:bg-gray-900\">
\t<div class=\"container flex flex-wrap items-center justify-between mx-auto\">
\t\t<a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"flex items-center\">
\t\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Groupe3231.svg"), "html", null, true);
        echo "\" class=\"h-6 mr-3 sm:h-10\" alt=\"Green Music logo\"/>
\t\t\t<span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white animate-bounce\">Green Music</span>
\t\t</a>
\t\t<button data-collapse-toggle=\"navbar-multi-level\" type=\"button\" class=\"inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\" aria-controls=\"navbar-multi-level\" aria-expanded=\"false\">
\t\t\t<span class=\"sr-only\">Open main menu</span>
\t\t\t<svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path fill-rule=\"evenodd\" d=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\" clip-rule=\"evenodd\"></path>
\t\t\t</svg>
\t\t</button>
\t\t<div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-multi-level\">
\t\t\t<ul class=\"flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-black md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent hover:scale-110 hover:text-orange-600\" aria-current=\"page\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button id=\"dropdownNavbarLink\" data-dropdown-toggle=\"dropdownNavbar\" class=\"flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b border-gray-100 hover:scale-110 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-indigo-800 md:p-0 md:w-auto dark:text-white dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent\">Categories
\t\t\t\t\t\t<svg class=\"w-4 h-4 ml-1\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Dropdown menu -->

\t\t\t\t\t<div id=\"dropdownNavbar\" class=\"z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600\">
\t\t\t\t\t\t<ul class=\"py-1 text-sm text-gray-700 dark:text-gray-400\" aria-labelledby=\"dropdownLargeButton\">
\t\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 29) == null)) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t<li aria-labelledby=\"dropdownNavbarLink\">
\t\t\t\t\t\t\t\t\t\t<button id=\"doubleDropdownButton\" data-dropdown-toggle=\"doubleDropdown\" data-dropdown-placement=\"right-start\" type=\"button\" class=\"flex items-center justify-between w-full px-4 py-2  dark:hover:bg-gray-100 dark:hover:text-white hover:scale-110 hover:bg-indigo-800 dark:hover:bg-indigo-800\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "<svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<div id=\"doubleDropdown\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700\">
\t\t\t\t\t\t\t\t\t\t\t<ul aria-labelledby=\"doubleDropdownButton\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 37) != null)) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 39
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 39)) == 0)) {
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                    }
                    echo "\" class=\"block px-4 py-2 hover:scale-110 hover:bg-indigo-800 hover:text-white\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        // line 72
        echo "\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\" class=\"block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-teal-800 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent hover:scale-110 hover:text-teal-800\" aria-current=\"page\">Product</a>
\t\t\t</li><!-- Dropdown menu --><li>
\t\t\t\t<button id=\"dropdownNavbarLink\" data-dropdown-toggle=\"dropdownNavbar3\" class=\"flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b border-gray-100 hover:scale-110 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 md:w-auto dark:text-white dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent\">User<svg class=\"w-4 h-4 ml-1\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</button><!-- Dropdown menu --><div id=\"dropdownNavbar3\" class=\"z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600\">
\t\t\t\t\t<ul class=\"py-1 text-sm text-gray-700 dark:text-gray-400\" aria-labelledby=\"dropdownLargeButton\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 82
        echo "\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white \">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 85
        echo "\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white\">Profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 88
        echo "\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white\">Purchase history</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 91
        echo "\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white\">Further</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 94
        echo "\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white\">Disconect</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</li>
</div></div></nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 94,  164 => 91,  159 => 88,  154 => 85,  149 => 82,  138 => 74,  134 => 72,  129 => 47,  123 => 46,  117 => 42,  105 => 39,  102 => 38,  100 => 37,  91 => 31,  88 => 30,  85 => 29,  81 => 28,  66 => 16,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"px-2 bg-white border-gray-200 dark:bg-gray-900\">
\t<div class=\"container flex flex-wrap items-center justify-between mx-auto\">
\t\t<a href=\"{{path ('app_home')}}\" class=\"flex items-center\">
\t\t\t<img src=\"{{asset('images/Groupe3231.svg')}}\" class=\"h-6 mr-3 sm:h-10\" alt=\"Green Music logo\"/>
\t\t\t<span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white animate-bounce\">Green Music</span>
\t\t</a>
\t\t<button data-collapse-toggle=\"navbar-multi-level\" type=\"button\" class=\"inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\" aria-controls=\"navbar-multi-level\" aria-expanded=\"false\">
\t\t\t<span class=\"sr-only\">Open main menu</span>
\t\t\t<svg class=\"w-6 h-6\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path fill-rule=\"evenodd\" d=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\" clip-rule=\"evenodd\"></path>
\t\t\t</svg>
\t\t</button>
\t\t<div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-multi-level\">
\t\t\t<ul class=\"flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path ('app_home')}}\" class=\"block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-black md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent hover:scale-110 hover:text-orange-600\" aria-current=\"page\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<button id=\"dropdownNavbarLink\" data-dropdown-toggle=\"dropdownNavbar\" class=\"flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b border-gray-100 hover:scale-110 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-indigo-800 md:p-0 md:w-auto dark:text-white dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent\">Categories
\t\t\t\t\t\t<svg class=\"w-4 h-4 ml-1\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Dropdown menu -->

\t\t\t\t\t<div id=\"dropdownNavbar\" class=\"z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600\">
\t\t\t\t\t\t<ul class=\"py-1 text-sm text-gray-700 dark:text-gray-400\" aria-labelledby=\"dropdownLargeButton\">
\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t{% if category.parent == null %}
\t\t\t\t\t\t\t\t\t<li aria-labelledby=\"dropdownNavbarLink\">
\t\t\t\t\t\t\t\t\t\t<button id=\"doubleDropdownButton\" data-dropdown-toggle=\"doubleDropdown\" data-dropdown-placement=\"right-start\" type=\"button\" class=\"flex items-center justify-between w-full px-4 py-2  dark:hover:bg-gray-100 dark:hover:text-white hover:scale-110 hover:bg-indigo-800 dark:hover:bg-indigo-800\">{{ category.name }}<svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<div id=\"doubleDropdown\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700\">
\t\t\t\t\t\t\t\t\t\t\t<ul aria-labelledby=\"doubleDropdownButton\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if category.parent != null %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{% if (category.products)|length == 0 %}{{path ('app_category', {'id' : category.id })}}{% else %}{{path ('app_product', {'id' : category.id })}}{% endif %}\" class=\"block px-4 py-2 hover:scale-110 hover:bg-indigo-800 hover:text-white\">{{ category.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{# <li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"dropdownNavbarLink\" data-dropdown-toggle=\"dropdownNavbar1\" class=\"flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b border-gray-100 hover:scale-110 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-sky-800 md:p-0 md:w-auto dark:text-white dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent\">Subcategories
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4 ml-1\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Dropdown menu -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"dropdownNavbar1\" class=\"z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"py-1 text-sm text-gray-700 dark:text-gray-400\" aria-labelledby=\"dropdownLargeButton\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if category.parent != null %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path ('app_category', {'id' : category.id })}}\" class=\"block px-4 py-2 hover:scale-110 hover:bg-indigo-800 dark:hover:bg-indigo-800 dark:hover:text-gray-300 hover:text-white\">{{ category.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path ('app_product')}}\" class=\"block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-teal-800 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent hover:scale-110 hover:text-teal-800\" aria-current=\"page\">Product</a>
\t\t\t</li><!-- Dropdown menu --><li>
\t\t\t\t<button id=\"dropdownNavbarLink\" data-dropdown-toggle=\"dropdownNavbar3\" class=\"flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium border-b border-gray-100 hover:scale-110 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 md:w-auto dark:text-white dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent\">User<svg class=\"w-4 h-4 ml-1\" aria-hidden=\"true\" fill=\"currentColor\" viewbox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</button><!-- Dropdown menu --><div id=\"dropdownNavbar3\" class=\"z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600\">
\t\t\t\t\t<ul class=\"py-1 text-sm text-gray-700 dark:text-gray-400\" aria-labelledby=\"dropdownLargeButton\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{# {{path ('app_profil')}} #}\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white \">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{# {{path ('app_profil')}} #}\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white\">Profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{# {{path ('app_profil')}} #}\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white\">Purchase history</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{# {{path ('app_profil')}} #}\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white\">Further</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{# {{path ('app_profil')}} #}\" class=\"block px-4 py-2 hover:scale-110 hover:bg-emerald-700 dark:hover:bg-emerald-700 dark:hover:text-gray-300 hover:text-white\">Disconect</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</li>
</div></div></nav>
", "_header.html.twig", "C:\\Users\\miklg\\source\\repos\\greenMusic\\templates\\_header.html.twig");
    }
}
