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
        $__internal_75b31d5919aeca5e8063dbbfa21dc6b6dda4113d486a2ff202bd16a724aa4a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b31d5919aeca5e8063dbbfa21dc6b6dda4113d486a2ff202bd16a724aa4a25->enter($__internal_75b31d5919aeca5e8063dbbfa21dc6b6dda4113d486a2ff202bd16a724aa4a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_ac8a02412cfb8c25a675eb09e0b27d8a7cb0eae7a643fb7113e619875a4ab094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8a02412cfb8c25a675eb09e0b27d8a7cb0eae7a643fb7113e619875a4ab094->enter($__internal_ac8a02412cfb8c25a675eb09e0b27d8a7cb0eae7a643fb7113e619875a4ab094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_75b31d5919aeca5e8063dbbfa21dc6b6dda4113d486a2ff202bd16a724aa4a25->leave($__internal_75b31d5919aeca5e8063dbbfa21dc6b6dda4113d486a2ff202bd16a724aa4a25_prof);

        
        $__internal_ac8a02412cfb8c25a675eb09e0b27d8a7cb0eae7a643fb7113e619875a4ab094->leave($__internal_ac8a02412cfb8c25a675eb09e0b27d8a7cb0eae7a643fb7113e619875a4ab094_prof);

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
