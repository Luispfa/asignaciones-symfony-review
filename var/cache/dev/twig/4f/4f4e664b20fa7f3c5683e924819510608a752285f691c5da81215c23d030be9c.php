<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4c0bd446db531c712bf05250518f137e94dfee48cc8b78a240b7960653996fc7 extends Twig_Template
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
        $__internal_4a0e5950c061f3bc0a37fb1cb42f927e85b67508546bb0651b3672d92ecc4217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0e5950c061f3bc0a37fb1cb42f927e85b67508546bb0651b3672d92ecc4217->enter($__internal_4a0e5950c061f3bc0a37fb1cb42f927e85b67508546bb0651b3672d92ecc4217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a762a41ad2ed2d34e50fbad07c68ad466af8a965f2a48cb53fd400a6c4d8f3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a762a41ad2ed2d34e50fbad07c68ad466af8a965f2a48cb53fd400a6c4d8f3d3->enter($__internal_a762a41ad2ed2d34e50fbad07c68ad466af8a965f2a48cb53fd400a6c4d8f3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4a0e5950c061f3bc0a37fb1cb42f927e85b67508546bb0651b3672d92ecc4217->leave($__internal_4a0e5950c061f3bc0a37fb1cb42f927e85b67508546bb0651b3672d92ecc4217_prof);

        
        $__internal_a762a41ad2ed2d34e50fbad07c68ad466af8a965f2a48cb53fd400a6c4d8f3d3->leave($__internal_a762a41ad2ed2d34e50fbad07c68ad466af8a965f2a48cb53fd400a6c4d8f3d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
