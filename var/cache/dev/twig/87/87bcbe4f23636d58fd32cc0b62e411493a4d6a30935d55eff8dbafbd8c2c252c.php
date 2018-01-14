<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f72614f929c3b641931967f4e7378da756a2fb36c25cb42c0b2866caa5349df3 extends Twig_Template
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
        $__internal_4762b0be84574e8de1b9fe80553afa169420a6425538b7bfed32852f688c07e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4762b0be84574e8de1b9fe80553afa169420a6425538b7bfed32852f688c07e0->enter($__internal_4762b0be84574e8de1b9fe80553afa169420a6425538b7bfed32852f688c07e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_daf1d3d6683c528ae43b91d28422d509c79bd5b622faec2a20497a42eab18a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf1d3d6683c528ae43b91d28422d509c79bd5b622faec2a20497a42eab18a70->enter($__internal_daf1d3d6683c528ae43b91d28422d509c79bd5b622faec2a20497a42eab18a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_4762b0be84574e8de1b9fe80553afa169420a6425538b7bfed32852f688c07e0->leave($__internal_4762b0be84574e8de1b9fe80553afa169420a6425538b7bfed32852f688c07e0_prof);

        
        $__internal_daf1d3d6683c528ae43b91d28422d509c79bd5b622faec2a20497a42eab18a70->leave($__internal_daf1d3d6683c528ae43b91d28422d509c79bd5b622faec2a20497a42eab18a70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
