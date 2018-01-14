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
        $__internal_8e2342da10a2dd845623a4e4b2f937ff65c0d3c73e5f9818cb57972c53f59ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2342da10a2dd845623a4e4b2f937ff65c0d3c73e5f9818cb57972c53f59ff2->enter($__internal_8e2342da10a2dd845623a4e4b2f937ff65c0d3c73e5f9818cb57972c53f59ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_e3031be80019508f158d1087b42ea66d169aa09cdbf2b8a37d5add758d5c566b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3031be80019508f158d1087b42ea66d169aa09cdbf2b8a37d5add758d5c566b->enter($__internal_e3031be80019508f158d1087b42ea66d169aa09cdbf2b8a37d5add758d5c566b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e2342da10a2dd845623a4e4b2f937ff65c0d3c73e5f9818cb57972c53f59ff2->leave($__internal_8e2342da10a2dd845623a4e4b2f937ff65c0d3c73e5f9818cb57972c53f59ff2_prof);

        
        $__internal_e3031be80019508f158d1087b42ea66d169aa09cdbf2b8a37d5add758d5c566b->leave($__internal_e3031be80019508f158d1087b42ea66d169aa09cdbf2b8a37d5add758d5c566b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b71149c213d799d725a89c4481a3c8db588a806295ae25b8cf3ee958249dc29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b71149c213d799d725a89c4481a3c8db588a806295ae25b8cf3ee958249dc29->enter($__internal_2b71149c213d799d725a89c4481a3c8db588a806295ae25b8cf3ee958249dc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8d65acef2a00a6a1c70d8f4233e22e0ee063a3d950cdac38f596e09768b631c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d65acef2a00a6a1c70d8f4233e22e0ee063a3d950cdac38f596e09768b631c->enter($__internal_b8d65acef2a00a6a1c70d8f4233e22e0ee063a3d950cdac38f596e09768b631c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>";
        // line 25
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 25, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "u.username");
        echo "</th>
                            <th>";
        // line 26
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 26, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "u.firstName");
        echo "</th>
                            <th>";
        // line 27
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 27, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "u.lastName");
        echo "</th>
                            <th>";
        // line 28
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 28, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "u.email");
        echo "</th>
                            <th>";
        // line 29
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 29, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "u.role");
        echo "</th>
                            <th>";
        // line 30
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 30, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "u.createdAt");
        echo "</th>
                            <th>";
        // line 31
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 31, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "u.updatedAt");
        echo "</th>
                            <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 36, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "                            <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\">
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 43
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 44
                echo "                                        <strong>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
                echo "</strong>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 45
$context["user"], "role", array()) == "ROLE_USER")) {
                // line 46
                echo "                                        <strong>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
                echo "</strong>
                                    ";
            }
            // line 48
            echo "                                </td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                <td class=\"actions\">
                                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                        ";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("View", array(), "messages");
            // line 54
            echo "                                    </a>

                                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                        ";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit", array(), "messages");
            // line 58
            echo "                                    </a>

                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        ";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", array(), "messages");
            // line 62
            echo "                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </tbody>
                </table>
                <div class=\"navi\">
                    ";
        // line 69
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 69, $this->getSourceContext()); })()));
        echo "
                </div>
            </div>
        </div>
    </div>

    ";
        // line 75
        echo twig_include($this->env, $context, "forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) || array_key_exists("delete_form_ajax", $context) ? $context["delete_form_ajax"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form_ajax" does not exist.', 75, $this->getSourceContext()); })()), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure ?"), "id" => "form-delete", "with_submit" => false));
        echo "
";
        
        $__internal_b8d65acef2a00a6a1c70d8f4233e22e0ee063a3d950cdac38f596e09768b631c->leave($__internal_b8d65acef2a00a6a1c70d8f4233e22e0ee063a3d950cdac38f596e09768b631c_prof);

        
        $__internal_2b71149c213d799d725a89c4481a3c8db588a806295ae25b8cf3ee958249dc29->leave($__internal_2b71149c213d799d725a89c4481a3c8db588a806295ae25b8cf3ee958249dc29_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4992a38aa164daec9cb967d469962a7410af173ff54a7fb54f2d554402f5ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4992a38aa164daec9cb967d469962a7410af173ff54a7fb54f2d554402f5ec3->enter($__internal_a4992a38aa164daec9cb967d469962a7410af173ff54a7fb54f2d554402f5ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8429da3273ca2f7feb8dbfccd94007e8d252da03a7d7a5dee16eb0defd5c74a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8429da3273ca2f7feb8dbfccd94007e8d252da03a7d7a5dee16eb0defd5c74a6->enter($__internal_8429da3273ca2f7feb8dbfccd94007e8d252da03a7d7a5dee16eb0defd5c74a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8429da3273ca2f7feb8dbfccd94007e8d252da03a7d7a5dee16eb0defd5c74a6->leave($__internal_8429da3273ca2f7feb8dbfccd94007e8d252da03a7d7a5dee16eb0defd5c74a6_prof);

        
        $__internal_a4992a38aa164daec9cb967d469962a7410af173ff54a7fb54f2d554402f5ec3->leave($__internal_a4992a38aa164daec9cb967d469962a7410af173ff54a7fb54f2d554402f5ec3_prof);

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
        return array (  250 => 80,  245 => 79,  236 => 78,  224 => 75,  215 => 69,  210 => 66,  201 => 62,  199 => 61,  194 => 58,  192 => 57,  188 => 56,  184 => 54,  182 => 53,  178 => 52,  173 => 50,  169 => 49,  166 => 48,  160 => 46,  158 => 45,  153 => 44,  151 => 43,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  129 => 37,  125 => 36,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  81 => 21,  75 => 18,  68 => 14,  64 => 13,  56 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
