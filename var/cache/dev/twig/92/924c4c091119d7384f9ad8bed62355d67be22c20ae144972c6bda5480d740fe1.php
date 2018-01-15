<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_9bc180e61d43235eb328093126f53542a5ac9467fec2b287edcae44f47a3362f extends Twig_Template
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
        $__internal_1af047ae05362f8251be088288bc6d556b956ac4e0b35104424dc30023d1cce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af047ae05362f8251be088288bc6d556b956ac4e0b35104424dc30023d1cce9->enter($__internal_1af047ae05362f8251be088288bc6d556b956ac4e0b35104424dc30023d1cce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_4434095dd7aab90828b1dd26d70f94b397cc225f01e6b99dffe5382117d175a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4434095dd7aab90828b1dd26d70f94b397cc225f01e6b99dffe5382117d175a0->enter($__internal_4434095dd7aab90828b1dd26d70f94b397cc225f01e6b99dffe5382117d175a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_1af047ae05362f8251be088288bc6d556b956ac4e0b35104424dc30023d1cce9->leave($__internal_1af047ae05362f8251be088288bc6d556b956ac4e0b35104424dc30023d1cce9_prof);

        
        $__internal_4434095dd7aab90828b1dd26d70f94b397cc225f01e6b99dffe5382117d175a0->leave($__internal_4434095dd7aab90828b1dd26d70f94b397cc225f01e6b99dffe5382117d175a0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
