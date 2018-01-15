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
        $__internal_c6a2d9abeb91d8e23bbb8625ef3f76223ea23ee98689bfb1452dcb48503c9f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a2d9abeb91d8e23bbb8625ef3f76223ea23ee98689bfb1452dcb48503c9f37->enter($__internal_c6a2d9abeb91d8e23bbb8625ef3f76223ea23ee98689bfb1452dcb48503c9f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_668435b332d18ff840193994a13e9de9cfed5184c1e07dfbf7dbc1ff23a9e892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668435b332d18ff840193994a13e9de9cfed5184c1e07dfbf7dbc1ff23a9e892->enter($__internal_668435b332d18ff840193994a13e9de9cfed5184c1e07dfbf7dbc1ff23a9e892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_c6a2d9abeb91d8e23bbb8625ef3f76223ea23ee98689bfb1452dcb48503c9f37->leave($__internal_c6a2d9abeb91d8e23bbb8625ef3f76223ea23ee98689bfb1452dcb48503c9f37_prof);

        
        $__internal_668435b332d18ff840193994a13e9de9cfed5184c1e07dfbf7dbc1ff23a9e892->leave($__internal_668435b332d18ff840193994a13e9de9cfed5184c1e07dfbf7dbc1ff23a9e892_prof);

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
