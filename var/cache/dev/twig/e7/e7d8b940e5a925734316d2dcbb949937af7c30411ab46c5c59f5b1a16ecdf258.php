<?php

/* KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig */
class __TwigTemplate_2bd589cb54003b3731b6dc030ae842953f4955fdee17ded4c8a1e30100e4b165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16763748357db6e00173a00f1f5f71ffaf69b65a9e0618d8ddfa042400f52d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16763748357db6e00173a00f1f5f71ffaf69b65a9e0618d8ddfa042400f52d25->enter($__internal_16763748357db6e00173a00f1f5f71ffaf69b65a9e0618d8ddfa042400f52d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig"));

        $__internal_92e704ff1d6de2c21f1db610566e834c72f4ce2a992c30a3c207cdc06c5b3172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e704ff1d6de2c21f1db610566e834c72f4ce2a992c30a3c207cdc06c5b3172->enter($__internal_92e704ff1d6de2c21f1db610566e834c72f4ce2a992c30a3c207cdc06c5b3172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig"));

        // line 13
        echo "
<div class=\"ui pagination menu\">
    ";
        // line 15
        if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 15, $this->getSourceContext()); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 15, $this->getSourceContext()); })())))) {
            // line 16
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 16, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 16, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 16, $this->getSourceContext()); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 16, $this->getSourceContext()); })())))), "html", null, true);
            echo "\">
            <i class=\"angle double left icon\"></i>
        </a>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (array_key_exists("previous", $context)) {
            // line 22
            echo "        <a class=\"item icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 22, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 22, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 22, $this->getSourceContext()); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 22, $this->getSourceContext()); })())))), "html", null, true);
            echo "\">
            <i class=\"angle left icon\"></i>
        </a>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new Twig_Error_Runtime('Variable "pagesInRange" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 28
            echo "        ";
            if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 28, $this->getSourceContext()); })()))) {
                // line 29
                echo "            <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 29, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 29, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 29, $this->getSourceContext()); })()) => $context["page"]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
        ";
            } else {
                // line 31
                echo "            <span class=\"active item\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span>
        ";
            }
            // line 33
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    ";
        // line 36
        if (array_key_exists("next", $context)) {
            // line 37
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 37, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 37, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 37, $this->getSourceContext()); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 37, $this->getSourceContext()); })())))), "html", null, true);
            echo "\">
            <i class=\"angle right icon\"></i>
        </a>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 42, $this->getSourceContext()); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 42, $this->getSourceContext()); })())))) {
            // line 43
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 43, $this->getSourceContext()); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 43, $this->getSourceContext()); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 43, $this->getSourceContext()); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 43, $this->getSourceContext()); })())))), "html", null, true);
            echo "\">
            <i class=\"angle right double icon\"></i>
        </a>
    ";
        }
        // line 47
        echo "</div>
";
        
        $__internal_16763748357db6e00173a00f1f5f71ffaf69b65a9e0618d8ddfa042400f52d25->leave($__internal_16763748357db6e00173a00f1f5f71ffaf69b65a9e0618d8ddfa042400f52d25_prof);

        
        $__internal_92e704ff1d6de2c21f1db610566e834c72f4ce2a992c30a3c207cdc06c5b3172->leave($__internal_92e704ff1d6de2c21f1db610566e834c72f4ce2a992c30a3c207cdc06c5b3172_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 47,  101 => 43,  99 => 42,  96 => 41,  88 => 37,  86 => 36,  83 => 35,  76 => 33,  70 => 31,  62 => 29,  59 => 28,  55 => 27,  52 => 26,  44 => 22,  42 => 21,  39 => 20,  31 => 16,  29 => 15,  25 => 13,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Semantic UI Sliding pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Semantic UI CSS Toolkit
 * http://semantic-ui.com/collections/menu.html#pagination
 *
 * @author Valerian Dorcy <valerian.dorcy@gmail.com>
 */
#}

<div class=\"ui pagination menu\">
    {% if first is defined and current != first %}
        <a class=\"icon item\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">
            <i class=\"angle double left icon\"></i>
        </a>
    {% endif %}

    {% if previous is defined %}
        <a class=\"item icon\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
            <i class=\"angle left icon\"></i>
        </a>
    {% endif %}

    {% for page in pagesInRange %}
        {% if page != current %}
            <a class=\"item\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
        {% else %}
            <span class=\"active item\">{{ page }}</span>
        {% endif %}

    {% endfor %}

    {% if next is defined %}
        <a class=\"icon item\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
            <i class=\"angle right icon\"></i>
        </a>
    {% endif %}

    {% if last is defined and current != last %}
        <a class=\"icon item\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">
            <i class=\"angle right double icon\"></i>
        </a>
    {% endif %}
</div>
", "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/semantic_ui_pagination.html.twig");
    }
}
