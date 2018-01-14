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
        $__internal_6b28ba72d5b99e2557baf256d42ea05b35a8515a43a2fda4064b8f54ccdea981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b28ba72d5b99e2557baf256d42ea05b35a8515a43a2fda4064b8f54ccdea981->enter($__internal_6b28ba72d5b99e2557baf256d42ea05b35a8515a43a2fda4064b8f54ccdea981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_fef172c4331f772fd4dde74f7e8c85ab97ea5d47072b9911c4d824cc70b78ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef172c4331f772fd4dde74f7e8c85ab97ea5d47072b9911c4d824cc70b78ddf->enter($__internal_fef172c4331f772fd4dde74f7e8c85ab97ea5d47072b9911c4d824cc70b78ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_6b28ba72d5b99e2557baf256d42ea05b35a8515a43a2fda4064b8f54ccdea981->leave($__internal_6b28ba72d5b99e2557baf256d42ea05b35a8515a43a2fda4064b8f54ccdea981_prof);

        
        $__internal_fef172c4331f772fd4dde74f7e8c85ab97ea5d47072b9911c4d824cc70b78ddf->leave($__internal_fef172c4331f772fd4dde74f7e8c85ab97ea5d47072b9911c4d824cc70b78ddf_prof);

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
