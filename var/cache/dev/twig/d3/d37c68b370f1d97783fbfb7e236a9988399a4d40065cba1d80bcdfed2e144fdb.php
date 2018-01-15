<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_94c6af4e1a20f068ee936fc29d21be6035351b04cdbc57761d73c871f213a44c extends Twig_Template
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
        $__internal_cefa3e75a485ea31d5c5e0ec4a7e8ab5d6b7b8e08ec41813965bbb06f22d5380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefa3e75a485ea31d5c5e0ec4a7e8ab5d6b7b8e08ec41813965bbb06f22d5380->enter($__internal_cefa3e75a485ea31d5c5e0ec4a7e8ab5d6b7b8e08ec41813965bbb06f22d5380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c6e4c596194020c45cdb41da7e39d4f9753b9328184574c2d36397dbd0c7ca75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e4c596194020c45cdb41da7e39d4f9753b9328184574c2d36397dbd0c7ca75->enter($__internal_c6e4c596194020c45cdb41da7e39d4f9753b9328184574c2d36397dbd0c7ca75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_cefa3e75a485ea31d5c5e0ec4a7e8ab5d6b7b8e08ec41813965bbb06f22d5380->leave($__internal_cefa3e75a485ea31d5c5e0ec4a7e8ab5d6b7b8e08ec41813965bbb06f22d5380_prof);

        
        $__internal_c6e4c596194020c45cdb41da7e39d4f9753b9328184574c2d36397dbd0c7ca75->leave($__internal_c6e4c596194020c45cdb41da7e39d4f9753b9328184574c2d36397dbd0c7ca75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
