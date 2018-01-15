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
        $__internal_3ee72139378ff02e5c9b4fe85b2cb502b4ad52bc4f2ac517d38fe24fc55ed48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee72139378ff02e5c9b4fe85b2cb502b4ad52bc4f2ac517d38fe24fc55ed48a->enter($__internal_3ee72139378ff02e5c9b4fe85b2cb502b4ad52bc4f2ac517d38fe24fc55ed48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_19477eddb33b646883390ea1c5176668889bdcf3ccac9ac9e201e07fbb0df4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19477eddb33b646883390ea1c5176668889bdcf3ccac9ac9e201e07fbb0df4d3->enter($__internal_19477eddb33b646883390ea1c5176668889bdcf3ccac9ac9e201e07fbb0df4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_3ee72139378ff02e5c9b4fe85b2cb502b4ad52bc4f2ac517d38fe24fc55ed48a->leave($__internal_3ee72139378ff02e5c9b4fe85b2cb502b4ad52bc4f2ac517d38fe24fc55ed48a_prof);

        
        $__internal_19477eddb33b646883390ea1c5176668889bdcf3ccac9ac9e201e07fbb0df4d3->leave($__internal_19477eddb33b646883390ea1c5176668889bdcf3ccac9ac9e201e07fbb0df4d3_prof);

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
