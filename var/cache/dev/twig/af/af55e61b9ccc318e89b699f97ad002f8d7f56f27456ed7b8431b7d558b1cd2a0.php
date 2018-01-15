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
        $__internal_36ca30d01844f4066f6a56c60960159d69fa4eacd13ff982c5e6838a50682f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ca30d01844f4066f6a56c60960159d69fa4eacd13ff982c5e6838a50682f65->enter($__internal_36ca30d01844f4066f6a56c60960159d69fa4eacd13ff982c5e6838a50682f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_880d6249d5b8bf236789ca8c2107039c4de3ca1cfd392853ff8d76cc5cb7530c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880d6249d5b8bf236789ca8c2107039c4de3ca1cfd392853ff8d76cc5cb7530c->enter($__internal_880d6249d5b8bf236789ca8c2107039c4de3ca1cfd392853ff8d76cc5cb7530c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_36ca30d01844f4066f6a56c60960159d69fa4eacd13ff982c5e6838a50682f65->leave($__internal_36ca30d01844f4066f6a56c60960159d69fa4eacd13ff982c5e6838a50682f65_prof);

        
        $__internal_880d6249d5b8bf236789ca8c2107039c4de3ca1cfd392853ff8d76cc5cb7530c->leave($__internal_880d6249d5b8bf236789ca8c2107039c4de3ca1cfd392853ff8d76cc5cb7530c_prof);

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
