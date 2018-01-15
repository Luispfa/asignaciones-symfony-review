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
        $__internal_0b665df9bfac6841c5a0ea7c063e21a4e1fbb3cc6e5e61f9266a1e0b1a5f5316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b665df9bfac6841c5a0ea7c063e21a4e1fbb3cc6e5e61f9266a1e0b1a5f5316->enter($__internal_0b665df9bfac6841c5a0ea7c063e21a4e1fbb3cc6e5e61f9266a1e0b1a5f5316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f058ed07d6344a1a49dbbee8230c0cc54b15f656abf73a5b7e69918fb271e143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f058ed07d6344a1a49dbbee8230c0cc54b15f656abf73a5b7e69918fb271e143->enter($__internal_f058ed07d6344a1a49dbbee8230c0cc54b15f656abf73a5b7e69918fb271e143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_0b665df9bfac6841c5a0ea7c063e21a4e1fbb3cc6e5e61f9266a1e0b1a5f5316->leave($__internal_0b665df9bfac6841c5a0ea7c063e21a4e1fbb3cc6e5e61f9266a1e0b1a5f5316_prof);

        
        $__internal_f058ed07d6344a1a49dbbee8230c0cc54b15f656abf73a5b7e69918fb271e143->leave($__internal_f058ed07d6344a1a49dbbee8230c0cc54b15f656abf73a5b7e69918fb271e143_prof);

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
