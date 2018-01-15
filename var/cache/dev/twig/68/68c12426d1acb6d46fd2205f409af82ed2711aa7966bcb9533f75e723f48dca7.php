<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7ee4b7c2555058995d24d96d22144a533e52b96d800513500f04f1f48773b3d1 extends Twig_Template
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
        $__internal_4559a6a6b06fd4dad7be9196cf5611494b6924a52a0833a36f778eea9c61d23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4559a6a6b06fd4dad7be9196cf5611494b6924a52a0833a36f778eea9c61d23d->enter($__internal_4559a6a6b06fd4dad7be9196cf5611494b6924a52a0833a36f778eea9c61d23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_bc8d5c839e3386c62a441a79b9fc006ab32205404aeafaf75d45a02e5657a7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8d5c839e3386c62a441a79b9fc006ab32205404aeafaf75d45a02e5657a7ea->enter($__internal_bc8d5c839e3386c62a441a79b9fc006ab32205404aeafaf75d45a02e5657a7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4559a6a6b06fd4dad7be9196cf5611494b6924a52a0833a36f778eea9c61d23d->leave($__internal_4559a6a6b06fd4dad7be9196cf5611494b6924a52a0833a36f778eea9c61d23d_prof);

        
        $__internal_bc8d5c839e3386c62a441a79b9fc006ab32205404aeafaf75d45a02e5657a7ea->leave($__internal_bc8d5c839e3386c62a441a79b9fc006ab32205404aeafaf75d45a02e5657a7ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
