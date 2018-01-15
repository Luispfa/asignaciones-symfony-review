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
        $__internal_d2cef63a7db34f189c1bc81496ca823c1645cbf24fc86a580cc946aa7961e385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cef63a7db34f189c1bc81496ca823c1645cbf24fc86a580cc946aa7961e385->enter($__internal_d2cef63a7db34f189c1bc81496ca823c1645cbf24fc86a580cc946aa7961e385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3436884e906b4556b3d77adaccc5297c0b7586b614992bcf0e0f6acd7540931e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3436884e906b4556b3d77adaccc5297c0b7586b614992bcf0e0f6acd7540931e->enter($__internal_3436884e906b4556b3d77adaccc5297c0b7586b614992bcf0e0f6acd7540931e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_d2cef63a7db34f189c1bc81496ca823c1645cbf24fc86a580cc946aa7961e385->leave($__internal_d2cef63a7db34f189c1bc81496ca823c1645cbf24fc86a580cc946aa7961e385_prof);

        
        $__internal_3436884e906b4556b3d77adaccc5297c0b7586b614992bcf0e0f6acd7540931e->leave($__internal_3436884e906b4556b3d77adaccc5297c0b7586b614992bcf0e0f6acd7540931e_prof);

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
