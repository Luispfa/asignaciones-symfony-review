<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f13c6259615ca5a72344a2a54918fedd35a47d6fa5baaa15b11006b32b036d4b extends Twig_Template
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
        $__internal_b4e0ed6579ee6eac8fc7f7f7f2ee28f858cd3b6c4f3b228d497555ff6dadc487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e0ed6579ee6eac8fc7f7f7f2ee28f858cd3b6c4f3b228d497555ff6dadc487->enter($__internal_b4e0ed6579ee6eac8fc7f7f7f2ee28f858cd3b6c4f3b228d497555ff6dadc487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f741fe45a18b8f92fecc2f52d0ae909d047064350cfeec489069716ef9b0269b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f741fe45a18b8f92fecc2f52d0ae909d047064350cfeec489069716ef9b0269b->enter($__internal_f741fe45a18b8f92fecc2f52d0ae909d047064350cfeec489069716ef9b0269b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b4e0ed6579ee6eac8fc7f7f7f2ee28f858cd3b6c4f3b228d497555ff6dadc487->leave($__internal_b4e0ed6579ee6eac8fc7f7f7f2ee28f858cd3b6c4f3b228d497555ff6dadc487_prof);

        
        $__internal_f741fe45a18b8f92fecc2f52d0ae909d047064350cfeec489069716ef9b0269b->leave($__internal_f741fe45a18b8f92fecc2f52d0ae909d047064350cfeec489069716ef9b0269b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
