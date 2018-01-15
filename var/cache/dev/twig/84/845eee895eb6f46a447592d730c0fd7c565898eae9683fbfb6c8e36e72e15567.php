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
        $__internal_e244b389a2f5e8744fcbcd594f3055fb51582d32d00b61e8731b9918f3ddf938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e244b389a2f5e8744fcbcd594f3055fb51582d32d00b61e8731b9918f3ddf938->enter($__internal_e244b389a2f5e8744fcbcd594f3055fb51582d32d00b61e8731b9918f3ddf938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ab38772e11c69413dfdf93e9eed5ab2d38f3e62b00fd69d27a2824ef49fbdf33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab38772e11c69413dfdf93e9eed5ab2d38f3e62b00fd69d27a2824ef49fbdf33->enter($__internal_ab38772e11c69413dfdf93e9eed5ab2d38f3e62b00fd69d27a2824ef49fbdf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e244b389a2f5e8744fcbcd594f3055fb51582d32d00b61e8731b9918f3ddf938->leave($__internal_e244b389a2f5e8744fcbcd594f3055fb51582d32d00b61e8731b9918f3ddf938_prof);

        
        $__internal_ab38772e11c69413dfdf93e9eed5ab2d38f3e62b00fd69d27a2824ef49fbdf33->leave($__internal_ab38772e11c69413dfdf93e9eed5ab2d38f3e62b00fd69d27a2824ef49fbdf33_prof);

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
