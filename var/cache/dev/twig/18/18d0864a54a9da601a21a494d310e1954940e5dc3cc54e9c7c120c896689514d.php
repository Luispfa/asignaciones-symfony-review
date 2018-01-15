<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1afa78cfa343a1f0038ec1d64eb58de68a6e91d726ac0a047a2d64d94d3a27d8 extends Twig_Template
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
        $__internal_7704378fc36d2a2641e73c93173371b887a50f10136545249053a87c8c382960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7704378fc36d2a2641e73c93173371b887a50f10136545249053a87c8c382960->enter($__internal_7704378fc36d2a2641e73c93173371b887a50f10136545249053a87c8c382960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_195416c01847ee5ee42e1f560404f9156df37865c78b4b5c4b4d13e31744db48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195416c01847ee5ee42e1f560404f9156df37865c78b4b5c4b4d13e31744db48->enter($__internal_195416c01847ee5ee42e1f560404f9156df37865c78b4b5c4b4d13e31744db48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7704378fc36d2a2641e73c93173371b887a50f10136545249053a87c8c382960->leave($__internal_7704378fc36d2a2641e73c93173371b887a50f10136545249053a87c8c382960_prof);

        
        $__internal_195416c01847ee5ee42e1f560404f9156df37865c78b4b5c4b4d13e31744db48->leave($__internal_195416c01847ee5ee42e1f560404f9156df37865c78b4b5c4b4d13e31744db48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
