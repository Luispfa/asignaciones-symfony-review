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
        $__internal_9e277f0098ca65bddfe37383a2cfd1d38463113209d3c0066a52b706493ae844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e277f0098ca65bddfe37383a2cfd1d38463113209d3c0066a52b706493ae844->enter($__internal_9e277f0098ca65bddfe37383a2cfd1d38463113209d3c0066a52b706493ae844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fd420f91d585f5f4972e2996fc927f2c6b54ab81b37005ecce077a3625517f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd420f91d585f5f4972e2996fc927f2c6b54ab81b37005ecce077a3625517f8b->enter($__internal_fd420f91d585f5f4972e2996fc927f2c6b54ab81b37005ecce077a3625517f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_9e277f0098ca65bddfe37383a2cfd1d38463113209d3c0066a52b706493ae844->leave($__internal_9e277f0098ca65bddfe37383a2cfd1d38463113209d3c0066a52b706493ae844_prof);

        
        $__internal_fd420f91d585f5f4972e2996fc927f2c6b54ab81b37005ecce077a3625517f8b->leave($__internal_fd420f91d585f5f4972e2996fc927f2c6b54ab81b37005ecce077a3625517f8b_prof);

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
