<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_722d2af5204cacd653302607415bea27243e746309ead5ae82fe93ce9c8957c2 extends Twig_Template
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
        $__internal_468d92f3ec183f297261438802f735baecc448463a4b3624f646422a155f7afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468d92f3ec183f297261438802f735baecc448463a4b3624f646422a155f7afb->enter($__internal_468d92f3ec183f297261438802f735baecc448463a4b3624f646422a155f7afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f013e961cde9fb2440ab36c0bab46e13ed4c370baf52d59989a7e9aa91258969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f013e961cde9fb2440ab36c0bab46e13ed4c370baf52d59989a7e9aa91258969->enter($__internal_f013e961cde9fb2440ab36c0bab46e13ed4c370baf52d59989a7e9aa91258969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_468d92f3ec183f297261438802f735baecc448463a4b3624f646422a155f7afb->leave($__internal_468d92f3ec183f297261438802f735baecc448463a4b3624f646422a155f7afb_prof);

        
        $__internal_f013e961cde9fb2440ab36c0bab46e13ed4c370baf52d59989a7e9aa91258969->leave($__internal_f013e961cde9fb2440ab36c0bab46e13ed4c370baf52d59989a7e9aa91258969_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
