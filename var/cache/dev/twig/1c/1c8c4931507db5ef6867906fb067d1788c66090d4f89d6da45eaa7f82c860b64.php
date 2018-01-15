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
        $__internal_be843feaf53d6d75b48582173c1cf0d624ef13832b5ac208093cfb19eb8b5f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be843feaf53d6d75b48582173c1cf0d624ef13832b5ac208093cfb19eb8b5f2f->enter($__internal_be843feaf53d6d75b48582173c1cf0d624ef13832b5ac208093cfb19eb8b5f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1dcf191746f2cd541f31971484abdc4d886fd462096788c00763d708933a03af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcf191746f2cd541f31971484abdc4d886fd462096788c00763d708933a03af->enter($__internal_1dcf191746f2cd541f31971484abdc4d886fd462096788c00763d708933a03af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_be843feaf53d6d75b48582173c1cf0d624ef13832b5ac208093cfb19eb8b5f2f->leave($__internal_be843feaf53d6d75b48582173c1cf0d624ef13832b5ac208093cfb19eb8b5f2f_prof);

        
        $__internal_1dcf191746f2cd541f31971484abdc4d886fd462096788c00763d708933a03af->leave($__internal_1dcf191746f2cd541f31971484abdc4d886fd462096788c00763d708933a03af_prof);

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
