<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ee350d5540940bfb1d22994be165978a57b91ce485dc8c3db768dc3825f22f22 extends Twig_Template
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
        $__internal_c5256fc25ce0086d1462262601e05ca4cf1faafed3f73849d5fe9c9855931309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5256fc25ce0086d1462262601e05ca4cf1faafed3f73849d5fe9c9855931309->enter($__internal_c5256fc25ce0086d1462262601e05ca4cf1faafed3f73849d5fe9c9855931309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9fb57c5948721f8a9e94dbc7b4167aae840745dde8d1e925d9d1f16e180e5ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb57c5948721f8a9e94dbc7b4167aae840745dde8d1e925d9d1f16e180e5ef9->enter($__internal_9fb57c5948721f8a9e94dbc7b4167aae840745dde8d1e925d9d1f16e180e5ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c5256fc25ce0086d1462262601e05ca4cf1faafed3f73849d5fe9c9855931309->leave($__internal_c5256fc25ce0086d1462262601e05ca4cf1faafed3f73849d5fe9c9855931309_prof);

        
        $__internal_9fb57c5948721f8a9e94dbc7b4167aae840745dde8d1e925d9d1f16e180e5ef9->leave($__internal_9fb57c5948721f8a9e94dbc7b4167aae840745dde8d1e925d9d1f16e180e5ef9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
