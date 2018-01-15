<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_32da72257e5bddde6e538b6f6270c635d57ddb43b36d1c62b69c8b99f3f4e72d extends Twig_Template
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
        $__internal_a4beab4913118cad19ee052665f67a950dcd20d26cdd526ad62d0a491b9b77cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4beab4913118cad19ee052665f67a950dcd20d26cdd526ad62d0a491b9b77cd->enter($__internal_a4beab4913118cad19ee052665f67a950dcd20d26cdd526ad62d0a491b9b77cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_84a7f52235bf3adbba0bfa9136c5e34339f7844ceafa490c3a1be805ebd43521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a7f52235bf3adbba0bfa9136c5e34339f7844ceafa490c3a1be805ebd43521->enter($__internal_84a7f52235bf3adbba0bfa9136c5e34339f7844ceafa490c3a1be805ebd43521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_a4beab4913118cad19ee052665f67a950dcd20d26cdd526ad62d0a491b9b77cd->leave($__internal_a4beab4913118cad19ee052665f67a950dcd20d26cdd526ad62d0a491b9b77cd_prof);

        
        $__internal_84a7f52235bf3adbba0bfa9136c5e34339f7844ceafa490c3a1be805ebd43521->leave($__internal_84a7f52235bf3adbba0bfa9136c5e34339f7844ceafa490c3a1be805ebd43521_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
