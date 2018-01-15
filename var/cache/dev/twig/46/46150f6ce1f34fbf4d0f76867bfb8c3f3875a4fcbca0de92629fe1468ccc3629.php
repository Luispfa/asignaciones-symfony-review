<?php

/* :user:index.html.twig */
class __TwigTemplate_2321303358588d0784a3419240a896df0161805033d4bd189e5ef6b67b9eeee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4f5511dcc79048f498425ca1970935be978269f13dccdcb9f127108b38a6e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f5511dcc79048f498425ca1970935be978269f13dccdcb9f127108b38a6e1f->enter($__internal_b4f5511dcc79048f498425ca1970935be978269f13dccdcb9f127108b38a6e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_d9b80d1b8769a958f42702d51c934b73b21f9417c6e97e648af49377a548cee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b80d1b8769a958f42702d51c934b73b21f9417c6e97e648af49377a548cee0->enter($__internal_d9b80d1b8769a958f42702d51c934b73b21f9417c6e97e648af49377a548cee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f5511dcc79048f498425ca1970935be978269f13dccdcb9f127108b38a6e1f->leave($__internal_b4f5511dcc79048f498425ca1970935be978269f13dccdcb9f127108b38a6e1f_prof);

        
        $__internal_d9b80d1b8769a958f42702d51c934b73b21f9417c6e97e648af49377a548cee0->leave($__internal_d9b80d1b8769a958f42702d51c934b73b21f9417c6e97e648af49377a548cee0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f68533984f17e7efc5d55eeceb690479b5ab1253f35bf6d553a4aee1662d8a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68533984f17e7efc5d55eeceb690479b5ab1253f35bf6d553a4aee1662d8a90->enter($__internal_f68533984f17e7efc5d55eeceb690479b5ab1253f35bf6d553a4aee1662d8a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_097531517fcf6235a83fef033a08993b19309f191582dabbc1d7c8c090cec8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097531517fcf6235a83fef033a08993b19309f191582dabbc1d7c8c090cec8e4->enter($__internal_097531517fcf6235a83fef033a08993b19309f191582dabbc1d7c8c090cec8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 7
        echo "    <div class=\"progress no-border hidden\" id=\"delete-progress\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    ";
        // line 13
        echo twig_include($this->env, $context, "messages/success.html.twig");
        echo "
    ";
        // line 14
        echo twig_include($this->env, $context, "messages/danger.html.twig");
        echo "
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Users", array(), "messages");
        echo "</h2>
            </div>
            <div class=\"table-responsive\">
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total records:", array(), "messages");
        echo " <span id=\"total\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 21, $this->getSourceContext()); })()), "getTotalItemCount", array()), "html", null, true);
        echo "</span>

                <form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"query\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search user"), "html", null, true);
        echo "\" required />
                    </div>
                    <input type=\"submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "\" class=\"btn btn-default\">
                </form>
                <br> 

                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>";
        // line 34
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 34, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "u.username");
        echo "</th>
                            <th>";
        // line 35
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 35, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "u.firstName");
        echo "</th>
                            <th>";
        // line 36
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 36, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "u.lastName");
        echo "</th>
                            <th>";
        // line 37
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 37, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "u.email");
        echo "</th>
                            <th>";
        // line 38
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 38, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "u.role");
        echo "</th>
                            <th>";
        // line 39
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 39, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "u.createdAt");
        echo "</th>
                            <th>";
        // line 40
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 40, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "u.updatedAt");
        echo "</th>
                            <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 45, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                            <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\">
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 52
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 53
                echo "                                        <strong>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
                echo "</strong>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 54
