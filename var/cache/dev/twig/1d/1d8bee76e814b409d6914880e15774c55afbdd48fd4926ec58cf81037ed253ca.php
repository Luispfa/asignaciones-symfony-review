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
        $__internal_8d276c29837ea0003b491d932e5b4a4a407b0305275b1b4e529f716e792e9cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d276c29837ea0003b491d932e5b4a4a407b0305275b1b4e529f716e792e9cbf->enter($__internal_8d276c29837ea0003b491d932e5b4a4a407b0305275b1b4e529f716e792e9cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_1273ad3bb3cdf4f77ecc9cd7d5e5c27edcbd965f35db9bab0c1f2cecb2ec24b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1273ad3bb3cdf4f77ecc9cd7d5e5c27edcbd965f35db9bab0c1f2cecb2ec24b3->enter($__internal_1273ad3bb3cdf4f77ecc9cd7d5e5c27edcbd965f35db9bab0c1f2cecb2ec24b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_8d276c29837ea0003b491d932e5b4a4a407b0305275b1b4e529f716e792e9cbf->leave($__internal_8d276c29837ea0003b491d932e5b4a4a407b0305275b1b4e529f716e792e9cbf_prof);

        
        $__internal_1273ad3bb3cdf4f77ecc9cd7d5e5c27edcbd965f35db9bab0c1f2cecb2ec24b3->leave($__internal_1273ad3bb3cdf4f77ecc9cd7d5e5c27edcbd965f35db9bab0c1f2cecb2ec24b3_prof);

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
