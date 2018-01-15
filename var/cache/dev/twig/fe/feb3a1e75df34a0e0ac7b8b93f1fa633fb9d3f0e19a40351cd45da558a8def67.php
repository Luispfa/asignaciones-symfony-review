<?php

/* forms/form.html.twig */
class __TwigTemplate_77f5656ccb84a58d865c092ad766105180f40eb869a87c0a736e495e785bf57b extends Twig_Template
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
        $__internal_53d643ea6cf95af86905f88e330787e825bcfe8611dd8c76a68ea3f2b03505f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d643ea6cf95af86905f88e330787e825bcfe8611dd8c76a68ea3f2b03505f3->enter($__internal_53d643ea6cf95af86905f88e330787e825bcfe8611dd8c76a68ea3f2b03505f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/form.html.twig"));

        $__internal_c7c093a99b8771311635fe988178d11aeed19d22604dd6739fe5231eb42d338f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c093a99b8771311635fe988178d11aeed19d22604dd6739fe5231eb42d338f->enter($__internal_c7c093a99b8771311635fe988178d11aeed19d22604dd6739fe5231eb42d338f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 1, $this->getSourceContext()); })()), "form")) : ("form")))));
        echo "

";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'widget');
        echo "

";
        // line 5
        if (( !array_key_exists("with_submit", $context) || ((isset($context["with_submit"]) || array_key_exists("with_submit", $context) ? $context["with_submit"] : (function () { throw new Twig_Error_Runtime('Variable "with_submit" does not exist.', 5, $this->getSourceContext()); })()) == true))) {
            // line 6
            echo "    <input type=\"button\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete user"), "html", null, true);
            echo "\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\" >
";
        }
        // line 8
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

<script>
    var message = '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "';

    function confirmDelete()
    {
        bootbox.confirm(message, function (result) {
            if (result == true)
            {
                document.form.submit();
            }
        });
    }
</script>";
        
        $__internal_53d643ea6cf95af86905f88e330787e825bcfe8611dd8c76a68ea3f2b03505f3->leave($__internal_53d643ea6cf95af86905f88e330787e825bcfe8611dd8c76a68ea3f2b03505f3_prof);

        
        $__internal_c7c093a99b8771311635fe988178d11aeed19d22604dd6739fe5231eb42d338f->leave($__internal_c7c093a99b8771311635fe988178d11aeed19d22604dd6739fe5231eb42d338f_prof);

    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  46 => 9,  43 => 8,  37 => 6,  35 => 5,  30 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': id|default('form')}} ) }}

{{ form_widget(form) }}

{% if with_submit is not defined or with_submit == true %}
    <input type=\"button\" value=\"{{ 'Delete user'|trans }}\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\" >
{% endif %}

{{ form_end(form) }}

<script>
    var message = '{{ message }}';

    function confirmDelete()
    {
        bootbox.confirm(message, function (result) {
            if (result == true)
            {
                document.form.submit();
            }
        });
    }
</script>", "forms/form.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/forms/form.html.twig");
    }
}
