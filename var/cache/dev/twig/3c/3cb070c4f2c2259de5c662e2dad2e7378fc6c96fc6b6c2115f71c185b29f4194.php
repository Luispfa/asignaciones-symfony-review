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
        $__internal_5a938c520c7e0fcf4ed15226a5a5cb85fca6127a0fee48484d184e19821042b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a938c520c7e0fcf4ed15226a5a5cb85fca6127a0fee48484d184e19821042b5->enter($__internal_5a938c520c7e0fcf4ed15226a5a5cb85fca6127a0fee48484d184e19821042b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_02e3981af4723aeda37bc9a165037f0d3fb19822b35500f3918e100946a2d3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e3981af4723aeda37bc9a165037f0d3fb19822b35500f3918e100946a2d3b3->enter($__internal_02e3981af4723aeda37bc9a165037f0d3fb19822b35500f3918e100946a2d3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5a938c520c7e0fcf4ed15226a5a5cb85fca6127a0fee48484d184e19821042b5->leave($__internal_5a938c520c7e0fcf4ed15226a5a5cb85fca6127a0fee48484d184e19821042b5_prof);

        
        $__internal_02e3981af4723aeda37bc9a165037f0d3fb19822b35500f3918e100946a2d3b3->leave($__internal_02e3981af4723aeda37bc9a165037f0d3fb19822b35500f3918e100946a2d3b3_prof);

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
