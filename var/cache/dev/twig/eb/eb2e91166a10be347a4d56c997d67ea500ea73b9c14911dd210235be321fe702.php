<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_b48c4c88628e946141358dcc7d87352c253053da5a969b588900f671533a8b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ebc95786341aa44010a95e24b00242a2ff4a17ef23427e2a49048773aae8d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebc95786341aa44010a95e24b00242a2ff4a17ef23427e2a49048773aae8d02->enter($__internal_9ebc95786341aa44010a95e24b00242a2ff4a17ef23427e2a49048773aae8d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_1698cc6e75f67af05904a6f72386fe02b12a7007295d3ee7176711441b081832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1698cc6e75f67af05904a6f72386fe02b12a7007295d3ee7176711441b081832->enter($__internal_1698cc6e75f67af05904a6f72386fe02b12a7007295d3ee7176711441b081832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_9ebc95786341aa44010a95e24b00242a2ff4a17ef23427e2a49048773aae8d02->leave($__internal_9ebc95786341aa44010a95e24b00242a2ff4a17ef23427e2a49048773aae8d02_prof);

        
        $__internal_1698cc6e75f67af05904a6f72386fe02b12a7007295d3ee7176711441b081832->leave($__internal_1698cc6e75f67af05904a6f72386fe02b12a7007295d3ee7176711441b081832_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_240adbe0b2d6f1cd360c06ad0b5cad75d3e75a3384ebb4ec5f741033ed5e5d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240adbe0b2d6f1cd360c06ad0b5cad75d3e75a3384ebb4ec5f741033ed5e5d61->enter($__internal_240adbe0b2d6f1cd360c06ad0b5cad75d3e75a3384ebb4ec5f741033ed5e5d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_9074ec0c127b1675cd888d2ede069e85ca24934398da8b2d2ebda7046b611994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9074ec0c127b1675cd888d2ede069e85ca24934398da8b2d2ebda7046b611994->enter($__internal_9074ec0c127b1675cd888d2ede069e85ca24934398da8b2d2ebda7046b611994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_9074ec0c127b1675cd888d2ede069e85ca24934398da8b2d2ebda7046b611994->leave($__internal_9074ec0c127b1675cd888d2ede069e85ca24934398da8b2d2ebda7046b611994_prof);

        
        $__internal_240adbe0b2d6f1cd360c06ad0b5cad75d3e75a3384ebb4ec5f741033ed5e5d61->leave($__internal_240adbe0b2d6f1cd360c06ad0b5cad75d3e75a3384ebb4ec5f741033ed5e5d61_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bba16cdd23cf5303957d6b81825984a4d3273a80b99fb7f8740ff68997b1f1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba16cdd23cf5303957d6b81825984a4d3273a80b99fb7f8740ff68997b1f1aa->enter($__internal_bba16cdd23cf5303957d6b81825984a4d3273a80b99fb7f8740ff68997b1f1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fc66f9d4a60d73b987a52d0c7035558e424e5ff5c35cef88f2d401e50cb2b296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc66f9d4a60d73b987a52d0c7035558e424e5ff5c35cef88f2d401e50cb2b296->enter($__internal_fc66f9d4a60d73b987a52d0c7035558e424e5ff5c35cef88f2d401e50cb2b296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fc66f9d4a60d73b987a52d0c7035558e424e5ff5c35cef88f2d401e50cb2b296->leave($__internal_fc66f9d4a60d73b987a52d0c7035558e424e5ff5c35cef88f2d401e50cb2b296_prof);

        
        $__internal_bba16cdd23cf5303957d6b81825984a4d3273a80b99fb7f8740ff68997b1f1aa->leave($__internal_bba16cdd23cf5303957d6b81825984a4d3273a80b99fb7f8740ff68997b1f1aa_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_1cb96c07e953e9798833fdf9d73dc532707ddb48c71fad8bcdcc3b45ec332df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb96c07e953e9798833fdf9d73dc532707ddb48c71fad8bcdcc3b45ec332df1->enter($__internal_1cb96c07e953e9798833fdf9d73dc532707ddb48c71fad8bcdcc3b45ec332df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_942d6afc27720e41724e175d2a068a915f8fedd4cd90e8cc8dd1ad734dafc8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942d6afc27720e41724e175d2a068a915f8fedd4cd90e8cc8dd1ad734dafc8ff->enter($__internal_942d6afc27720e41724e175d2a068a915f8fedd4cd90e8cc8dd1ad734dafc8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_942d6afc27720e41724e175d2a068a915f8fedd4cd90e8cc8dd1ad734dafc8ff->leave($__internal_942d6afc27720e41724e175d2a068a915f8fedd4cd90e8cc8dd1ad734dafc8ff_prof);

        
        $__internal_1cb96c07e953e9798833fdf9d73dc532707ddb48c71fad8bcdcc3b45ec332df1->leave($__internal_1cb96c07e953e9798833fdf9d73dc532707ddb48c71fad8bcdcc3b45ec332df1_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c38141afa76a1b9345fa0b854ec8d6c67f5fef50108f478d19664625ea9ff584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38141afa76a1b9345fa0b854ec8d6c67f5fef50108f478d19664625ea9ff584->enter($__internal_c38141afa76a1b9345fa0b854ec8d6c67f5fef50108f478d19664625ea9ff584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b07d4ad2113916faa54fe790221ac9b0a213e6ac0b320e1f2959944347630776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07d4ad2113916faa54fe790221ac9b0a213e6ac0b320e1f2959944347630776->enter($__internal_b07d4ad2113916faa54fe790221ac9b0a213e6ac0b320e1f2959944347630776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_b07d4ad2113916faa54fe790221ac9b0a213e6ac0b320e1f2959944347630776->leave($__internal_b07d4ad2113916faa54fe790221ac9b0a213e6ac0b320e1f2959944347630776_prof);

        
        $__internal_c38141afa76a1b9345fa0b854ec8d6c67f5fef50108f478d19664625ea9ff584->leave($__internal_c38141afa76a1b9345fa0b854ec8d6c67f5fef50108f478d19664625ea9ff584_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_35c2a3387c69c1e62e924555ac0c558fc96212d4327aa0934eee1b0100de23b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c2a3387c69c1e62e924555ac0c558fc96212d4327aa0934eee1b0100de23b9->enter($__internal_35c2a3387c69c1e62e924555ac0c558fc96212d4327aa0934eee1b0100de23b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3093388ef073d0b7b1d59e52888deb65a6b72ba167603c83574996cc3a7acc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3093388ef073d0b7b1d59e52888deb65a6b72ba167603c83574996cc3a7acc26->enter($__internal_3093388ef073d0b7b1d59e52888deb65a6b72ba167603c83574996cc3a7acc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3093388ef073d0b7b1d59e52888deb65a6b72ba167603c83574996cc3a7acc26->leave($__internal_3093388ef073d0b7b1d59e52888deb65a6b72ba167603c83574996cc3a7acc26_prof);

        
        $__internal_35c2a3387c69c1e62e924555ac0c558fc96212d4327aa0934eee1b0100de23b9->leave($__internal_35c2a3387c69c1e62e924555ac0c558fc96212d4327aa0934eee1b0100de23b9_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bc6ccd922eb4187849c350f25a0ec52cce02b3f43893ad0dda8f8f4baa6b75b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6ccd922eb4187849c350f25a0ec52cce02b3f43893ad0dda8f8f4baa6b75b1->enter($__internal_bc6ccd922eb4187849c350f25a0ec52cce02b3f43893ad0dda8f8f4baa6b75b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_28776fe3121e6bcc0039cf8049fcd1570227f8029e00001d9434367417413a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28776fe3121e6bcc0039cf8049fcd1570227f8029e00001d9434367417413a2f->enter($__internal_28776fe3121e6bcc0039cf8049fcd1570227f8029e00001d9434367417413a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_28776fe3121e6bcc0039cf8049fcd1570227f8029e00001d9434367417413a2f->leave($__internal_28776fe3121e6bcc0039cf8049fcd1570227f8029e00001d9434367417413a2f_prof);

        
        $__internal_bc6ccd922eb4187849c350f25a0ec52cce02b3f43893ad0dda8f8f4baa6b75b1->leave($__internal_bc6ccd922eb4187849c350f25a0ec52cce02b3f43893ad0dda8f8f4baa6b75b1_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_d43dd80833aba372ae5107e7f6c8f64c4687a3acd128559db48a79b464852c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43dd80833aba372ae5107e7f6c8f64c4687a3acd128559db48a79b464852c0a->enter($__internal_d43dd80833aba372ae5107e7f6c8f64c4687a3acd128559db48a79b464852c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_3eecaaf5da962d9a5bfa548c25d10714a5e3fb06834f273de63d5acf9218ee06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eecaaf5da962d9a5bfa548c25d10714a5e3fb06834f273de63d5acf9218ee06->enter($__internal_3eecaaf5da962d9a5bfa548c25d10714a5e3fb06834f273de63d5acf9218ee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3eecaaf5da962d9a5bfa548c25d10714a5e3fb06834f273de63d5acf9218ee06->leave($__internal_3eecaaf5da962d9a5bfa548c25d10714a5e3fb06834f273de63d5acf9218ee06_prof);

        
        $__internal_d43dd80833aba372ae5107e7f6c8f64c4687a3acd128559db48a79b464852c0a->leave($__internal_d43dd80833aba372ae5107e7f6c8f64c4687a3acd128559db48a79b464852c0a_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d9d4c0ded403e373392262a10a286279e7d16e3a05962c4c1230162a9a9c0b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d4c0ded403e373392262a10a286279e7d16e3a05962c4c1230162a9a9c0b88->enter($__internal_d9d4c0ded403e373392262a10a286279e7d16e3a05962c4c1230162a9a9c0b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_2bf976bc33f06125a686ce8e8118bff3669565f368523cef6e08cfcf9adfc58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf976bc33f06125a686ce8e8118bff3669565f368523cef6e08cfcf9adfc58b->enter($__internal_2bf976bc33f06125a686ce8e8118bff3669565f368523cef6e08cfcf9adfc58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2bf976bc33f06125a686ce8e8118bff3669565f368523cef6e08cfcf9adfc58b->leave($__internal_2bf976bc33f06125a686ce8e8118bff3669565f368523cef6e08cfcf9adfc58b_prof);

        
        $__internal_d9d4c0ded403e373392262a10a286279e7d16e3a05962c4c1230162a9a9c0b88->leave($__internal_d9d4c0ded403e373392262a10a286279e7d16e3a05962c4c1230162a9a9c0b88_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e3cd18da613b3787e1ce4a8be2dacd947c2a820e9fb26d7d2cbf1b1481212a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3cd18da613b3787e1ce4a8be2dacd947c2a820e9fb26d7d2cbf1b1481212a54->enter($__internal_e3cd18da613b3787e1ce4a8be2dacd947c2a820e9fb26d7d2cbf1b1481212a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_994a782c3eae9c27aea46c383f3e5accf36fcfc368c77a43bf11a10804b6678d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994a782c3eae9c27aea46c383f3e5accf36fcfc368c77a43bf11a10804b6678d->enter($__internal_994a782c3eae9c27aea46c383f3e5accf36fcfc368c77a43bf11a10804b6678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_994a782c3eae9c27aea46c383f3e5accf36fcfc368c77a43bf11a10804b6678d->leave($__internal_994a782c3eae9c27aea46c383f3e5accf36fcfc368c77a43bf11a10804b6678d_prof);

        
        $__internal_e3cd18da613b3787e1ce4a8be2dacd947c2a820e9fb26d7d2cbf1b1481212a54->leave($__internal_e3cd18da613b3787e1ce4a8be2dacd947c2a820e9fb26d7d2cbf1b1481212a54_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a79f3c797742b4dd9426aaca52c02edadbfb654ced163608911c9fe17d4a6265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79f3c797742b4dd9426aaca52c02edadbfb654ced163608911c9fe17d4a6265->enter($__internal_a79f3c797742b4dd9426aaca52c02edadbfb654ced163608911c9fe17d4a6265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_dd214ddaba5277a6a8859bc5e0b11dcf82da3fdcbed473e4a5071eff88cc3063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd214ddaba5277a6a8859bc5e0b11dcf82da3fdcbed473e4a5071eff88cc3063->enter($__internal_dd214ddaba5277a6a8859bc5e0b11dcf82da3fdcbed473e4a5071eff88cc3063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_dd214ddaba5277a6a8859bc5e0b11dcf82da3fdcbed473e4a5071eff88cc3063->leave($__internal_dd214ddaba5277a6a8859bc5e0b11dcf82da3fdcbed473e4a5071eff88cc3063_prof);

        
        $__internal_a79f3c797742b4dd9426aaca52c02edadbfb654ced163608911c9fe17d4a6265->leave($__internal_a79f3c797742b4dd9426aaca52c02edadbfb654ced163608911c9fe17d4a6265_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/asignaciones-symfony-review/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
