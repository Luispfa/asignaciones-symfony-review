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
        $__internal_017f03944ae9259793edba8c9a4811b2119976994d954b60cadb3b891b450495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017f03944ae9259793edba8c9a4811b2119976994d954b60cadb3b891b450495->enter($__internal_017f03944ae9259793edba8c9a4811b2119976994d954b60cadb3b891b450495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_cf0919a5ba2cc108a276864edc1e7e4ef6c2de4b451da090a1656d09e41fce02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0919a5ba2cc108a276864edc1e7e4ef6c2de4b451da090a1656d09e41fce02->enter($__internal_cf0919a5ba2cc108a276864edc1e7e4ef6c2de4b451da090a1656d09e41fce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_017f03944ae9259793edba8c9a4811b2119976994d954b60cadb3b891b450495->leave($__internal_017f03944ae9259793edba8c9a4811b2119976994d954b60cadb3b891b450495_prof);

        
        $__internal_cf0919a5ba2cc108a276864edc1e7e4ef6c2de4b451da090a1656d09e41fce02->leave($__internal_cf0919a5ba2cc108a276864edc1e7e4ef6c2de4b451da090a1656d09e41fce02_prof);

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
