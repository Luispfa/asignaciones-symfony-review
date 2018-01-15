<?php

/* :user:add.html.twig */
class __TwigTemplate_50e58eff39ea8d8d497d585c631fed1295f138f6c934a9d3646943a8e780ddb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:add.html.twig", 1);
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
        $__internal_0b71663236a96426901df49d3be8e74d4eccf8ed968181dbb48979f0c978e657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b71663236a96426901df49d3be8e74d4eccf8ed968181dbb48979f0c978e657->enter($__internal_0b71663236a96426901df49d3be8e74d4eccf8ed968181dbb48979f0c978e657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:add.html.twig"));

        $__internal_8d02fb5281ecdffaac71d4c8918d732e651a821e6a6eb9c1e5c22485eff7c0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d02fb5281ecdffaac71d4c8918d732e651a821e6a6eb9c1e5c22485eff7c0c5->enter($__internal_8d02fb5281ecdffaac71d4c8918d732e651a821e6a6eb9c1e5c22485eff7c0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b71663236a96426901df49d3be8e74d4eccf8ed968181dbb48979f0c978e657->leave($__internal_0b71663236a96426901df49d3be8e74d4eccf8ed968181dbb48979f0c978e657_prof);

        
        $__internal_8d02fb5281ecdffaac71d4c8918d732e651a821e6a6eb9c1e5c22485eff7c0c5->leave($__internal_8d02fb5281ecdffaac71d4c8918d732e651a821e6a6eb9c1e5c22485eff7c0c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_248e72c759150e6d4d9717b43b8e2b751f47e607b3f5f6b4d7f36d769791e4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248e72c759150e6d4d9717b43b8e2b751f47e607b3f5f6b4d7f36d769791e4f9->enter($__internal_248e72c759150e6d4d9717b43b8e2b751f47e607b3f5f6b4d7f36d769791e4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8bbb0e1d8e02d1ff59c221eaef6b4906adca4ab0ff457ad26e7729a43e23c02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbb0e1d8e02d1ff59c221eaef6b4906adca4ab0ff457ad26e7729a43e23c02d->enter($__internal_8bbb0e1d8e02d1ff59c221eaef6b4906adca4ab0ff457ad26e7729a43e23c02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New user", array(), "messages");
        echo "</h2>
                </div>
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "username", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your username")));
        echo "
                    <span class=\"text-danger\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "username", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "firstName", array()), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your first name")));
        echo "
                    <span class=\"text-danger\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "firstName", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "lastName", array()), 'label');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your last name")));
        echo "
                    <span class=\"text-danger\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "lastName", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "email", array()), 'label');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your email")));
        echo "
                    <span class=\"text-danger\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "password", array()), 'label');
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
                    <span class=\"text-danger\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "password", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "role", array()), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    <span class=\"text-danger\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), "role", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"checkbox\">
                    <label>
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "isActive", array()), 'widget');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Active", array(), "messages");
        // line 52
        echo "                        <span class=\"text-danger\">";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "isActive", array()), 'errors');
        echo "</span>
                    </label>
                </div>
                </fieldset>

                <p>
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "save", array()), 'widget', array("label" => "Create user", "attr" => array("class" => "btn btn-success")));
        echo "
                </p>                

                ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8bbb0e1d8e02d1ff59c221eaef6b4906adca4ab0ff457ad26e7729a43e23c02d->leave($__internal_8bbb0e1d8e02d1ff59c221eaef6b4906adca4ab0ff457ad26e7729a43e23c02d_prof);

        
        $__internal_248e72c759150e6d4d9717b43b8e2b751f47e607b3f5f6b4d7f36d769791e4f9->leave($__internal_248e72c759150e6d4d9717b43b8e2b751f47e607b3f5f6b4d7f36d769791e4f9_prof);

    }

    public function getTemplateName()
    {
        return ":user:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 61,  173 => 58,  163 => 52,  160 => 51,  152 => 46,  148 => 45,  144 => 44,  137 => 40,  133 => 39,  129 => 38,  122 => 34,  118 => 33,  114 => 32,  107 => 28,  103 => 27,  99 => 26,  92 => 22,  88 => 21,  84 => 20,  77 => 16,  73 => 15,  69 => 14,  63 => 11,  58 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>{% trans %}New user{% endtrans %}</h2>
                </div>
                {{ form_start(form, { 'attr' : {'novalidate' : 'novalidate' , 'role' : 'form'} }) }}

                <div class=\"form-group\">
                    {{ form_label(form.username) }}
                    {{ form_widget(form.username, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your username'} }) }}
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
                        {{ form_widget(form.isActive) }}{% trans %}Active{% endtrans %}
                        <span class=\"text-danger\">{{ form_errors(form.isActive) }}</span>
                    </label>
                </div>
                </fieldset>

                <p>
                    {{ form_widget(form.save, {'label' : 'Create user', 'attr': {'class': 'btn btn-success'}}) }}
                </p>                

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", ":user:add.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/user/add.html.twig");
    }
}
