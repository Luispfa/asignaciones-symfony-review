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
        $__internal_88789a8e4337d72ba4fffee1f18ac7a9129bdf1188f0a807e471f0b924291a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88789a8e4337d72ba4fffee1f18ac7a9129bdf1188f0a807e471f0b924291a6b->enter($__internal_88789a8e4337d72ba4fffee1f18ac7a9129bdf1188f0a807e471f0b924291a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_39e551ae5ad95566bb62bdda5af78089d7b6d365d1862610a4520419763e7040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e551ae5ad95566bb62bdda5af78089d7b6d365d1862610a4520419763e7040->enter($__internal_39e551ae5ad95566bb62bdda5af78089d7b6d365d1862610a4520419763e7040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_88789a8e4337d72ba4fffee1f18ac7a9129bdf1188f0a807e471f0b924291a6b->leave($__internal_88789a8e4337d72ba4fffee1f18ac7a9129bdf1188f0a807e471f0b924291a6b_prof);

        
        $__internal_39e551ae5ad95566bb62bdda5af78089d7b6d365d1862610a4520419763e7040->leave($__internal_39e551ae5ad95566bb62bdda5af78089d7b6d365d1862610a4520419763e7040_prof);

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
