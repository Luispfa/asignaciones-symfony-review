<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f13c6259615ca5a72344a2a54918fedd35a47d6fa5baaa15b11006b32b036d4b extends Twig_Template
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
        $__internal_b20cf010b93a30e4977711ed07afb33f1c694c7ee73d87b58e6a176d9fc63784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20cf010b93a30e4977711ed07afb33f1c694c7ee73d87b58e6a176d9fc63784->enter($__internal_b20cf010b93a30e4977711ed07afb33f1c694c7ee73d87b58e6a176d9fc63784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c05db9907e09d3be83ef7d41ca2d3780cf97ed5a6de2e0949f62c447cd9720da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05db9907e09d3be83ef7d41ca2d3780cf97ed5a6de2e0949f62c447cd9720da->enter($__internal_c05db9907e09d3be83ef7d41ca2d3780cf97ed5a6de2e0949f62c447cd9720da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b20cf010b93a30e4977711ed07afb33f1c694c7ee73d87b58e6a176d9fc63784->leave($__internal_b20cf010b93a30e4977711ed07afb33f1c694c7ee73d87b58e6a176d9fc63784_prof);

        
        $__internal_c05db9907e09d3be83ef7d41ca2d3780cf97ed5a6de2e0949f62c447cd9720da->leave($__internal_c05db9907e09d3be83ef7d41ca2d3780cf97ed5a6de2e0949f62c447cd9720da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
