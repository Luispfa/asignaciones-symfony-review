<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_aa2e58817133491c2b0d627e8741e5459503bb34dce29dee6a64e84e7a6f6ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_2f3819f9582d44a2cda9eafde048e46db7f90f4ac8c16cc36b2eeb6aaac5e8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3819f9582d44a2cda9eafde048e46db7f90f4ac8c16cc36b2eeb6aaac5e8bf->enter($__internal_2f3819f9582d44a2cda9eafde048e46db7f90f4ac8c16cc36b2eeb6aaac5e8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_545c81fd47453036684d2acbb08b5bbf521cf581e1e6da194139d2087ed4e2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545c81fd47453036684d2acbb08b5bbf521cf581e1e6da194139d2087ed4e2f0->enter($__internal_545c81fd47453036684d2acbb08b5bbf521cf581e1e6da194139d2087ed4e2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f3819f9582d44a2cda9eafde048e46db7f90f4ac8c16cc36b2eeb6aaac5e8bf->leave($__internal_2f3819f9582d44a2cda9eafde048e46db7f90f4ac8c16cc36b2eeb6aaac5e8bf_prof);

        
        $__internal_545c81fd47453036684d2acbb08b5bbf521cf581e1e6da194139d2087ed4e2f0->leave($__internal_545c81fd47453036684d2acbb08b5bbf521cf581e1e6da194139d2087ed4e2f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f233f304fa8da8eaf8a2e42ce93201287ea7b61987a2b0a9775716efc1349ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f233f304fa8da8eaf8a2e42ce93201287ea7b61987a2b0a9775716efc1349ac9->enter($__internal_f233f304fa8da8eaf8a2e42ce93201287ea7b61987a2b0a9775716efc1349ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99fd0bc0003a48c14516f74bbc14275a81d6f5a586b25eccde8cb5bc1916b5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fd0bc0003a48c14516f74bbc14275a81d6f5a586b25eccde8cb5bc1916b5df->enter($__internal_99fd0bc0003a48c14516f74bbc14275a81d6f5a586b25eccde8cb5bc1916b5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_99fd0bc0003a48c14516f74bbc14275a81d6f5a586b25eccde8cb5bc1916b5df->leave($__internal_99fd0bc0003a48c14516f74bbc14275a81d6f5a586b25eccde8cb5bc1916b5df_prof);

        
        $__internal_f233f304fa8da8eaf8a2e42ce93201287ea7b61987a2b0a9775716efc1349ac9->leave($__internal_f233f304fa8da8eaf8a2e42ce93201287ea7b61987a2b0a9775716efc1349ac9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_70af698f6e30a38660d1f1944eb96e983f0b81e4c2400f5a856cca0a55334ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70af698f6e30a38660d1f1944eb96e983f0b81e4c2400f5a856cca0a55334ed8->enter($__internal_70af698f6e30a38660d1f1944eb96e983f0b81e4c2400f5a856cca0a55334ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa4c8ea212928bee1c5cd35d6cacadd20d913686f0a20b832f6b6b662d2be549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4c8ea212928bee1c5cd35d6cacadd20d913686f0a20b832f6b6b662d2be549->enter($__internal_fa4c8ea212928bee1c5cd35d6cacadd20d913686f0a20b832f6b6b662d2be549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_fa4c8ea212928bee1c5cd35d6cacadd20d913686f0a20b832f6b6b662d2be549->leave($__internal_fa4c8ea212928bee1c5cd35d6cacadd20d913686f0a20b832f6b6b662d2be549_prof);

        
        $__internal_70af698f6e30a38660d1f1944eb96e983f0b81e4c2400f5a856cca0a55334ed8->leave($__internal_70af698f6e30a38660d1f1944eb96e983f0b81e4c2400f5a856cca0a55334ed8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_03a8226743e25da6724f1437beef24b618cd606c4a5c6b85e8d3716302626576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a8226743e25da6724f1437beef24b618cd606c4a5c6b85e8d3716302626576->enter($__internal_03a8226743e25da6724f1437beef24b618cd606c4a5c6b85e8d3716302626576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c028ffe1c6572f9400d66b3d877eb89aba87f06efdeee543cb0a48e127eb57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c028ffe1c6572f9400d66b3d877eb89aba87f06efdeee543cb0a48e127eb57c->enter($__internal_7c028ffe1c6572f9400d66b3d877eb89aba87f06efdeee543cb0a48e127eb57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7c028ffe1c6572f9400d66b3d877eb89aba87f06efdeee543cb0a48e127eb57c->leave($__internal_7c028ffe1c6572f9400d66b3d877eb89aba87f06efdeee543cb0a48e127eb57c_prof);

        
        $__internal_03a8226743e25da6724f1437beef24b618cd606c4a5c6b85e8d3716302626576->leave($__internal_03a8226743e25da6724f1437beef24b618cd606c4a5c6b85e8d3716302626576_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
