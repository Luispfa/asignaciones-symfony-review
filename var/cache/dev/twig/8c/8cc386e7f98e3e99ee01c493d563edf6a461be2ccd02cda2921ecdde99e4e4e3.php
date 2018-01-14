<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_5f9472ca60a33dead6fde66669cf755c9a5b43a5da1efacea9d99b731e06ef27 extends Twig_Template
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
        $__internal_1ab0ca95ec5645a59fe8d690cf277f0a6a0008dc2d148b95397a23bfb43d5432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab0ca95ec5645a59fe8d690cf277f0a6a0008dc2d148b95397a23bfb43d5432->enter($__internal_1ab0ca95ec5645a59fe8d690cf277f0a6a0008dc2d148b95397a23bfb43d5432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_aa0a8db6e1741ab3b1530e7a4e9270c5d16b7f1d1f5abeec310fb297d70dc5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0a8db6e1741ab3b1530e7a4e9270c5d16b7f1d1f5abeec310fb297d70dc5fa->enter($__internal_aa0a8db6e1741ab3b1530e7a4e9270c5d16b7f1d1f5abeec310fb297d70dc5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1ab0ca95ec5645a59fe8d690cf277f0a6a0008dc2d148b95397a23bfb43d5432->leave($__internal_1ab0ca95ec5645a59fe8d690cf277f0a6a0008dc2d148b95397a23bfb43d5432_prof);

        
        $__internal_aa0a8db6e1741ab3b1530e7a4e9270c5d16b7f1d1f5abeec310fb297d70dc5fa->leave($__internal_aa0a8db6e1741ab3b1530e7a4e9270c5d16b7f1d1f5abeec310fb297d70dc5fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
