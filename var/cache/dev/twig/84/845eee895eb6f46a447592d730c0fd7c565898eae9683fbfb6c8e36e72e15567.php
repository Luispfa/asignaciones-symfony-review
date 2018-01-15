<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f191aa55dfb5207cebc155d77a5e12ec36900e8176e06c0103ba474648e96aa1 extends Twig_Template
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
        $__internal_a9858cc7883c31f54d0e6e15b42ea294175fc132fa58a6fac5681b762d868e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9858cc7883c31f54d0e6e15b42ea294175fc132fa58a6fac5681b762d868e37->enter($__internal_a9858cc7883c31f54d0e6e15b42ea294175fc132fa58a6fac5681b762d868e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_f89245a1bb0a054dae7dcc728091fb4a85ec073992aec5a13419679648017b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89245a1bb0a054dae7dcc728091fb4a85ec073992aec5a13419679648017b4e->enter($__internal_f89245a1bb0a054dae7dcc728091fb4a85ec073992aec5a13419679648017b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a9858cc7883c31f54d0e6e15b42ea294175fc132fa58a6fac5681b762d868e37->leave($__internal_a9858cc7883c31f54d0e6e15b42ea294175fc132fa58a6fac5681b762d868e37_prof);

        
        $__internal_f89245a1bb0a054dae7dcc728091fb4a85ec073992aec5a13419679648017b4e->leave($__internal_f89245a1bb0a054dae7dcc728091fb4a85ec073992aec5a13419679648017b4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
