<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_90919666c1fa01a9cf60134f68bf57299d459e140e70b95e814e42aa02a0461a extends Twig_Template
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
        $__internal_0f75677fb3de2459e694975b8eb9f246dd7e379ac287904b31df8f05f427b210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f75677fb3de2459e694975b8eb9f246dd7e379ac287904b31df8f05f427b210->enter($__internal_0f75677fb3de2459e694975b8eb9f246dd7e379ac287904b31df8f05f427b210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_061faa6822428f5213b51e44583cec0e16b0d449e721db1d045f8f1046d08acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061faa6822428f5213b51e44583cec0e16b0d449e721db1d045f8f1046d08acb->enter($__internal_061faa6822428f5213b51e44583cec0e16b0d449e721db1d045f8f1046d08acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0f75677fb3de2459e694975b8eb9f246dd7e379ac287904b31df8f05f427b210->leave($__internal_0f75677fb3de2459e694975b8eb9f246dd7e379ac287904b31df8f05f427b210_prof);

        
        $__internal_061faa6822428f5213b51e44583cec0e16b0d449e721db1d045f8f1046d08acb->leave($__internal_061faa6822428f5213b51e44583cec0e16b0d449e721db1d045f8f1046d08acb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
