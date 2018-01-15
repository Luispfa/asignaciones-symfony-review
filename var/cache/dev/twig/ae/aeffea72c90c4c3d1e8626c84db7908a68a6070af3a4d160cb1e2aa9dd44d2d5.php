<?php

/* form_table_layout.html.twig */
class __TwigTemplate_7effbc1becfd4407f76938fa7c1a6cc4c7ca5fd16a23f3f9f6793a6b9b718598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45c8707bce284da3d1881e8a456067e6daa790100a2911ce26964a1ff4274e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c8707bce284da3d1881e8a456067e6daa790100a2911ce26964a1ff4274e04->enter($__internal_45c8707bce284da3d1881e8a456067e6daa790100a2911ce26964a1ff4274e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_bd47f97c2c369a55c46d878b5d1ad9aa05a0706c6d5e3dd7111e4221adf9dbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd47f97c2c369a55c46d878b5d1ad9aa05a0706c6d5e3dd7111e4221adf9dbee->enter($__internal_bd47f97c2c369a55c46d878b5d1ad9aa05a0706c6d5e3dd7111e4221adf9dbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_45c8707bce284da3d1881e8a456067e6daa790100a2911ce26964a1ff4274e04->leave($__internal_45c8707bce284da3d1881e8a456067e6daa790100a2911ce26964a1ff4274e04_prof);

        
        $__internal_bd47f97c2c369a55c46d878b5d1ad9aa05a0706c6d5e3dd7111e4221adf9dbee->leave($__internal_bd47f97c2c369a55c46d878b5d1ad9aa05a0706c6d5e3dd7111e4221adf9dbee_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d0a446e55242ce11558100a7a342a74d6c3475e760d2982d0e342cae68b3dfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a446e55242ce11558100a7a342a74d6c3475e760d2982d0e342cae68b3dfd1->enter($__internal_d0a446e55242ce11558100a7a342a74d6c3475e760d2982d0e342cae68b3dfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_09892f923d92b4be50997ce894093e901cd1d4a70e177562cd8f11affd00eee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09892f923d92b4be50997ce894093e901cd1d4a70e177562cd8f11affd00eee2->enter($__internal_09892f923d92b4be50997ce894093e901cd1d4a70e177562cd8f11affd00eee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_09892f923d92b4be50997ce894093e901cd1d4a70e177562cd8f11affd00eee2->leave($__internal_09892f923d92b4be50997ce894093e901cd1d4a70e177562cd8f11affd00eee2_prof);

        
        $__internal_d0a446e55242ce11558100a7a342a74d6c3475e760d2982d0e342cae68b3dfd1->leave($__internal_d0a446e55242ce11558100a7a342a74d6c3475e760d2982d0e342cae68b3dfd1_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2003b2523d22eba83072c6daa89ffc10a5bc5e798c436c0b33e8573ff1dcbdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2003b2523d22eba83072c6daa89ffc10a5bc5e798c436c0b33e8573ff1dcbdf0->enter($__internal_2003b2523d22eba83072c6daa89ffc10a5bc5e798c436c0b33e8573ff1dcbdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7747145a8b88bf7e3e3b1dcc566a3b79b7038bfc9a9ede4053d1fcc681918c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7747145a8b88bf7e3e3b1dcc566a3b79b7038bfc9a9ede4053d1fcc681918c28->enter($__internal_7747145a8b88bf7e3e3b1dcc566a3b79b7038bfc9a9ede4053d1fcc681918c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7747145a8b88bf7e3e3b1dcc566a3b79b7038bfc9a9ede4053d1fcc681918c28->leave($__internal_7747145a8b88bf7e3e3b1dcc566a3b79b7038bfc9a9ede4053d1fcc681918c28_prof);

        
        $__internal_2003b2523d22eba83072c6daa89ffc10a5bc5e798c436c0b33e8573ff1dcbdf0->leave($__internal_2003b2523d22eba83072c6daa89ffc10a5bc5e798c436c0b33e8573ff1dcbdf0_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d072a127c5fd846016bd2b16504edde4ba6a368e535b6b617899e688780e29ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d072a127c5fd846016bd2b16504edde4ba6a368e535b6b617899e688780e29ef->enter($__internal_d072a127c5fd846016bd2b16504edde4ba6a368e535b6b617899e688780e29ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_f67c75af6afcdeb3437ebe1be5dee80733e1690d7f072c52255c43c7f006642f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67c75af6afcdeb3437ebe1be5dee80733e1690d7f072c52255c43c7f006642f->enter($__internal_f67c75af6afcdeb3437ebe1be5dee80733e1690d7f072c52255c43c7f006642f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_f67c75af6afcdeb3437ebe1be5dee80733e1690d7f072c52255c43c7f006642f->leave($__internal_f67c75af6afcdeb3437ebe1be5dee80733e1690d7f072c52255c43c7f006642f_prof);

        
        $__internal_d072a127c5fd846016bd2b16504edde4ba6a368e535b6b617899e688780e29ef->leave($__internal_d072a127c5fd846016bd2b16504edde4ba6a368e535b6b617899e688780e29ef_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e47e8faa9a61e1a95532ba451e800a6ed923cf7e9a2ccc21192a89ffeedf7afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47e8faa9a61e1a95532ba451e800a6ed923cf7e9a2ccc21192a89ffeedf7afe->enter($__internal_e47e8faa9a61e1a95532ba451e800a6ed923cf7e9a2ccc21192a89ffeedf7afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_dfcc6263c51e1210b1a3aaaaf6a9a7bf6d1164ea020a6cf6d21feb75ac9cf337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcc6263c51e1210b1a3aaaaf6a9a7bf6d1164ea020a6cf6d21feb75ac9cf337->enter($__internal_dfcc6263c51e1210b1a3aaaaf6a9a7bf6d1164ea020a6cf6d21feb75ac9cf337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_dfcc6263c51e1210b1a3aaaaf6a9a7bf6d1164ea020a6cf6d21feb75ac9cf337->leave($__internal_dfcc6263c51e1210b1a3aaaaf6a9a7bf6d1164ea020a6cf6d21feb75ac9cf337_prof);

        
        $__internal_e47e8faa9a61e1a95532ba451e800a6ed923cf7e9a2ccc21192a89ffeedf7afe->leave($__internal_e47e8faa9a61e1a95532ba451e800a6ed923cf7e9a2ccc21192a89ffeedf7afe_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
