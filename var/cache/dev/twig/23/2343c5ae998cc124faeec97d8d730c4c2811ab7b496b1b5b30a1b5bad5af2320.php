<?php

/* KnpPaginatorBundle:Pagination:filtration.html.twig */
class __TwigTemplate_d95835c3c221b3fa90d79479e680d718ce0e4a458a5d168ad5de195ccf1a8b92 extends Twig_Template
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
        $__internal_9d3d8fecb3d8feb01a321e79440abb536432806909d9acb400bd3244e32e8196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3d8fecb3d8feb01a321e79440abb536432806909d9acb400bd3244e32e8196->enter($__internal_9d3d8fecb3d8feb01a321e79440abb536432806909d9acb400bd3244e32e8196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:filtration.html.twig"));

        $__internal_3e6a710f64d822b227f256d16d1c2fa791f8699f3ac2e9d5b32f5338f72cd7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6a710f64d822b227f256d16d1c2fa791f8699f3ac2e9d5b32f5338f72cd7f0->enter($__internal_3e6a710f64d822b227f256d16d1c2fa791f8699f3ac2e9d5b32f5338f72cd7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:filtration.html.twig"));

        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["filterFieldName"]) || array_key_exists("filterFieldName", $context) ? $context["filterFieldName"] : (function () { throw new Twig_Error_Runtime('Variable "filterFieldName" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\"";
            if (((isset($context["selectedField"]) || array_key_exists("selectedField", $context) ? $context["selectedField"] : (function () { throw new Twig_Error_Runtime('Variable "selectedField" does not exist.', 5, $this->getSourceContext()); })()) == $context["field"])) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new Twig_Error_Runtime('Variable "selectedValue" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["filterValueName"]) || array_key_exists("filterValueName", $context) ? $context["filterValueName"] : (function () { throw new Twig_Error_Runtime('Variable "filterValueName" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 11, $this->getSourceContext()); })()), "button", array()), "html", null, true);
        echo "</button>

</form>
";
        
        $__internal_9d3d8fecb3d8feb01a321e79440abb536432806909d9acb400bd3244e32e8196->leave($__internal_9d3d8fecb3d8feb01a321e79440abb536432806909d9acb400bd3244e32e8196_prof);

        
        $__internal_3e6a710f64d822b227f256d16d1c2fa791f8699f3ac2e9d5b32f5338f72cd7f0->leave($__internal_3e6a710f64d822b227f256d16d1c2fa791f8699f3ac2e9d5b32f5338f72cd7f0_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 9,  54 => 7,  39 => 5,  35 => 4,  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"get\" action=\"{{ action }}\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"{{ filterFieldName }}\">
        {% for field, label in fields %}
            <option value=\"{{ field }}\"{% if selectedField == field %} selected=\"selected\"{% endif %}>{{ label }}</option>
        {% endfor %}
    </select>

    <input type=\"text\" value=\"{{ selectedValue }}\" name=\"{{ filterValueName }}\" />

    <button>{{ options.button }}</button>

</form>
", "KnpPaginatorBundle:Pagination:filtration.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/filtration.html.twig");
    }
}
