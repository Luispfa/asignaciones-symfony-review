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
        $__internal_2714164d3567a972e68d8e7915273fcf3ff455ce9a0d8295cd3d531481b35313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2714164d3567a972e68d8e7915273fcf3ff455ce9a0d8295cd3d531481b35313->enter($__internal_2714164d3567a972e68d8e7915273fcf3ff455ce9a0d8295cd3d531481b35313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_e4a6045d3810a1df8b7d1e99f2ad4aa45bdd2fa5c162544ced297ceba2d53f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a6045d3810a1df8b7d1e99f2ad4aa45bdd2fa5c162544ced297ceba2d53f80->enter($__internal_e4a6045d3810a1df8b7d1e99f2ad4aa45bdd2fa5c162544ced297ceba2d53f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_2714164d3567a972e68d8e7915273fcf3ff455ce9a0d8295cd3d531481b35313->leave($__internal_2714164d3567a972e68d8e7915273fcf3ff455ce9a0d8295cd3d531481b35313_prof);

        
        $__internal_e4a6045d3810a1df8b7d1e99f2ad4aa45bdd2fa5c162544ced297ceba2d53f80->leave($__internal_e4a6045d3810a1df8b7d1e99f2ad4aa45bdd2fa5c162544ced297ceba2d53f80_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b359b90c84b795543c5eca8855ac0c1ccd17a704bf30ab331d5904d427536fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b359b90c84b795543c5eca8855ac0c1ccd17a704bf30ab331d5904d427536fa->enter($__internal_2b359b90c84b795543c5eca8855ac0c1ccd17a704bf30ab331d5904d427536fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bbfeac3cfe201ea45b704cc8f2539d4a9ed8ee8b1481d66c408c488545298a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfeac3cfe201ea45b704cc8f2539d4a9ed8ee8b1481d66c408c488545298a01->enter($__internal_bbfeac3cfe201ea45b704cc8f2539d4a9ed8ee8b1481d66c408c488545298a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bbfeac3cfe201ea45b704cc8f2539d4a9ed8ee8b1481d66c408c488545298a01->leave($__internal_bbfeac3cfe201ea45b704cc8f2539d4a9ed8ee8b1481d66c408c488545298a01_prof);

        
        $__internal_2b359b90c84b795543c5eca8855ac0c1ccd17a704bf30ab331d5904d427536fa->leave($__internal_2b359b90c84b795543c5eca8855ac0c1ccd17a704bf30ab331d5904d427536fa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_795209b6b9e1a6458f0cf527abd51934a7ab7f3c9e2b1c5549314f6b588b6c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795209b6b9e1a6458f0cf527abd51934a7ab7f3c9e2b1c5549314f6b588b6c3c->enter($__internal_795209b6b9e1a6458f0cf527abd51934a7ab7f3c9e2b1c5549314f6b588b6c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75297ac4f30821d145b38af99eeff29fbed04abfe2f558d18ae7f39911131cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75297ac4f30821d145b38af99eeff29fbed04abfe2f558d18ae7f39911131cc5->enter($__internal_75297ac4f30821d145b38af99eeff29fbed04abfe2f558d18ae7f39911131cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_75297ac4f30821d145b38af99eeff29fbed04abfe2f558d18ae7f39911131cc5->leave($__internal_75297ac4f30821d145b38af99eeff29fbed04abfe2f558d18ae7f39911131cc5_prof);

        
        $__internal_795209b6b9e1a6458f0cf527abd51934a7ab7f3c9e2b1c5549314f6b588b6c3c->leave($__internal_795209b6b9e1a6458f0cf527abd51934a7ab7f3c9e2b1c5549314f6b588b6c3c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_76bb0922b3d0ca5b1341c7548a144647ce9ccd7df6ed26bd644a21ba48a98399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bb0922b3d0ca5b1341c7548a144647ce9ccd7df6ed26bd644a21ba48a98399->enter($__internal_76bb0922b3d0ca5b1341c7548a144647ce9ccd7df6ed26bd644a21ba48a98399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbcd71cd3fdb6c90924e8a17cf3bb9e6499b08370ab84bbc5b8481bfbaa31db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcd71cd3fdb6c90924e8a17cf3bb9e6499b08370ab84bbc5b8481bfbaa31db2->enter($__internal_fbcd71cd3fdb6c90924e8a17cf3bb9e6499b08370ab84bbc5b8481bfbaa31db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fbcd71cd3fdb6c90924e8a17cf3bb9e6499b08370ab84bbc5b8481bfbaa31db2->leave($__internal_fbcd71cd3fdb6c90924e8a17cf3bb9e6499b08370ab84bbc5b8481bfbaa31db2_prof);

        
        $__internal_76bb0922b3d0ca5b1341c7548a144647ce9ccd7df6ed26bd644a21ba48a98399->leave($__internal_76bb0922b3d0ca5b1341c7548a144647ce9ccd7df6ed26bd644a21ba48a98399_prof);

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
