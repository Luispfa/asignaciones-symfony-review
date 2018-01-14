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
        $__internal_f70a8b8cf2488f6cee2c9f202bb9b05fae81778d4798cd71e650796582d013da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70a8b8cf2488f6cee2c9f202bb9b05fae81778d4798cd71e650796582d013da->enter($__internal_f70a8b8cf2488f6cee2c9f202bb9b05fae81778d4798cd71e650796582d013da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_8e647d6a74363b2c3338494a70494850649a3eaf85b7fd861d7f909ac330e35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e647d6a74363b2c3338494a70494850649a3eaf85b7fd861d7f909ac330e35e->enter($__internal_8e647d6a74363b2c3338494a70494850649a3eaf85b7fd861d7f909ac330e35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_f70a8b8cf2488f6cee2c9f202bb9b05fae81778d4798cd71e650796582d013da->leave($__internal_f70a8b8cf2488f6cee2c9f202bb9b05fae81778d4798cd71e650796582d013da_prof);

        
        $__internal_8e647d6a74363b2c3338494a70494850649a3eaf85b7fd861d7f909ac330e35e->leave($__internal_8e647d6a74363b2c3338494a70494850649a3eaf85b7fd861d7f909ac330e35e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1e2ecd2aa2a62fe33973c7cf5c38e6935800f03e3b5fd10fbbd14eb80ba885c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2ecd2aa2a62fe33973c7cf5c38e6935800f03e3b5fd10fbbd14eb80ba885c7->enter($__internal_1e2ecd2aa2a62fe33973c7cf5c38e6935800f03e3b5fd10fbbd14eb80ba885c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_05252b620b40d313526343d83898a1fc6e1a5d95299428e88575a348c8df104d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05252b620b40d313526343d83898a1fc6e1a5d95299428e88575a348c8df104d->enter($__internal_05252b620b40d313526343d83898a1fc6e1a5d95299428e88575a348c8df104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_05252b620b40d313526343d83898a1fc6e1a5d95299428e88575a348c8df104d->leave($__internal_05252b620b40d313526343d83898a1fc6e1a5d95299428e88575a348c8df104d_prof);

        
        $__internal_1e2ecd2aa2a62fe33973c7cf5c38e6935800f03e3b5fd10fbbd14eb80ba885c7->leave($__internal_1e2ecd2aa2a62fe33973c7cf5c38e6935800f03e3b5fd10fbbd14eb80ba885c7_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_dec5747c99916705b98399662f4af224cdc9eca4d800b8dde5fcc7098948dd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec5747c99916705b98399662f4af224cdc9eca4d800b8dde5fcc7098948dd6a->enter($__internal_dec5747c99916705b98399662f4af224cdc9eca4d800b8dde5fcc7098948dd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_62e8d2a09b38019c5ce49c2a31e14e2db5e14745487d271537337988768562db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e8d2a09b38019c5ce49c2a31e14e2db5e14745487d271537337988768562db->enter($__internal_62e8d2a09b38019c5ce49c2a31e14e2db5e14745487d271537337988768562db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_62e8d2a09b38019c5ce49c2a31e14e2db5e14745487d271537337988768562db->leave($__internal_62e8d2a09b38019c5ce49c2a31e14e2db5e14745487d271537337988768562db_prof);

        
        $__internal_dec5747c99916705b98399662f4af224cdc9eca4d800b8dde5fcc7098948dd6a->leave($__internal_dec5747c99916705b98399662f4af224cdc9eca4d800b8dde5fcc7098948dd6a_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b95c5a44e20d3b7c8cba49dc203331d63863d0eca4d2bcdac52a18914eaef148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95c5a44e20d3b7c8cba49dc203331d63863d0eca4d2bcdac52a18914eaef148->enter($__internal_b95c5a44e20d3b7c8cba49dc203331d63863d0eca4d2bcdac52a18914eaef148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_bb00db41662583e5d6656988ec421efaa41dd166c218711fe557788f786111ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb00db41662583e5d6656988ec421efaa41dd166c218711fe557788f786111ce->enter($__internal_bb00db41662583e5d6656988ec421efaa41dd166c218711fe557788f786111ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_bb00db41662583e5d6656988ec421efaa41dd166c218711fe557788f786111ce->leave($__internal_bb00db41662583e5d6656988ec421efaa41dd166c218711fe557788f786111ce_prof);

        
        $__internal_b95c5a44e20d3b7c8cba49dc203331d63863d0eca4d2bcdac52a18914eaef148->leave($__internal_b95c5a44e20d3b7c8cba49dc203331d63863d0eca4d2bcdac52a18914eaef148_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7990e936d74a041eab249f8bfd507c233c17b24757029c4fc7ff587bff1ecff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7990e936d74a041eab249f8bfd507c233c17b24757029c4fc7ff587bff1ecff3->enter($__internal_7990e936d74a041eab249f8bfd507c233c17b24757029c4fc7ff587bff1ecff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ddfb8600c862e8e6c7d1675be23695799684dafaca7ce0daf1ecbbc02b5dbcff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfb8600c862e8e6c7d1675be23695799684dafaca7ce0daf1ecbbc02b5dbcff->enter($__internal_ddfb8600c862e8e6c7d1675be23695799684dafaca7ce0daf1ecbbc02b5dbcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ddfb8600c862e8e6c7d1675be23695799684dafaca7ce0daf1ecbbc02b5dbcff->leave($__internal_ddfb8600c862e8e6c7d1675be23695799684dafaca7ce0daf1ecbbc02b5dbcff_prof);

        
        $__internal_7990e936d74a041eab249f8bfd507c233c17b24757029c4fc7ff587bff1ecff3->leave($__internal_7990e936d74a041eab249f8bfd507c233c17b24757029c4fc7ff587bff1ecff3_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c2db41a6bfb713534a895bd44abfa65b8d4a9b7c4e4a2c784e691fa3eb55d71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2db41a6bfb713534a895bd44abfa65b8d4a9b7c4e4a2c784e691fa3eb55d71f->enter($__internal_c2db41a6bfb713534a895bd44abfa65b8d4a9b7c4e4a2c784e691fa3eb55d71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8ad5e1ba9442b1dc2293941c7be885d6b1689ef2631efa68baba3e4e5a79a96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad5e1ba9442b1dc2293941c7be885d6b1689ef2631efa68baba3e4e5a79a96f->enter($__internal_8ad5e1ba9442b1dc2293941c7be885d6b1689ef2631efa68baba3e4e5a79a96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_8ad5e1ba9442b1dc2293941c7be885d6b1689ef2631efa68baba3e4e5a79a96f->leave($__internal_8ad5e1ba9442b1dc2293941c7be885d6b1689ef2631efa68baba3e4e5a79a96f_prof);

        
        $__internal_c2db41a6bfb713534a895bd44abfa65b8d4a9b7c4e4a2c784e691fa3eb55d71f->leave($__internal_c2db41a6bfb713534a895bd44abfa65b8d4a9b7c4e4a2c784e691fa3eb55d71f_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f4722738ae0ed5f9cd7efa5729923c6e86ca4cc49db56873f2d17ca4b0fc86f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4722738ae0ed5f9cd7efa5729923c6e86ca4cc49db56873f2d17ca4b0fc86f1->enter($__internal_f4722738ae0ed5f9cd7efa5729923c6e86ca4cc49db56873f2d17ca4b0fc86f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_aef309a60ea053543ad3493482f0bb0e8a87b2a5d3ba2252cea0f35e14929639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef309a60ea053543ad3493482f0bb0e8a87b2a5d3ba2252cea0f35e14929639->enter($__internal_aef309a60ea053543ad3493482f0bb0e8a87b2a5d3ba2252cea0f35e14929639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_aef309a60ea053543ad3493482f0bb0e8a87b2a5d3ba2252cea0f35e14929639->leave($__internal_aef309a60ea053543ad3493482f0bb0e8a87b2a5d3ba2252cea0f35e14929639_prof);

        
        $__internal_f4722738ae0ed5f9cd7efa5729923c6e86ca4cc49db56873f2d17ca4b0fc86f1->leave($__internal_f4722738ae0ed5f9cd7efa5729923c6e86ca4cc49db56873f2d17ca4b0fc86f1_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_0c944f8077fe8fbddb2d4654f7a8fdbdc95764ad0f84d6f4003fa458b9998f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c944f8077fe8fbddb2d4654f7a8fdbdc95764ad0f84d6f4003fa458b9998f77->enter($__internal_0c944f8077fe8fbddb2d4654f7a8fdbdc95764ad0f84d6f4003fa458b9998f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_93801fb5ad43e4833d29165d694d567233435a046f31794a4da2f71899b20019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93801fb5ad43e4833d29165d694d567233435a046f31794a4da2f71899b20019->enter($__internal_93801fb5ad43e4833d29165d694d567233435a046f31794a4da2f71899b20019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_93801fb5ad43e4833d29165d694d567233435a046f31794a4da2f71899b20019->leave($__internal_93801fb5ad43e4833d29165d694d567233435a046f31794a4da2f71899b20019_prof);

        
        $__internal_0c944f8077fe8fbddb2d4654f7a8fdbdc95764ad0f84d6f4003fa458b9998f77->leave($__internal_0c944f8077fe8fbddb2d4654f7a8fdbdc95764ad0f84d6f4003fa458b9998f77_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_458ac3732019bfb4892dd4e1ab2c6505bb05bd0207e21452f32b5f93e77ed402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458ac3732019bfb4892dd4e1ab2c6505bb05bd0207e21452f32b5f93e77ed402->enter($__internal_458ac3732019bfb4892dd4e1ab2c6505bb05bd0207e21452f32b5f93e77ed402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_721649f6f50448c618fd2df42925f5b6be262457c62e4b632b785048104f0a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721649f6f50448c618fd2df42925f5b6be262457c62e4b632b785048104f0a6d->enter($__internal_721649f6f50448c618fd2df42925f5b6be262457c62e4b632b785048104f0a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_721649f6f50448c618fd2df42925f5b6be262457c62e4b632b785048104f0a6d->leave($__internal_721649f6f50448c618fd2df42925f5b6be262457c62e4b632b785048104f0a6d_prof);

        
        $__internal_458ac3732019bfb4892dd4e1ab2c6505bb05bd0207e21452f32b5f93e77ed402->leave($__internal_458ac3732019bfb4892dd4e1ab2c6505bb05bd0207e21452f32b5f93e77ed402_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d8657a219cd372c43134ba092ee5294578274b38e2aecd029d6945a8c46643e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8657a219cd372c43134ba092ee5294578274b38e2aecd029d6945a8c46643e2->enter($__internal_d8657a219cd372c43134ba092ee5294578274b38e2aecd029d6945a8c46643e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_782668936de4b0925ce10b97e3ba1a924cf72f055a70d2daedf54c3294da8d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782668936de4b0925ce10b97e3ba1a924cf72f055a70d2daedf54c3294da8d4c->enter($__internal_782668936de4b0925ce10b97e3ba1a924cf72f055a70d2daedf54c3294da8d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_782668936de4b0925ce10b97e3ba1a924cf72f055a70d2daedf54c3294da8d4c->leave($__internal_782668936de4b0925ce10b97e3ba1a924cf72f055a70d2daedf54c3294da8d4c_prof);

        
        $__internal_d8657a219cd372c43134ba092ee5294578274b38e2aecd029d6945a8c46643e2->leave($__internal_d8657a219cd372c43134ba092ee5294578274b38e2aecd029d6945a8c46643e2_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_2f81ffadaee17389ed86c31fc9f4b391a7f6f181780f028647037a53ef38141d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f81ffadaee17389ed86c31fc9f4b391a7f6f181780f028647037a53ef38141d->enter($__internal_2f81ffadaee17389ed86c31fc9f4b391a7f6f181780f028647037a53ef38141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8bbc3d03117d05d7ead6a88e5d4d608908dedd259abc61937fa7664756adf428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbc3d03117d05d7ead6a88e5d4d608908dedd259abc61937fa7664756adf428->enter($__internal_8bbc3d03117d05d7ead6a88e5d4d608908dedd259abc61937fa7664756adf428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_8bbc3d03117d05d7ead6a88e5d4d608908dedd259abc61937fa7664756adf428->leave($__internal_8bbc3d03117d05d7ead6a88e5d4d608908dedd259abc61937fa7664756adf428_prof);

        
        $__internal_2f81ffadaee17389ed86c31fc9f4b391a7f6f181780f028647037a53ef38141d->leave($__internal_2f81ffadaee17389ed86c31fc9f4b391a7f6f181780f028647037a53ef38141d_prof);

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
