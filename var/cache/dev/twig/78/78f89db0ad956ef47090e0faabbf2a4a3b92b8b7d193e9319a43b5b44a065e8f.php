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
        $__internal_527b2ea1f926af26463d3ab54fb734030f974c39f5d91d38f72a4359b834bb85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527b2ea1f926af26463d3ab54fb734030f974c39f5d91d38f72a4359b834bb85->enter($__internal_527b2ea1f926af26463d3ab54fb734030f974c39f5d91d38f72a4359b834bb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1b484991b6059ed1bfd08f88c40c4ffec1f036a7a5612bf4755067d29a20b096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b484991b6059ed1bfd08f88c40c4ffec1f036a7a5612bf4755067d29a20b096->enter($__internal_1b484991b6059ed1bfd08f88c40c4ffec1f036a7a5612bf4755067d29a20b096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_527b2ea1f926af26463d3ab54fb734030f974c39f5d91d38f72a4359b834bb85->leave($__internal_527b2ea1f926af26463d3ab54fb734030f974c39f5d91d38f72a4359b834bb85_prof);

        
        $__internal_1b484991b6059ed1bfd08f88c40c4ffec1f036a7a5612bf4755067d29a20b096->leave($__internal_1b484991b6059ed1bfd08f88c40c4ffec1f036a7a5612bf4755067d29a20b096_prof);

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
