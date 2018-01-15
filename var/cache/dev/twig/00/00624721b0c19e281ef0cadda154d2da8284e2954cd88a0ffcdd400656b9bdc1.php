<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_c55b813dd2d3a92e9038c688e81bb6a761a6be6a7ca4df75b96ef7b5fbab9b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d7ca3268e3cfcf51366f3e5465b1ad8a566d2ea5b4f2c45beba5431afcbd9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7ca3268e3cfcf51366f3e5465b1ad8a566d2ea5b4f2c45beba5431afcbd9f3->enter($__internal_7d7ca3268e3cfcf51366f3e5465b1ad8a566d2ea5b4f2c45beba5431afcbd9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $__internal_b86132cd1654991b9fe198a81611e476d955cfdb2019e0842d05ce2e0b17b998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86132cd1654991b9fe198a81611e476d955cfdb2019e0842d05ce2e0b17b998->enter($__internal_b86132cd1654991b9fe198a81611e476d955cfdb2019e0842d05ce2e0b17b998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d7ca3268e3cfcf51366f3e5465b1ad8a566d2ea5b4f2c45beba5431afcbd9f3->leave($__internal_7d7ca3268e3cfcf51366f3e5465b1ad8a566d2ea5b4f2c45beba5431afcbd9f3_prof);

        
        $__internal_b86132cd1654991b9fe198a81611e476d955cfdb2019e0842d05ce2e0b17b998->leave($__internal_b86132cd1654991b9fe198a81611e476d955cfdb2019e0842d05ce2e0b17b998_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc38204643964484b23d39ca9bf55fec3d72917fc65e903d383cd0fdb80b821e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc38204643964484b23d39ca9bf55fec3d72917fc65e903d383cd0fdb80b821e->enter($__internal_bc38204643964484b23d39ca9bf55fec3d72917fc65e903d383cd0fdb80b821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59e058c2c2b8966333c121604b496dae02a5bb3c81392dc03e47ada4c4b70eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e058c2c2b8966333c121604b496dae02a5bb3c81392dc03e47ada4c4b70eda->enter($__internal_59e058c2c2b8966333c121604b496dae02a5bb3c81392dc03e47ada4c4b70eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "dumpsCount", array())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "dumpsCount", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "
        ";
            // line 10
            ob_start();
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 12
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    ";
                // line 14
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array())) {
                    // line 15
                    echo "                        ";
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()));
                    // line 16
                    echo "                        ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 16, $this->getSourceContext()); })())) {
                        // line 17
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 19
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 21
                    echo "                    ";
                } else {
                    // line 22
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 24
                echo "                    </span>
                    <span class=\"sf-toolbar-file-line\">line ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()), "html", null, true);
                echo "</span>

                    ";
                // line 27
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "data", array());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "
        ";
            // line 32
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_59e058c2c2b8966333c121604b496dae02a5bb3c81392dc03e47ada4c4b70eda->leave($__internal_59e058c2c2b8966333c121604b496dae02a5bb3c81392dc03e47ada4c4b70eda_prof);

        
        $__internal_bc38204643964484b23d39ca9bf55fec3d72917fc65e903d383cd0fdb80b821e->leave($__internal_bc38204643964484b23d39ca9bf55fec3d72917fc65e903d383cd0fdb80b821e_prof);

    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8f1e799ff27c99a7c4d737404236655568150d13f089ea6621f5b18d0780325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f1e799ff27c99a7c4d737404236655568150d13f089ea6621f5b18d0780325->enter($__internal_f8f1e799ff27c99a7c4d737404236655568150d13f089ea6621f5b18d0780325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1f4d552ef2711af8069b5751a83387d96e82fa6f10eb91517245766fd439bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f4d552ef2711af8069b5751a83387d96e82fa6f10eb91517245766fd439bbf->enter($__internal_f1f4d552ef2711af8069b5751a83387d96e82fa6f10eb91517245766fd439bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 37
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->getSourceContext()); })()), "dumpsCount", array()) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 38
        echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
        echo "</span>
        <strong>Debug</strong>
    </span>
