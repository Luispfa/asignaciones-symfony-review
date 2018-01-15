<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8501c2cdd657970e453951a369ec58d334079abb00ee3b5064fae6749ed1cef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7ad4572bde3c2e1598525083457e2a1609699194f5d234fb10c0de6e3601ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ad4572bde3c2e1598525083457e2a1609699194f5d234fb10c0de6e3601ab8->enter($__internal_e7ad4572bde3c2e1598525083457e2a1609699194f5d234fb10c0de6e3601ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4804ac62930aa7924e9676e5d73857896a645a447101a9a0fed610c9bc69e147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4804ac62930aa7924e9676e5d73857896a645a447101a9a0fed610c9bc69e147->enter($__internal_4804ac62930aa7924e9676e5d73857896a645a447101a9a0fed610c9bc69e147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e7ad4572bde3c2e1598525083457e2a1609699194f5d234fb10c0de6e3601ab8->leave($__internal_e7ad4572bde3c2e1598525083457e2a1609699194f5d234fb10c0de6e3601ab8_prof);

        
        $__internal_4804ac62930aa7924e9676e5d73857896a645a447101a9a0fed610c9bc69e147->leave($__internal_4804ac62930aa7924e9676e5d73857896a645a447101a9a0fed610c9bc69e147_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d4a50084a374d7353ca1e8478a4e655fe759d599824576161d80f5da0ad046b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4a50084a374d7353ca1e8478a4e655fe759d599824576161d80f5da0ad046b->enter($__internal_1d4a50084a374d7353ca1e8478a4e655fe759d599824576161d80f5da0ad046b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1828ccb33ab6fca6d3561f325eaaf461af74e0ec44fd49f25f8f853907184e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1828ccb33ab6fca6d3561f325eaaf461af74e0ec44fd49f25f8f853907184e92->enter($__internal_1828ccb33ab6fca6d3561f325eaaf461af74e0ec44fd49f25f8f853907184e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1828ccb33ab6fca6d3561f325eaaf461af74e0ec44fd49f25f8f853907184e92->leave($__internal_1828ccb33ab6fca6d3561f325eaaf461af74e0ec44fd49f25f8f853907184e92_prof);

        
        $__internal_1d4a50084a374d7353ca1e8478a4e655fe759d599824576161d80f5da0ad046b->leave($__internal_1d4a50084a374d7353ca1e8478a4e655fe759d599824576161d80f5da0ad046b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ccbee99f509aed867cf55a7746e844dd34cf311bb31e853ce935cc0412790c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbee99f509aed867cf55a7746e844dd34cf311bb31e853ce935cc0412790c73->enter($__internal_ccbee99f509aed867cf55a7746e844dd34cf311bb31e853ce935cc0412790c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41ddcaa88935e22d1c5fd1100ec9328f7d800ce5f725bcbc36479a1b15b2fa95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ddcaa88935e22d1c5fd1100ec9328f7d800ce5f725bcbc36479a1b15b2fa95->enter($__internal_41ddcaa88935e22d1c5fd1100ec9328f7d800ce5f725bcbc36479a1b15b2fa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_41ddcaa88935e22d1c5fd1100ec9328f7d800ce5f725bcbc36479a1b15b2fa95->leave($__internal_41ddcaa88935e22d1c5fd1100ec9328f7d800ce5f725bcbc36479a1b15b2fa95_prof);

        
        $__internal_ccbee99f509aed867cf55a7746e844dd34cf311bb31e853ce935cc0412790c73->leave($__internal_ccbee99f509aed867cf55a7746e844dd34cf311bb31e853ce935cc0412790c73_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ca8d081e45f4d2a3663f5989246926dd484cebaed627ed0a5dc44b7e5b5905d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca8d081e45f4d2a3663f5989246926dd484cebaed627ed0a5dc44b7e5b5905d->enter($__internal_8ca8d081e45f4d2a3663f5989246926dd484cebaed627ed0a5dc44b7e5b5905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7aeeb924274231a3475ad01c957289841126e8892ca0492af7d18a6376e8878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7aeeb924274231a3475ad01c957289841126e8892ca0492af7d18a6376e8878->enter($__internal_d7aeeb924274231a3475ad01c957289841126e8892ca0492af7d18a6376e8878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7aeeb924274231a3475ad01c957289841126e8892ca0492af7d18a6376e8878->leave($__internal_d7aeeb924274231a3475ad01c957289841126e8892ca0492af7d18a6376e8878_prof);

        
        $__internal_8ca8d081e45f4d2a3663f5989246926dd484cebaed627ed0a5dc44b7e5b5905d->leave($__internal_8ca8d081e45f4d2a3663f5989246926dd484cebaed627ed0a5dc44b7e5b5905d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
