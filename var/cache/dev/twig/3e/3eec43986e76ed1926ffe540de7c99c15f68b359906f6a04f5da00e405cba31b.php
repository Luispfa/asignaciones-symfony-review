<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_87c085316ae00bb0619ae4af0afc958232c8fc6daf4a98fc68f6dfadc7e14eb4 extends Twig_Template
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
        $__internal_e45af84447886993da0fc4630cfea85cb8f25c2f1f0cf4eb903059cd8477e71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45af84447886993da0fc4630cfea85cb8f25c2f1f0cf4eb903059cd8477e71d->enter($__internal_e45af84447886993da0fc4630cfea85cb8f25c2f1f0cf4eb903059cd8477e71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a285092bde307dc4a637ec415cd9fef317a133cedf2651f1e1ee53a468196df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a285092bde307dc4a637ec415cd9fef317a133cedf2651f1e1ee53a468196df4->enter($__internal_a285092bde307dc4a637ec415cd9fef317a133cedf2651f1e1ee53a468196df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e45af84447886993da0fc4630cfea85cb8f25c2f1f0cf4eb903059cd8477e71d->leave($__internal_e45af84447886993da0fc4630cfea85cb8f25c2f1f0cf4eb903059cd8477e71d_prof);

        
        $__internal_a285092bde307dc4a637ec415cd9fef317a133cedf2651f1e1ee53a468196df4->leave($__internal_a285092bde307dc4a637ec415cd9fef317a133cedf2651f1e1ee53a468196df4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
