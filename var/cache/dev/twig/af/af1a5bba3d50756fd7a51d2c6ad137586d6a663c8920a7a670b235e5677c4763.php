<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_961b1db2997f49facd6665a4a7bb597384b78b97e3dc119aa20f52e68f18161c extends Twig_Template
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
        $__internal_9c39a4ef68606bb03b4f03ae2dc0a9c76e8291f4c913c6f427ca26b7b844c87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c39a4ef68606bb03b4f03ae2dc0a9c76e8291f4c913c6f427ca26b7b844c87e->enter($__internal_9c39a4ef68606bb03b4f03ae2dc0a9c76e8291f4c913c6f427ca26b7b844c87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_46ddc8bf79bc4aaa012717a02ee4b67d6370ebea62378d057198ebdedba04313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ddc8bf79bc4aaa012717a02ee4b67d6370ebea62378d057198ebdedba04313->enter($__internal_46ddc8bf79bc4aaa012717a02ee4b67d6370ebea62378d057198ebdedba04313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9c39a4ef68606bb03b4f03ae2dc0a9c76e8291f4c913c6f427ca26b7b844c87e->leave($__internal_9c39a4ef68606bb03b4f03ae2dc0a9c76e8291f4c913c6f427ca26b7b844c87e_prof);

        
        $__internal_46ddc8bf79bc4aaa012717a02ee4b67d6370ebea62378d057198ebdedba04313->leave($__internal_46ddc8bf79bc4aaa012717a02ee4b67d6370ebea62378d057198ebdedba04313_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
