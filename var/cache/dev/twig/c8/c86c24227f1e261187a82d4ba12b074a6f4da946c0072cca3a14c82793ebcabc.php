<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_20320d3c558d378918f1192b352aa611727af5e55e4f358e1bcf5a0b5ab7dc2b extends Twig_Template
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
        $__internal_a718a6246021da64bc4ba67b61fcac6e63a393b7adb4c594424c3fc36e1e2456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a718a6246021da64bc4ba67b61fcac6e63a393b7adb4c594424c3fc36e1e2456->enter($__internal_a718a6246021da64bc4ba67b61fcac6e63a393b7adb4c594424c3fc36e1e2456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_6982d7fc10790128e3cc07437923f6415db697f2469012f3dd54ae9b98fc6043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6982d7fc10790128e3cc07437923f6415db697f2469012f3dd54ae9b98fc6043->enter($__internal_6982d7fc10790128e3cc07437923f6415db697f2469012f3dd54ae9b98fc6043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a718a6246021da64bc4ba67b61fcac6e63a393b7adb4c594424c3fc36e1e2456->leave($__internal_a718a6246021da64bc4ba67b61fcac6e63a393b7adb4c594424c3fc36e1e2456_prof);

        
        $__internal_6982d7fc10790128e3cc07437923f6415db697f2469012f3dd54ae9b98fc6043->leave($__internal_6982d7fc10790128e3cc07437923f6415db697f2469012f3dd54ae9b98fc6043_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
