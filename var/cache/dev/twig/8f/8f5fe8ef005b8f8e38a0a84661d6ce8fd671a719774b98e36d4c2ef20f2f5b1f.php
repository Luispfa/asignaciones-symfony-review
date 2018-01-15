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
        $__internal_3d4cf76fef0d46b30e4930a4274966f97ff23630f4aa40862e3ab508a7fedcbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4cf76fef0d46b30e4930a4274966f97ff23630f4aa40862e3ab508a7fedcbf->enter($__internal_3d4cf76fef0d46b30e4930a4274966f97ff23630f4aa40862e3ab508a7fedcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_51fb985399ce14cf0cbbbf2486eb3ba8e0fb5eb1dcf3016d7468d9cac7462931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fb985399ce14cf0cbbbf2486eb3ba8e0fb5eb1dcf3016d7468d9cac7462931->enter($__internal_51fb985399ce14cf0cbbbf2486eb3ba8e0fb5eb1dcf3016d7468d9cac7462931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3d4cf76fef0d46b30e4930a4274966f97ff23630f4aa40862e3ab508a7fedcbf->leave($__internal_3d4cf76fef0d46b30e4930a4274966f97ff23630f4aa40862e3ab508a7fedcbf_prof);

        
        $__internal_51fb985399ce14cf0cbbbf2486eb3ba8e0fb5eb1dcf3016d7468d9cac7462931->leave($__internal_51fb985399ce14cf0cbbbf2486eb3ba8e0fb5eb1dcf3016d7468d9cac7462931_prof);

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
