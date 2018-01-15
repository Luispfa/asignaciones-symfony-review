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
        $__internal_b8e619b9ac63384ece2642fb5cc1bd57ceb4e363cee2d954464bc6010ea1b851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e619b9ac63384ece2642fb5cc1bd57ceb4e363cee2d954464bc6010ea1b851->enter($__internal_b8e619b9ac63384ece2642fb5cc1bd57ceb4e363cee2d954464bc6010ea1b851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_99c8bcfc0c81023f32dfb552631258de1f97b943087f612354a3cbec3c0e2875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c8bcfc0c81023f32dfb552631258de1f97b943087f612354a3cbec3c0e2875->enter($__internal_99c8bcfc0c81023f32dfb552631258de1f97b943087f612354a3cbec3c0e2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b8e619b9ac63384ece2642fb5cc1bd57ceb4e363cee2d954464bc6010ea1b851->leave($__internal_b8e619b9ac63384ece2642fb5cc1bd57ceb4e363cee2d954464bc6010ea1b851_prof);

        
        $__internal_99c8bcfc0c81023f32dfb552631258de1f97b943087f612354a3cbec3c0e2875->leave($__internal_99c8bcfc0c81023f32dfb552631258de1f97b943087f612354a3cbec3c0e2875_prof);

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
