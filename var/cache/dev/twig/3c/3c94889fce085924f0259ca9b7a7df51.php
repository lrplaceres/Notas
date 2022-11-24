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

/* login/index.html.twig */
class __TwigTemplate_634db8fc93060ea23a7090ccf8c0c2be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 6
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "\t\t<style>
\t\t\thtml,
\t\t\tbody {
\t\t\t\theight: 100%;
\t\t\t}

\t\t\tbody {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tpadding-top: 40px;
\t\t\t\tpadding-bottom: 40px;
\t\t\t\tbackground-color: #f5f5f5;
\t\t\t}

\t\t\t.form-signin {
\t\t\t\tmax-width: 330px;
\t\t\t\tpadding: 15px;
\t\t\t}

\t\t\t.form-signin .form-floating:focus-within {
\t\t\t\tz-index: 2;
\t\t\t}

\t\t\t.form-signin input[type=\"email\"] {
\t\t\t\tmargin-bottom: -1px;
\t\t\t\tborder-bottom-right-radius: 0;
\t\t\t\tborder-bottom-left-radius: 0;
\t\t\t}

\t\t\t.form-signin input[type=\"password\"] {
\t\t\t\tmargin-bottom: 10px;
\t\t\t\tborder-top-left-radius: 0;
\t\t\t\tborder-top-right-radius: 0;
\t\t\t}
\t\t\t.form-floating > .form-control,
\t\t\t.form-floating>.form-control-plaintext,
\t\t\t.form-floating > .form-select {
\t\t\t\theight: calc(3.5rem + 2px);
\t\t\t\tline-height: 1.25;
\t\t\t}
\t\t</style>
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "\t";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageKey", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })()), "messageData", [], "any", false, false, false, 53), "security"), "html", null, true);
            echo "</div>
\t";
        }
        // line 55
        echo "
\t";
        // line 56
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            echo "
\t\t<div class=\"form-signin w-100 m-auto\">
\t\t\t<form action=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" method=\"post\">
\t\t\t\t<h1 class=\"h3 mb-3 fw-normal\">Introduzca sus credenciales</h1>

\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t<label for=\"password\">Email:</label>
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"name@example.com\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\">
\t\t\t\t</div>

\t\t\t\t";
            // line 74
            echo "\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/login\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
\t\t\t\t<button type=\"submit\" class=\"w-100 btn btn-lg btn-primary\">Acceder</button>

\t\t\t</form>
\t\t\t<a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"link-success\">No tengo cuenta</a>
\t\t</div>
\t";
        }
        // line 82
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 82,  185 => 79,  178 => 75,  175 => 74,  164 => 64,  156 => 59,  152 => 57,  150 => 56,  147 => 55,  141 => 53,  138 => 52,  128 => 51,  76 => 7,  74 => 6,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/login/index.html.twig #}
{% extends 'base.html.twig' %}

{% block stylesheets %}
\t{{ parent() }}
\t{% if not is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t<style>
\t\t\thtml,
\t\t\tbody {
\t\t\t\theight: 100%;
\t\t\t}

\t\t\tbody {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tpadding-top: 40px;
\t\t\t\tpadding-bottom: 40px;
\t\t\t\tbackground-color: #f5f5f5;
\t\t\t}

\t\t\t.form-signin {
\t\t\t\tmax-width: 330px;
\t\t\t\tpadding: 15px;
\t\t\t}

\t\t\t.form-signin .form-floating:focus-within {
\t\t\t\tz-index: 2;
\t\t\t}

\t\t\t.form-signin input[type=\"email\"] {
\t\t\t\tmargin-bottom: -1px;
\t\t\t\tborder-bottom-right-radius: 0;
\t\t\t\tborder-bottom-left-radius: 0;
\t\t\t}

\t\t\t.form-signin input[type=\"password\"] {
\t\t\t\tmargin-bottom: 10px;
\t\t\t\tborder-top-left-radius: 0;
\t\t\t\tborder-top-right-radius: 0;
\t\t\t}
\t\t\t.form-floating > .form-control,
\t\t\t.form-floating>.form-control-plaintext,
\t\t\t.form-floating > .form-select {
\t\t\t\theight: calc(3.5rem + 2px);
\t\t\t\tline-height: 1.25;
\t\t\t}
\t\t</style>
\t{% endif %}
{% endblock %}

{% block body %}
\t{% if error %}
\t\t<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t{% endif %}

\t{% if not is_granted('IS_AUTHENTICATED_FULLY') %}

\t\t<div class=\"form-signin w-100 m-auto\">
\t\t\t<form action=\"{{ path('app_login') }}\" method=\"post\">
\t\t\t\t<h1 class=\"h3 mb-3 fw-normal\">Introduzca sus credenciales</h1>

\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t<label for=\"password\">Email:</label>
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"name@example.com\">
\t\t\t\t</div>

\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\">
\t\t\t\t</div>

\t\t\t\t{# If you want to control the URL the user is redirected to on success
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <input type=\"hidden\" name=\"_target_path\" value=\"/account\"> #}
\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/login\">
\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t<button type=\"submit\" class=\"w-100 btn btn-lg btn-primary\">Acceder</button>

\t\t\t</form>
\t\t\t<a href=\"{{ path('register') }}\" class=\"link-success\">No tengo cuenta</a>
\t\t</div>
\t{% endif %}


{% endblock %}
", "login/index.html.twig", "/mnt/EA845E9D845E6C57/Notas/Notas/templates/login/index.html.twig");
    }
}
