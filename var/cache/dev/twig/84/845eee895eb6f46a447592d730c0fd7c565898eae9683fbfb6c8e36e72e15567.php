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
        $__internal_f86d6f194faba20b246311a0acd50cac0c4bb9e731a8f83a2194950aff03ad29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86d6f194faba20b246311a0acd50cac0c4bb9e731a8f83a2194950aff03ad29->enter($__internal_f86d6f194faba20b246311a0acd50cac0c4bb9e731a8f83a2194950aff03ad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_b259a8c4b65e6064a70b3993831bdbccf98f96f5269aed4c3fbd275fc1a453f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b259a8c4b65e6064a70b3993831bdbccf98f96f5269aed4c3fbd275fc1a453f7->enter($__internal_b259a8c4b65e6064a70b3993831bdbccf98f96f5269aed4c3fbd275fc1a453f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f86d6f194faba20b246311a0acd50cac0c4bb9e731a8f83a2194950aff03ad29->leave($__internal_f86d6f194faba20b246311a0acd50cac0c4bb9e731a8f83a2194950aff03ad29_prof);

        
        $__internal_b259a8c4b65e6064a70b3993831bdbccf98f96f5269aed4c3fbd275fc1a453f7->leave($__internal_b259a8c4b65e6064a70b3993831bdbccf98f96f5269aed4c3fbd275fc1a453f7_prof);

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
