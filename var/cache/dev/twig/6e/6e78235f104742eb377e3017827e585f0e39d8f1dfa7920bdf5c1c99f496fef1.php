<?php

/* :messages:success.html.twig */
class __TwigTemplate_30a24c0b5436e20ea737e525a8d3f5c5545027c136ca6992251f2cfeb9647aec extends Twig_Template
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
        $__internal_480b31ca9e37f641d9eae7827629146f98a550935bbf23074c5df875c320623f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480b31ca9e37f641d9eae7827629146f98a550935bbf23074c5df875c320623f->enter($__internal_480b31ca9e37f641d9eae7827629146f98a550935bbf23074c5df875c320623f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":messages:success.html.twig"));

        $__internal_f150e6d931df2bc6115e7596d2ade35da63f8e2505e25638e35da785b2be7a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f150e6d931df2bc6115e7596d2ade35da63f8e2505e25638e35da785b2be7a59->enter($__internal_f150e6d931df2bc6115e7596d2ade35da63f8e2505e25638e35da785b2be7a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":messages:success.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "    <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message\"></span>
        </div>
    </div>
";
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            echo "    <div class=\"alert alert-success\" role=\"alert\">
        <div class=\"container\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_480b31ca9e37f641d9eae7827629146f98a550935bbf23074c5df875c320623f->leave($__internal_480b31ca9e37f641d9eae7827629146f98a550935bbf23074c5df875c320623f_prof);

        
        $__internal_f150e6d931df2bc6115e7596d2ade35da63f8e2505e25638e35da785b2be7a59->leave($__internal_f150e6d931df2bc6115e7596d2ade35da63f8e2505e25638e35da785b2be7a59_prof);

    }

    public function getTemplateName()
    {
        return ":messages:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  42 => 10,  38 => 9,  35 => 8,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if flashMessage is not defined %}
    <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message\"></span>
        </div>
    </div>
{% endif %}

{% for flash_message in app.session.flashBag.get('mensaje') %}
    <div class=\"alert alert-success\" role=\"alert\">
        <div class=\"container\">
            {{ flash_message }}
        </div>
    </div>
{% endfor %}", ":messages:success.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/messages/success.html.twig");
    }
}
