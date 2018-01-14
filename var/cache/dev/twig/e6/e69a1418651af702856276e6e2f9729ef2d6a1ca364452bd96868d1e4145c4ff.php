<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ec80d59436130c9b5e47f02a8ec93f0fd7330070a52dc1fe8a774f0bf7bc204c extends Twig_Template
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
        $__internal_a7e1d95cd5b463ab62282dce3d2eab82d2c96ee2a5ac9abc505f448b2533d97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e1d95cd5b463ab62282dce3d2eab82d2c96ee2a5ac9abc505f448b2533d97c->enter($__internal_a7e1d95cd5b463ab62282dce3d2eab82d2c96ee2a5ac9abc505f448b2533d97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3ebe1b8a84838cb0215a3b2b638cad2632fe027638e420ae49f73c230436fc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebe1b8a84838cb0215a3b2b638cad2632fe027638e420ae49f73c230436fc5f->enter($__internal_3ebe1b8a84838cb0215a3b2b638cad2632fe027638e420ae49f73c230436fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a7e1d95cd5b463ab62282dce3d2eab82d2c96ee2a5ac9abc505f448b2533d97c->leave($__internal_a7e1d95cd5b463ab62282dce3d2eab82d2c96ee2a5ac9abc505f448b2533d97c_prof);

        
        $__internal_3ebe1b8a84838cb0215a3b2b638cad2632fe027638e420ae49f73c230436fc5f->leave($__internal_3ebe1b8a84838cb0215a3b2b638cad2632fe027638e420ae49f73c230436fc5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
