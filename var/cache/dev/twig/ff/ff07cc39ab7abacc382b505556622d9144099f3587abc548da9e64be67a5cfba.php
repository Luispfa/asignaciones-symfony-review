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
        $__internal_bc726b9259e27827285b7f315ec4ba996f156d83a952c0f11073f96df0a3dfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc726b9259e27827285b7f315ec4ba996f156d83a952c0f11073f96df0a3dfaa->enter($__internal_bc726b9259e27827285b7f315ec4ba996f156d83a952c0f11073f96df0a3dfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a20e411d1b37ecea5b8d28d436ae4f9cc9315985b49d3c3a7fc368d3bb5bc51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20e411d1b37ecea5b8d28d436ae4f9cc9315985b49d3c3a7fc368d3bb5bc51a->enter($__internal_a20e411d1b37ecea5b8d28d436ae4f9cc9315985b49d3c3a7fc368d3bb5bc51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bc726b9259e27827285b7f315ec4ba996f156d83a952c0f11073f96df0a3dfaa->leave($__internal_bc726b9259e27827285b7f315ec4ba996f156d83a952c0f11073f96df0a3dfaa_prof);

        
        $__internal_a20e411d1b37ecea5b8d28d436ae4f9cc9315985b49d3c3a7fc368d3bb5bc51a->leave($__internal_a20e411d1b37ecea5b8d28d436ae4f9cc9315985b49d3c3a7fc368d3bb5bc51a_prof);

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
