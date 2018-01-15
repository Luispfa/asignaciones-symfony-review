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
        $__internal_d4b9a9fafa225ea787af75aa0f4b4efb2fad19c56feda110e9a634fe1195a7f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b9a9fafa225ea787af75aa0f4b4efb2fad19c56feda110e9a634fe1195a7f6->enter($__internal_d4b9a9fafa225ea787af75aa0f4b4efb2fad19c56feda110e9a634fe1195a7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_3674641f8165842ae866a4901a4bc3da95b25d4a1aa7304db8b58d060769f50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3674641f8165842ae866a4901a4bc3da95b25d4a1aa7304db8b58d060769f50b->enter($__internal_3674641f8165842ae866a4901a4bc3da95b25d4a1aa7304db8b58d060769f50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_d4b9a9fafa225ea787af75aa0f4b4efb2fad19c56feda110e9a634fe1195a7f6->leave($__internal_d4b9a9fafa225ea787af75aa0f4b4efb2fad19c56feda110e9a634fe1195a7f6_prof);

        
        $__internal_3674641f8165842ae866a4901a4bc3da95b25d4a1aa7304db8b58d060769f50b->leave($__internal_3674641f8165842ae866a4901a4bc3da95b25d4a1aa7304db8b58d060769f50b_prof);

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
