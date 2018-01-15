<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_54d26c02ad572c2049efc9d0b1009583a8c684b7e780e9eb37d26062836ddb3e extends Twig_Template
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
        $__internal_10414e7ce506a4e7f2904ea2b0922f1bdcf47cfe9e5185a83405e7065c4f8e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10414e7ce506a4e7f2904ea2b0922f1bdcf47cfe9e5185a83405e7065c4f8e6b->enter($__internal_10414e7ce506a4e7f2904ea2b0922f1bdcf47cfe9e5185a83405e7065c4f8e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e47b2b59e70335a3526b52be7140f56a87671b3f8772047439732db129ccc025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47b2b59e70335a3526b52be7140f56a87671b3f8772047439732db129ccc025->enter($__internal_e47b2b59e70335a3526b52be7140f56a87671b3f8772047439732db129ccc025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_10414e7ce506a4e7f2904ea2b0922f1bdcf47cfe9e5185a83405e7065c4f8e6b->leave($__internal_10414e7ce506a4e7f2904ea2b0922f1bdcf47cfe9e5185a83405e7065c4f8e6b_prof);

        
        $__internal_e47b2b59e70335a3526b52be7140f56a87671b3f8772047439732db129ccc025->leave($__internal_e47b2b59e70335a3526b52be7140f56a87671b3f8772047439732db129ccc025_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
