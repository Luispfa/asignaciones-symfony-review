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
        $__internal_c4f003ceb02c65bf4a979ae6de31bdb22ca203871518d5ae6b558a572172b415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f003ceb02c65bf4a979ae6de31bdb22ca203871518d5ae6b558a572172b415->enter($__internal_c4f003ceb02c65bf4a979ae6de31bdb22ca203871518d5ae6b558a572172b415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c0707bbee530d5e3cf0f127ab80dec7cef090585674bc015f3faeb75af674467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0707bbee530d5e3cf0f127ab80dec7cef090585674bc015f3faeb75af674467->enter($__internal_c0707bbee530d5e3cf0f127ab80dec7cef090585674bc015f3faeb75af674467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_c4f003ceb02c65bf4a979ae6de31bdb22ca203871518d5ae6b558a572172b415->leave($__internal_c4f003ceb02c65bf4a979ae6de31bdb22ca203871518d5ae6b558a572172b415_prof);

        
        $__internal_c0707bbee530d5e3cf0f127ab80dec7cef090585674bc015f3faeb75af674467->leave($__internal_c0707bbee530d5e3cf0f127ab80dec7cef090585674bc015f3faeb75af674467_prof);

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
