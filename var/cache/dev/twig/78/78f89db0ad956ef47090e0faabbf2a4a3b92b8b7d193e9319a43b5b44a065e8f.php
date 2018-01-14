<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5e654d17451d022874a00be405c368baac2cf391adab32f6626f5a4acf3b40bb extends Twig_Template
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
        $__internal_5f3ea4deaa22307edc0b6da62091433cb23e51be74452ceaad13bdb904720ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3ea4deaa22307edc0b6da62091433cb23e51be74452ceaad13bdb904720ed1->enter($__internal_5f3ea4deaa22307edc0b6da62091433cb23e51be74452ceaad13bdb904720ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_279a52b732121d9fe18bc5773699c6d418df4747f93595f0562d16e94b1e159e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279a52b732121d9fe18bc5773699c6d418df4747f93595f0562d16e94b1e159e->enter($__internal_279a52b732121d9fe18bc5773699c6d418df4747f93595f0562d16e94b1e159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5f3ea4deaa22307edc0b6da62091433cb23e51be74452ceaad13bdb904720ed1->leave($__internal_5f3ea4deaa22307edc0b6da62091433cb23e51be74452ceaad13bdb904720ed1_prof);

        
        $__internal_279a52b732121d9fe18bc5773699c6d418df4747f93595f0562d16e94b1e159e->leave($__internal_279a52b732121d9fe18bc5773699c6d418df4747f93595f0562d16e94b1e159e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
