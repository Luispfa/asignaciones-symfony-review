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
        $__internal_2409d4173109de861832045c10388cb3030260bf0d11a47228c1469b5f2082cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2409d4173109de861832045c10388cb3030260bf0d11a47228c1469b5f2082cf->enter($__internal_2409d4173109de861832045c10388cb3030260bf0d11a47228c1469b5f2082cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_40e914dbf865109708ac19d70a9999d86d2501452ec29038b811a1c9d5289df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e914dbf865109708ac19d70a9999d86d2501452ec29038b811a1c9d5289df6->enter($__internal_40e914dbf865109708ac19d70a9999d86d2501452ec29038b811a1c9d5289df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2409d4173109de861832045c10388cb3030260bf0d11a47228c1469b5f2082cf->leave($__internal_2409d4173109de861832045c10388cb3030260bf0d11a47228c1469b5f2082cf_prof);

        
        $__internal_40e914dbf865109708ac19d70a9999d86d2501452ec29038b811a1c9d5289df6->leave($__internal_40e914dbf865109708ac19d70a9999d86d2501452ec29038b811a1c9d5289df6_prof);

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
