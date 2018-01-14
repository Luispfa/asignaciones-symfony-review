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
        $__internal_e9a78a1436309c00ac114a0e2bc3a11e8f226ed742c7a0ae418f8ba725774a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a78a1436309c00ac114a0e2bc3a11e8f226ed742c7a0ae418f8ba725774a64->enter($__internal_e9a78a1436309c00ac114a0e2bc3a11e8f226ed742c7a0ae418f8ba725774a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_317933b00a7a91bd2febedbbf970d046474638dbac83ef9d444bad6d14ffef36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317933b00a7a91bd2febedbbf970d046474638dbac83ef9d444bad6d14ffef36->enter($__internal_317933b00a7a91bd2febedbbf970d046474638dbac83ef9d444bad6d14ffef36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e9a78a1436309c00ac114a0e2bc3a11e8f226ed742c7a0ae418f8ba725774a64->leave($__internal_e9a78a1436309c00ac114a0e2bc3a11e8f226ed742c7a0ae418f8ba725774a64_prof);

        
        $__internal_317933b00a7a91bd2febedbbf970d046474638dbac83ef9d444bad6d14ffef36->leave($__internal_317933b00a7a91bd2febedbbf970d046474638dbac83ef9d444bad6d14ffef36_prof);

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
