<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_e86e46fe527e0633cf91b9b8bda8860962c1d38befb779c164bf6c3b0c668f3f extends Twig_Template
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
        $__internal_6feab67522115f74c2e4397c900007292927c133a0abf1142f828ed1bbbcd4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6feab67522115f74c2e4397c900007292927c133a0abf1142f828ed1bbbcd4b9->enter($__internal_6feab67522115f74c2e4397c900007292927c133a0abf1142f828ed1bbbcd4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_7f700203fb5d6cf1dd42d10317acd519c45f412ec444d7c490993acdee0626a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f700203fb5d6cf1dd42d10317acd519c45f412ec444d7c490993acdee0626a7->enter($__internal_7f700203fb5d6cf1dd42d10317acd519c45f412ec444d7c490993acdee0626a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6feab67522115f74c2e4397c900007292927c133a0abf1142f828ed1bbbcd4b9->leave($__internal_6feab67522115f74c2e4397c900007292927c133a0abf1142f828ed1bbbcd4b9_prof);

        
        $__internal_7f700203fb5d6cf1dd42d10317acd519c45f412ec444d7c490993acdee0626a7->leave($__internal_7f700203fb5d6cf1dd42d10317acd519c45f412ec444d7c490993acdee0626a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
