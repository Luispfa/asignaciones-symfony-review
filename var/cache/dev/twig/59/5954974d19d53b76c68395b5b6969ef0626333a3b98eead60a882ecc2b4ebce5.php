<?php

/* :user:view.html.twig */
class __TwigTemplate_52e452556ff7d87b1b3f8dfa6b2c0dc90ed32944edc79fee807e6b409540b428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:view.html.twig", 1);
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
        $__internal_d2292aceba5a0d853e2627beee0382ad32103d46404b4d78e11e51354cc68f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2292aceba5a0d853e2627beee0382ad32103d46404b4d78e11e51354cc68f3a->enter($__internal_d2292aceba5a0d853e2627beee0382ad32103d46404b4d78e11e51354cc68f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:view.html.twig"));

        $__internal_1a217db29ab985334e6bcf65a7dc18c78db30dcbcf23f72250e74063155f310d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a217db29ab985334e6bcf65a7dc18c78db30dcbcf23f72250e74063155f310d->enter($__internal_1a217db29ab985334e6bcf65a7dc18c78db30dcbcf23f72250e74063155f310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2292aceba5a0d853e2627beee0382ad32103d46404b4d78e11e51354cc68f3a->leave($__internal_d2292aceba5a0d853e2627beee0382ad32103d46404b4d78e11e51354cc68f3a_prof);

        
        $__internal_1a217db29ab985334e6bcf65a7dc18c78db30dcbcf23f72250e74063155f310d->leave($__internal_1a217db29ab985334e6bcf65a7dc18c78db30dcbcf23f72250e74063155f310d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5afd56758322d23ebf3661afab0fc1291880ca262a714925cd164ba931959dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5afd56758322d23ebf3661afab0fc1291880ca262a714925cd164ba931959dd->enter($__internal_a5afd56758322d23ebf3661afab0fc1291880ca262a714925cd164ba931959dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5179ed7d07c5bdc5842baed096805fa373743671ae134b1595ddcc0d8d282127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5179ed7d07c5bdc5842baed096805fa373743671ae134b1595ddcc0d8d282127->enter($__internal_5179ed7d07c5bdc5842baed096805fa373743671ae134b1595ddcc0d8d282127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "</h2>
            <br>
            <dl>
                <dt>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 40
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 40, $this->getSourceContext()); })()), "role", array()) == "ROLE_ADMIN")) {
            // line 41
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
            // line 42
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "role", array()) == "ROLE_USER")) {
            // line 43
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
            // line 44
            echo "                    ";
        }
        // line 45
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 51
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 51, $this->getSourceContext()); })()), "isActive", array()) == 1)) {
            // line 52
            echo "                        <span class=\"text-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Enabled", array(), "messages");
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 53
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 53, $this->getSourceContext()); })()), "isActive", array()) == 0)) {
            // line 54
            echo "                        <span class=\"text-warning\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Disabled", array(), "messages");
            echo "</span>
                    ";
        }
        // line 56
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->getSourceContext()); })()), "createdAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 69, $this->getSourceContext()); })()), "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h3>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo ":</h3>
            <p>
                <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 78, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
                    <span class=\"glyphicon glyphicon-edit\"></span>
                    ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit user"), "html", null, true);
        echo "
                </a>
            </p>
            <p>
                ";
        // line 84
        echo twig_include($this->env, $context, "forms/form.html.twig", array("form" => (isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 84, $this->getSourceContext()); })()), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure ?")));
        echo "
            </p>
        </div>
    </div>
";
        
        $__internal_5179ed7d07c5bdc5842baed096805fa373743671ae134b1595ddcc0d8d282127->leave($__internal_5179ed7d07c5bdc5842baed096805fa373743671ae134b1595ddcc0d8d282127_prof);

        
        $__internal_a5afd56758322d23ebf3661afab0fc1291880ca262a714925cd164ba931959dd->leave($__internal_a5afd56758322d23ebf3661afab0fc1291880ca262a714925cd164ba931959dd_prof);

    }

    public function getTemplateName()
    {
        return ":user:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 84,  205 => 80,  200 => 78,  195 => 76,  185 => 69,  180 => 67,  172 => 62,  167 => 60,  161 => 56,  155 => 54,  153 => 53,  148 => 52,  146 => 51,  141 => 49,  135 => 45,  132 => 44,  129 => 43,  126 => 42,  123 => 41,  121 => 40,  116 => 38,  108 => 33,  103 => 31,  95 => 26,  90 => 24,  82 => 19,  77 => 17,  69 => 12,  64 => 10,  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>{{ user.firstName }} {{ user.lastName }}</h2>
            <br>
            <dl>
                <dt>{{'Username'|trans}}</dt>
                <dd>
                    {{ user.username }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'First name'|trans}}</dt>
                <dd>
                    {{ user.firstName }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Last name'|trans}}</dt>
                <dd>
                    {{ user.lastName }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Email'|trans}}</dt>
                <dd>
                    {{ user.email }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Role'|trans}}</dt>
                <dd>
                    {% if user.role == 'ROLE_ADMIN' %}
                        {% trans %}Administrator{% endtrans %}
                    {% elseif user.role == 'ROLE_USER' %}
                        {% trans %}User{% endtrans %}
                    {% endif %}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Active'|trans}}</dt>
                <dd>
                    {% if user.isActive == 1 %}
                        <span class=\"text-success\">{% trans %}Enabled{% endtrans %}</span>
                    {% elseif user.isActive == 0 %}
                        <span class=\"text-warning\">{% trans %}Disabled{% endtrans %}</span>
                    {% endif %}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Created'|trans}}</dt>
                <dd>
                    {{ user.createdAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Updated'|trans}}</dt>
                <dd>
                    {{ user.updatedAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h3>{{ 'Actions'|trans }}:</h3>
            <p>
                <a href=\"{{ path('user_edit', { id: user.id }) }}\" class=\"btn btn-primary btn-lg btn-block\">
                    <span class=\"glyphicon glyphicon-edit\"></span>
                    {{ 'Edit user'|trans }}
                </a>
            </p>
            <p>
                {{ include('forms/form.html.twig', { form: delete_form, message: 'Are you sure ?'|trans}) }}
            </p>
        </div>
    </div>
{% endblock %}", ":user:view.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/user/view.html.twig");
    }
}
