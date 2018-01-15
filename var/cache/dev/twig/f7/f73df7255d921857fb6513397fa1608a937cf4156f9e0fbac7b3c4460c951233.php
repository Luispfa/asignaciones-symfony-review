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
        $__internal_1011935b0f05807e128e07956eca2c1800f9def0431d7de7b7ed97bf38385198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1011935b0f05807e128e07956eca2c1800f9def0431d7de7b7ed97bf38385198->enter($__internal_1011935b0f05807e128e07956eca2c1800f9def0431d7de7b7ed97bf38385198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d5c96f162974bca3699b3ff7947fcbd14c80a873670c63d5d606fc031ca69fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c96f162974bca3699b3ff7947fcbd14c80a873670c63d5d606fc031ca69fd2->enter($__internal_d5c96f162974bca3699b3ff7947fcbd14c80a873670c63d5d606fc031ca69fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1011935b0f05807e128e07956eca2c1800f9def0431d7de7b7ed97bf38385198->leave($__internal_1011935b0f05807e128e07956eca2c1800f9def0431d7de7b7ed97bf38385198_prof);

        
        $__internal_d5c96f162974bca3699b3ff7947fcbd14c80a873670c63d5d606fc031ca69fd2->leave($__internal_d5c96f162974bca3699b3ff7947fcbd14c80a873670c63d5d606fc031ca69fd2_prof);

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
