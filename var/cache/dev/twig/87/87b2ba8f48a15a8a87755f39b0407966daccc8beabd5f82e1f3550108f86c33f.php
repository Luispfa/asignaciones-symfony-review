<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4fa9b18d7435d9d48c4d24113ae7eae0a751076cfadf89266e8bab78301de444 extends Twig_Template
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
        $__internal_91a51197f99639820ffd818547855add65d87adbc9adca1270c9fb27782bc0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a51197f99639820ffd818547855add65d87adbc9adca1270c9fb27782bc0b5->enter($__internal_91a51197f99639820ffd818547855add65d87adbc9adca1270c9fb27782bc0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d3920bcd8c4d3bfe9f5cb8160a7a266e5d84761295d72464308d943fd5f79db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3920bcd8c4d3bfe9f5cb8160a7a266e5d84761295d72464308d943fd5f79db2->enter($__internal_d3920bcd8c4d3bfe9f5cb8160a7a266e5d84761295d72464308d943fd5f79db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_91a51197f99639820ffd818547855add65d87adbc9adca1270c9fb27782bc0b5->leave($__internal_91a51197f99639820ffd818547855add65d87adbc9adca1270c9fb27782bc0b5_prof);

        
        $__internal_d3920bcd8c4d3bfe9f5cb8160a7a266e5d84761295d72464308d943fd5f79db2->leave($__internal_d3920bcd8c4d3bfe9f5cb8160a7a266e5d84761295d72464308d943fd5f79db2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
