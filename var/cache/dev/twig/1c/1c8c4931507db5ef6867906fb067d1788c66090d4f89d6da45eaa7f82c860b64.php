<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_edbe491c41573fcecd5f0fc11bdf6e4cd092f51863be4fb30a554399ca961b58 extends Twig_Template
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
        $__internal_ed7f11bf3e2de60ee174629882949e483e6279ba7cb2cb58a62c63dc65090890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7f11bf3e2de60ee174629882949e483e6279ba7cb2cb58a62c63dc65090890->enter($__internal_ed7f11bf3e2de60ee174629882949e483e6279ba7cb2cb58a62c63dc65090890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2f4d8f7f9c3b608f7f6da1ef05f67a400c0da498d8298a042ca8895a99e6f83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4d8f7f9c3b608f7f6da1ef05f67a400c0da498d8298a042ca8895a99e6f83b->enter($__internal_2f4d8f7f9c3b608f7f6da1ef05f67a400c0da498d8298a042ca8895a99e6f83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ed7f11bf3e2de60ee174629882949e483e6279ba7cb2cb58a62c63dc65090890->leave($__internal_ed7f11bf3e2de60ee174629882949e483e6279ba7cb2cb58a62c63dc65090890_prof);

        
        $__internal_2f4d8f7f9c3b608f7f6da1ef05f67a400c0da498d8298a042ca8895a99e6f83b->leave($__internal_2f4d8f7f9c3b608f7f6da1ef05f67a400c0da498d8298a042ca8895a99e6f83b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
