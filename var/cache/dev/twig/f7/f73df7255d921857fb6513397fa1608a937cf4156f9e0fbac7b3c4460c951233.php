<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a6354592ffc8c00d848bec9386795d42545bb49450c1626fdcc4ea1c354580df extends Twig_Template
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
        $__internal_7126e846d47781e9c079426c37c9eba48b7746ca3e305ae28f16c45b0860c7f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7126e846d47781e9c079426c37c9eba48b7746ca3e305ae28f16c45b0860c7f3->enter($__internal_7126e846d47781e9c079426c37c9eba48b7746ca3e305ae28f16c45b0860c7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4ff5b15ae80619cbbe389e145abb6821c838a3a07b81af4cd36bb0da85749eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff5b15ae80619cbbe389e145abb6821c838a3a07b81af4cd36bb0da85749eca->enter($__internal_4ff5b15ae80619cbbe389e145abb6821c838a3a07b81af4cd36bb0da85749eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_7126e846d47781e9c079426c37c9eba48b7746ca3e305ae28f16c45b0860c7f3->leave($__internal_7126e846d47781e9c079426c37c9eba48b7746ca3e305ae28f16c45b0860c7f3_prof);

        
        $__internal_4ff5b15ae80619cbbe389e145abb6821c838a3a07b81af4cd36bb0da85749eca->leave($__internal_4ff5b15ae80619cbbe389e145abb6821c838a3a07b81af4cd36bb0da85749eca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
