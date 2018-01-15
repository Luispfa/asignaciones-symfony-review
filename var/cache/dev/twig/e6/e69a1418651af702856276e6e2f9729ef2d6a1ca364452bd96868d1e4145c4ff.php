<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ec80d59436130c9b5e47f02a8ec93f0fd7330070a52dc1fe8a774f0bf7bc204c extends Twig_Template
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
        $__internal_c6ea9a58b3bd9b6eb0bd1e1979ea25ec06fbe8d0458085d602653f9291fa6081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ea9a58b3bd9b6eb0bd1e1979ea25ec06fbe8d0458085d602653f9291fa6081->enter($__internal_c6ea9a58b3bd9b6eb0bd1e1979ea25ec06fbe8d0458085d602653f9291fa6081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0739c58f87b16d29a473b33a2ecaed9c40dcb4a91c729b6db458c287f1c74cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0739c58f87b16d29a473b33a2ecaed9c40dcb4a91c729b6db458c287f1c74cae->enter($__internal_0739c58f87b16d29a473b33a2ecaed9c40dcb4a91c729b6db458c287f1c74cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c6ea9a58b3bd9b6eb0bd1e1979ea25ec06fbe8d0458085d602653f9291fa6081->leave($__internal_c6ea9a58b3bd9b6eb0bd1e1979ea25ec06fbe8d0458085d602653f9291fa6081_prof);

        
        $__internal_0739c58f87b16d29a473b33a2ecaed9c40dcb4a91c729b6db458c287f1c74cae->leave($__internal_0739c58f87b16d29a473b33a2ecaed9c40dcb4a91c729b6db458c287f1c74cae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
