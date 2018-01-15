<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_beef9c3db2eba592e566e3a5ffa4ba89c16170bfdd69f02b1b519b51987bb02e extends Twig_Template
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
        $__internal_7a0df054122375bceb48e774fe1308de09686190543649cbc43e03da6a29d791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0df054122375bceb48e774fe1308de09686190543649cbc43e03da6a29d791->enter($__internal_7a0df054122375bceb48e774fe1308de09686190543649cbc43e03da6a29d791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_bb0c273d9835a9b5ab63bea341a69264046e05f2c045acc8554da940623d01fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0c273d9835a9b5ab63bea341a69264046e05f2c045acc8554da940623d01fd->enter($__internal_bb0c273d9835a9b5ab63bea341a69264046e05f2c045acc8554da940623d01fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_7a0df054122375bceb48e774fe1308de09686190543649cbc43e03da6a29d791->leave($__internal_7a0df054122375bceb48e774fe1308de09686190543649cbc43e03da6a29d791_prof);

        
        $__internal_bb0c273d9835a9b5ab63bea341a69264046e05f2c045acc8554da940623d01fd->leave($__internal_bb0c273d9835a9b5ab63bea341a69264046e05f2c045acc8554da940623d01fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
