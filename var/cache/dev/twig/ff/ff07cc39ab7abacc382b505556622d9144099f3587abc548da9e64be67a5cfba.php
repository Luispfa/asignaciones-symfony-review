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
        $__internal_934f15d2282b0b58b8f0bba2a2f0308a0bad1aabdc09c9f030a5bee49e401d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934f15d2282b0b58b8f0bba2a2f0308a0bad1aabdc09c9f030a5bee49e401d68->enter($__internal_934f15d2282b0b58b8f0bba2a2f0308a0bad1aabdc09c9f030a5bee49e401d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b88ee71824f0749e6a512112abd4eebd19eb872d8a9759841d053ee21da2cb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88ee71824f0749e6a512112abd4eebd19eb872d8a9759841d053ee21da2cb8e->enter($__internal_b88ee71824f0749e6a512112abd4eebd19eb872d8a9759841d053ee21da2cb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_934f15d2282b0b58b8f0bba2a2f0308a0bad1aabdc09c9f030a5bee49e401d68->leave($__internal_934f15d2282b0b58b8f0bba2a2f0308a0bad1aabdc09c9f030a5bee49e401d68_prof);

        
        $__internal_b88ee71824f0749e6a512112abd4eebd19eb872d8a9759841d053ee21da2cb8e->leave($__internal_b88ee71824f0749e6a512112abd4eebd19eb872d8a9759841d053ee21da2cb8e_prof);

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
