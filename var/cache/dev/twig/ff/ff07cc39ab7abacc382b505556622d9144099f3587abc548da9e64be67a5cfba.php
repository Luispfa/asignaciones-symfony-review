<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_43ee312ad97374c1b2494313fa5cd1df9b11fd24c21cb2558101149499dd1439 extends Twig_Template
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
        $__internal_1137f517a20ffdd0d3cadf0caf314430c66f7d4ca9e7cc750c338b18adce49cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1137f517a20ffdd0d3cadf0caf314430c66f7d4ca9e7cc750c338b18adce49cd->enter($__internal_1137f517a20ffdd0d3cadf0caf314430c66f7d4ca9e7cc750c338b18adce49cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b3d30d1f0bc51f5abca29897b10200afab0acc942c959b872c0fa59d155dfe82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d30d1f0bc51f5abca29897b10200afab0acc942c959b872c0fa59d155dfe82->enter($__internal_b3d30d1f0bc51f5abca29897b10200afab0acc942c959b872c0fa59d155dfe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1137f517a20ffdd0d3cadf0caf314430c66f7d4ca9e7cc750c338b18adce49cd->leave($__internal_1137f517a20ffdd0d3cadf0caf314430c66f7d4ca9e7cc750c338b18adce49cd_prof);

        
        $__internal_b3d30d1f0bc51f5abca29897b10200afab0acc942c959b872c0fa59d155dfe82->leave($__internal_b3d30d1f0bc51f5abca29897b10200afab0acc942c959b872c0fa59d155dfe82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
