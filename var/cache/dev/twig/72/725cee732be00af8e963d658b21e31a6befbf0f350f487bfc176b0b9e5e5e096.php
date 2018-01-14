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
        $__internal_a3de6ea6eb3e8d776a8eff977f7b4137c48b4188438030f7979f4ffafb62fa98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3de6ea6eb3e8d776a8eff977f7b4137c48b4188438030f7979f4ffafb62fa98->enter($__internal_a3de6ea6eb3e8d776a8eff977f7b4137c48b4188438030f7979f4ffafb62fa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_b15a9896d78416829d9bd84af65483e51a947aef9bfb5b2fad02658f044d4a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15a9896d78416829d9bd84af65483e51a947aef9bfb5b2fad02658f044d4a27->enter($__internal_b15a9896d78416829d9bd84af65483e51a947aef9bfb5b2fad02658f044d4a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a3de6ea6eb3e8d776a8eff977f7b4137c48b4188438030f7979f4ffafb62fa98->leave($__internal_a3de6ea6eb3e8d776a8eff977f7b4137c48b4188438030f7979f4ffafb62fa98_prof);

        
        $__internal_b15a9896d78416829d9bd84af65483e51a947aef9bfb5b2fad02658f044d4a27->leave($__internal_b15a9896d78416829d9bd84af65483e51a947aef9bfb5b2fad02658f044d4a27_prof);

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
