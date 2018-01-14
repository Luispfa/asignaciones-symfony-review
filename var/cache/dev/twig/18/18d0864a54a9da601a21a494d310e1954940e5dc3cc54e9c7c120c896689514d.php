<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1afa78cfa343a1f0038ec1d64eb58de68a6e91d726ac0a047a2d64d94d3a27d8 extends Twig_Template
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
        $__internal_36828e682e6ecd936fe72a808ddf5811252fc3d7a9c84bb1bc11bf0bb019e2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36828e682e6ecd936fe72a808ddf5811252fc3d7a9c84bb1bc11bf0bb019e2c1->enter($__internal_36828e682e6ecd936fe72a808ddf5811252fc3d7a9c84bb1bc11bf0bb019e2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a950d6fcca6f7c9adcd9ecc6595b4d6aa02c7279040a252244f5bd248369678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a950d6fcca6f7c9adcd9ecc6595b4d6aa02c7279040a252244f5bd248369678b->enter($__internal_a950d6fcca6f7c9adcd9ecc6595b4d6aa02c7279040a252244f5bd248369678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_36828e682e6ecd936fe72a808ddf5811252fc3d7a9c84bb1bc11bf0bb019e2c1->leave($__internal_36828e682e6ecd936fe72a808ddf5811252fc3d7a9c84bb1bc11bf0bb019e2c1_prof);

        
        $__internal_a950d6fcca6f7c9adcd9ecc6595b4d6aa02c7279040a252244f5bd248369678b->leave($__internal_a950d6fcca6f7c9adcd9ecc6595b4d6aa02c7279040a252244f5bd248369678b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
