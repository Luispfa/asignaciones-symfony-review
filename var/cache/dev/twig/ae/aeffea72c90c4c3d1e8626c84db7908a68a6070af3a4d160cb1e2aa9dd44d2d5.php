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
        $__internal_dc6b504f77c74fec757363e2810f864645c01b843a7d41febef472d0d07f1ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6b504f77c74fec757363e2810f864645c01b843a7d41febef472d0d07f1ac5->enter($__internal_dc6b504f77c74fec757363e2810f864645c01b843a7d41febef472d0d07f1ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d6fc7318a97bf0de1bf6358bcef1b456d47ff12019dcbdd31f0d75d43cf269ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fc7318a97bf0de1bf6358bcef1b456d47ff12019dcbdd31f0d75d43cf269ca->enter($__internal_d6fc7318a97bf0de1bf6358bcef1b456d47ff12019dcbdd31f0d75d43cf269ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_dc6b504f77c74fec757363e2810f864645c01b843a7d41febef472d0d07f1ac5->leave($__internal_dc6b504f77c74fec757363e2810f864645c01b843a7d41febef472d0d07f1ac5_prof);

        
        $__internal_d6fc7318a97bf0de1bf6358bcef1b456d47ff12019dcbdd31f0d75d43cf269ca->leave($__internal_d6fc7318a97bf0de1bf6358bcef1b456d47ff12019dcbdd31f0d75d43cf269ca_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ba6c972ac439445f2a66793703bc80d64346117392d976d2785598cc009e0118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6c972ac439445f2a66793703bc80d64346117392d976d2785598cc009e0118->enter($__internal_ba6c972ac439445f2a66793703bc80d64346117392d976d2785598cc009e0118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bd7a9939353e12537fb7948b273fbcd545d425469893cc8099a5f9de37ddf9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7a9939353e12537fb7948b273fbcd545d425469893cc8099a5f9de37ddf9f7->enter($__internal_bd7a9939353e12537fb7948b273fbcd545d425469893cc8099a5f9de37ddf9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_bd7a9939353e12537fb7948b273fbcd545d425469893cc8099a5f9de37ddf9f7->leave($__internal_bd7a9939353e12537fb7948b273fbcd545d425469893cc8099a5f9de37ddf9f7_prof);

        
        $__internal_ba6c972ac439445f2a66793703bc80d64346117392d976d2785598cc009e0118->leave($__internal_ba6c972ac439445f2a66793703bc80d64346117392d976d2785598cc009e0118_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_79bf2b368ba1286909f63cf2af168799b73394144b46f28a49ca732cd89af71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bf2b368ba1286909f63cf2af168799b73394144b46f28a49ca732cd89af71d->enter($__internal_79bf2b368ba1286909f63cf2af168799b73394144b46f28a49ca732cd89af71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_5c1462be152c2a05803fdd63d95716085897f554fb1defb1e2a0a7c03221e69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1462be152c2a05803fdd63d95716085897f554fb1defb1e2a0a7c03221e69d->enter($__internal_5c1462be152c2a05803fdd63d95716085897f554fb1defb1e2a0a7c03221e69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_5c1462be152c2a05803fdd63d95716085897f554fb1defb1e2a0a7c03221e69d->leave($__internal_5c1462be152c2a05803fdd63d95716085897f554fb1defb1e2a0a7c03221e69d_prof);

        
        $__internal_79bf2b368ba1286909f63cf2af168799b73394144b46f28a49ca732cd89af71d->leave($__internal_79bf2b368ba1286909f63cf2af168799b73394144b46f28a49ca732cd89af71d_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b0f20682ef18790e0f8cf987a56eccae0b53644274b20ac938982a149122e02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f20682ef18790e0f8cf987a56eccae0b53644274b20ac938982a149122e02d->enter($__internal_b0f20682ef18790e0f8cf987a56eccae0b53644274b20ac938982a149122e02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_c6f65c3dde9fa11a242562290792e76a370c0db122986ac7e20fcb3851645230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f65c3dde9fa11a242562290792e76a370c0db122986ac7e20fcb3851645230->enter($__internal_c6f65c3dde9fa11a242562290792e76a370c0db122986ac7e20fcb3851645230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_c6f65c3dde9fa11a242562290792e76a370c0db122986ac7e20fcb3851645230->leave($__internal_c6f65c3dde9fa11a242562290792e76a370c0db122986ac7e20fcb3851645230_prof);

        
        $__internal_b0f20682ef18790e0f8cf987a56eccae0b53644274b20ac938982a149122e02d->leave($__internal_b0f20682ef18790e0f8cf987a56eccae0b53644274b20ac938982a149122e02d_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_614e3e6624229e6b5227a10b1cd90458289f5bf07cecfe26a373d956193d9f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614e3e6624229e6b5227a10b1cd90458289f5bf07cecfe26a373d956193d9f24->enter($__internal_614e3e6624229e6b5227a10b1cd90458289f5bf07cecfe26a373d956193d9f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_ed703262f6dd3fcc0ebe15d6d9411f444d891bbd597df7ea8b83ef2eead1378f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed703262f6dd3fcc0ebe15d6d9411f444d891bbd597df7ea8b83ef2eead1378f->enter($__internal_ed703262f6dd3fcc0ebe15d6d9411f444d891bbd597df7ea8b83ef2eead1378f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_ed703262f6dd3fcc0ebe15d6d9411f444d891bbd597df7ea8b83ef2eead1378f->leave($__internal_ed703262f6dd3fcc0ebe15d6d9411f444d891bbd597df7ea8b83ef2eead1378f_prof);

        
        $__internal_614e3e6624229e6b5227a10b1cd90458289f5bf07cecfe26a373d956193d9f24->leave($__internal_614e3e6624229e6b5227a10b1cd90458289f5bf07cecfe26a373d956193d9f24_prof);

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
