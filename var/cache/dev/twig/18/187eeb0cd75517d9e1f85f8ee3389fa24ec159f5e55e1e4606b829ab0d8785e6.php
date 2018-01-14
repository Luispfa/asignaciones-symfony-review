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
        $__internal_9ad3afd46ebcfe3465a6f139cc25026db89094d93015ba69786765f5ab73ba7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad3afd46ebcfe3465a6f139cc25026db89094d93015ba69786765f5ab73ba7c->enter($__internal_9ad3afd46ebcfe3465a6f139cc25026db89094d93015ba69786765f5ab73ba7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_227eb5ef860bde3d8138e1448a4ea1cd8746d9de5f6b75a4c7859f4b96602f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227eb5ef860bde3d8138e1448a4ea1cd8746d9de5f6b75a4c7859f4b96602f6c->enter($__internal_227eb5ef860bde3d8138e1448a4ea1cd8746d9de5f6b75a4c7859f4b96602f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_9ad3afd46ebcfe3465a6f139cc25026db89094d93015ba69786765f5ab73ba7c->leave($__internal_9ad3afd46ebcfe3465a6f139cc25026db89094d93015ba69786765f5ab73ba7c_prof);

        
        $__internal_227eb5ef860bde3d8138e1448a4ea1cd8746d9de5f6b75a4c7859f4b96602f6c->leave($__internal_227eb5ef860bde3d8138e1448a4ea1cd8746d9de5f6b75a4c7859f4b96602f6c_prof);

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
