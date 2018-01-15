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
        $__internal_cf7ae6bdb65942fd2f11e41b0d57e66b02b34b2ac19d965f0ce34231ae822003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf7ae6bdb65942fd2f11e41b0d57e66b02b34b2ac19d965f0ce34231ae822003->enter($__internal_cf7ae6bdb65942fd2f11e41b0d57e66b02b34b2ac19d965f0ce34231ae822003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a802cbb7e0dfcd15e5c5d5686fdb10ae764ad206d3a9e265f40734f0ba3d576d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a802cbb7e0dfcd15e5c5d5686fdb10ae764ad206d3a9e265f40734f0ba3d576d->enter($__internal_a802cbb7e0dfcd15e5c5d5686fdb10ae764ad206d3a9e265f40734f0ba3d576d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cf7ae6bdb65942fd2f11e41b0d57e66b02b34b2ac19d965f0ce34231ae822003->leave($__internal_cf7ae6bdb65942fd2f11e41b0d57e66b02b34b2ac19d965f0ce34231ae822003_prof);

        
        $__internal_a802cbb7e0dfcd15e5c5d5686fdb10ae764ad206d3a9e265f40734f0ba3d576d->leave($__internal_a802cbb7e0dfcd15e5c5d5686fdb10ae764ad206d3a9e265f40734f0ba3d576d_prof);

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
