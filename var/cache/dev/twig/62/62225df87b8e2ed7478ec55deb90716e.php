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

/* navbar.html.twig */
class __TwigTemplate_0addb4f3db1def95a45a054675a709a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "
\t<nav class=\"navbar navbar-expand-lg\" style=\"background-color: #e3f2fd;\">
\t\t<div class=\"container-fluid\">
\t\t\t<a class=\"navbar-brand\" href=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota");
            echo "\">Notas</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota");
            echo "\">Mis Notas</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_publica");
            echo "\">P&uacute;blicas</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_eliminada");
            echo "\">Eliminadas</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<form class=\"d-flex\" role=\"search\" method=\"post\" action=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_busqueda");
            echo "\">
\t\t\t\t\t<input name=\"param\" class=\"form-control me-2\" type=\"search\" placeholder=\"Criterio de búsqueda\" aria-label=\"Search\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Buscar</button>
\t\t\t\t</form>

\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">

\t\t\t\t\t\t\tHola:
\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "email", [], "any", false, false, false, 32), "html", null, true);
            echo "

\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_change_passw");
            echo "\">Cambiar contrase&ntilde;a</a>
\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"dropdown-item\">Salir</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  100 => 37,  92 => 32,  79 => 22,  72 => 18,  66 => 15,  60 => 12,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('IS_AUTHENTICATED_FULLY') %}

\t<nav class=\"navbar navbar-expand-lg\" style=\"background-color: #e3f2fd;\">
\t\t<div class=\"container-fluid\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ path('app_nota')}}\">Notas</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_nota')}}\">Mis Notas</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{ path('app_nota_publica') }}\">P&uacute;blicas</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_nota_eliminada') }}\">Eliminadas</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<form class=\"d-flex\" role=\"search\" method=\"post\" action=\"{{ path('app_nota_busqueda') }}\">
\t\t\t\t\t<input name=\"param\" class=\"form-control me-2\" type=\"search\" placeholder=\"Criterio de búsqueda\" aria-label=\"Search\">
\t\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Buscar</button>
\t\t\t\t</form>

\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">

\t\t\t\t\t\t\tHola:
\t\t\t\t\t\t\t{{ app.user.email }}

\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_change_passw') }}\">Cambiar contrase&ntilde;a</a>
\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\" class=\"dropdown-item\">Salir</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

{% endif %}
", "navbar.html.twig", "/mnt/EA845E9D845E6C57/Notas/Notas/templates/navbar.html.twig");
    }
}
