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
        $__internal_a410e760529614299adc9e72766e2a928386d7dcb4878e9576908166e78a831c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a410e760529614299adc9e72766e2a928386d7dcb4878e9576908166e78a831c->enter($__internal_a410e760529614299adc9e72766e2a928386d7dcb4878e9576908166e78a831c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a7f3d18b3d7e5a148cae3339132ee4de724b6632cd94cddd7b510b50d69dc4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f3d18b3d7e5a148cae3339132ee4de724b6632cd94cddd7b510b50d69dc4d0->enter($__internal_a7f3d18b3d7e5a148cae3339132ee4de724b6632cd94cddd7b510b50d69dc4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a410e760529614299adc9e72766e2a928386d7dcb4878e9576908166e78a831c->leave($__internal_a410e760529614299adc9e72766e2a928386d7dcb4878e9576908166e78a831c_prof);

        
        $__internal_a7f3d18b3d7e5a148cae3339132ee4de724b6632cd94cddd7b510b50d69dc4d0->leave($__internal_a7f3d18b3d7e5a148cae3339132ee4de724b6632cd94cddd7b510b50d69dc4d0_prof);

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
