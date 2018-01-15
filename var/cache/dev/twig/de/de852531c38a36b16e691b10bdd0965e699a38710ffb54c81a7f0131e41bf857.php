<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_858fb97a71c2d783768abce2c9a9cad0f7e84b369300e50dd0523c4e5a6e2b5f extends Twig_Template
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
        $__internal_9359cc08e290d61882918a520f279036c9019bbc5e208874c2b12ce381195c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9359cc08e290d61882918a520f279036c9019bbc5e208874c2b12ce381195c22->enter($__internal_9359cc08e290d61882918a520f279036c9019bbc5e208874c2b12ce381195c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_afb00a67253c5dbafa7cb22c51bc5a49126701cb35a4cf3432c5c2a56be1ae84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb00a67253c5dbafa7cb22c51bc5a49126701cb35a4cf3432c5c2a56be1ae84->enter($__internal_afb00a67253c5dbafa7cb22c51bc5a49126701cb35a4cf3432c5c2a56be1ae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9359cc08e290d61882918a520f279036c9019bbc5e208874c2b12ce381195c22->leave($__internal_9359cc08e290d61882918a520f279036c9019bbc5e208874c2b12ce381195c22_prof);

        
        $__internal_afb00a67253c5dbafa7cb22c51bc5a49126701cb35a4cf3432c5c2a56be1ae84->leave($__internal_afb00a67253c5dbafa7cb22c51bc5a49126701cb35a4cf3432c5c2a56be1ae84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
