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
        $__internal_b42ed1c07c220962b647d6137977554e3f5dfa39f5fab3f0395d6ccd38f69453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42ed1c07c220962b647d6137977554e3f5dfa39f5fab3f0395d6ccd38f69453->enter($__internal_b42ed1c07c220962b647d6137977554e3f5dfa39f5fab3f0395d6ccd38f69453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f373bf954c7aaf53a7c8524c087846ec067e2109bd20146b0f7f00833e68eb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f373bf954c7aaf53a7c8524c087846ec067e2109bd20146b0f7f00833e68eb14->enter($__internal_f373bf954c7aaf53a7c8524c087846ec067e2109bd20146b0f7f00833e68eb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b42ed1c07c220962b647d6137977554e3f5dfa39f5fab3f0395d6ccd38f69453->leave($__internal_b42ed1c07c220962b647d6137977554e3f5dfa39f5fab3f0395d6ccd38f69453_prof);

        
        $__internal_f373bf954c7aaf53a7c8524c087846ec067e2109bd20146b0f7f00833e68eb14->leave($__internal_f373bf954c7aaf53a7c8524c087846ec067e2109bd20146b0f7f00833e68eb14_prof);

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
