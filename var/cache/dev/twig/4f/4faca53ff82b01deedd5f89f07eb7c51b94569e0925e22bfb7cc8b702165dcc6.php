<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0c5fe80b309dc363b491cff0b43b47b71de43d900a4e233106ef18fd4dee94e8 extends Twig_Template
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
        $__internal_f1d903e6de329b1758a625200a8a7942dc04663174e0e5e160f808d8e9ba5bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d903e6de329b1758a625200a8a7942dc04663174e0e5e160f808d8e9ba5bce->enter($__internal_f1d903e6de329b1758a625200a8a7942dc04663174e0e5e160f808d8e9ba5bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_eb2b210709df2bdc95178550b47828a5b162dd83d0b921f2ef8a58bab6545d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2b210709df2bdc95178550b47828a5b162dd83d0b921f2ef8a58bab6545d3a->enter($__internal_eb2b210709df2bdc95178550b47828a5b162dd83d0b921f2ef8a58bab6545d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f1d903e6de329b1758a625200a8a7942dc04663174e0e5e160f808d8e9ba5bce->leave($__internal_f1d903e6de329b1758a625200a8a7942dc04663174e0e5e160f808d8e9ba5bce_prof);

        
        $__internal_eb2b210709df2bdc95178550b47828a5b162dd83d0b921f2ef8a58bab6545d3a->leave($__internal_eb2b210709df2bdc95178550b47828a5b162dd83d0b921f2ef8a58bab6545d3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
