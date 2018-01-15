<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_56000027888c0cdfc31d0fe4f899b9bb4a180c9b4680ca93432c217da3443dd9 extends Twig_Template
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
        $__internal_42ab593ee4bd0e1ecd772e98fe9b733a6d01c2b8aa5e1a53ec3606914c4956d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ab593ee4bd0e1ecd772e98fe9b733a6d01c2b8aa5e1a53ec3606914c4956d0->enter($__internal_42ab593ee4bd0e1ecd772e98fe9b733a6d01c2b8aa5e1a53ec3606914c4956d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_da09d9f2d99baefc34325ea6c2a9309e43437431594c22fd5b5034a8d578aa1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da09d9f2d99baefc34325ea6c2a9309e43437431594c22fd5b5034a8d578aa1b->enter($__internal_da09d9f2d99baefc34325ea6c2a9309e43437431594c22fd5b5034a8d578aa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_42ab593ee4bd0e1ecd772e98fe9b733a6d01c2b8aa5e1a53ec3606914c4956d0->leave($__internal_42ab593ee4bd0e1ecd772e98fe9b733a6d01c2b8aa5e1a53ec3606914c4956d0_prof);

        
        $__internal_da09d9f2d99baefc34325ea6c2a9309e43437431594c22fd5b5034a8d578aa1b->leave($__internal_da09d9f2d99baefc34325ea6c2a9309e43437431594c22fd5b5034a8d578aa1b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
