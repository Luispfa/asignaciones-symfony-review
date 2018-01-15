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
        $__internal_e3abbffa9faf16bbfacce72d594f7da37a8e280874fd6007eb5c0904891505e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3abbffa9faf16bbfacce72d594f7da37a8e280874fd6007eb5c0904891505e3->enter($__internal_e3abbffa9faf16bbfacce72d594f7da37a8e280874fd6007eb5c0904891505e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c9620d74aa2efad820c8f4659781693bc92fc00a13a0bdadfb0fac819f761027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9620d74aa2efad820c8f4659781693bc92fc00a13a0bdadfb0fac819f761027->enter($__internal_c9620d74aa2efad820c8f4659781693bc92fc00a13a0bdadfb0fac819f761027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e3abbffa9faf16bbfacce72d594f7da37a8e280874fd6007eb5c0904891505e3->leave($__internal_e3abbffa9faf16bbfacce72d594f7da37a8e280874fd6007eb5c0904891505e3_prof);

        
        $__internal_c9620d74aa2efad820c8f4659781693bc92fc00a13a0bdadfb0fac819f761027->leave($__internal_c9620d74aa2efad820c8f4659781693bc92fc00a13a0bdadfb0fac819f761027_prof);

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
