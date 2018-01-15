<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_13388b260e8a69689b8c18b9bd482463f1ec71851882115840994589a2790a53 extends Twig_Template
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
        $__internal_9a776734b697b3b120c3a0e7b721a42d2202f7ed48cde7a83fa4500cde1afd54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a776734b697b3b120c3a0e7b721a42d2202f7ed48cde7a83fa4500cde1afd54->enter($__internal_9a776734b697b3b120c3a0e7b721a42d2202f7ed48cde7a83fa4500cde1afd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_50994d2d88bee9be46306207a6251b7eb6b0a33b599e9faa74a8af12f6a8985e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50994d2d88bee9be46306207a6251b7eb6b0a33b599e9faa74a8af12f6a8985e->enter($__internal_50994d2d88bee9be46306207a6251b7eb6b0a33b599e9faa74a8af12f6a8985e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_9a776734b697b3b120c3a0e7b721a42d2202f7ed48cde7a83fa4500cde1afd54->leave($__internal_9a776734b697b3b120c3a0e7b721a42d2202f7ed48cde7a83fa4500cde1afd54_prof);

        
        $__internal_50994d2d88bee9be46306207a6251b7eb6b0a33b599e9faa74a8af12f6a8985e->leave($__internal_50994d2d88bee9be46306207a6251b7eb6b0a33b599e9faa74a8af12f6a8985e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
