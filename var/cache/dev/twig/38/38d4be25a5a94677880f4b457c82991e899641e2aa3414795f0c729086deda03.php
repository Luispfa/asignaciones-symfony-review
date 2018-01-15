<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_cf3733c5a14a45e54b8ad5e0bd72d215a29071645f73a6e85788f6f24e87ce9a extends Twig_Template
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
        $__internal_608a7706289309e24d37edaf23ced0188ef0787064a98e9749e0381619719f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608a7706289309e24d37edaf23ced0188ef0787064a98e9749e0381619719f23->enter($__internal_608a7706289309e24d37edaf23ced0188ef0787064a98e9749e0381619719f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_235364e4b2b26b7be658d7e5862b23cea7bd2ce0c047d7aa9b9baa22f157d405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235364e4b2b26b7be658d7e5862b23cea7bd2ce0c047d7aa9b9baa22f157d405->enter($__internal_235364e4b2b26b7be658d7e5862b23cea7bd2ce0c047d7aa9b9baa22f157d405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_608a7706289309e24d37edaf23ced0188ef0787064a98e9749e0381619719f23->leave($__internal_608a7706289309e24d37edaf23ced0188ef0787064a98e9749e0381619719f23_prof);

        
        $__internal_235364e4b2b26b7be658d7e5862b23cea7bd2ce0c047d7aa9b9baa22f157d405->leave($__internal_235364e4b2b26b7be658d7e5862b23cea7bd2ce0c047d7aa9b9baa22f157d405_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "@KnpPaginator/Pagination/sortable_link.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