";
        
        $__internal_f1f4d552ef2711af8069b5751a83387d96e82fa6f10eb91517245766fd439bbf->leave($__internal_f1f4d552ef2711af8069b5751a83387d96e82fa6f10eb91517245766fd439bbf_prof);

        
        $__internal_f8f1e799ff27c99a7c4d737404236655568150d13f089ea6621f5b18d0780325->leave($__internal_f8f1e799ff27c99a7c4d737404236655568150d13f089ea6621f5b18d0780325_prof);

    }

    // line 43
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96cb69938f83fa7d60458dc40ef44a4e8a642bc0d476a2ad08ea23b4e4fe8190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cb69938f83fa7d60458dc40ef44a4e8a642bc0d476a2ad08ea23b4e4fe8190->enter($__internal_96cb69938f83fa7d60458dc40ef44a4e8a642bc0d476a2ad08ea23b4e4fe8190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0464589df05f596c275bd9cdb29488ec8f4a7f356dcc207f0b7bedf8f0b63fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0464589df05f596c275bd9cdb29488ec8f4a7f356dcc207f0b7bedf8f0b63fae->enter($__internal_0464589df05f596c275bd9cdb29488ec8f4a7f356dcc207f0b7bedf8f0b63fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <h2>Dumped Contents</h2>

    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "getDumps", array(0 => "html"), "method"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 47
            echo "        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                ";
            // line 49
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array())) {
                // line 50
                echo "                    ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()));
                // line 51
                echo "                    ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 51, $this->getSourceContext()); })())) {
                    // line 52
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 54
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 56
                echo "                ";
            } else {
                // line 57
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                echo "
                ";
            }
            // line 59
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()), "html", null, true);
            echo "</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 64
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "fileExcerpt", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "fileExcerpt", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()))));
            echo "
                </div>
            </div>

            ";
            // line 68
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "data", array());
            echo "
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 71
            echo "        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0464589df05f596c275bd9cdb29488ec8f4a7f356dcc207f0b7bedf8f0b63fae->leave($__internal_0464589df05f596c275bd9cdb29488ec8f4a7f356dcc207f0b7bedf8f0b63fae_prof);

        
        $__internal_96cb69938f83fa7d60458dc40ef44a4e8a642bc0d476a2ad08ea23b4e4fe8190->leave($__internal_96cb69938f83fa7d60458dc40ef44a4e8a642bc0d476a2ad08ea23b4e4fe8190_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 71,  271 => 68,  264 => 64,  259 => 62,  250 => 59,  244 => 57,  241 => 56,  233 => 54,  223 => 52,  220 => 51,  217 => 50,  215 => 49,  211 => 47,  193 => 46,  189 => 44,  180 => 43,  166 => 38,  161 => 37,  152 => 36,  139 => 32,  136 => 31,  133 => 30,  124 => 27,  119 => 25,  116 => 24,  110 => 22,  107 => 21,  99 => 19,  89 => 17,  86 => 16,  83 => 15,  81 => 14,  77 => 12,  72 => 11,  70 => 10,  67 => 9,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.dumpsCount %}
        {% set icon %}
            {{ include('@Debug/Profiler/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.dumpsCount }}</span>
        {% endset %}

        {% set text %}
            {% for dump in collector.getDumps('html') %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    {% if dump.file %}
                        {% set link = dump.file|file_link(dump.line) %}
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                        {% else %}
                            <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                        {% endif %}
                    {% else %}
                        {{ dump.name }}
                    {% endif %}
                    </span>
                    <span class=\"sf-toolbar-file-line\">line {{ dump.line }}</span>

                    {{ dump.data|raw }}
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.dumpsCount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Debug/Profiler/icon.svg') }}</span>
        <strong>Debug</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Dumped Contents</h2>

    {% for dump in collector.getDumps('html') %}
        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                {% if dump.line %}
                    {% set link = dump.file|file_link(dump.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                    {% else %}
                        <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ dump.name }}
                {% endif %}
                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\">{{ dump.line }}</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ dump.fileExcerpt ? dump.fileExcerpt|raw : dump.file|file_excerpt(dump.line) }}
                </div>
            </div>

            {{ dump.data|raw }}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    {% endfor %}
{% endblock %}
", "@Debug/Profiler/dump.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views/Profiler/dump.html.twig");
    }
}
