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
        $__internal_2c5d7bfc8e29465dd848805c2f3f7542a211e995729f368ac72e52809aa85a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5d7bfc8e29465dd848805c2f3f7542a211e995729f368ac72e52809aa85a9c->enter($__internal_2c5d7bfc8e29465dd848805c2f3f7542a211e995729f368ac72e52809aa85a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_73324951e4bc18496280b8f6169a6fa9e1d75096b4dd0a959521125d4b4bd0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73324951e4bc18496280b8f6169a6fa9e1d75096b4dd0a959521125d4b4bd0f0->enter($__internal_73324951e4bc18496280b8f6169a6fa9e1d75096b4dd0a959521125d4b4bd0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2c5d7bfc8e29465dd848805c2f3f7542a211e995729f368ac72e52809aa85a9c->leave($__internal_2c5d7bfc8e29465dd848805c2f3f7542a211e995729f368ac72e52809aa85a9c_prof);

        
        $__internal_73324951e4bc18496280b8f6169a6fa9e1d75096b4dd0a959521125d4b4bd0f0->leave($__internal_73324951e4bc18496280b8f6169a6fa9e1d75096b4dd0a959521125d4b4bd0f0_prof);

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
