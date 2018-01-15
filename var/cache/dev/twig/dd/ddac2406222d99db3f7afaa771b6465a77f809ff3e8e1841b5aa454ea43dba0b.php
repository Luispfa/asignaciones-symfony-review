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
        $__internal_9256e3309e527d639d04e0371008bc25814c0873c319ac5f8c6046c9e99944cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9256e3309e527d639d04e0371008bc25814c0873c319ac5f8c6046c9e99944cb->enter($__internal_9256e3309e527d639d04e0371008bc25814c0873c319ac5f8c6046c9e99944cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3f6036c0620f3ea55827bb684a39d33735e00f98d64f1ff1dffe1eb5e7e281ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6036c0620f3ea55827bb684a39d33735e00f98d64f1ff1dffe1eb5e7e281ae->enter($__internal_3f6036c0620f3ea55827bb684a39d33735e00f98d64f1ff1dffe1eb5e7e281ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9256e3309e527d639d04e0371008bc25814c0873c319ac5f8c6046c9e99944cb->leave($__internal_9256e3309e527d639d04e0371008bc25814c0873c319ac5f8c6046c9e99944cb_prof);

        
        $__internal_3f6036c0620f3ea55827bb684a39d33735e00f98d64f1ff1dffe1eb5e7e281ae->leave($__internal_3f6036c0620f3ea55827bb684a39d33735e00f98d64f1ff1dffe1eb5e7e281ae_prof);

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
