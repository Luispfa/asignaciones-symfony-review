<?php

/* TwigBundle::layout.html.twig */
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
        $__internal_b577da28c7a40740be836e9a8111b4647f459fb9e82a4781920884c95ddbcdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b577da28c7a40740be836e9a8111b4647f459fb9e82a4781920884c95ddbcdb6->enter($__internal_b577da28c7a40740be836e9a8111b4647f459fb9e82a4781920884c95ddbcdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_c2c078ed895e14e58706334a4490f99166f1075e175c8ecf772c86519aae5bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c078ed895e14e58706334a4490f99166f1075e175c8ecf772c86519aae5bde->enter($__internal_c2c078ed895e14e58706334a4490f99166f1075e175c8ecf772c86519aae5bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_b577da28c7a40740be836e9a8111b4647f459fb9e82a4781920884c95ddbcdb6->leave($__internal_b577da28c7a40740be836e9a8111b4647f459fb9e82a4781920884c95ddbcdb6_prof);

        
        $__internal_c2c078ed895e14e58706334a4490f99166f1075e175c8ecf772c86519aae5bde->leave($__internal_c2c078ed895e14e58706334a4490f99166f1075e175c8ecf772c86519aae5bde_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6a79e2ff799c33557d920349390087baeeda872e377035c30467d4044a1b896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a79e2ff799c33557d920349390087baeeda872e377035c30467d4044a1b896->enter($__internal_a6a79e2ff799c33557d920349390087baeeda872e377035c30467d4044a1b896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9e2216f025c7aef5beaacccf030f5685d794d43924d53de45b0dd87f8ed98d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e2216f025c7aef5beaacccf030f5685d794d43924d53de45b0dd87f8ed98d9->enter($__internal_f9e2216f025c7aef5beaacccf030f5685d794d43924d53de45b0dd87f8ed98d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f9e2216f025c7aef5beaacccf030f5685d794d43924d53de45b0dd87f8ed98d9->leave($__internal_f9e2216f025c7aef5beaacccf030f5685d794d43924d53de45b0dd87f8ed98d9_prof);

        
        $__internal_a6a79e2ff799c33557d920349390087baeeda872e377035c30467d4044a1b896->leave($__internal_a6a79e2ff799c33557d920349390087baeeda872e377035c30467d4044a1b896_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_621e36633b47fcd5464020ccdc557ca54c64eb6a81a582294df1b8b52ad39e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621e36633b47fcd5464020ccdc557ca54c64eb6a81a582294df1b8b52ad39e65->enter($__internal_621e36633b47fcd5464020ccdc557ca54c64eb6a81a582294df1b8b52ad39e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_115ea180c0fb1c3ff31b6f904da0e22692cbf9d4c5641e218e577406892eb6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115ea180c0fb1c3ff31b6f904da0e22692cbf9d4c5641e218e577406892eb6f5->enter($__internal_115ea180c0fb1c3ff31b6f904da0e22692cbf9d4c5641e218e577406892eb6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_115ea180c0fb1c3ff31b6f904da0e22692cbf9d4c5641e218e577406892eb6f5->leave($__internal_115ea180c0fb1c3ff31b6f904da0e22692cbf9d4c5641e218e577406892eb6f5_prof);

        
        $__internal_621e36633b47fcd5464020ccdc557ca54c64eb6a81a582294df1b8b52ad39e65->leave($__internal_621e36633b47fcd5464020ccdc557ca54c64eb6a81a582294df1b8b52ad39e65_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_45d0453653209ea56f4010017875e201099eca7cd9a0ceac61cfa14d49bd2982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d0453653209ea56f4010017875e201099eca7cd9a0ceac61cfa14d49bd2982->enter($__internal_45d0453653209ea56f4010017875e201099eca7cd9a0ceac61cfa14d49bd2982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f993ca77cc27055d31112583848091c1082782642577583dc2a43496db5733d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f993ca77cc27055d31112583848091c1082782642577583dc2a43496db5733d->enter($__internal_5f993ca77cc27055d31112583848091c1082782642577583dc2a43496db5733d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f993ca77cc27055d31112583848091c1082782642577583dc2a43496db5733d->leave($__internal_5f993ca77cc27055d31112583848091c1082782642577583dc2a43496db5733d_prof);

        
        $__internal_45d0453653209ea56f4010017875e201099eca7cd9a0ceac61cfa14d49bd2982->leave($__internal_45d0453653209ea56f4010017875e201099eca7cd9a0ceac61cfa14d49bd2982_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
