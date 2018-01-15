<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_603dd9c11d5e1aaadb44d23a15a5768af40a3d5c76bfbf4931fdf2244d7d501d extends Twig_Template
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
        $__internal_e3ecc08af8210791da1953dd1d143237b230612505e5c71f99dbb58722892de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ecc08af8210791da1953dd1d143237b230612505e5c71f99dbb58722892de3->enter($__internal_e3ecc08af8210791da1953dd1d143237b230612505e5c71f99dbb58722892de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_abc80d70b75df1a47cf461239431b165767c6f0ca22f6dfb4789d623e5280a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc80d70b75df1a47cf461239431b165767c6f0ca22f6dfb4789d623e5280a8b->enter($__internal_abc80d70b75df1a47cf461239431b165767c6f0ca22f6dfb4789d623e5280a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e3ecc08af8210791da1953dd1d143237b230612505e5c71f99dbb58722892de3->leave($__internal_e3ecc08af8210791da1953dd1d143237b230612505e5c71f99dbb58722892de3_prof);

        
        $__internal_abc80d70b75df1a47cf461239431b165767c6f0ca22f6dfb4789d623e5280a8b->leave($__internal_abc80d70b75df1a47cf461239431b165767c6f0ca22f6dfb4789d623e5280a8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
