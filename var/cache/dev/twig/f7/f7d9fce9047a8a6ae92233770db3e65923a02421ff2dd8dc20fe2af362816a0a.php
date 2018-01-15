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
        $__internal_8a5d7f528f993782909fe025156c114bab37d3bae0b0ee8aa8c4ecb0b3e8052b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5d7f528f993782909fe025156c114bab37d3bae0b0ee8aa8c4ecb0b3e8052b->enter($__internal_8a5d7f528f993782909fe025156c114bab37d3bae0b0ee8aa8c4ecb0b3e8052b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_5f5633d1e721e7aea8e7311ad576cdf90bf4a6879494eb8d76c0448d31228f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5633d1e721e7aea8e7311ad576cdf90bf4a6879494eb8d76c0448d31228f51->enter($__internal_5f5633d1e721e7aea8e7311ad576cdf90bf4a6879494eb8d76c0448d31228f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_8a5d7f528f993782909fe025156c114bab37d3bae0b0ee8aa8c4ecb0b3e8052b->leave($__internal_8a5d7f528f993782909fe025156c114bab37d3bae0b0ee8aa8c4ecb0b3e8052b_prof);

        
        $__internal_5f5633d1e721e7aea8e7311ad576cdf90bf4a6879494eb8d76c0448d31228f51->leave($__internal_5f5633d1e721e7aea8e7311ad576cdf90bf4a6879494eb8d76c0448d31228f51_prof);

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
