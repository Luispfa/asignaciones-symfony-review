<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cd29e79bb3d7c07ca94ef3cf9001a32db902ef5746459b1e5698a1c665ceb34f extends Twig_Template
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
        $__internal_9dbdebeeaa201309b251cfb1988f4ec5d11b46ca0f7fe3a4721f806d4700ef6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dbdebeeaa201309b251cfb1988f4ec5d11b46ca0f7fe3a4721f806d4700ef6b->enter($__internal_9dbdebeeaa201309b251cfb1988f4ec5d11b46ca0f7fe3a4721f806d4700ef6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4b19b2585aedab09fce42f88287d5e2370257617223eabc27c4b3b09a3b9bdbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b19b2585aedab09fce42f88287d5e2370257617223eabc27c4b3b09a3b9bdbf->enter($__internal_4b19b2585aedab09fce42f88287d5e2370257617223eabc27c4b3b09a3b9bdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9dbdebeeaa201309b251cfb1988f4ec5d11b46ca0f7fe3a4721f806d4700ef6b->leave($__internal_9dbdebeeaa201309b251cfb1988f4ec5d11b46ca0f7fe3a4721f806d4700ef6b_prof);

        
        $__internal_4b19b2585aedab09fce42f88287d5e2370257617223eabc27c4b3b09a3b9bdbf->leave($__internal_4b19b2585aedab09fce42f88287d5e2370257617223eabc27c4b3b09a3b9bdbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
