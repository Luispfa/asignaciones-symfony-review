<?php

/* :messages:danger.html.twig */
class __TwigTemplate_89b79dd544626cd813e1b1e6f373bec0d86eec908a0a9bac57f975f4c3713a02 extends Twig_Template
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
        $__internal_5ab288f6d3fdcf9f1cb07e184b94398e291db309f145dc922034d4984032b8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab288f6d3fdcf9f1cb07e184b94398e291db309f145dc922034d4984032b8b6->enter($__internal_5ab288f6d3fdcf9f1cb07e184b94398e291db309f145dc922034d4984032b8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":messages:danger.html.twig"));

        $__internal_6972d821ec0a0361941c72a17c24e64eaf855fcaf481ff735d82bdf6777b525f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6972d821ec0a0361941c72a17c24e64eaf855fcaf481ff735d82bdf6777b525f->enter($__internal_6972d821ec0a0361941c72a17c24e64eaf855fcaf481ff735d82bdf6777b525f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":messages:danger.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ( !array_key_exists("flashMessage", $context)) {
            // line 3
            echo "    <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message-danger\"></span>
        </div>
    </div>
";
        }
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"container\"> ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5ab288f6d3fdcf9f1cb07e184b94398e291db309f145dc922034d4984032b8b6->leave($__internal_5ab288f6d3fdcf9f1cb07e184b94398e291db309f145dc922034d4984032b8b6_prof);

        
        $__internal_6972d821ec0a0361941c72a17c24e64eaf855fcaf481ff735d82bdf6777b525f->leave($__internal_6972d821ec0a0361941c72a17c24e64eaf855fcaf481ff735d82bdf6777b525f_prof);

    }

    public function getTemplateName()
    {
        return ":messages:danger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  45 => 11,  41 => 10,  38 => 9,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if flashMessage is not defined %}
    <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message-danger\"></span>
        </div>
    </div>
{% endif %}

{% for flashMessage in app.session.flashbag.get('mensaje') %}
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"container\"> {{ flashMessage }} </div>
    </div>
{% endfor %}", ":messages:danger.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/messages/danger.html.twig");
    }
}
