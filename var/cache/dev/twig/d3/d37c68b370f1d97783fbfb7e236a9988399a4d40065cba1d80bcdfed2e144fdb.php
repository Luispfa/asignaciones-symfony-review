<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_94c6af4e1a20f068ee936fc29d21be6035351b04cdbc57761d73c871f213a44c extends Twig_Template
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
        $__internal_626b2553c34f0dd0430f60f1fe2c574159cac09d387de0f0f0f6e01e3df1a61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626b2553c34f0dd0430f60f1fe2c574159cac09d387de0f0f0f6e01e3df1a61f->enter($__internal_626b2553c34f0dd0430f60f1fe2c574159cac09d387de0f0f0f6e01e3df1a61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1573a10b6f33287c09d0a368a343bccc767a12122ae1e4eb58272eb2bd83aeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1573a10b6f33287c09d0a368a343bccc767a12122ae1e4eb58272eb2bd83aeb6->enter($__internal_1573a10b6f33287c09d0a368a343bccc767a12122ae1e4eb58272eb2bd83aeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_626b2553c34f0dd0430f60f1fe2c574159cac09d387de0f0f0f6e01e3df1a61f->leave($__internal_626b2553c34f0dd0430f60f1fe2c574159cac09d387de0f0f0f6e01e3df1a61f_prof);

        
        $__internal_1573a10b6f33287c09d0a368a343bccc767a12122ae1e4eb58272eb2bd83aeb6->leave($__internal_1573a10b6f33287c09d0a368a343bccc767a12122ae1e4eb58272eb2bd83aeb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
