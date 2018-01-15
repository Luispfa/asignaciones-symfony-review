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
        $__internal_5299ade29228a54e11bb48116f3b39034c097ce82b51bfbb17cecb22fc2aa5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5299ade29228a54e11bb48116f3b39034c097ce82b51bfbb17cecb22fc2aa5c3->enter($__internal_5299ade29228a54e11bb48116f3b39034c097ce82b51bfbb17cecb22fc2aa5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_81cf1d4939e862fd23bbf4f44af90f1b144eaaf7915da72d115997c082affc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cf1d4939e862fd23bbf4f44af90f1b144eaaf7915da72d115997c082affc70->enter($__internal_81cf1d4939e862fd23bbf4f44af90f1b144eaaf7915da72d115997c082affc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_5299ade29228a54e11bb48116f3b39034c097ce82b51bfbb17cecb22fc2aa5c3->leave($__internal_5299ade29228a54e11bb48116f3b39034c097ce82b51bfbb17cecb22fc2aa5c3_prof);

        
        $__internal_81cf1d4939e862fd23bbf4f44af90f1b144eaaf7915da72d115997c082affc70->leave($__internal_81cf1d4939e862fd23bbf4f44af90f1b144eaaf7915da72d115997c082affc70_prof);

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
