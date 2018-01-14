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
        $__internal_23f204b5736bbcf5bcf33ab479b04a2eecf758157593b66afcdd8d768dbfe0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f204b5736bbcf5bcf33ab479b04a2eecf758157593b66afcdd8d768dbfe0ee->enter($__internal_23f204b5736bbcf5bcf33ab479b04a2eecf758157593b66afcdd8d768dbfe0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_98de70bee2b7c62b569370504c4a8fff8773a7b14e067552471f189160e46c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98de70bee2b7c62b569370504c4a8fff8773a7b14e067552471f189160e46c74->enter($__internal_98de70bee2b7c62b569370504c4a8fff8773a7b14e067552471f189160e46c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_23f204b5736bbcf5bcf33ab479b04a2eecf758157593b66afcdd8d768dbfe0ee->leave($__internal_23f204b5736bbcf5bcf33ab479b04a2eecf758157593b66afcdd8d768dbfe0ee_prof);

        
        $__internal_98de70bee2b7c62b569370504c4a8fff8773a7b14e067552471f189160e46c74->leave($__internal_98de70bee2b7c62b569370504c4a8fff8773a7b14e067552471f189160e46c74_prof);

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
