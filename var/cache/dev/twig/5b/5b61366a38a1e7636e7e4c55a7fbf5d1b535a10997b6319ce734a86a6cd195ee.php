<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_aa2e58817133491c2b0d627e8741e5459503bb34dce29dee6a64e84e7a6f6ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f85befab0f481b03544785fb08daa3d7196f68ece1d453d2229587bf1dcf4407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85befab0f481b03544785fb08daa3d7196f68ece1d453d2229587bf1dcf4407->enter($__internal_f85befab0f481b03544785fb08daa3d7196f68ece1d453d2229587bf1dcf4407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_61e980d9ca93df0c93c71ae1be4f7d352597bdbaab9de9cf50e08dbde49fe195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e980d9ca93df0c93c71ae1be4f7d352597bdbaab9de9cf50e08dbde49fe195->enter($__internal_61e980d9ca93df0c93c71ae1be4f7d352597bdbaab9de9cf50e08dbde49fe195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f85befab0f481b03544785fb08daa3d7196f68ece1d453d2229587bf1dcf4407->leave($__internal_f85befab0f481b03544785fb08daa3d7196f68ece1d453d2229587bf1dcf4407_prof);

        
        $__internal_61e980d9ca93df0c93c71ae1be4f7d352597bdbaab9de9cf50e08dbde49fe195->leave($__internal_61e980d9ca93df0c93c71ae1be4f7d352597bdbaab9de9cf50e08dbde49fe195_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b3d33e83c3972b141d19fef61a02edc3b247dc41e0b456e87794b0f6c3faf96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3d33e83c3972b141d19fef61a02edc3b247dc41e0b456e87794b0f6c3faf96->enter($__internal_9b3d33e83c3972b141d19fef61a02edc3b247dc41e0b456e87794b0f6c3faf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5da80611da296d5d88eaf6227f0d0319e43870da7dab5c8f37f0f5dfc8cb7248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da80611da296d5d88eaf6227f0d0319e43870da7dab5c8f37f0f5dfc8cb7248->enter($__internal_5da80611da296d5d88eaf6227f0d0319e43870da7dab5c8f37f0f5dfc8cb7248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5da80611da296d5d88eaf6227f0d0319e43870da7dab5c8f37f0f5dfc8cb7248->leave($__internal_5da80611da296d5d88eaf6227f0d0319e43870da7dab5c8f37f0f5dfc8cb7248_prof);

        
        $__internal_9b3d33e83c3972b141d19fef61a02edc3b247dc41e0b456e87794b0f6c3faf96->leave($__internal_9b3d33e83c3972b141d19fef61a02edc3b247dc41e0b456e87794b0f6c3faf96_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_42fe7d713648804085a560a084bb87d1cb842c80617743a9efa4f1dadd37c0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42fe7d713648804085a560a084bb87d1cb842c80617743a9efa4f1dadd37c0cf->enter($__internal_42fe7d713648804085a560a084bb87d1cb842c80617743a9efa4f1dadd37c0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ff67d1d6f0b797efe9f76a28ce0b8227298aa56e60400f53690226f00e0dee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff67d1d6f0b797efe9f76a28ce0b8227298aa56e60400f53690226f00e0dee3->enter($__internal_1ff67d1d6f0b797efe9f76a28ce0b8227298aa56e60400f53690226f00e0dee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_1ff67d1d6f0b797efe9f76a28ce0b8227298aa56e60400f53690226f00e0dee3->leave($__internal_1ff67d1d6f0b797efe9f76a28ce0b8227298aa56e60400f53690226f00e0dee3_prof);

        
        $__internal_42fe7d713648804085a560a084bb87d1cb842c80617743a9efa4f1dadd37c0cf->leave($__internal_42fe7d713648804085a560a084bb87d1cb842c80617743a9efa4f1dadd37c0cf_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5a396f4d7350dbd01ea2da2fcab4324d85284b575f377927cb006c0df75296f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a396f4d7350dbd01ea2da2fcab4324d85284b575f377927cb006c0df75296f->enter($__internal_a5a396f4d7350dbd01ea2da2fcab4324d85284b575f377927cb006c0df75296f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a206b71a7b45851fb7c93ae8303c7763417c7d7b3157c38f7d6c87d04a1f392d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a206b71a7b45851fb7c93ae8303c7763417c7d7b3157c38f7d6c87d04a1f392d->enter($__internal_a206b71a7b45851fb7c93ae8303c7763417c7d7b3157c38f7d6c87d04a1f392d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a206b71a7b45851fb7c93ae8303c7763417c7d7b3157c38f7d6c87d04a1f392d->leave($__internal_a206b71a7b45851fb7c93ae8303c7763417c7d7b3157c38f7d6c87d04a1f392d_prof);

        
        $__internal_a5a396f4d7350dbd01ea2da2fcab4324d85284b575f377927cb006c0df75296f->leave($__internal_a5a396f4d7350dbd01ea2da2fcab4324d85284b575f377927cb006c0df75296f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
