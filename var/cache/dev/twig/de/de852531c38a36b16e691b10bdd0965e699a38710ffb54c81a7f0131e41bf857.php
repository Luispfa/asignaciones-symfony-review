<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_858fb97a71c2d783768abce2c9a9cad0f7e84b369300e50dd0523c4e5a6e2b5f extends Twig_Template
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
        $__internal_a37603e142e4381d1c80a5f5e153b125a2d75221791a5fc33c5fd30a3890e58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37603e142e4381d1c80a5f5e153b125a2d75221791a5fc33c5fd30a3890e58b->enter($__internal_a37603e142e4381d1c80a5f5e153b125a2d75221791a5fc33c5fd30a3890e58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0366dc99ef40eef3f3055f1ab4800c583878277705161119d76cb88416b7b959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0366dc99ef40eef3f3055f1ab4800c583878277705161119d76cb88416b7b959->enter($__internal_0366dc99ef40eef3f3055f1ab4800c583878277705161119d76cb88416b7b959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a37603e142e4381d1c80a5f5e153b125a2d75221791a5fc33c5fd30a3890e58b->leave($__internal_a37603e142e4381d1c80a5f5e153b125a2d75221791a5fc33c5fd30a3890e58b_prof);

        
        $__internal_0366dc99ef40eef3f3055f1ab4800c583878277705161119d76cb88416b7b959->leave($__internal_0366dc99ef40eef3f3055f1ab4800c583878277705161119d76cb88416b7b959_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
