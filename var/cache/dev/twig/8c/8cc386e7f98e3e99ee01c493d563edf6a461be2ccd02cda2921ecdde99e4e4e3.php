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
        $__internal_94f2806c1be4452ac122b1c12c62f0880ff0128c8702200f842be3328e229617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f2806c1be4452ac122b1c12c62f0880ff0128c8702200f842be3328e229617->enter($__internal_94f2806c1be4452ac122b1c12c62f0880ff0128c8702200f842be3328e229617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_829585b688f581141332c51ac1ca3b65ec5fc62cad80e36625f045249cb6095f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829585b688f581141332c51ac1ca3b65ec5fc62cad80e36625f045249cb6095f->enter($__internal_829585b688f581141332c51ac1ca3b65ec5fc62cad80e36625f045249cb6095f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_94f2806c1be4452ac122b1c12c62f0880ff0128c8702200f842be3328e229617->leave($__internal_94f2806c1be4452ac122b1c12c62f0880ff0128c8702200f842be3328e229617_prof);

        
        $__internal_829585b688f581141332c51ac1ca3b65ec5fc62cad80e36625f045249cb6095f->leave($__internal_829585b688f581141332c51ac1ca3b65ec5fc62cad80e36625f045249cb6095f_prof);

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