$context["user"], "role", array()) == "ROLE_USER")) {
                // line 55
                echo "                                        <strong>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
                echo "</strong>
                                    ";
            }
            // line 57
            echo "                                </td>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                <td class=\"actions\">
                                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                        ";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("View", array(), "messages");
            // line 63
            echo "                                    </a>

                                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                        ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit", array(), "messages");
            // line 67
            echo "                                    </a>

                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        ";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", array(), "messages");
            // line 71
            echo "                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                </table>
                <div class=\"navi\">
                    ";
        // line 78
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 78, $this->getSourceContext()); })()));
        echo "
                </div>
            </div>
        </div>
    </div>

    ";
        // line 84
        echo twig_include($this->env, $context, "forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) || array_key_exists("delete_form_ajax", $context) ? $context["delete_form_ajax"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form_ajax" does not exist.', 84, $this->getSourceContext()); })()), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure ?"), "id" => "form-delete", "with_submit" => false));
        echo "
";
        
        $__internal_097531517fcf6235a83fef033a08993b19309f191582dabbc1d7c8c090cec8e4->leave($__internal_097531517fcf6235a83fef033a08993b19309f191582dabbc1d7c8c090cec8e4_prof);

        
        $__internal_f68533984f17e7efc5d55eeceb690479b5ab1253f35bf6d553a4aee1662d8a90->leave($__internal_f68533984f17e7efc5d55eeceb690479b5ab1253f35bf6d553a4aee1662d8a90_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb4519676adca51e8af7978adc3410d8d32fd631a31ecc7c7f5496262ef7e3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4519676adca51e8af7978adc3410d8d32fd631a31ecc7c7f5496262ef7e3d6->enter($__internal_fb4519676adca51e8af7978adc3410d8d32fd631a31ecc7c7f5496262ef7e3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b0d621f5979795ff2aa16916b777cc0ecb1ee8c99a97db2ebbf788fcc2c5d188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d621f5979795ff2aa16916b777cc0ecb1ee8c99a97db2ebbf788fcc2c5d188->enter($__internal_b0d621f5979795ff2aa16916b777cc0ecb1ee8c99a97db2ebbf788fcc2c5d188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b0d621f5979795ff2aa16916b777cc0ecb1ee8c99a97db2ebbf788fcc2c5d188->leave($__internal_b0d621f5979795ff2aa16916b777cc0ecb1ee8c99a97db2ebbf788fcc2c5d188_prof);

        
        $__internal_fb4519676adca51e8af7978adc3410d8d32fd631a31ecc7c7f5496262ef7e3d6->leave($__internal_fb4519676adca51e8af7978adc3410d8d32fd631a31ecc7c7f5496262ef7e3d6_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 89,  262 => 88,  253 => 87,  241 => 84,  232 => 78,  227 => 75,  218 => 71,  216 => 70,  211 => 67,  209 => 66,  205 => 65,  201 => 63,  199 => 62,  195 => 61,  190 => 59,  186 => 58,  183 => 57,  177 => 55,  175 => 54,  170 => 53,  168 => 52,  163 => 50,  159 => 49,  155 => 48,  151 => 47,  146 => 46,  142 => 45,  135 => 41,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  97 => 27,  90 => 25,  81 => 21,  75 => 18,  68 => 14,  64 => 13,  56 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

    {# Progress bar #}
    <div class=\"progress no-border hidden\" id=\"delete-progress\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div> 

    {{ include('messages/success.html.twig') }}
    {{ include('messages/danger.html.twig') }}
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">{% trans %} Users {% endtrans %}</h2>
            </div>
            <div class=\"table-responsive\">
                {% trans%}Total records:{% endtrans%} <span id=\"total\">{{ pagination.getTotalItemCount }}</span>

                <form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"query\" value=\"{{ app.request.get('query') }}\" class=\"form-control\" placeholder=\"{{'Search user'|trans}}\" required />
                    </div>
                    <input type=\"submit\" value=\"{{ 'Search'|trans }}\" class=\"btn btn-default\">
                </form>
                <br> 

                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Username'|trans , 'u.username') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'First name'|trans , 'u.firstName') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Last name'|trans , 'u.lastName') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Email'|trans , 'u.email') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Role'|trans , 'u.role') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Created'|trans , 'u.createdAt') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Updated'|trans , 'u.updatedAt') }}</th>
                            <th>{{ 'Actions'|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in pagination %}
                            <tr data-id=\"{{ user.id }}\">
                                <td>{{ user.username }}</td>
                                <td>{{ user.firstName }}</td>
                                <td>{{ user.lastName }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    {% if user.role == 'ROLE_ADMIN' %}
                                        <strong>{% trans %}Administrator{% endtrans %}</strong>
                                    {% elseif user.role == 'ROLE_USER' %}
                                        <strong>{% trans %}User{% endtrans %}</strong>
                                    {% endif %}
                                </td>
                                <td>{{ user.createdAt|date('d-m-Y H:i') }}</td>
                                <td>{{ user.updatedAt|date('d-m-Y H:i') }}</td>
                                <td class=\"actions\">
                                    <a href=\"{{ path('user_view', {id: user.id}) }}\" class=\"btn btn-sm btn-info\">
                                        {% trans %}View{% endtrans %}
                                    </a>

                                    <a href=\"{{ path('user_edit', {id: user.id}) }}\" class=\"btn btn-sm btn-primary\">
                                        {% trans %}Edit{% endtrans %}
                                    </a>

                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        {% trans %}Delete{% endtrans %}
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
                <div class=\"navi\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>

    {{ include('forms/form.html.twig', { form: delete_form_ajax, message: 'Are you sure ?'|trans, id: 'form-delete', with_submit: false}) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('public/js/delete-user.js') }}\"></script>
{% endblock %}", ":user:index.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/user/index.html.twig");
    }
}
