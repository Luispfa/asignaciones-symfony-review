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
        $__internal_cc8c4499416d8f567ac3593b61681bae871de32bcfd741a174e61f6d81684624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8c4499416d8f567ac3593b61681bae871de32bcfd741a174e61f6d81684624->enter($__internal_cc8c4499416d8f567ac3593b61681bae871de32bcfd741a174e61f6d81684624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f6b5e0298730fe6d6beea05caf3733e78fe60327c3ed9521e931fff27c8409cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b5e0298730fe6d6beea05caf3733e78fe60327c3ed9521e931fff27c8409cf->enter($__internal_f6b5e0298730fe6d6beea05caf3733e78fe60327c3ed9521e931fff27c8409cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cc8c4499416d8f567ac3593b61681bae871de32bcfd741a174e61f6d81684624->leave($__internal_cc8c4499416d8f567ac3593b61681bae871de32bcfd741a174e61f6d81684624_prof);

        
        $__internal_f6b5e0298730fe6d6beea05caf3733e78fe60327c3ed9521e931fff27c8409cf->leave($__internal_f6b5e0298730fe6d6beea05caf3733e78fe60327c3ed9521e931fff27c8409cf_prof);

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
