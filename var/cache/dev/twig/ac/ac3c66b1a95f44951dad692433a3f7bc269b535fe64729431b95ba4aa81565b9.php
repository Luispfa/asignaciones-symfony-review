<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_aa1e8c9cabdf9bbf784a5c7acbed671b05ab8cd2ad5fb9be0a83dfa612ab9f11 extends Twig_Template
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
        $__internal_4c37f621bece785403b9aaecbd9f1fdaf8156a83f1aa64498a5bff0a2e2ff117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c37f621bece785403b9aaecbd9f1fdaf8156a83f1aa64498a5bff0a2e2ff117->enter($__internal_4c37f621bece785403b9aaecbd9f1fdaf8156a83f1aa64498a5bff0a2e2ff117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_722e1c633c298d581253a2055da421e48a03082d099209129e51f41d448dc114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722e1c633c298d581253a2055da421e48a03082d099209129e51f41d448dc114->enter($__internal_722e1c633c298d581253a2055da421e48a03082d099209129e51f41d448dc114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4c37f621bece785403b9aaecbd9f1fdaf8156a83f1aa64498a5bff0a2e2ff117->leave($__internal_4c37f621bece785403b9aaecbd9f1fdaf8156a83f1aa64498a5bff0a2e2ff117_prof);

        
        $__internal_722e1c633c298d581253a2055da421e48a03082d099209129e51f41d448dc114->leave($__internal_722e1c633c298d581253a2055da421e48a03082d099209129e51f41d448dc114_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
