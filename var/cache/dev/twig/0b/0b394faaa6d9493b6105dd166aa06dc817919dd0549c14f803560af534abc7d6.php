<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6da446065442877f223b7a8563e74d6a104b4cd01e2d2938a9eba3fb4ea73a7e extends Twig_Template
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
        $__internal_ff28720e0d3e73ce5bee40f85668fb96b358289860000cd8a4fc67d408f63dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff28720e0d3e73ce5bee40f85668fb96b358289860000cd8a4fc67d408f63dbc->enter($__internal_ff28720e0d3e73ce5bee40f85668fb96b358289860000cd8a4fc67d408f63dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_75f96dd67a3c5ef334638bea62145c52a6117efceee2b639ea0945277af1461c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f96dd67a3c5ef334638bea62145c52a6117efceee2b639ea0945277af1461c->enter($__internal_75f96dd67a3c5ef334638bea62145c52a6117efceee2b639ea0945277af1461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ff28720e0d3e73ce5bee40f85668fb96b358289860000cd8a4fc67d408f63dbc->leave($__internal_ff28720e0d3e73ce5bee40f85668fb96b358289860000cd8a4fc67d408f63dbc_prof);

        
        $__internal_75f96dd67a3c5ef334638bea62145c52a6117efceee2b639ea0945277af1461c->leave($__internal_75f96dd67a3c5ef334638bea62145c52a6117efceee2b639ea0945277af1461c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
