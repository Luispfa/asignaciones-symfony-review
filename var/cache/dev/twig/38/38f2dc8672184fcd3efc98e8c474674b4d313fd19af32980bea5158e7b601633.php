<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_a87adf88c8521784f2b600c2cb70331f131e53596c68fd7cb3774908e01bea09 extends Twig_Template
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
        $__internal_eec9b2d0851a4deec8fa172be7d59f04ba236887a00f3b394b0ff9ae4cb8a063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec9b2d0851a4deec8fa172be7d59f04ba236887a00f3b394b0ff9ae4cb8a063->enter($__internal_eec9b2d0851a4deec8fa172be7d59f04ba236887a00f3b394b0ff9ae4cb8a063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_21436bdb0bf7ebb650d5cce860b34b5ba1cfee7210f2f577fb0138ab7079cd0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21436bdb0bf7ebb650d5cce860b34b5ba1cfee7210f2f577fb0138ab7079cd0c->enter($__internal_21436bdb0bf7ebb650d5cce860b34b5ba1cfee7210f2f577fb0138ab7079cd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_eec9b2d0851a4deec8fa172be7d59f04ba236887a00f3b394b0ff9ae4cb8a063->leave($__internal_eec9b2d0851a4deec8fa172be7d59f04ba236887a00f3b394b0ff9ae4cb8a063_prof);

        
        $__internal_21436bdb0bf7ebb650d5cce860b34b5ba1cfee7210f2f577fb0138ab7079cd0c->leave($__internal_21436bdb0bf7ebb650d5cce860b34b5ba1cfee7210f2f577fb0138ab7079cd0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
