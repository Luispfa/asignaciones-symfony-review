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
        $__internal_70d47a5699f0f037602cdbd17191a68cfa87e2d921a0d7aa7da720d5589f712a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d47a5699f0f037602cdbd17191a68cfa87e2d921a0d7aa7da720d5589f712a->enter($__internal_70d47a5699f0f037602cdbd17191a68cfa87e2d921a0d7aa7da720d5589f712a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1a5ad06295ac052e132a55901dd945ac846e8525829482fdd958b25830d2de79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5ad06295ac052e132a55901dd945ac846e8525829482fdd958b25830d2de79->enter($__internal_1a5ad06295ac052e132a55901dd945ac846e8525829482fdd958b25830d2de79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_70d47a5699f0f037602cdbd17191a68cfa87e2d921a0d7aa7da720d5589f712a->leave($__internal_70d47a5699f0f037602cdbd17191a68cfa87e2d921a0d7aa7da720d5589f712a_prof);

        
        $__internal_1a5ad06295ac052e132a55901dd945ac846e8525829482fdd958b25830d2de79->leave($__internal_1a5ad06295ac052e132a55901dd945ac846e8525829482fdd958b25830d2de79_prof);

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
