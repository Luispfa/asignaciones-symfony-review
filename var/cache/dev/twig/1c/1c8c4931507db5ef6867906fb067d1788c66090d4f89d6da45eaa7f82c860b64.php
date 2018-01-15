<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_edbe491c41573fcecd5f0fc11bdf6e4cd092f51863be4fb30a554399ca961b58 extends Twig_Template
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
        $__internal_e28ae0d209c3516335e5bfdcc034b35652ffe599fda0c738f5902553754a7b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28ae0d209c3516335e5bfdcc034b35652ffe599fda0c738f5902553754a7b5e->enter($__internal_e28ae0d209c3516335e5bfdcc034b35652ffe599fda0c738f5902553754a7b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fe4fe6f0afa3d1b5a77808ad097c9af22e13163ea3091b2eafdd899349c1555f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4fe6f0afa3d1b5a77808ad097c9af22e13163ea3091b2eafdd899349c1555f->enter($__internal_fe4fe6f0afa3d1b5a77808ad097c9af22e13163ea3091b2eafdd899349c1555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e28ae0d209c3516335e5bfdcc034b35652ffe599fda0c738f5902553754a7b5e->leave($__internal_e28ae0d209c3516335e5bfdcc034b35652ffe599fda0c738f5902553754a7b5e_prof);

        
        $__internal_fe4fe6f0afa3d1b5a77808ad097c9af22e13163ea3091b2eafdd899349c1555f->leave($__internal_fe4fe6f0afa3d1b5a77808ad097c9af22e13163ea3091b2eafdd899349c1555f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
