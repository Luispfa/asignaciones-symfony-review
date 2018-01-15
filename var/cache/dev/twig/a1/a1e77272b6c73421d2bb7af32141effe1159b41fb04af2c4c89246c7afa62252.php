<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_32da72257e5bddde6e538b6f6270c635d57ddb43b36d1c62b69c8b99f3f4e72d extends Twig_Template
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
        $__internal_c7c9d89945cf112832293cfb0d5fc4012a090f77de268e480665c6afac41171d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c9d89945cf112832293cfb0d5fc4012a090f77de268e480665c6afac41171d->enter($__internal_c7c9d89945cf112832293cfb0d5fc4012a090f77de268e480665c6afac41171d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_223ddc543351a21bcaa6e0c1e324f08ea2115f24fb4fcb75d623955550b2aa97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223ddc543351a21bcaa6e0c1e324f08ea2115f24fb4fcb75d623955550b2aa97->enter($__internal_223ddc543351a21bcaa6e0c1e324f08ea2115f24fb4fcb75d623955550b2aa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_c7c9d89945cf112832293cfb0d5fc4012a090f77de268e480665c6afac41171d->leave($__internal_c7c9d89945cf112832293cfb0d5fc4012a090f77de268e480665c6afac41171d_prof);

        
        $__internal_223ddc543351a21bcaa6e0c1e324f08ea2115f24fb4fcb75d623955550b2aa97->leave($__internal_223ddc543351a21bcaa6e0c1e324f08ea2115f24fb4fcb75d623955550b2aa97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
