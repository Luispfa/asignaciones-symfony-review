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
        $__internal_1a2d806584fb1d3bdbe6ce403abc17653b486b1a415e8f5d73be5fb2098d477f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2d806584fb1d3bdbe6ce403abc17653b486b1a415e8f5d73be5fb2098d477f->enter($__internal_1a2d806584fb1d3bdbe6ce403abc17653b486b1a415e8f5d73be5fb2098d477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_68b0bfb3f4a370dc2cc58e0ccaeb1e5013a1a4725fd26b6ce1dd315778b4d7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b0bfb3f4a370dc2cc58e0ccaeb1e5013a1a4725fd26b6ce1dd315778b4d7d9->enter($__internal_68b0bfb3f4a370dc2cc58e0ccaeb1e5013a1a4725fd26b6ce1dd315778b4d7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a2d806584fb1d3bdbe6ce403abc17653b486b1a415e8f5d73be5fb2098d477f->leave($__internal_1a2d806584fb1d3bdbe6ce403abc17653b486b1a415e8f5d73be5fb2098d477f_prof);

        
        $__internal_68b0bfb3f4a370dc2cc58e0ccaeb1e5013a1a4725fd26b6ce1dd315778b4d7d9->leave($__internal_68b0bfb3f4a370dc2cc58e0ccaeb1e5013a1a4725fd26b6ce1dd315778b4d7d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5391a207bd2812155ee845acb43a3e0cc0215b2e0ba5046cbaf28c92ab3b1b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5391a207bd2812155ee845acb43a3e0cc0215b2e0ba5046cbaf28c92ab3b1b76->enter($__internal_5391a207bd2812155ee845acb43a3e0cc0215b2e0ba5046cbaf28c92ab3b1b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc3b28c389af4fe0ece2cbd1797517fba4b50c2d30bd9463efa9fe79e883b0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3b28c389af4fe0ece2cbd1797517fba4b50c2d30bd9463efa9fe79e883b0a3->enter($__internal_cc3b28c389af4fe0ece2cbd1797517fba4b50c2d30bd9463efa9fe79e883b0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cc3b28c389af4fe0ece2cbd1797517fba4b50c2d30bd9463efa9fe79e883b0a3->leave($__internal_cc3b28c389af4fe0ece2cbd1797517fba4b50c2d30bd9463efa9fe79e883b0a3_prof);

        
        $__internal_5391a207bd2812155ee845acb43a3e0cc0215b2e0ba5046cbaf28c92ab3b1b76->leave($__internal_5391a207bd2812155ee845acb43a3e0cc0215b2e0ba5046cbaf28c92ab3b1b76_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4abb0561f36c567c1ec72f3c81b922e5235a328268c4e3d16cacd8350305211c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abb0561f36c567c1ec72f3c81b922e5235a328268c4e3d16cacd8350305211c->enter($__internal_4abb0561f36c567c1ec72f3c81b922e5235a328268c4e3d16cacd8350305211c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f2f6e291c14790d8c8d303de8475f295d30582ca38f209f870dc811fad7f199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2f6e291c14790d8c8d303de8475f295d30582ca38f209f870dc811fad7f199->enter($__internal_5f2f6e291c14790d8c8d303de8475f295d30582ca38f209f870dc811fad7f199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5f2f6e291c14790d8c8d303de8475f295d30582ca38f209f870dc811fad7f199->leave($__internal_5f2f6e291c14790d8c8d303de8475f295d30582ca38f209f870dc811fad7f199_prof);

        
        $__internal_4abb0561f36c567c1ec72f3c81b922e5235a328268c4e3d16cacd8350305211c->leave($__internal_4abb0561f36c567c1ec72f3c81b922e5235a328268c4e3d16cacd8350305211c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed96e770dc77adeb0bcf63e3eee56e71982b870162c912483310a2b6e6e49576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed96e770dc77adeb0bcf63e3eee56e71982b870162c912483310a2b6e6e49576->enter($__internal_ed96e770dc77adeb0bcf63e3eee56e71982b870162c912483310a2b6e6e49576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd7b6548052779c3db4aeb86d5ebe72285c8ddfa9805880ec6c79680cad43976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7b6548052779c3db4aeb86d5ebe72285c8ddfa9805880ec6c79680cad43976->enter($__internal_bd7b6548052779c3db4aeb86d5ebe72285c8ddfa9805880ec6c79680cad43976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_bd7b6548052779c3db4aeb86d5ebe72285c8ddfa9805880ec6c79680cad43976->leave($__internal_bd7b6548052779c3db4aeb86d5ebe72285c8ddfa9805880ec6c79680cad43976_prof);

        
        $__internal_ed96e770dc77adeb0bcf63e3eee56e71982b870162c912483310a2b6e6e49576->leave($__internal_ed96e770dc77adeb0bcf63e3eee56e71982b870162c912483310a2b6e6e49576_prof);

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
