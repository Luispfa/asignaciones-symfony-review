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
        $__internal_8c5b61fa30112d90382133208de56e2b7e2724268e16ad5751ad29a198bfc969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5b61fa30112d90382133208de56e2b7e2724268e16ad5751ad29a198bfc969->enter($__internal_8c5b61fa30112d90382133208de56e2b7e2724268e16ad5751ad29a198bfc969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_71b689aa0367ee7ef1dda940a11455808491273fb86b7ab3180f0378ab2c1c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b689aa0367ee7ef1dda940a11455808491273fb86b7ab3180f0378ab2c1c73->enter($__internal_71b689aa0367ee7ef1dda940a11455808491273fb86b7ab3180f0378ab2c1c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_8c5b61fa30112d90382133208de56e2b7e2724268e16ad5751ad29a198bfc969->leave($__internal_8c5b61fa30112d90382133208de56e2b7e2724268e16ad5751ad29a198bfc969_prof);

        
        $__internal_71b689aa0367ee7ef1dda940a11455808491273fb86b7ab3180f0378ab2c1c73->leave($__internal_71b689aa0367ee7ef1dda940a11455808491273fb86b7ab3180f0378ab2c1c73_prof);

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
