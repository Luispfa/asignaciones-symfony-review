<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d80541cb24e64ee380742031b3a21b44df6a1604d359cb23eeaea5da61174302 extends Twig_Template
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
        $__internal_f208282a54becda29869bb50b97ee9d996cd22c5a2164b75af2f6f1077cbc48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f208282a54becda29869bb50b97ee9d996cd22c5a2164b75af2f6f1077cbc48b->enter($__internal_f208282a54becda29869bb50b97ee9d996cd22c5a2164b75af2f6f1077cbc48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_257b9fd658a9c588dfedc249da86bc2af43a92b54aace2cc507aae3cb8fada6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257b9fd658a9c588dfedc249da86bc2af43a92b54aace2cc507aae3cb8fada6a->enter($__internal_257b9fd658a9c588dfedc249da86bc2af43a92b54aace2cc507aae3cb8fada6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f208282a54becda29869bb50b97ee9d996cd22c5a2164b75af2f6f1077cbc48b->leave($__internal_f208282a54becda29869bb50b97ee9d996cd22c5a2164b75af2f6f1077cbc48b_prof);

        
        $__internal_257b9fd658a9c588dfedc249da86bc2af43a92b54aace2cc507aae3cb8fada6a->leave($__internal_257b9fd658a9c588dfedc249da86bc2af43a92b54aace2cc507aae3cb8fada6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
