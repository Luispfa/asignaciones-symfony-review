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
        $__internal_47ba878fa100c20e70772089aa6d7da9d85fb9d54e056e85fe6da6782669a17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ba878fa100c20e70772089aa6d7da9d85fb9d54e056e85fe6da6782669a17e->enter($__internal_47ba878fa100c20e70772089aa6d7da9d85fb9d54e056e85fe6da6782669a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_95a7585d8c70331b69594f34f246ee2f42a0dab714ea7c416755ebece039b5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a7585d8c70331b69594f34f246ee2f42a0dab714ea7c416755ebece039b5c1->enter($__internal_95a7585d8c70331b69594f34f246ee2f42a0dab714ea7c416755ebece039b5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_47ba878fa100c20e70772089aa6d7da9d85fb9d54e056e85fe6da6782669a17e->leave($__internal_47ba878fa100c20e70772089aa6d7da9d85fb9d54e056e85fe6da6782669a17e_prof);

        
        $__internal_95a7585d8c70331b69594f34f246ee2f42a0dab714ea7c416755ebece039b5c1->leave($__internal_95a7585d8c70331b69594f34f246ee2f42a0dab714ea7c416755ebece039b5c1_prof);

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
