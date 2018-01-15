<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_11ffe13876185a541cfe2d04272e93db4e78673b660bd6794edb546d1838e71d extends Twig_Template
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
        $__internal_3e5861e635057d6dfaf26ae8b86b0a28e0df5a953e5810996a6f0d0f96075860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5861e635057d6dfaf26ae8b86b0a28e0df5a953e5810996a6f0d0f96075860->enter($__internal_3e5861e635057d6dfaf26ae8b86b0a28e0df5a953e5810996a6f0d0f96075860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_83d99fa396053d073efeb605565d5ba130cd12bf6f6470acbe8758da93f1f947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d99fa396053d073efeb605565d5ba130cd12bf6f6470acbe8758da93f1f947->enter($__internal_83d99fa396053d073efeb605565d5ba130cd12bf6f6470acbe8758da93f1f947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3e5861e635057d6dfaf26ae8b86b0a28e0df5a953e5810996a6f0d0f96075860->leave($__internal_3e5861e635057d6dfaf26ae8b86b0a28e0df5a953e5810996a6f0d0f96075860_prof);

        
        $__internal_83d99fa396053d073efeb605565d5ba130cd12bf6f6470acbe8758da93f1f947->leave($__internal_83d99fa396053d073efeb605565d5ba130cd12bf6f6470acbe8758da93f1f947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
