<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7960fcaac0b2ab284b2b46168e4ef730a2e8be0f78d9a4147233661423aac945 extends Twig_Template
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
        $__internal_96bacc4cc8815ee12b77f1a2bb739e35f4ed5184e5e531ea07a1d2d224b28d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bacc4cc8815ee12b77f1a2bb739e35f4ed5184e5e531ea07a1d2d224b28d31->enter($__internal_96bacc4cc8815ee12b77f1a2bb739e35f4ed5184e5e531ea07a1d2d224b28d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_651926ba9133839b49ec9fbfdaab55f5240a90d6bc38ecf70e39074388bb830f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651926ba9133839b49ec9fbfdaab55f5240a90d6bc38ecf70e39074388bb830f->enter($__internal_651926ba9133839b49ec9fbfdaab55f5240a90d6bc38ecf70e39074388bb830f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_96bacc4cc8815ee12b77f1a2bb739e35f4ed5184e5e531ea07a1d2d224b28d31->leave($__internal_96bacc4cc8815ee12b77f1a2bb739e35f4ed5184e5e531ea07a1d2d224b28d31_prof);

        
        $__internal_651926ba9133839b49ec9fbfdaab55f5240a90d6bc38ecf70e39074388bb830f->leave($__internal_651926ba9133839b49ec9fbfdaab55f5240a90d6bc38ecf70e39074388bb830f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
