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
        $__internal_30a89760dab7013d13b93b2e8989e97ba24546aa342b3672e2127734768b15ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a89760dab7013d13b93b2e8989e97ba24546aa342b3672e2127734768b15ce->enter($__internal_30a89760dab7013d13b93b2e8989e97ba24546aa342b3672e2127734768b15ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a5ce8dd2d1e2475794dacf81e2321ad3f09f1f60b1a8e8958b1851a060aa8b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ce8dd2d1e2475794dacf81e2321ad3f09f1f60b1a8e8958b1851a060aa8b99->enter($__internal_a5ce8dd2d1e2475794dacf81e2321ad3f09f1f60b1a8e8958b1851a060aa8b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_30a89760dab7013d13b93b2e8989e97ba24546aa342b3672e2127734768b15ce->leave($__internal_30a89760dab7013d13b93b2e8989e97ba24546aa342b3672e2127734768b15ce_prof);

        
        $__internal_a5ce8dd2d1e2475794dacf81e2321ad3f09f1f60b1a8e8958b1851a060aa8b99->leave($__internal_a5ce8dd2d1e2475794dacf81e2321ad3f09f1f60b1a8e8958b1851a060aa8b99_prof);

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
