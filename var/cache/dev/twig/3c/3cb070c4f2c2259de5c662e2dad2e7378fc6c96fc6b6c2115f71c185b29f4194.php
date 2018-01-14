<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_545945fbe7956a94155b870e283cb54eaee7de6e818467beb5e1670be35b2f96 extends Twig_Template
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
        $__internal_84286ba49acb84e902e826a01ca88e5a68d7edddfe84864a4377084837a98a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84286ba49acb84e902e826a01ca88e5a68d7edddfe84864a4377084837a98a04->enter($__internal_84286ba49acb84e902e826a01ca88e5a68d7edddfe84864a4377084837a98a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2189785f7071419db9dc8089c557cdd6053d630ec8452ebb2cc0f389204639ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2189785f7071419db9dc8089c557cdd6053d630ec8452ebb2cc0f389204639ae->enter($__internal_2189785f7071419db9dc8089c557cdd6053d630ec8452ebb2cc0f389204639ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_84286ba49acb84e902e826a01ca88e5a68d7edddfe84864a4377084837a98a04->leave($__internal_84286ba49acb84e902e826a01ca88e5a68d7edddfe84864a4377084837a98a04_prof);

        
        $__internal_2189785f7071419db9dc8089c557cdd6053d630ec8452ebb2cc0f389204639ae->leave($__internal_2189785f7071419db9dc8089c557cdd6053d630ec8452ebb2cc0f389204639ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
