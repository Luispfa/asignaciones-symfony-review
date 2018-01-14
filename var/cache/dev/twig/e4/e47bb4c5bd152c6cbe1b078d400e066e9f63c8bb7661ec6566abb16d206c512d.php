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
        $__internal_7ac93c01c4ce43b2a6dd15f9f30577cfe679785cc7aeeffc162e966402b49465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac93c01c4ce43b2a6dd15f9f30577cfe679785cc7aeeffc162e966402b49465->enter($__internal_7ac93c01c4ce43b2a6dd15f9f30577cfe679785cc7aeeffc162e966402b49465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_fa748ecdb6390a5eb5790f52adbeb9a7c66285e37053c54d3d40c50525eb4fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa748ecdb6390a5eb5790f52adbeb9a7c66285e37053c54d3d40c50525eb4fca->enter($__internal_fa748ecdb6390a5eb5790f52adbeb9a7c66285e37053c54d3d40c50525eb4fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7ac93c01c4ce43b2a6dd15f9f30577cfe679785cc7aeeffc162e966402b49465->leave($__internal_7ac93c01c4ce43b2a6dd15f9f30577cfe679785cc7aeeffc162e966402b49465_prof);

        
        $__internal_fa748ecdb6390a5eb5790f52adbeb9a7c66285e37053c54d3d40c50525eb4fca->leave($__internal_fa748ecdb6390a5eb5790f52adbeb9a7c66285e37053c54d3d40c50525eb4fca_prof);

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
