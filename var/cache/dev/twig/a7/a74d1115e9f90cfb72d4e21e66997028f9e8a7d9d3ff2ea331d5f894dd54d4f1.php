<?php

/* menu.html.twig */
class __TwigTemplate_8c47720c800872bb0c138ae7e7eab0970d78de303fe1a55b03e037c7417924f8 extends Twig_Template
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
        $__internal_c534c0a48c3045ad78d1e33e78bb55acb8d9f740d3c56042c50272152de90ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c534c0a48c3045ad78d1e33e78bb55acb8d9f740d3c56042c50272152de90ac5->enter($__internal_c534c0a48c3045ad78d1e33e78bb55acb8d9f740d3c56042c50272152de90ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_25cae7c4587749330116a38053df6b884244b1b44f41276bc94b79ab1c94e8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cae7c4587749330116a38053df6b884244b1b44f41276bc94b79ab1c94e8b6->enter($__internal_25cae7c4587749330116a38053df6b884244b1b44f41276bc94b79ab1c94e8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Assignments", array(), "messages");
        echo "</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Users", array(), "messages");
        echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("List users", array(), "messages");
        echo "</a></li>
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_add");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Add users", array(), "messages");
        echo "</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tasks", array(), "messages");
        echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("List tasks", array(), "messages");
        echo "</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_add");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Add task", array(), "messages");
        echo "</a></li>
                    </ul>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_c534c0a48c3045ad78d1e33e78bb55acb8d9f740d3c56042c50272152de90ac5->leave($__internal_c534c0a48c3045ad78d1e33e78bb55acb8d9f740d3c56042c50272152de90ac5_prof);

        
        $__internal_25cae7c4587749330116a38053df6b884244b1b44f41276bc94b79ab1c94e8b6->leave($__internal_25cae7c4587749330116a38053df6b884244b1b44f41276bc94b79ab1c94e8b6_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  79 => 29,  73 => 28,  68 => 26,  58 => 21,  52 => 20,  47 => 18,  37 => 11,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">{% trans %}Assignments{% endtrans %}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{% trans %}Users {% endtrans %}<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('user_index') }}\">{% trans %}List users{% endtrans %}</a></li>
                        <li><a href=\"{{ path('user_add') }}\">{% trans %}Add users{% endtrans %}</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{% trans %}Tasks {% endtrans %}<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('task_index') }}\">{% trans %}List tasks{% endtrans %}</a></li>
                        <li><a href=\"{{ path('task_add') }}\">{% trans %}Add task{% endtrans %}</a></li>
                    </ul>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"{{ path('user_logout') }}\">{{ 'Logout'|trans }}</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>", "menu.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/menu.html.twig");
    }
}
