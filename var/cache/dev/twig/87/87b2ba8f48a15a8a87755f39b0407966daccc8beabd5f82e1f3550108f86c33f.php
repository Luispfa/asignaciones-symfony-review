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
        $__internal_2f7847e6a9a79b22b58ee55692969dd1479211985ff5b936c328b55f75da33b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f7847e6a9a79b22b58ee55692969dd1479211985ff5b936c328b55f75da33b9->enter($__internal_2f7847e6a9a79b22b58ee55692969dd1479211985ff5b936c328b55f75da33b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_011088dd340855f841881d06a88c6da4eff2ca4174fd019d61f36be456bf3983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011088dd340855f841881d06a88c6da4eff2ca4174fd019d61f36be456bf3983->enter($__internal_011088dd340855f841881d06a88c6da4eff2ca4174fd019d61f36be456bf3983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2f7847e6a9a79b22b58ee55692969dd1479211985ff5b936c328b55f75da33b9->leave($__internal_2f7847e6a9a79b22b58ee55692969dd1479211985ff5b936c328b55f75da33b9_prof);

        
        $__internal_011088dd340855f841881d06a88c6da4eff2ca4174fd019d61f36be456bf3983->leave($__internal_011088dd340855f841881d06a88c6da4eff2ca4174fd019d61f36be456bf3983_prof);

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
