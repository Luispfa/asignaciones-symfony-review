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
        $__internal_020f24f84a73f82afa70471a54751c94160f7aafbb3e6cab1e2384de737406bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020f24f84a73f82afa70471a54751c94160f7aafbb3e6cab1e2384de737406bf->enter($__internal_020f24f84a73f82afa70471a54751c94160f7aafbb3e6cab1e2384de737406bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e0070cc955c7997403c2edb6a990be866ddc9791103f72bb43da62cf433c07ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0070cc955c7997403c2edb6a990be866ddc9791103f72bb43da62cf433c07ed->enter($__internal_e0070cc955c7997403c2edb6a990be866ddc9791103f72bb43da62cf433c07ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_020f24f84a73f82afa70471a54751c94160f7aafbb3e6cab1e2384de737406bf->leave($__internal_020f24f84a73f82afa70471a54751c94160f7aafbb3e6cab1e2384de737406bf_prof);

        
        $__internal_e0070cc955c7997403c2edb6a990be866ddc9791103f72bb43da62cf433c07ed->leave($__internal_e0070cc955c7997403c2edb6a990be866ddc9791103f72bb43da62cf433c07ed_prof);

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
