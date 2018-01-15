<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b0bab6857aabfa1fcfd2bc92c01113f853ccea3b44ed4ec0a3e96d9c6587dfeb extends Twig_Template
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
        $__internal_4a3fcb4ef3da4a30fb3e4f9e4579990104218cde45dd88d70b4fc9a91129424a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3fcb4ef3da4a30fb3e4f9e4579990104218cde45dd88d70b4fc9a91129424a->enter($__internal_4a3fcb4ef3da4a30fb3e4f9e4579990104218cde45dd88d70b4fc9a91129424a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f309183eb256f8f2c344e628b7f00e94e126b152fb0c32ac05fffeca5eb25e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f309183eb256f8f2c344e628b7f00e94e126b152fb0c32ac05fffeca5eb25e21->enter($__internal_f309183eb256f8f2c344e628b7f00e94e126b152fb0c32ac05fffeca5eb25e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4a3fcb4ef3da4a30fb3e4f9e4579990104218cde45dd88d70b4fc9a91129424a->leave($__internal_4a3fcb4ef3da4a30fb3e4f9e4579990104218cde45dd88d70b4fc9a91129424a_prof);

        
        $__internal_f309183eb256f8f2c344e628b7f00e94e126b152fb0c32ac05fffeca5eb25e21->leave($__internal_f309183eb256f8f2c344e628b7f00e94e126b152fb0c32ac05fffeca5eb25e21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
