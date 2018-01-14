<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f99a40d73230075baca7b84c0c694ed9b2c396605d5b73f889de17b330f97d43 extends Twig_Template
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
        $__internal_e2ea43243d3fc3bf1a95e1924a3239e5fe21f417dd4d0262adea07560cde7a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ea43243d3fc3bf1a95e1924a3239e5fe21f417dd4d0262adea07560cde7a85->enter($__internal_e2ea43243d3fc3bf1a95e1924a3239e5fe21f417dd4d0262adea07560cde7a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_0d8bc692bd946f927f8b6762f94b5bc17a0651c95f0155022b8ff1e5f49aa0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8bc692bd946f927f8b6762f94b5bc17a0651c95f0155022b8ff1e5f49aa0e7->enter($__internal_0d8bc692bd946f927f8b6762f94b5bc17a0651c95f0155022b8ff1e5f49aa0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e2ea43243d3fc3bf1a95e1924a3239e5fe21f417dd4d0262adea07560cde7a85->leave($__internal_e2ea43243d3fc3bf1a95e1924a3239e5fe21f417dd4d0262adea07560cde7a85_prof);

        
        $__internal_0d8bc692bd946f927f8b6762f94b5bc17a0651c95f0155022b8ff1e5f49aa0e7->leave($__internal_0d8bc692bd946f927f8b6762f94b5bc17a0651c95f0155022b8ff1e5f49aa0e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
