<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_beef9c3db2eba592e566e3a5ffa4ba89c16170bfdd69f02b1b519b51987bb02e extends Twig_Template
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
        $__internal_a40e69bd88c0ba16c2610be7aa9e5a2eb1711404dfd58bbfbf784621d356eae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40e69bd88c0ba16c2610be7aa9e5a2eb1711404dfd58bbfbf784621d356eae0->enter($__internal_a40e69bd88c0ba16c2610be7aa9e5a2eb1711404dfd58bbfbf784621d356eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0c889145b7170bd4510acca4bfd9cab127c961153d073f5fd45c6345d7e4c9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c889145b7170bd4510acca4bfd9cab127c961153d073f5fd45c6345d7e4c9ae->enter($__internal_0c889145b7170bd4510acca4bfd9cab127c961153d073f5fd45c6345d7e4c9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a40e69bd88c0ba16c2610be7aa9e5a2eb1711404dfd58bbfbf784621d356eae0->leave($__internal_a40e69bd88c0ba16c2610be7aa9e5a2eb1711404dfd58bbfbf784621d356eae0_prof);

        
        $__internal_0c889145b7170bd4510acca4bfd9cab127c961153d073f5fd45c6345d7e4c9ae->leave($__internal_0c889145b7170bd4510acca4bfd9cab127c961153d073f5fd45c6345d7e4c9ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
