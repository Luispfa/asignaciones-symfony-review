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
        $__internal_00bbdd332d60543d6c0e001604b4479e346a3a6c47a4084666d69ef97c4e86a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bbdd332d60543d6c0e001604b4479e346a3a6c47a4084666d69ef97c4e86a9->enter($__internal_00bbdd332d60543d6c0e001604b4479e346a3a6c47a4084666d69ef97c4e86a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_179400fcd4bcaa00999feadd428178837eabcf316b018b225de7fbb15f419cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179400fcd4bcaa00999feadd428178837eabcf316b018b225de7fbb15f419cfa->enter($__internal_179400fcd4bcaa00999feadd428178837eabcf316b018b225de7fbb15f419cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_00bbdd332d60543d6c0e001604b4479e346a3a6c47a4084666d69ef97c4e86a9->leave($__internal_00bbdd332d60543d6c0e001604b4479e346a3a6c47a4084666d69ef97c4e86a9_prof);

        
        $__internal_179400fcd4bcaa00999feadd428178837eabcf316b018b225de7fbb15f419cfa->leave($__internal_179400fcd4bcaa00999feadd428178837eabcf316b018b225de7fbb15f419cfa_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1822cf540030241bb5fac3838bf940149ba4657f6ac3860ed358ed40e5c6693a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1822cf540030241bb5fac3838bf940149ba4657f6ac3860ed358ed40e5c6693a->enter($__internal_1822cf540030241bb5fac3838bf940149ba4657f6ac3860ed358ed40e5c6693a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_849d4968a9ff3725df299fc2132b84795f0271728031a24e6a71d611dbae2733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849d4968a9ff3725df299fc2132b84795f0271728031a24e6a71d611dbae2733->enter($__internal_849d4968a9ff3725df299fc2132b84795f0271728031a24e6a71d611dbae2733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_849d4968a9ff3725df299fc2132b84795f0271728031a24e6a71d611dbae2733->leave($__internal_849d4968a9ff3725df299fc2132b84795f0271728031a24e6a71d611dbae2733_prof);

        
        $__internal_1822cf540030241bb5fac3838bf940149ba4657f6ac3860ed358ed40e5c6693a->leave($__internal_1822cf540030241bb5fac3838bf940149ba4657f6ac3860ed358ed40e5c6693a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_688ecd7e0844d325d5f7539248e05c7c1b22c41fd520ae568e1e28c2695c3438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688ecd7e0844d325d5f7539248e05c7c1b22c41fd520ae568e1e28c2695c3438->enter($__internal_688ecd7e0844d325d5f7539248e05c7c1b22c41fd520ae568e1e28c2695c3438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_67214d6990d12bb9d759c6b8a9017bedb68abc104a88b06f424d1f519650ad0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67214d6990d12bb9d759c6b8a9017bedb68abc104a88b06f424d1f519650ad0e->enter($__internal_67214d6990d12bb9d759c6b8a9017bedb68abc104a88b06f424d1f519650ad0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_67214d6990d12bb9d759c6b8a9017bedb68abc104a88b06f424d1f519650ad0e->leave($__internal_67214d6990d12bb9d759c6b8a9017bedb68abc104a88b06f424d1f519650ad0e_prof);

        
        $__internal_688ecd7e0844d325d5f7539248e05c7c1b22c41fd520ae568e1e28c2695c3438->leave($__internal_688ecd7e0844d325d5f7539248e05c7c1b22c41fd520ae568e1e28c2695c3438_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a8b724ade328a5aaea125befa2c42306a74bea030f3970ba44bc8a0c74b38c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b724ade328a5aaea125befa2c42306a74bea030f3970ba44bc8a0c74b38c09->enter($__internal_a8b724ade328a5aaea125befa2c42306a74bea030f3970ba44bc8a0c74b38c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4d4bf24526c72ecc4938171df174db3124964844c1c17148ec7ed154688a809b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4bf24526c72ecc4938171df174db3124964844c1c17148ec7ed154688a809b->enter($__internal_4d4bf24526c72ecc4938171df174db3124964844c1c17148ec7ed154688a809b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_4d4bf24526c72ecc4938171df174db3124964844c1c17148ec7ed154688a809b->leave($__internal_4d4bf24526c72ecc4938171df174db3124964844c1c17148ec7ed154688a809b_prof);

        
        $__internal_a8b724ade328a5aaea125befa2c42306a74bea030f3970ba44bc8a0c74b38c09->leave($__internal_a8b724ade328a5aaea125befa2c42306a74bea030f3970ba44bc8a0c74b38c09_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_42395d1554c1de897da8773b118b19096b42eeb37d3a80f117ffa1fff3a97621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42395d1554c1de897da8773b118b19096b42eeb37d3a80f117ffa1fff3a97621->enter($__internal_42395d1554c1de897da8773b118b19096b42eeb37d3a80f117ffa1fff3a97621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_922183ac1543994fd4a65702dc433b3694135620ac844894cd8be3e3bf35afb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922183ac1543994fd4a65702dc433b3694135620ac844894cd8be3e3bf35afb2->enter($__internal_922183ac1543994fd4a65702dc433b3694135620ac844894cd8be3e3bf35afb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_922183ac1543994fd4a65702dc433b3694135620ac844894cd8be3e3bf35afb2->leave($__internal_922183ac1543994fd4a65702dc433b3694135620ac844894cd8be3e3bf35afb2_prof);

        
        $__internal_42395d1554c1de897da8773b118b19096b42eeb37d3a80f117ffa1fff3a97621->leave($__internal_42395d1554c1de897da8773b118b19096b42eeb37d3a80f117ffa1fff3a97621_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_715d01e3c2ec2df5817e21f6a716e4cf7a5f793897f1c9e8d0165796457c4637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715d01e3c2ec2df5817e21f6a716e4cf7a5f793897f1c9e8d0165796457c4637->enter($__internal_715d01e3c2ec2df5817e21f6a716e4cf7a5f793897f1c9e8d0165796457c4637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_658580f9f0375641d77e87513860935fce556ad744bb2ceaaca514408cb45e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658580f9f0375641d77e87513860935fce556ad744bb2ceaaca514408cb45e64->enter($__internal_658580f9f0375641d77e87513860935fce556ad744bb2ceaaca514408cb45e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_658580f9f0375641d77e87513860935fce556ad744bb2ceaaca514408cb45e64->leave($__internal_658580f9f0375641d77e87513860935fce556ad744bb2ceaaca514408cb45e64_prof);

        
        $__internal_715d01e3c2ec2df5817e21f6a716e4cf7a5f793897f1c9e8d0165796457c4637->leave($__internal_715d01e3c2ec2df5817e21f6a716e4cf7a5f793897f1c9e8d0165796457c4637_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5b6aac30089948290613811a28002399461979199332aa51ff52ce074ad7ec10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6aac30089948290613811a28002399461979199332aa51ff52ce074ad7ec10->enter($__internal_5b6aac30089948290613811a28002399461979199332aa51ff52ce074ad7ec10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b6a37ac59e383ad8a7a0c4f3e72f1d89a0900a79bb43eedcc3f0fdcabbb6ceff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a37ac59e383ad8a7a0c4f3e72f1d89a0900a79bb43eedcc3f0fdcabbb6ceff->enter($__internal_b6a37ac59e383ad8a7a0c4f3e72f1d89a0900a79bb43eedcc3f0fdcabbb6ceff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b6a37ac59e383ad8a7a0c4f3e72f1d89a0900a79bb43eedcc3f0fdcabbb6ceff->leave($__internal_b6a37ac59e383ad8a7a0c4f3e72f1d89a0900a79bb43eedcc3f0fdcabbb6ceff_prof);

        
        $__internal_5b6aac30089948290613811a28002399461979199332aa51ff52ce074ad7ec10->leave($__internal_5b6aac30089948290613811a28002399461979199332aa51ff52ce074ad7ec10_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_daac8cd38c7cbaa708949f643cea06bb2cce5bf775c04815947d83cf4dcbac5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daac8cd38c7cbaa708949f643cea06bb2cce5bf775c04815947d83cf4dcbac5e->enter($__internal_daac8cd38c7cbaa708949f643cea06bb2cce5bf775c04815947d83cf4dcbac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_eebce00a7d1e4038a9e6cd34c5f546b0bef17d74ebd98309d247f48f1c8121bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebce00a7d1e4038a9e6cd34c5f546b0bef17d74ebd98309d247f48f1c8121bc->enter($__internal_eebce00a7d1e4038a9e6cd34c5f546b0bef17d74ebd98309d247f48f1c8121bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_eebce00a7d1e4038a9e6cd34c5f546b0bef17d74ebd98309d247f48f1c8121bc->leave($__internal_eebce00a7d1e4038a9e6cd34c5f546b0bef17d74ebd98309d247f48f1c8121bc_prof);

        
        $__internal_daac8cd38c7cbaa708949f643cea06bb2cce5bf775c04815947d83cf4dcbac5e->leave($__internal_daac8cd38c7cbaa708949f643cea06bb2cce5bf775c04815947d83cf4dcbac5e_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_51f6f41b5e170635ba7496002d22e7b3bf51eeb49e0cec3117533ab28b6d7dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f6f41b5e170635ba7496002d22e7b3bf51eeb49e0cec3117533ab28b6d7dc4->enter($__internal_51f6f41b5e170635ba7496002d22e7b3bf51eeb49e0cec3117533ab28b6d7dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a5f10fe27cb3d90d9b172b8a20afc76cbe3c5a8b66f18747acdefb5706c6d9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f10fe27cb3d90d9b172b8a20afc76cbe3c5a8b66f18747acdefb5706c6d9ad->enter($__internal_a5f10fe27cb3d90d9b172b8a20afc76cbe3c5a8b66f18747acdefb5706c6d9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_a5f10fe27cb3d90d9b172b8a20afc76cbe3c5a8b66f18747acdefb5706c6d9ad->leave($__internal_a5f10fe27cb3d90d9b172b8a20afc76cbe3c5a8b66f18747acdefb5706c6d9ad_prof);

        
        $__internal_51f6f41b5e170635ba7496002d22e7b3bf51eeb49e0cec3117533ab28b6d7dc4->leave($__internal_51f6f41b5e170635ba7496002d22e7b3bf51eeb49e0cec3117533ab28b6d7dc4_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_65bc3abe97d201b2dabf5f4e15a370d221d4c8085213a86593b848f3eb380fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bc3abe97d201b2dabf5f4e15a370d221d4c8085213a86593b848f3eb380fef->enter($__internal_65bc3abe97d201b2dabf5f4e15a370d221d4c8085213a86593b848f3eb380fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_666d8d000d2b0a8d9029874490ec63d2573afb611f884c3231dd041e2fba7288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666d8d000d2b0a8d9029874490ec63d2573afb611f884c3231dd041e2fba7288->enter($__internal_666d8d000d2b0a8d9029874490ec63d2573afb611f884c3231dd041e2fba7288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_666d8d000d2b0a8d9029874490ec63d2573afb611f884c3231dd041e2fba7288->leave($__internal_666d8d000d2b0a8d9029874490ec63d2573afb611f884c3231dd041e2fba7288_prof);

        
        $__internal_65bc3abe97d201b2dabf5f4e15a370d221d4c8085213a86593b848f3eb380fef->leave($__internal_65bc3abe97d201b2dabf5f4e15a370d221d4c8085213a86593b848f3eb380fef_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b24f5459f2adeaabcd3feb7fdd586843b3ba7ea99705f982f8a4ac221decb4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24f5459f2adeaabcd3feb7fdd586843b3ba7ea99705f982f8a4ac221decb4c3->enter($__internal_b24f5459f2adeaabcd3feb7fdd586843b3ba7ea99705f982f8a4ac221decb4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_1e35fc94ec99a7718074300c6b3f5750872940e0c43b5556a8851687ed6e3f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e35fc94ec99a7718074300c6b3f5750872940e0c43b5556a8851687ed6e3f5c->enter($__internal_1e35fc94ec99a7718074300c6b3f5750872940e0c43b5556a8851687ed6e3f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_1e35fc94ec99a7718074300c6b3f5750872940e0c43b5556a8851687ed6e3f5c->leave($__internal_1e35fc94ec99a7718074300c6b3f5750872940e0c43b5556a8851687ed6e3f5c_prof);

        
        $__internal_b24f5459f2adeaabcd3feb7fdd586843b3ba7ea99705f982f8a4ac221decb4c3->leave($__internal_b24f5459f2adeaabcd3feb7fdd586843b3ba7ea99705f982f8a4ac221decb4c3_prof);

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
