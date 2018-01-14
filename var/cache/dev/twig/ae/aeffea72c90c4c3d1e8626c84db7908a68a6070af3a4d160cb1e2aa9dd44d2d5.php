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
        $__internal_5284490b845627aa736f4f096f85179fd14e7ac65af0da30dfb2f90b991157db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5284490b845627aa736f4f096f85179fd14e7ac65af0da30dfb2f90b991157db->enter($__internal_5284490b845627aa736f4f096f85179fd14e7ac65af0da30dfb2f90b991157db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_63f761e28dc8e6d72202a6e0b00294e77beb46ca061327461942c8783c3765dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f761e28dc8e6d72202a6e0b00294e77beb46ca061327461942c8783c3765dc->enter($__internal_63f761e28dc8e6d72202a6e0b00294e77beb46ca061327461942c8783c3765dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_5284490b845627aa736f4f096f85179fd14e7ac65af0da30dfb2f90b991157db->leave($__internal_5284490b845627aa736f4f096f85179fd14e7ac65af0da30dfb2f90b991157db_prof);

        
        $__internal_63f761e28dc8e6d72202a6e0b00294e77beb46ca061327461942c8783c3765dc->leave($__internal_63f761e28dc8e6d72202a6e0b00294e77beb46ca061327461942c8783c3765dc_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e9f3815fc6867105c55d10d4faf3fe40ee1516b85256feeb63a444826320cd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f3815fc6867105c55d10d4faf3fe40ee1516b85256feeb63a444826320cd30->enter($__internal_e9f3815fc6867105c55d10d4faf3fe40ee1516b85256feeb63a444826320cd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2faf2c76bc623e4cd8b8a6343e5d25b5468d163ef480d4c4b964dcb2960dbb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2faf2c76bc623e4cd8b8a6343e5d25b5468d163ef480d4c4b964dcb2960dbb37->enter($__internal_2faf2c76bc623e4cd8b8a6343e5d25b5468d163ef480d4c4b964dcb2960dbb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2faf2c76bc623e4cd8b8a6343e5d25b5468d163ef480d4c4b964dcb2960dbb37->leave($__internal_2faf2c76bc623e4cd8b8a6343e5d25b5468d163ef480d4c4b964dcb2960dbb37_prof);

        
        $__internal_e9f3815fc6867105c55d10d4faf3fe40ee1516b85256feeb63a444826320cd30->leave($__internal_e9f3815fc6867105c55d10d4faf3fe40ee1516b85256feeb63a444826320cd30_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9df84be168bb554e96ac7653e01c6e32908d53a6306d94416c3265d2b4d0439b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df84be168bb554e96ac7653e01c6e32908d53a6306d94416c3265d2b4d0439b->enter($__internal_9df84be168bb554e96ac7653e01c6e32908d53a6306d94416c3265d2b4d0439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_fd629f0be997b0082fdbcbc810756144fda769810f855bcf1370ac17796407d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd629f0be997b0082fdbcbc810756144fda769810f855bcf1370ac17796407d7->enter($__internal_fd629f0be997b0082fdbcbc810756144fda769810f855bcf1370ac17796407d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_fd629f0be997b0082fdbcbc810756144fda769810f855bcf1370ac17796407d7->leave($__internal_fd629f0be997b0082fdbcbc810756144fda769810f855bcf1370ac17796407d7_prof);

        
        $__internal_9df84be168bb554e96ac7653e01c6e32908d53a6306d94416c3265d2b4d0439b->leave($__internal_9df84be168bb554e96ac7653e01c6e32908d53a6306d94416c3265d2b4d0439b_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b9866fd8004b2cec950ac8bd39d081ee3dfc8786d920bf478e18f0c4f2e55951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9866fd8004b2cec950ac8bd39d081ee3dfc8786d920bf478e18f0c4f2e55951->enter($__internal_b9866fd8004b2cec950ac8bd39d081ee3dfc8786d920bf478e18f0c4f2e55951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_1fbddd121e8e9dca9c9016056af7ad6fea3cdb278c8b3b3c0f854950080a9932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbddd121e8e9dca9c9016056af7ad6fea3cdb278c8b3b3c0f854950080a9932->enter($__internal_1fbddd121e8e9dca9c9016056af7ad6fea3cdb278c8b3b3c0f854950080a9932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_1fbddd121e8e9dca9c9016056af7ad6fea3cdb278c8b3b3c0f854950080a9932->leave($__internal_1fbddd121e8e9dca9c9016056af7ad6fea3cdb278c8b3b3c0f854950080a9932_prof);

        
        $__internal_b9866fd8004b2cec950ac8bd39d081ee3dfc8786d920bf478e18f0c4f2e55951->leave($__internal_b9866fd8004b2cec950ac8bd39d081ee3dfc8786d920bf478e18f0c4f2e55951_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_867d4552538159f27b6279c4fd0be4790a5c68346be8ab6bbce8f206be9e695c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867d4552538159f27b6279c4fd0be4790a5c68346be8ab6bbce8f206be9e695c->enter($__internal_867d4552538159f27b6279c4fd0be4790a5c68346be8ab6bbce8f206be9e695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a1ebd26cfed4f3b11390a7f78588b910b59f3fe9112c149e5213a32c7aa95459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ebd26cfed4f3b11390a7f78588b910b59f3fe9112c149e5213a32c7aa95459->enter($__internal_a1ebd26cfed4f3b11390a7f78588b910b59f3fe9112c149e5213a32c7aa95459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_a1ebd26cfed4f3b11390a7f78588b910b59f3fe9112c149e5213a32c7aa95459->leave($__internal_a1ebd26cfed4f3b11390a7f78588b910b59f3fe9112c149e5213a32c7aa95459_prof);

        
        $__internal_867d4552538159f27b6279c4fd0be4790a5c68346be8ab6bbce8f206be9e695c->leave($__internal_867d4552538159f27b6279c4fd0be4790a5c68346be8ab6bbce8f206be9e695c_prof);

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
