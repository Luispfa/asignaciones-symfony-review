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
        $__internal_5618b12ff9aebe992d5b1a13ccacdfb048c65788ebba34a13ea539f0321b5bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5618b12ff9aebe992d5b1a13ccacdfb048c65788ebba34a13ea539f0321b5bb5->enter($__internal_5618b12ff9aebe992d5b1a13ccacdfb048c65788ebba34a13ea539f0321b5bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f9b7102390834fbaa6337eb53196a006477fff59e9918d58985b69854f2a7fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b7102390834fbaa6337eb53196a006477fff59e9918d58985b69854f2a7fb1->enter($__internal_f9b7102390834fbaa6337eb53196a006477fff59e9918d58985b69854f2a7fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5618b12ff9aebe992d5b1a13ccacdfb048c65788ebba34a13ea539f0321b5bb5->leave($__internal_5618b12ff9aebe992d5b1a13ccacdfb048c65788ebba34a13ea539f0321b5bb5_prof);

        
        $__internal_f9b7102390834fbaa6337eb53196a006477fff59e9918d58985b69854f2a7fb1->leave($__internal_f9b7102390834fbaa6337eb53196a006477fff59e9918d58985b69854f2a7fb1_prof);

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
