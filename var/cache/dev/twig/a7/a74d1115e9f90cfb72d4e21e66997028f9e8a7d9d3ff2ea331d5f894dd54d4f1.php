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
        $__internal_e545d5be41a62411601271ef46cf08b69b22b3a75daaef687ed76beccfc79679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e545d5be41a62411601271ef46cf08b69b22b3a75daaef687ed76beccfc79679->enter($__internal_e545d5be41a62411601271ef46cf08b69b22b3a75daaef687ed76beccfc79679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_ee583cae88a1519d6768984347e360a3ddbfa837fb63d83e7e8709ea55fa97c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee583cae88a1519d6768984347e360a3ddbfa837fb63d83e7e8709ea55fa97c1->enter($__internal_ee583cae88a1519d6768984347e360a3ddbfa837fb63d83e7e8709ea55fa97c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Users", array(), "messages");
            echo "<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("List users", array(), "messages");
            echo "</a></li>
                            <li><a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_add");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Add users", array(), "messages");
            echo "</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tasks", array(), "messages");
            echo "<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("List tasks", array(), "messages");
            echo "</a></li>
                            <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_add");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Add task", array(), "messages");
            echo "</a></li>
                        </ul>
                    </li>
                ";
        }
        // line 34
        echo "                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 35
            echo "                <li>
                    <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_custom");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("My tasks", array(), "messages");
            echo "</a>
                </li>
                ";
        }
        // line 39
        echo "            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_e545d5be41a62411601271ef46cf08b69b22b3a75daaef687ed76beccfc79679->leave($__internal_e545d5be41a62411601271ef46cf08b69b22b3a75daaef687ed76beccfc79679_prof);

        
        $__internal_ee583cae88a1519d6768984347e360a3ddbfa837fb63d83e7e8709ea55fa97c1->leave($__internal_ee583cae88a1519d6768984347e360a3ddbfa837fb63d83e7e8709ea55fa97c1_prof);

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
        return array (  111 => 42,  106 => 39,  98 => 36,  95 => 35,  92 => 34,  83 => 30,  77 => 29,  72 => 27,  62 => 22,  56 => 21,  51 => 19,  48 => 18,  46 => 17,  37 => 11,  25 => 1,);
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
                {% if is_granted('ROLE_ADMIN') %}
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
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                <li>
                    <a href=\"{{ path('task_custom') }}\">{% trans %}My tasks{% endtrans %}</a>
                </li>
                {% endif %}
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
