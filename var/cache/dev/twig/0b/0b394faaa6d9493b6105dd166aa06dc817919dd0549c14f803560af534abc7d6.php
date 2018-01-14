<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6da446065442877f223b7a8563e74d6a104b4cd01e2d2938a9eba3fb4ea73a7e extends Twig_Template
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
        $__internal_cdd4cc2e90a79a4ee246ba5b38233bd2438fe0c8182703aab199e274c41fadaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd4cc2e90a79a4ee246ba5b38233bd2438fe0c8182703aab199e274c41fadaa->enter($__internal_cdd4cc2e90a79a4ee246ba5b38233bd2438fe0c8182703aab199e274c41fadaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a36742931477f195832a65cd314253a496315adf8367622079c9ebb544693165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36742931477f195832a65cd314253a496315adf8367622079c9ebb544693165->enter($__internal_a36742931477f195832a65cd314253a496315adf8367622079c9ebb544693165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cdd4cc2e90a79a4ee246ba5b38233bd2438fe0c8182703aab199e274c41fadaa->leave($__internal_cdd4cc2e90a79a4ee246ba5b38233bd2438fe0c8182703aab199e274c41fadaa_prof);

        
        $__internal_a36742931477f195832a65cd314253a496315adf8367622079c9ebb544693165->leave($__internal_a36742931477f195832a65cd314253a496315adf8367622079c9ebb544693165_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
