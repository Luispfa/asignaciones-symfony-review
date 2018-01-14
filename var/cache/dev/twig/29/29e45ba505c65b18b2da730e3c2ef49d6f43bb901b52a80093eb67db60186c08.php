<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c8c4c6f87a5c78a68a3d5c369938a08a9278800ef26275cd51db0f12789811e2 extends Twig_Template
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
        $__internal_a76fa2cbd35141c2390f95864aa8b19002354aacc63e9cc9ae8136113351e6df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76fa2cbd35141c2390f95864aa8b19002354aacc63e9cc9ae8136113351e6df->enter($__internal_a76fa2cbd35141c2390f95864aa8b19002354aacc63e9cc9ae8136113351e6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5da18e31ff9ef49c9c9c7a1f8173edfbdb47992410eefc2b4bb4455170cdfec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da18e31ff9ef49c9c9c7a1f8173edfbdb47992410eefc2b4bb4455170cdfec6->enter($__internal_5da18e31ff9ef49c9c9c7a1f8173edfbdb47992410eefc2b4bb4455170cdfec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_a76fa2cbd35141c2390f95864aa8b19002354aacc63e9cc9ae8136113351e6df->leave($__internal_a76fa2cbd35141c2390f95864aa8b19002354aacc63e9cc9ae8136113351e6df_prof);

        
        $__internal_5da18e31ff9ef49c9c9c7a1f8173edfbdb47992410eefc2b4bb4455170cdfec6->leave($__internal_5da18e31ff9ef49c9c9c7a1f8173edfbdb47992410eefc2b4bb4455170cdfec6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
