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
        $__internal_87f0dd982e8e7ba49f28248cc02815aaf86a05e841d62447f011b81978660c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f0dd982e8e7ba49f28248cc02815aaf86a05e841d62447f011b81978660c06->enter($__internal_87f0dd982e8e7ba49f28248cc02815aaf86a05e841d62447f011b81978660c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_76aa7aa5156c32d774ba5646365caa9bb8fb7f2ab6ff4358eb90a58abb4a3d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76aa7aa5156c32d774ba5646365caa9bb8fb7f2ab6ff4358eb90a58abb4a3d82->enter($__internal_76aa7aa5156c32d774ba5646365caa9bb8fb7f2ab6ff4358eb90a58abb4a3d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_87f0dd982e8e7ba49f28248cc02815aaf86a05e841d62447f011b81978660c06->leave($__internal_87f0dd982e8e7ba49f28248cc02815aaf86a05e841d62447f011b81978660c06_prof);

        
        $__internal_76aa7aa5156c32d774ba5646365caa9bb8fb7f2ab6ff4358eb90a58abb4a3d82->leave($__internal_76aa7aa5156c32d774ba5646365caa9bb8fb7f2ab6ff4358eb90a58abb4a3d82_prof);

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
