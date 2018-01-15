<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig */
class __TwigTemplate_63167e78990e6c77547e8878139089c4c8ef8f937299a7d61acf52b8c90e533e extends Twig_Template
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
        $__internal_a57b7d25dc96e31a9ce54c2a6a6bf51e0dc5f7a9c282e26189fcc9835d6c6ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57b7d25dc96e31a9ce54c2a6a6bf51e0dc5f7a9c282e26189fcc9835d6c6ed0->enter($__internal_a57b7d25dc96e31a9ce54c2a6a6bf51e0dc5f7a9c282e26189fcc9835d6c6ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig"));

        $__internal_b2ff97960d050b5a0c7bfdb989021a141547e4321bd26e94a4ccef2b9869afc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ff97960d050b5a0c7bfdb989021a141547e4321bd26e94a4ccef2b9869afc1->enter($__internal_b2ff97960d050b5a0c7bfdb989021a141547e4321bd26e94a4ccef2b9869afc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig"));

        // line 9
        echo "
<a";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 10, $this->getSourceContext()); })()));
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
        echo " style=\"color: #000;\">
    <span class=\"pull-right\">
        ";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sort"), "method") == (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 12, $this->getSourceContext()); })()))) {
            // line 13
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "direction"), "method") == "desc")) {
                // line 14
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
            ";
            } else {
                // line 16
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            <i class=\"glyphicon glyphicon-sort\" style=\"color: #d2d6de;\"></i>
        ";
        }
        // line 21
        echo "    </span>
    ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
        echo "
</a>
";
        
        $__internal_a57b7d25dc96e31a9ce54c2a6a6bf51e0dc5f7a9c282e26189fcc9835d6c6ed0->leave($__internal_a57b7d25dc96e31a9ce54c2a6a6bf51e0dc5f7a9c282e26189fcc9835d6c6ed0_prof);

        
        $__internal_b2ff97960d050b5a0c7bfdb989021a141547e4321bd26e94a4ccef2b9869afc1->leave($__internal_b2ff97960d050b5a0c7bfdb989021a141547e4321bd26e94a4ccef2b9869afc1_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  64 => 21,  60 => 19,  57 => 18,  53 => 16,  49 => 14,  46 => 13,  44 => 12,  28 => 10,  25 => 9,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Twitter Bootstrap v3 Sorting control implementation.
 *
 * @author Afolabi Olayinka <folabiolayinka@gmail.com>
 */
#}

<a{% for attr, value  in options %} {{ attr }}=\"{{ value }}\"{% endfor %} style=\"color: #000;\">
    <span class=\"pull-right\">
        {% if app.request.get('sort') == key %}
            {% if app.request.get('direction') == 'desc' %}
                <i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
            {% else %}
                <i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
            {% endif %}
        {% else %}
            <i class=\"glyphicon glyphicon-sort\" style=\"color: #d2d6de;\"></i>
        {% endif %}
    </span>
    {{ title }}
</a>
", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/twitter_bootstrap_v3_sortable_link.html.twig");
    }
}
