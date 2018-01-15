<?php

/* @WebProfiler/Profiler/header.html.twig */
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
        $__internal_286d0ec7e730c0cfb61b2177c99033830e515c1515db74776c97b66d86759051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286d0ec7e730c0cfb61b2177c99033830e515c1515db74776c97b66d86759051->enter($__internal_286d0ec7e730c0cfb61b2177c99033830e515c1515db74776c97b66d86759051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4eafd974f06e34ad5e08d8eb58d4e2d9a36063ebf62ed7621e3d64ca3f9b86c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eafd974f06e34ad5e08d8eb58d4e2d9a36063ebf62ed7621e3d64ca3f9b86c3->enter($__internal_4eafd974f06e34ad5e08d8eb58d4e2d9a36063ebf62ed7621e3d64ca3f9b86c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_286d0ec7e730c0cfb61b2177c99033830e515c1515db74776c97b66d86759051->leave($__internal_286d0ec7e730c0cfb61b2177c99033830e515c1515db74776c97b66d86759051_prof);

        
        $__internal_4eafd974f06e34ad5e08d8eb58d4e2d9a36063ebf62ed7621e3d64ca3f9b86c3->leave($__internal_4eafd974f06e34ad5e08d8eb58d4e2d9a36063ebf62ed7621e3d64ca3f9b86c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
