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
        $__internal_647c04ede680bf38fb4cfc990dfce23bbea9ceb83b4d29f17c947384fa4d97dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647c04ede680bf38fb4cfc990dfce23bbea9ceb83b4d29f17c947384fa4d97dd->enter($__internal_647c04ede680bf38fb4cfc990dfce23bbea9ceb83b4d29f17c947384fa4d97dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f6c37e1c844ed78af395e2753bafa422a7292b6cf069fc22eed0a88bb64ed2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c37e1c844ed78af395e2753bafa422a7292b6cf069fc22eed0a88bb64ed2df->enter($__internal_f6c37e1c844ed78af395e2753bafa422a7292b6cf069fc22eed0a88bb64ed2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_647c04ede680bf38fb4cfc990dfce23bbea9ceb83b4d29f17c947384fa4d97dd->leave($__internal_647c04ede680bf38fb4cfc990dfce23bbea9ceb83b4d29f17c947384fa4d97dd_prof);

        
        $__internal_f6c37e1c844ed78af395e2753bafa422a7292b6cf069fc22eed0a88bb64ed2df->leave($__internal_f6c37e1c844ed78af395e2753bafa422a7292b6cf069fc22eed0a88bb64ed2df_prof);

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
