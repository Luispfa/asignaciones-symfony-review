<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7b195c288838e0725d947567e2ed2a2bfda728c27aa47ab1722ffd78336e3558 extends Twig_Template
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
        $__internal_eecbed76a258376bb5334cfddfb84566eba1533b61972ec567b1e389ce7778db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecbed76a258376bb5334cfddfb84566eba1533b61972ec567b1e389ce7778db->enter($__internal_eecbed76a258376bb5334cfddfb84566eba1533b61972ec567b1e389ce7778db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_bb1cad0930ef10ca4075cd3c2f1ec6e4f2652fcf4836e9e4d99b742dd622a8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1cad0930ef10ca4075cd3c2f1ec6e4f2652fcf4836e9e4d99b742dd622a8b6->enter($__internal_bb1cad0930ef10ca4075cd3c2f1ec6e4f2652fcf4836e9e4d99b742dd622a8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_eecbed76a258376bb5334cfddfb84566eba1533b61972ec567b1e389ce7778db->leave($__internal_eecbed76a258376bb5334cfddfb84566eba1533b61972ec567b1e389ce7778db_prof);

        
        $__internal_bb1cad0930ef10ca4075cd3c2f1ec6e4f2652fcf4836e9e4d99b742dd622a8b6->leave($__internal_bb1cad0930ef10ca4075cd3c2f1ec6e4f2652fcf4836e9e4d99b742dd622a8b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
