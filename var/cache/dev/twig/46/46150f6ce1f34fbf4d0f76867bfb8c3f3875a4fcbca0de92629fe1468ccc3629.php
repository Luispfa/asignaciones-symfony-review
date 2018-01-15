<?php

/* user/index.html.twig */
class __TwigTemplate_2321303358588d0784a3419240a896df0161805033d4bd189e5ef6b67b9eeee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_969676259eab0ddbf44640678addf009b13eabb942147f159b2299d46ad46377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969676259eab0ddbf44640678addf009b13eabb942147f159b2299d46ad46377->enter($__internal_969676259eab0ddbf44640678addf009b13eabb942147f159b2299d46ad46377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_9a3726f24ddc20d572d6e7e244571f00d04f4515fe5a3989ca980b7ab690073f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3726f24ddc20d572d6e7e244571f00d04f4515fe5a3989ca980b7ab690073f->enter($__internal_9a3726f24ddc20d572d6e7e244571f00d04f4515fe5a3989ca980b7ab690073f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969676259eab0ddbf44640678addf009b13eabb942147f159b2299d46ad46377->leave($__internal_969676259eab0ddbf44640678addf009b13eabb942147f159b2299d46ad46377_prof);

        
        $__internal_9a3726f24ddc20d572d6e7e244571f00d04f4515fe5a3989ca980b7ab690073f->leave($__internal_9a3726f24ddc20d572d6e7e244571f00d04f4515fe5a3989ca980b7ab690073f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c04c740bae1859ca40d008ef52f9ae0c883e9feef27f743f9807671c13707069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04c740bae1859ca40d008ef52f9ae0c883e9feef27f743f9807671c13707069->enter($__internal_c04c740bae1859ca40d008ef52f9ae0c883e9feef27f743f9807671c13707069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc941a8203ef7513e43446823fdf8dae8e060cd14510633ce33709abb8373646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc941a8203ef7513e43446823fdf8dae8e060cd14510633ce33709abb8373646->enter($__internal_dc941a8203ef7513e43446823fdf8dae8e060cd14510633ce33709abb8373646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                
                ";
        // line 31
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 31, $this->getSourceContext()); })()))) {
            // line 32
            echo "                    <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No search results"), "html", null, true);
            echo "</h2>
                ";
        }
        // line 34
        echo "                
                ";
        // line 35
        if (twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 35, $this->getSourceContext()); })()))) {
            // line 36
            echo "                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 39
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 39, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "u.username");
            echo "</th>
                            <th>";
            // line 40
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 40, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "u.firstName");
            echo "</th>
                            <th>";
            // line 41
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 41, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "u.lastName");
            echo "</th>
                            <th>";
            // line 42
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 42, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "u.email");
            echo "</th>
                            <th>";
            // line 43
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 43, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "u.role");
            echo "</th>
                            <th>";
            // line 44
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 44, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "u.createdAt");
            echo "</th>
                            <th>";
            // line 45
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 45, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "u.updatedAt");
            echo "</th>
                            <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 50, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 51
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo "\">
                                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 57
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "role", array()) == "ROLE_ADMIN")) {
                    // line 58
                    echo "                                        <strong>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
                    echo "</strong>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 59
$context["user"], "role", array()) == "ROLE_USER")) {
                    // line 60
                    echo "                                        <strong>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
                    echo "</strong>
                                    ";
                }
                // line 62
                echo "                                </td>
                                <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                        ";
                // line 67
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("View", array(), "messages");
                // line 68
                echo "                                    </a>

                                    <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                        ";
                // line 71
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit", array(), "messages");
                // line 72
                echo "                                    </a>

                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        ";
                // line 75
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", array(), "messages");
                // line 76
                echo "                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                    </tbody>
                </table>
                ";
        }
        // line 83
        echo "                <div class=\"navi\">
                    ";
        // line 84
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 84, $this->getSourceContext()); })()));
        echo "
                </div>
            </div>
        </div>
    </div>

    ";
        // line 90
        echo twig_include($this->env, $context, "forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) || array_key_exists("delete_form_ajax", $context) ? $context["delete_form_ajax"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form_ajax" does not exist.', 90, $this->getSourceContext()); })()), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure ?"), "id" => "form-delete", "with_submit" => false));
        echo "
";
        
        $__internal_dc941a8203ef7513e43446823fdf8dae8e060cd14510633ce33709abb8373646->leave($__internal_dc941a8203ef7513e43446823fdf8dae8e060cd14510633ce33709abb8373646_prof);

        
        $__internal_c04c740bae1859ca40d008ef52f9ae0c883e9feef27f743f9807671c13707069->leave($__internal_c04c740bae1859ca40d008ef52f9ae0c883e9feef27f743f9807671c13707069_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_177dffb2b64d1f5164043f156afbeed607e37b56d005df3cfd67c53b24283c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177dffb2b64d1f5164043f156afbeed607e37b56d005df3cfd67c53b24283c16->enter($__internal_177dffb2b64d1f5164043f156afbeed607e37b56d005df3cfd67c53b24283c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6391346650a1c82c5d21da76c72f471fb178a62d3500b8c04b3ea9534df58c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6391346650a1c82c5d21da76c72f471fb178a62d3500b8c04b3ea9534df58c94->enter($__internal_6391346650a1c82c5d21da76c72f471fb178a62d3500b8c04b3ea9534df58c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6391346650a1c82c5d21da76c72f471fb178a62d3500b8c04b3ea9534df58c94->leave($__internal_6391346650a1c82c5d21da76c72f471fb178a62d3500b8c04b3ea9534df58c94_prof);

        
        $__internal_177dffb2b64d1f5164043f156afbeed607e37b56d005df3cfd67c53b24283c16->leave($__internal_177dffb2b64d1f5164043f156afbeed607e37b56d005df3cfd67c53b24283c16_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 95,  280 => 94,  271 => 93,  259 => 90,  250 => 84,  247 => 83,  242 => 80,  233 => 76,  231 => 75,  226 => 72,  224 => 71,  220 => 70,  216 => 68,  214 => 67,  210 => 66,  205 => 64,  201 => 63,  198 => 62,  192 => 60,  190 => 59,  185 => 58,  183 => 57,  178 => 55,  174 => 54,  170 => 53,  166 => 52,  161 => 51,  157 => 50,  150 => 46,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  117 => 36,  115 => 35,  112 => 34,  106 => 32,  104 => 31,  97 => 27,  90 => 25,  81 => 21,  75 => 18,  68 => 14,  64 => 13,  56 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
                
                {% if not pagination|length %}
                    <h2>{{ 'No search results'|trans }}</h2>
                {% endif%}
                
                {% if  pagination|length %}
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
                {% endif %}
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
{% endblock %}", "user/index.html.twig", "/var/www/html/asignaciones-symfony-review/app/Resources/views/user/index.html.twig");
    }
}
