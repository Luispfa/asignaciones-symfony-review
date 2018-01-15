<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0c5fe80b309dc363b491cff0b43b47b71de43d900a4e233106ef18fd4dee94e8 extends Twig_Template
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
        $__internal_7c348210ce7879c745f429316297a5b80f67094e43f387e8712b045d2a79e486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c348210ce7879c745f429316297a5b80f67094e43f387e8712b045d2a79e486->enter($__internal_7c348210ce7879c745f429316297a5b80f67094e43f387e8712b045d2a79e486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_aa4856172004296f8766ac81edda352684f9241e815a728e50359c966168f575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4856172004296f8766ac81edda352684f9241e815a728e50359c966168f575->enter($__internal_aa4856172004296f8766ac81edda352684f9241e815a728e50359c966168f575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7c348210ce7879c745f429316297a5b80f67094e43f387e8712b045d2a79e486->leave($__internal_7c348210ce7879c745f429316297a5b80f67094e43f387e8712b045d2a79e486_prof);

        
        $__internal_aa4856172004296f8766ac81edda352684f9241e815a728e50359c966168f575->leave($__internal_aa4856172004296f8766ac81edda352684f9241e815a728e50359c966168f575_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
