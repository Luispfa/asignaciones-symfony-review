<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fba93cd43486a4225ad17e3c28be3450afcec9ff6b916dc96b571495b58dbb60 extends Twig_Template
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
        $__internal_f917198482f59b1b8e874856714b4e04b57a3cf931e2b0eb5d146f34db40f097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f917198482f59b1b8e874856714b4e04b57a3cf931e2b0eb5d146f34db40f097->enter($__internal_f917198482f59b1b8e874856714b4e04b57a3cf931e2b0eb5d146f34db40f097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_029246f3cc9df4445973163d4de883fcf6ac00c9e6f17b41f4054544d333a50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029246f3cc9df4445973163d4de883fcf6ac00c9e6f17b41f4054544d333a50e->enter($__internal_029246f3cc9df4445973163d4de883fcf6ac00c9e6f17b41f4054544d333a50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f917198482f59b1b8e874856714b4e04b57a3cf931e2b0eb5d146f34db40f097->leave($__internal_f917198482f59b1b8e874856714b4e04b57a3cf931e2b0eb5d146f34db40f097_prof);

        
        $__internal_029246f3cc9df4445973163d4de883fcf6ac00c9e6f17b41f4054544d333a50e->leave($__internal_029246f3cc9df4445973163d4de883fcf6ac00c9e6f17b41f4054544d333a50e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
