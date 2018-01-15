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
        $__internal_ef00b2b84cda2c3a817fc3751a17faf36237102724119a7a82918a013b4f9447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef00b2b84cda2c3a817fc3751a17faf36237102724119a7a82918a013b4f9447->enter($__internal_ef00b2b84cda2c3a817fc3751a17faf36237102724119a7a82918a013b4f9447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ecc07f856911f1bd98b2c7fc50bae8fee42a1d7cabcd55410933065bb43e1002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc07f856911f1bd98b2c7fc50bae8fee42a1d7cabcd55410933065bb43e1002->enter($__internal_ecc07f856911f1bd98b2c7fc50bae8fee42a1d7cabcd55410933065bb43e1002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ef00b2b84cda2c3a817fc3751a17faf36237102724119a7a82918a013b4f9447->leave($__internal_ef00b2b84cda2c3a817fc3751a17faf36237102724119a7a82918a013b4f9447_prof);

        
        $__internal_ecc07f856911f1bd98b2c7fc50bae8fee42a1d7cabcd55410933065bb43e1002->leave($__internal_ecc07f856911f1bd98b2c7fc50bae8fee42a1d7cabcd55410933065bb43e1002_prof);

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
