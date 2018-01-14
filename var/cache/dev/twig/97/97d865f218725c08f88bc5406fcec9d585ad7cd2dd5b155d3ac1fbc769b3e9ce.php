<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e1d3da55993cd2f7eccee66d6f440009e422c96093a9fffccad5d7a3f4a47672 extends Twig_Template
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
        $__internal_8f54de84bca28656abacdd1874e602ea4815f99447e3899b8a64060a40ace74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f54de84bca28656abacdd1874e602ea4815f99447e3899b8a64060a40ace74a->enter($__internal_8f54de84bca28656abacdd1874e602ea4815f99447e3899b8a64060a40ace74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5bea5a922f80d49f29901180440042145efa8fe4986f8b9284a0ddccc5ba3d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bea5a922f80d49f29901180440042145efa8fe4986f8b9284a0ddccc5ba3d5d->enter($__internal_5bea5a922f80d49f29901180440042145efa8fe4986f8b9284a0ddccc5ba3d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8f54de84bca28656abacdd1874e602ea4815f99447e3899b8a64060a40ace74a->leave($__internal_8f54de84bca28656abacdd1874e602ea4815f99447e3899b8a64060a40ace74a_prof);

        
        $__internal_5bea5a922f80d49f29901180440042145efa8fe4986f8b9284a0ddccc5ba3d5d->leave($__internal_5bea5a922f80d49f29901180440042145efa8fe4986f8b9284a0ddccc5ba3d5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
