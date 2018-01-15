<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a43fadd3e2df075ba3ed4fb51468a6ab88229cea92632ca39d0edc857379bd60 extends Twig_Template
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
        $__internal_72d9f7e1d9bb86aab93d759caffc9e0682d0e23fc71067542087dfb8ee62170f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d9f7e1d9bb86aab93d759caffc9e0682d0e23fc71067542087dfb8ee62170f->enter($__internal_72d9f7e1d9bb86aab93d759caffc9e0682d0e23fc71067542087dfb8ee62170f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e37c3c90145a3d1cb22a884369aed41fea7a56caa036bd5c65a044bd0cf0a3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37c3c90145a3d1cb22a884369aed41fea7a56caa036bd5c65a044bd0cf0a3bf->enter($__internal_e37c3c90145a3d1cb22a884369aed41fea7a56caa036bd5c65a044bd0cf0a3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_72d9f7e1d9bb86aab93d759caffc9e0682d0e23fc71067542087dfb8ee62170f->leave($__internal_72d9f7e1d9bb86aab93d759caffc9e0682d0e23fc71067542087dfb8ee62170f_prof);

        
        $__internal_e37c3c90145a3d1cb22a884369aed41fea7a56caa036bd5c65a044bd0cf0a3bf->leave($__internal_e37c3c90145a3d1cb22a884369aed41fea7a56caa036bd5c65a044bd0cf0a3bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
