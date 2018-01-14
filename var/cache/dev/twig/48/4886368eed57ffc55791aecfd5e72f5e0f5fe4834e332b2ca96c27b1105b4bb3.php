<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_2efb31146c7560788f935dc7100c2d3554518607ae6e7dce12cf0fa3d1ec64eb extends Twig_Template
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
        $__internal_96cb550535bf857b3d73639d26fc8937cd3816be7f5843fca3bcdbf3ae879d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cb550535bf857b3d73639d26fc8937cd3816be7f5843fca3bcdbf3ae879d5c->enter($__internal_96cb550535bf857b3d73639d26fc8937cd3816be7f5843fca3bcdbf3ae879d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_3ca457b5fbf5b1793d8eddd6dd035f32d0cdace78ce301adfec37fa597828981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca457b5fbf5b1793d8eddd6dd035f32d0cdace78ce301adfec37fa597828981->enter($__internal_3ca457b5fbf5b1793d8eddd6dd035f32d0cdace78ce301adfec37fa597828981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_96cb550535bf857b3d73639d26fc8937cd3816be7f5843fca3bcdbf3ae879d5c->leave($__internal_96cb550535bf857b3d73639d26fc8937cd3816be7f5843fca3bcdbf3ae879d5c_prof);

        
        $__internal_3ca457b5fbf5b1793d8eddd6dd035f32d0cdace78ce301adfec37fa597828981->leave($__internal_3ca457b5fbf5b1793d8eddd6dd035f32d0cdace78ce301adfec37fa597828981_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
