<?php

/* :user:edit.html.twig */
class __TwigTemplate_2d8e408da0d86a1e620e29216e51c3a16a4ba8c5f0d5a98af1118887d2d4f0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_532b757919708a6943c782292fbac51b99a561c80e122b89709d7c822b6b2d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532b757919708a6943c782292fbac51b99a561c80e122b89709d7c822b6b2d97->enter($__internal_532b757919708a6943c782292fbac51b99a561c80e122b89709d7c822b6b2d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_82c8a5585908cb41faf81a146af05d441de4b346608739fa6a596445b1cb05db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c8a5585908cb41faf81a146af05d441de4b346608739fa6a596445b1cb05db->enter($__internal_82c8a5585908cb41faf81a146af05d441de4b346608739fa6a596445b1cb05db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_532b757919708a6943c782292fbac51b99a561c80e122b89709d7c822b6b2d97->leave($__internal_532b757919708a6943c782292fbac51b99a561c80e122b89709d7c822b6b2d97_prof);

        
        $__internal_82c8a5585908cb41faf81a146af05d441de4b346608739fa6a596445b1cb05db->leave($__internal_82c8a5585908cb41faf81a146af05d441de4b346608739fa6a596445b1cb05db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35f0bb2f62c18a0243f42de2250df6fe35269459f359c7620bf8f4006919bfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f0bb2f62c18a0243f42de2250df6fe35269459f359c7620bf8f4006919bfb5->enter($__internal_35f0bb2f62c18a0243f42de2250df6fe35269459f359c7620bf8f4006919bfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c996984ac03b760fb32f990ab4c87433df828c8a6b54607fc1098f444caaacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c996984ac03b760fb32f990ab4c87433df828c8a6b54607fc1098f444caaacf->enter($__internal_8c996984ac03b760fb32f990ab4c87433df828c8a6b54607fc1098f444caaacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "messages/success.html.twig");
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit user", array(), "messages");
        echo "</h2>
                </div>
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                <h4 class=\"text-danger\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'errors');
        echo "</h4>

                <fieldset>
                    <div class=\"form-group\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "username", array()), 'label');
        echo "
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your username")));
        echo "
                        <span class=\"text-danger\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "username", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "firstName", array()), 'label');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your first name")));
        echo "
                        <span class=\"text-danger\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "firstName", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "lastName", array()), 'label');
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your last name")));
        echo "
                        <span class=\"text-danger\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "lastName", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "email", array()), 'label');
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your email")));
        echo "
                        <span class=\"text-danger\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "password", array()), 'label');
        echo "
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
                        <span class=\"text-danger\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "password", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "role", array()), 'label');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "role", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "isActive", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Active", array(), "messages");
        // line 55
        echo "                            <span class=\"text-danger\">";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "role", array()), 'errors');
        echo "</span>
                        </label>
                    </div>
                </fieldset>

                <p>
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "save", array()), 'widget', array("label" => "Update user", "attr" => array("class" => "btn btn-success")));
        echo "
                </p>

                ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8c996984ac03b760fb32f990ab4c87433df828c8a6b54607fc1098f444caaacf->leave($__internal_8c996984ac03b760fb32f990ab4c87433df828c8a6b54607fc1098f444caaacf_prof);

        
        $__internal_35f0bb2f62c18a0243f42de2250df6fe35269459f359c7620bf8f4006919bfb5->leave($__internal_35f0bb2f62c18a0243f42de2250df6fe35269459f359c7620bf8f4006919bfb5_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 64,  183 => 61,  173 => 55,  169 => 54,  161 => 49,  157 => 48,  153 => 47,  146 => 43,  142 => 42,  138 => 41,  131 => 37,  127 => 36,  123 => 35,  116 => 31,  112 => 30,  108 => 29,  101 => 25,  97 => 24,  93 => 23,  86 => 19,  82 => 18,  78 => 17,  71 => 13,  67 => 12,  62 => 10,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    {{ include('messages/success.html.twig') }}
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>{% trans %}Edit user{% endtrans %}</h2>
                </div>
                {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'role' : 'form'}}) }}
                <h4 class=\"text-danger\">{{ form_errors(form) }}</h4>

                <fieldset>
                    <div class=\"form-group\">
                        {{ form_label(form.username) }}
                        {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder' : 'Your username'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.username) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.firstName) }}
                        {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder' : 'Your first name'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.firstName) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.lastName) }}
                        {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder' : 'Your last name'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.lastName) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.email) }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Your email'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.email) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.password) }}
                        {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder' : 'Your password'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.password) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.role) }}
                        {{ form_widget(form.role, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.role) }}</span>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            {{ form_widget(form.isActive) }} {% trans %}Active{% endtrans %}
                            <span class=\"text-danger\">{{ form_errors(form.role) }}</span>
                        </label>
                    </div>
                </fieldset>

                <p>
                    {{ form_widget(form.save, {'label' : 'Update user', 'attr': {'class': 'btn btn-success'}}) }}
                </p>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", ":user:edit.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/user/edit.html.twig");
    }
}
