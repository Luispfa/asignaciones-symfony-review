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
        $__internal_0378b245cf6ce826fd8095e5fc6cd11a6339cd6160b2115f7117d1489e4d4c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0378b245cf6ce826fd8095e5fc6cd11a6339cd6160b2115f7117d1489e4d4c20->enter($__internal_0378b245cf6ce826fd8095e5fc6cd11a6339cd6160b2115f7117d1489e4d4c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d6de4b2656bb7fbcdd1590b56c09be040931fa450a54ef0d9ed8b1f8f635d823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6de4b2656bb7fbcdd1590b56c09be040931fa450a54ef0d9ed8b1f8f635d823->enter($__internal_d6de4b2656bb7fbcdd1590b56c09be040931fa450a54ef0d9ed8b1f8f635d823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_0378b245cf6ce826fd8095e5fc6cd11a6339cd6160b2115f7117d1489e4d4c20->leave($__internal_0378b245cf6ce826fd8095e5fc6cd11a6339cd6160b2115f7117d1489e4d4c20_prof);

        
        $__internal_d6de4b2656bb7fbcdd1590b56c09be040931fa450a54ef0d9ed8b1f8f635d823->leave($__internal_d6de4b2656bb7fbcdd1590b56c09be040931fa450a54ef0d9ed8b1f8f635d823_prof);

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
