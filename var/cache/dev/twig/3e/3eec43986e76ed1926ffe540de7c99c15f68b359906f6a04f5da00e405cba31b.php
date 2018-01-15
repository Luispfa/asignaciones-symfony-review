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
        $__internal_e33c5921693362261914ab9df65113a4efde95ba1a312faf369771ace5560952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33c5921693362261914ab9df65113a4efde95ba1a312faf369771ace5560952->enter($__internal_e33c5921693362261914ab9df65113a4efde95ba1a312faf369771ace5560952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e5d730aecaf5a7421c570cd234c9766d6005afa61107b1e66306d9d74d484ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d730aecaf5a7421c570cd234c9766d6005afa61107b1e66306d9d74d484ff2->enter($__internal_e5d730aecaf5a7421c570cd234c9766d6005afa61107b1e66306d9d74d484ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e33c5921693362261914ab9df65113a4efde95ba1a312faf369771ace5560952->leave($__internal_e33c5921693362261914ab9df65113a4efde95ba1a312faf369771ace5560952_prof);

        
        $__internal_e5d730aecaf5a7421c570cd234c9766d6005afa61107b1e66306d9d74d484ff2->leave($__internal_e5d730aecaf5a7421c570cd234c9766d6005afa61107b1e66306d9d74d484ff2_prof);

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
