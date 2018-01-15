<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8ab0b25ef9cc5e5e117471e5431e3263ef9c42398dd07a4f6fee6203cef108ac extends Twig_Template
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
        $__internal_bc4a81b13fc90354025438626a219b2d005a21467d72fd09b5b6e0d9c28172a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4a81b13fc90354025438626a219b2d005a21467d72fd09b5b6e0d9c28172a8->enter($__internal_bc4a81b13fc90354025438626a219b2d005a21467d72fd09b5b6e0d9c28172a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7fa9c23265c41ac2a43c2bb18b6a3943810172528734b30c84aabfe1d791c30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa9c23265c41ac2a43c2bb18b6a3943810172528734b30c84aabfe1d791c30d->enter($__internal_7fa9c23265c41ac2a43c2bb18b6a3943810172528734b30c84aabfe1d791c30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bc4a81b13fc90354025438626a219b2d005a21467d72fd09b5b6e0d9c28172a8->leave($__internal_bc4a81b13fc90354025438626a219b2d005a21467d72fd09b5b6e0d9c28172a8_prof);

        
        $__internal_7fa9c23265c41ac2a43c2bb18b6a3943810172528734b30c84aabfe1d791c30d->leave($__internal_7fa9c23265c41ac2a43c2bb18b6a3943810172528734b30c84aabfe1d791c30d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
